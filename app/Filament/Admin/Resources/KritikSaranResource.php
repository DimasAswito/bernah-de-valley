<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\KritikSaranResource\Pages;
use App\Models\KritikSaran;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class KritikSaranResource extends Resource
{
    protected static ?string $model = KritikSaran::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')->required()->maxLength(255),
                TextInput::make('email')->email()->maxLength(255),
                Select::make('kategori')->options([
                    'umum' => 'Umum',
                    'wahana' => 'Wahana',
                    'fasilitas' => 'Fasilitas',
                    'pelayanan' => 'Pelayanan',
                ])->required(),
                Select::make('wahana_id')->relationship('wahana', 'nama')->searchable()->preload(),
                Select::make('rating')->options([
                    1 => '⭐',
                    2 => '⭐⭐',
                    3 => '⭐⭐⭐',
                    4 => '⭐⭐⭐⭐',
                    5 => '⭐⭐⭐⭐⭐',
                ])->required(),
                Textarea::make('isi')->required()->columnSpanFull(),
                Select::make('status')->options([
                    'pending' => 'Pending',
                    'published' => 'Published',
                    'rejected' => 'Rejected',
                ])->default('pending')->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')->searchable(),
                TextColumn::make('kategori')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'umum' => 'gray',
                        'wahana' => 'warning',
                        'fasilitas' => 'info',
                        'pelayanan' => 'success',
                    }),
                TextColumn::make('wahana.nama')->label('Wahana')->sortable()->placeholder('-'),
                TextColumn::make('rating')->sortable(),
                TextColumn::make('status')->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'pending' => 'warning',
                        'published' => 'success',
                        'rejected' => 'danger',
                    }),
                TextColumn::make('created_at')->dateTime()->sortable()->toggleable(isToggledHiddenByDefault: true),

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
            'index' => Pages\ListKritikSarans::route('/'),
            'create' => Pages\CreateKritikSaran::route('/create'),
            'edit' => Pages\EditKritikSaran::route('/{record}/edit'),
        ];
    }
}
