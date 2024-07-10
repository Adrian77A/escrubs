<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Closure;
use Illuminate\Support\Str;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\ToggleButtons;
use Filament\Support\Colors\Color;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Productos';

    protected static ?string $navigationGroup = 'Productos';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Producto')
                ->description('Detalles del producto')
                ->schema([
                    Forms\Components\Select::make('category_id')
                        ->relationship('category', 'name')
                        ->label(__('category_id'))
                        ->required(),
                    Forms\Components\TextInput::make('name')
                        ->required()
                        ->label(__('name'))
                        ->maxLength(255),
                    Forms\Components\Textarea::make('description')
                        ->label(__('description'))
                        ->maxLength(255),
                    Forms\Components\TextInput::make('stock')
                        ->required()
                        ->minLength(1)
                        ->default(15)
                        ->maxLength(255)
                        ->label(__('stock'))
                        ->numeric(),
                    Forms\Components\TextInput::make('price')
                        ->required()
                        ->minLength(1)
                        ->maxLength(255)
                        ->label(__('price'))
                        ->default(250)
                        ->numeric(),
                    FileUpload::make('img')
                        ->label(__('img'))
                        ->image()
                        ->multiple()
                        ->directory('product')
                        ->image()
                        ->uploadingMessage('Imagen cargando...')
                        ->imageEditor()
                        ->imageEditorEmptyFillColor('#000000')
                        ->reorderable()
                        ->openable()
                        // ->imageResizeTargetWidth('1200')
                        // ->imageResizeTargetHeight('1480')
                        ->required(),
                        ToggleButtons::make('status')
                        ->required()
                        ->label(__('status'))
                        ->options([
                            'activo' => 'Activo',
                            'inactivo' => 'Inactivo',
                        ])
                        ->colors([
                            'inactivo' => 'warning',
                            'activo' => 'success'
                        ]),
                        Forms\Components\Select::make('color')
                        ->label(__('color'))
                        ->required()
                        ->options([
                            'rojo' => 'Rojo',
                            'amarillo' => 'Amarillo',
                            'negro' => 'Negro',
                            'azul' => 'Azul',
                            'verde' => 'Verde',
                            'gris' => 'Gris',
                            'morado' => 'Morado',
                            'lila' => 'Lila',
                            'blanco' => 'Blanco',
                            'rosa' => 'Rosa',
                        ]),
                    Forms\Components\TextInput::make('sku')
                        ->label(__('sku'))
                        ->readOnly()
                        ->hiddenOn('create')
                        ->maxLength(255),
                ])->columns(3)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('stock')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('price')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sku')
                    ->searchable()
                    ->sortable(),
                ImageColumn::make('img'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('category_id')
                    ->multiple()
                    ->relationship('category', 'name')
                    ->label(__('category')),
                Filter::make('stock')->label(__('stock'))
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
