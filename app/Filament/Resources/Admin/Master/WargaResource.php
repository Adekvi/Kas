<?php

namespace App\Filament\Resources\Admin\Master;

use App\Filament\Resources\Admin\Master\WargaResource\Pages;
use App\Filament\Resources\Admin\Master\WargaResource\RelationManagers;
use App\Models\Admin\Warga;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WargaResource extends Resource
{
    protected static ?string $model = Warga::class;

    // 🟢 Atur ikon, label, dan grup navigasi di sidebar
    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationLabel = 'Data Warga';
    protected static ?string $navigationGroup = 'Master Data';
    protected static ?int $navigationSort = 1;

    // 🔥 Perbaiki nama di header, list, dan halaman lainnya
    protected static ?string $modelLabel = 'Data Warga'; // Untuk tampilan tunggal
    protected static ?string $pluralModelLabel = 'Data Warga'; // Untuk tampilan jamak

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->label('Nama Lengkap') // Ubah label tampilan
                    ->required()
                    ->maxLength(255),

                Forms\Components\Select::make('jenis_kelamin')
                    ->label('Jenis Kelamin') // Ubah label tampilan
                    ->options([
                        'L' => 'Laki-laki',
                        'P' => 'Perempuan',
                    ])
                    ->native(false),

                Forms\Components\TextInput::make('tempat_lahir')
                    ->label('Tempat Lahir') // Custom nama kolom
                    ->maxLength(255),

                Forms\Components\DatePicker::make('tgl_lahir')
                    ->label('Tanggal Lahir')
                    ->native(false)
                    ->closeOnDateSelection(),

                Forms\Components\Grid::make(3) // Membagi tampilan menjadi 3 kolom
                    ->schema([
                        Forms\Components\TextInput::make('thn_pengesahan')
                            ->label('Tahun Pengesahan')
                            ->numeric()
                            ->minValue(1800)
                            ->maxValue(date('Y') + 1)
                            ->mask('9999'),

                        Forms\Components\TextInput::make('pekerjaan')
                            ->label('Jenis Pekerjaan'),

                        Forms\Components\TextInput::make('no_wa')
                            ->label('Nomor WhatsApp')
                            ->tel()
                            ->maxLength(15),
                    ]),

                Forms\Components\Textarea::make('alamat')
                    ->label('Alamat Lengkap')
                    ->columnSpanFull()
                    ->rows(4),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nomor')
                    ->label('No')
                    ->state(
                        fn($record, $livewire) => array_search($record->getKey(), $livewire->getTableRecords()->pluck('id')->toArray()) + 1
                    ),
                Tables\Columns\TextColumn::make('nama')
                    ->sortable()
                    ->searchable()
                    ->label('Nama'),
                Tables\Columns\TextColumn::make('jenis_kelamin')
                    ->sortable()
                    ->searchable()
                    ->label('Jenis Kelamin'),
                Tables\Columns\TextColumn::make('tempat_lahir')
                    ->sortable()
                    ->searchable()
                    ->label('Tempat Lahir'),
                Tables\Columns\TextColumn::make('tgl_lahir')
                    ->sortable()
                    ->searchable()
                    ->label('Tanggal Lahir'),
                Tables\Columns\TextColumn::make('thn_pengesahan')
                    ->formatStateUsing(fn($state) => $state ? date('Y', strtotime($state)) : '-')
                    ->sortable()
                    ->label('Tahun Pengesahan'),
                Tables\Columns\TextColumn::make('pekerjaan')
                    ->limit(50)
                    ->searchable()
                    ->label('Pekerjaan'),
                Tables\Columns\TextColumn::make('no_wa')
                    ->searchable()
                    ->label('No WhatsApp'),
                Tables\Columns\TextColumn::make('alamat')
                    ->limit(50)
                    ->searchable()
                    ->label('Alamat'),
            ])
            ->filters([
                SelectFilter::make('jenis_kelamin')
                    ->label('Jenis Kelamin')
                    ->options([
                        'Laki-laki' => 'Laki-laki',
                        'Perempuan' => 'Perempuan',
                    ])
                    ->attribute('jenis_kelamin'),

                SelectFilter::make('pekerjaan')
                    ->label('Pekerjaan')
                    ->options(
                        fn() => Warga::query()
                            ->select('pekerjaan')
                            ->distinct()
                            ->orderBy('pekerjaan')
                            ->pluck('pekerjaan', 'pekerjaan') // Ambil array
                            ->toArray() // Ubah ke array
                    )
                    ->attribute('pekerjaan'),

                SelectFilter::make('thn_pengesahan')
                    ->label('Tahun Pengesahan')
                    ->options(
                        fn() => Warga::query()
                            ->whereNotNull('thn_pengesahan') // Hindari NULL
                            ->selectRaw('YEAR(thn_pengesahan) as year')
                            ->distinct()
                            ->orderBy('year', 'desc')
                            ->pluck('year', 'year')
                            ->filter(fn($year) => !is_null($year)) // Filter NULL lagi untuk jaga-jaga
                            ->toArray()
                    )
                    ->attribute('thn_pengesahan'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkAction::make('delete')
                    ->label('Hapus Data Terpilih')
                    ->action(fn($records) => $records->each->delete())
                    ->requiresConfirmation()
                    ->deselectRecordsAfterCompletion()
            ]);
        // ->searchDebounce(300);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListWarga::route('/'),
            'create' => Pages\CreateWarga::route('/create'),
            'edit' => Pages\EditWarga::route('/{record}/edit'),
        ];
    }
}
