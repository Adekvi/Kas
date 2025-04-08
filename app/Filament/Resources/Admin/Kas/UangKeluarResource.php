<?php

namespace App\Filament\Resources\Admin\Kas;

use App\Filament\Resources\Kas\UangKeluarResource\Pages;
use App\Filament\Resources\Kas\UangKeluarResource\RelationManagers;
use App\Models\Admin\Uangkeluar;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UangKeluarResource extends Resource
{
    protected static ?string $model = Uangkeluar::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-euro';
    protected static ?string $navigationLabel = 'Data Uang Keluar';
    protected static ?string $navigationGroup = 'Menu Kas';
    protected static ?int $navigationSort = 2;

    // 🔥 Perbaiki nama di header, list, dan halaman lainnya
    protected static ?string $modelLabel = 'Data Uang Keluar'; // Untuk tampilan tunggal
    protected static ?string $pluralModelLabel = 'Data Uang Keluar'; // Untuk tampilan jamak

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make(3)
                    ->schema([
                        Forms\Components\TextInput::make('keperluan')
                            ->label('Keperluan')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('nominal')
                            ->label('Nominal')
                            ->prefix('Rp')
                            ->numeric() // Pastikan hanya menerima angka
                            ->required(),

                        Forms\Components\Select::make('bulan_id')
                            ->label('Bulan')
                            ->relationship('bulan', 'bulan', fn($query) => $query->orderBy('id', 'asc')) // Relasi ke tabel `bulans`
                            ->searchable()
                            ->preload()
                            ->required(),
                    ]),

                Forms\Components\Textarea::make('keterangan')
                    ->label('Keterangan')
                    ->columnSpanFull()
                    ->rows(4)
                    ->nullable(),

                Forms\Components\Toggle::make('status')
                    ->label('Status')
                    ->default(false),
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
                Tables\Columns\TextColumn::make('keperluan')
                    ->label('Keperluan')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('nominal')
                    ->label('Nominal')
                    ->money('IDR') // ✅ Format ke Rupiah
                    ->sortable(),

                Tables\Columns\TextColumn::make('bulan.bulan') // ✅ Relasi ke tabel bulan
                    ->label('Bulan')
                    ->sortable(),

                Tables\Columns\TextColumn::make('keterangan')
                    ->label('Keterangan')
                    ->limit(50)
                    ->searchable()
                    ->formatStateUsing(fn($state) => $state ?? '-'),

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
            'index' => Pages\ListUangKeluars::route('/'),
            'create' => Pages\CreateUangKeluar::route('/create'),
            'edit' => Pages\EditUangKeluar::route('/{record}/edit'),
        ];
    }
}
