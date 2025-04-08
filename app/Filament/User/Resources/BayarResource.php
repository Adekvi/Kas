<?php

namespace App\Filament\User\Resources;

use App\Filament\User\Resources\BayarResource\Pages;
use App\Filament\User\Resources\BayarResource\RelationManagers;
use App\Models\Admin\Uangmasuk;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class BayarResource extends Resource
{
    protected static ?string $model = UangMasuk::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';
    protected static ?string $navigationLabel = 'Bayar Kas';
    protected static ?string $navigationGroup = 'Menu Kas';
    protected static ?int $navigationSort = 2;

    // 🔥 Perbaiki nama di header, list, dan halaman lainnya
    protected static ?string $modelLabel = 'Bayar Kas'; // Untuk tampilan tunggal
    protected static ?string $pluralModelLabel = 'Bayar Kas'; // Untuk tampilan jamak

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make(3)
                    ->schema([
                        TextInput::make('warga_id')
                            ->label('Nama Warga')
                            ->default(fn() => Auth::user()->warga ? Auth::user()->warga->nama : '')
                            ->disabled(), // Menonaktifkan agar pengguna tidak bisa mengubahnya
                        // ->hidden(),

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

    // public function create(Request $request)
    // {
    //     $request->merge(['warga_id' => Auth::user()->warga_id]);

    //     $uangMasuk = UangMasuk::create($request->all()); // Menyimpan data ke tabel uangmasuks
    //     return redirect()->route('success.route');
    // }

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
                // Tables\Columns\TextColumn::make('nama_warga')
                //     ->label('Nama')
                //     ->default(fn() => Auth::user()->warga?->nama ?? Auth::user()->name)
                //     ->sortable()
                //     ->searchable(),

                Tables\Columns\TextColumn::make('jumlah')
                    ->label('Jumlah')
                    ->money('Rp.') // ✅ Format ke Rupiah
                    ->sortable(),

                TextColumn::make('bulans')
                    ->label('Bulan')
                    ->getStateUsing(fn($record) => $record->bulans->pluck('bulan')->join(', '))
                    ->sortable(),

                Tables\Columns\TextColumn::make('keterangan')
                    ->label('Keterangan')
                    ->limit(50)
                    ->searchable(),

                // // ✅ Menampilkan status sebagai kalimat
                // Tables\Columns\TextColumn::make('status')
                //     ->label('Status')
                //     ->formatStateUsing(fn($state) => $state ? 'Sudah dikonfirmasi' : 'Belum dikonfirmasi')
                //     ->sortable(),

                // // ✅ Toggle untuk mengubah status langsung dari tabel
                // Tables\Columns\ToggleColumn::make('status')
                //     ->label('Ubah Status')
                //     ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                // Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    // Tables\Actions\DeleteBulkAction::make(),
                ]),
                // Tables\Actions\BulkAction::make('delete')
                //     ->label('Hapus Data Terpilih')
                //     ->action(fn($records) => $records->each->delete())
                //     ->requiresConfirmation()
                //     ->deselectRecordsAfterCompletion(),
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
            'index' => Pages\ListBayars::route('/'),
            'create' => Pages\CreateBayar::route('/create'),
            'edit' => Pages\EditBayar::route('/{record}/edit'),
        ];
    }
}
