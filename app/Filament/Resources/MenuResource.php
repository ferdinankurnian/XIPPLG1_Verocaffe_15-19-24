<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MenuResource\Pages;
use App\Filament\Resources\MenuResource\RelationManagers;
use App\Models\Menu;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MenuResource extends Resource
{
    protected static ?string $model = Menu::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required(),
                Forms\Components\Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required(),
                Forms\Components\MultiSelect::make('promo_id')
                    ->relationship('promo', 'buy'),
                Forms\Components\FileUpload::make('cover')
                    ->image()
                    ->directory('menucovers')
                    ->required(),
                Forms\Components\TextInput::make('price')
                    ->required(),
                Forms\Components\TextInput::make('stock')
                    ->required()
                    ->numeric(),
                Forms\Components\Textarea::make('description')
                    ->required(),
            ]);
    }

    public static function afterSave($record)
    {
        // Sync the promo_id many-to-many relationship
        $record->promo()->sync($record->promo_id);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Menampilkan kolom 'cover' dengan gambar
                Tables\Columns\ImageColumn::make('cover')
                    ->label('Cover')
                    ->width(100)  // Mengatur lebar gambar
                    ->height(100),
                    
                // Menampilkan kolom 'title'
                Tables\Columns\TextColumn::make('title')
                    ->sortable()
                    ->searchable(),

                // Menampilkan kolom 'category' dengan relasi ke category_name
                Tables\Columns\TextColumn::make('category.name')
                    ->label('Category')
                    ->sortable(),

                // Menampilkan kolom 'promo' dengan relasi ke promo names
                Tables\Columns\TextColumn::make('promo.buy')
                    ->label('Promo')
                    ->sortable(),

                // Menampilkan kolom 'price'
                Tables\Columns\TextColumn::make('price')
                    ->sortable(),

                // Menampilkan kolom 'stock'
                Tables\Columns\TextColumn::make('stock')
                    ->sortable(),
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
            'index' => Pages\ListMenus::route('/'),
            'create' => Pages\CreateMenu::route('/create'),
            'edit' => Pages\EditMenu::route('/{record}/edit'),
        ];
    }
}
