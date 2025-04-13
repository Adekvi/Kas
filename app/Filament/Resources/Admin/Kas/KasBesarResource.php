<?php

namespace App\Filament\Resources\Admin\Kas;

use App\Filament\Resources\Admin\Kas\KasBesarResource\Pages;
use App\Filament\Resources\Admin\Kas\KasBesarResource\RelationManagers;
use App\Models\Admin\Kasbesar;
use App\Models\Admin\Sumbangan;
use App\Models\Admin\Uangkeluar;
use App\Models\Admin\Uangmasuk;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KasBesarResource extends Resource
{
    protected static ?string $model = Kasbesar::class;

    protected static ?string $navigationIcon = 'heroicon-o-banknotes';
    protected static ?string $navigationLabel = 'Data Kas Besar';
    protected static ?string $navigationGroup = 'Menu Kas';
    protected static ?int $navigationSort = 2;

    // 🔥 Perbaiki nama di header, list, dan halaman lainnya
    protected static ?string $modelLabel = 'Data Kas Besar'; // Untuk tampilan tunggal
    protected static ?string $pluralModelLabel = 'Data Kas Besar'; // Untuk tampilan jamak

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make(3)
                    ->schema([
                        Forms\Components\Select::make('bulan_id')
                            ->label('Bulan')
                            ->relationship('bulan', 'bulan', fn($query) => $query->orderBy('id', 'asc'))
                            ->searchable()
                            ->preload()
                            ->reactive()  // Buat reaktif agar filter bisa bekerja setelah bulan dipilih
                            ->required()
                            ->afterStateUpdated(function ($state, $get, $set) {
                                // Update 'total_saldo' setelah bulan_id dipilih
                                $set('total_saldo', KasBesar::calculateTotalSaldo($get('bulan_id'), $get('masuk_id'), $get('keluar_id')));
                            }),

                        Forms\Components\Select::make('masuk_id')
                            ->label('Uang Masuk')
                            ->relationship('uangmasuk', 'jumlah', function ($query, $get) {
                                $bulanId = $get('bulan_id');
                                if ($bulanId) {
                                    $query->where('bulan_id', $bulanId);
                                }
                            })
                            ->searchable()
                            ->preload()
                            ->reactive()  // Pastikan field ini reaktif jika bulan berubah
                            ->afterStateUpdated(function ($state, $get, $set) {
                                // Update 'total_saldo' setelah masuk_id dipilih
                                $set('total_saldo', KasBesar::calculateTotalSaldo($get('bulan_id'), $get('masuk_id'), $get('keluar_id')));
                            }),

                        Forms\Components\Select::make('keluar_id')
                            ->label('Uang Keluar')
                            ->relationship('uangkeluar', 'nominal', function ($query, $get) {
                                $bulanId = $get('bulan_id');
                                if ($bulanId) {
                                    $query->where('bulan_id', $bulanId);
                                }
                            })
                            ->searchable()
                            ->preload()
                            ->reactive()  // Pastikan field ini reaktif jika bulan berubah
                            ->afterStateUpdated(function ($state, $get, $set) {
                                // Update 'total_saldo' setelah keluar_id dipilih
                                $set('total_saldo', KasBesar::calculateTotalSaldo($get('bulan_id'), $get('masuk_id'), $get('keluar_id')));
                            }),
                    ]),

                Forms\Components\DatePicker::make('tgl_bulan')
                    ->label('Tanggal')
                    ->required()
                    ->default(now())  // Opsional: Atur default ke tanggal hari ini
                    ->format('Y-m-d')
                    ->displayFormat('d-m-Y')
                    ->reactive(), // Menangani perubahan tanggal
                // ->afterStateUpdated(function ($state, $set) {
                //     // Set ulang pilihan uang masuk dan uang keluar berdasarkan bulan
                //     $set('masuk_id', null); // Reset uang masuk
                //     $set('keluar_id', null); // Reset uang keluar
                // }),

                Forms\Components\Select::make('sumbangan_id')
                    ->label('Sumbangan')
                    ->relationship('sumbangan', 'jenis', function ($query) {
                        $query->orderBy('jenis', 'asc');
                    })
                    ->searchable()
                    ->preload()
                    ->reactive()
                    ->required()
                    ->afterStateUpdated(function ($state, $get, $set) {
                        // Cek apakah jenis sumbangan adalah uang atau barang
                        $sumbangan = Sumbangan::find($state);

                        if ($sumbangan) {
                            if ($sumbangan->jenis == 'uang') {
                                // Jika sumbangan berupa uang, tampilkan nominal
                                $set('nominal', $sumbangan->uang);
                                $set('barang', null); // Kosongkan barang jika jenisnya uang
                            } elseif ($sumbangan->jenis == 'barang') {
                                // Jika sumbangan berupa barang, tampilkan nama barang
                                $set('barang', $sumbangan->barang);
                                $set('nominal', null); // Kosongkan nominal jika jenisnya barang
                            }
                        }
                    }),

                Forms\Components\TextInput::make('total_saldo')
                    ->label('Total Saldo')
                    ->numeric()
                    ->prefix('Rp')
                    ->default(0)
                    ->disabled()  // Disable agar hanya menampilkan hasil
                    ->reactive()  // Agar field ini diperbarui secara langsung
                    ->required(),

                Forms\Components\Select::make('status')
                    ->label('Status')
                    ->options([
                        false => 'Sesuai',
                        true => 'Perlu dicek',
                    ])
                    ->native(false)
                    ->default(false)  // Default ke "Sesuai"
                    ->required(),

                Forms\Components\Textarea::make('keterangan')
                    ->label('Keterangan')
                    ->rows(5)
                    ->columnSpanFull()
                    ->nullable(),

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

                Tables\Columns\TextColumn::make('tgl_bulan')
                    ->label('Tanggal')
                    ->searchable()
                    ->formatStateUsing(function ($state) {
                        // Ambil bulan dan tahun dengan format 'd F Y', seperti '5 Maret 2025'
                        return \Carbon\Carbon::parse($state)->format('j F Y');
                    }),

                Tables\Columns\TextColumn::make('uangmasuk.jumlah')
                    ->label('Uang Masuk')
                    ->money('Rp.')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('uangkeluar.nominal')
                    ->label('Uang Keluar')
                    ->money('Rp.')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('bulan.bulan') // ✅ Relasi ke tabel bulan
                    ->label('Bulan')
                    ->sortable(),

                Tables\Columns\TextColumn::make('sumbangan.jenis')
                    ->label('Jenis Sumbangan')
                    ->sortable()
                    ->searchable()
                    ->formatStateUsing(function ($state, $record) {
                        // Menentukan nilai yang ditampilkan berdasarkan jenis sumbangan
                        if ($record->sumbangan->jenis == 'uang') {
                            // Menambahkan format Rp. pada nominal uang
                            return 'Uang: RP. ' . number_format($record->sumbangan->uang, 0, ',', '.');
                        } elseif ($record->sumbangan->jenis == 'barang') {
                            return 'Barang: ' . $record->sumbangan->barang;
                        }
                        return $state; // Default jika tidak ada jenis
                    }),

                Tables\Columns\TextColumn::make('total_saldo')
                    ->label('Total Saldo')
                    ->money('Rp.')
                    ->sortable()
                    ->searchable(),

                // ✅ Menampilkan status sebagai kalimat
                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->formatStateUsing(fn($state) => $state ? 'Clear' : 'Cek')
                    ->sortable(),

                // ✅ Toggle untuk mengubah status langsung dari tabel
                Tables\Columns\ToggleColumn::make('status')
                    ->label('Ubah Status')
                    ->sortable(),

                Tables\Columns\TextColumn::make('keterangan')
                    ->label('Keterangan')
                    ->limit(50)
                    ->searchable(),
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
            'index' => Pages\ListKasBesars::route('/'),
            'create' => Pages\CreateKasBesar::route('/create'),
            'edit' => Pages\EditKasBesar::route('/{record}/edit'),
        ];
    }
}
