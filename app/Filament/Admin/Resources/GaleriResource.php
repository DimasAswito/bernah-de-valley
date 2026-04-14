<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\GaleriResource\Pages;
use App\Models\Galeri;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class GaleriResource extends Resource
{
    protected static ?string $model = Galeri::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('deskripsi')
                    ->columnSpanFull(),
                Forms\Components\Select::make('kategori')
                    ->options([
                        'wahana' => 'Wahana',
                        'fasilitas' => 'Fasilitas',
                        'kegiatan' => 'Kegiatan',
                        'umum' => 'Umum',
                    ])
                    ->required(),
                Forms\Components\Select::make('tipe_file')
                    ->options([
                        'foto' => 'Foto',
                        'video' => 'Video',
                    ])
                    ->required(),
                Forms\Components\FileUpload::make('file_path')
                    ->label('File')
                    ->directory('galeri')
                    ->required(),
                Forms\Components\Select::make('wahana_id')
                    ->relationship('wahana', 'nama')
                    ->searchable()
                    ->preload(),
                Forms\Components\Toggle::make('is_active')
                    ->default(true)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kategori')
                    ->badge(),
                Tables\Columns\TextColumn::make('tipe_file')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'foto' => 'info',
                        'video' => 'success',
                        default => 'gray',
                    }),
                Tables\Columns\ImageColumn::make('file_path')
                    ->label('File'),
                Tables\Columns\TextColumn::make('wahana.nama')
                    ->label('Wahana')
                    ->sortable()
                    ->placeholder('-'),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),
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
            'index' => Pages\ListGaleris::route('/'),
            'create' => Pages\CreateGaleri::route('/create'),
            'edit' => Pages\EditGaleri::route('/{record}/edit'),
        ];
    }
}
