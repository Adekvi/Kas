<?php

namespace App\Filament\Resources\Admin\Kas;

use App\Filament\Resources\Kas\UangMasukResource\Pages;
use App\Filament\Resources\Kas\UangMasukResource\RelationManagers;
use App\Models\Admin\Uangmasuk;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UangMasukResource extends Resource
{
    protected static ?string $model = UangMasuk::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';
    protected static ?string $navigationLabel = 'Data Uang Masuk';
    protected static ?string $navigationGroup = 'Menu Kas';
    protected static ?int $navigationSort = 2;

    // 🔥 Perbaiki nama di header, list, dan halaman lainnya
    protected static ?string $modelLabel = 'Data Uang Masuk'; // Untuk tampilan tunggal
    protected static ?string $pluralModelLabel = 'Data Uang Masuk'; // Untuk tampilan jamak

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make(3)
                    ->schema([
                        Forms\Components\Select::make('warga_id')
                            ->label('Nama Warga')
                            ->relationship('warga', 'nama', fn($query) => $query->orderBy('id', 'asc')) // Relasi ke tabel `bulans`
                            ->searchable()
                            ->preload()
                            ->required(),

                        Forms\Components\TextInput::make('jumlah')
                            ->label('Jumlah')
                            ->prefix('Rp')
                            ->numeric() // Pastikan hanya menerima angka
                            ->required(),

                        Select::make('bulans')
                            ->label('Bulan')
                            ->relationship('bulans', 'bulan', fn($query) => $query->orderBy('id'))
                            ->multiple()
                            ->preload()
                            ->required(),
                    ]),

                Forms\Components\Textarea::make('keterangan')
                    ->label('Keterangan')
                    ->columnSpanFull()
                    ->rows(4)
                    ->nullable(),

                // Forms\Components\Toggle::make('status')
                //     ->label('Status')
                //     ->default(false),
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nomor')
                    ->label('No')
                    ->state(
                        fn($record, $livewire) => (($livewire->getTablePage() - 1) * $livewire->getTableRecordsPerPage()) +
                            $livewire->getTableRecords()->search($record) + 1
                    ),
                Tables\Columns\TextColumn::make('warga.nama')
                    ->label('Nama')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('jumlah')
                    ->label('Jumlah')
                    ->money('IDR') // ✅ Format ke Rupiah
                    ->sortable(),

                Tables\Columns\TextColumn::make('bulan.bulan') // ✅ Relasi ke tabel bulan
                    ->label('Bulan')
                    ->sortable(),

                Tables\Columns\TextColumn::make('keterangan')
                    ->label('Keterangan')
                    ->limit(50)
                    ->searchable(),

                // ✅ Menampilkan status sebagai kalimat
                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->formatStateUsing(fn($state) => $state ? 'Sudah dikonfirmasi' : 'Belum dikonfirmasi')
                    ->sortable(),

                // ✅ Toggle untuk mengubah status langsung dari tabel
                Tables\Columns\ToggleColumn::make('status')
                    ->label('Ubah Status')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
                Tables\Actions\BulkAction::make('delete')
                    ->label('Hapus Data Terpilih')
                    ->action(fn($records) => $records->each->delete())
                    ->requiresConfirmation()
                    ->deselectRecordsAfterCompletion(),
            ]);
    }


    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUangMasuks::route('/'),
            'create' => Pages\CreateUangMasuk::route('/create'),
            'edit' => Pages\EditUangMasuk::route('/{record}/edit'),
        ];
    }
}
