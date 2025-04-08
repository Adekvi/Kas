<?php

namespace App\Filament\Resources\Admin\Master;

use App\Filament\Resources\Master\BulanResource\Pages;
use App\Filament\Resources\Master\BulanResource\RelationManagers;
use App\Models\Admin\Bulan;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BulanResource extends Resource
{
    protected static ?string $model = Bulan::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';
    protected static ?string $navigationLabel = 'Data Bulan';
    protected static ?string $navigationGroup = 'Master Data';
    protected static ?int $navigationSort = 1;

    // 🔥 Perbaiki nama di header, list, dan halaman lainnya
    protected static ?string $modelLabel = 'Data Bulan'; // Untuk tampilan tunggal
    protected static ?string $pluralModelLabel = 'Data Bulan'; // Untuk tampilan jamak

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('bulan')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nomor')
                    ->label('No')
                    ->sortable()
                    ->state(
                        fn($record, $livewire) => (($livewire->getTablePage() - 1) * $livewire->getTableRecordsPerPage()) +
                            $livewire->getTableRecords()->search($record) + 1
                    ),
                Tables\Columns\TextColumn::make('bulan')
                    ->label('Bulan'),
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
            'index' => Pages\ListBulans::route('/'),
            'create' => Pages\CreateBulan::route('/create'),
            'edit' => Pages\EditBulan::route('/{record}/edit'),
        ];
    }
}
