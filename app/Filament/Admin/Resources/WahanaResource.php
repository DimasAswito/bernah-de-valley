<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\WahanaResource\Pages;
use App\Models\Wahana;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class WahanaResource extends Resource
{
    protected static ?string $model = Wahana::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true),
                Forms\Components\RichEditor::make('deskripsi')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('gambar')
                    ->image()
                    ->directory('wahana')
                    ->required(),
                Forms\Components\TextInput::make('harga_tiket')
                    ->required()
                    ->numeric()
                    ->default(0.00)
                    ->prefix('Rp'),
                Forms\Components\TimePicker::make('jam_buka')
                    ->required(),
                Forms\Components\TimePicker::make('jam_tutup')
                    ->required(),
                Forms\Components\TextInput::make('kapasitas')
                    ->numeric(),
                Forms\Components\Select::make('status')
                    ->options([
                        'aktif' => 'Aktif',
                        'maintenance' => 'Maintenance',
                        'tutup' => 'Tutup',
                    ])
                    ->default('aktif')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\ImageColumn::make('gambar'),
                Tables\Columns\TextColumn::make('harga_tiket')
                    ->numeric()
                    ->sortable()
                    ->money('IDR'),
                Tables\Columns\TextColumn::make('jam_buka')
                    ->time(),
                Tables\Columns\TextColumn::make('jam_tutup')
                    ->time(),
                Tables\Columns\TextColumn::make('kapasitas')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'aktif' => 'success',
                        'maintenance' => 'warning',
                        'tutup' => 'danger',
                        default => 'gray',
                    }),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListWahanas::route('/'),
            'create' => Pages\CreateWahana::route('/create'),
            'edit' => Pages\EditWahana::route('/{record}/edit'),
        ];
    }
}
