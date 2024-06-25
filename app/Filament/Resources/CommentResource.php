<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CommentResource\Pages;
use App\Filament\Resources\CommentResource\RelationManagers;
use App\Models\Comment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Filters\Filter;

class CommentResource extends Resource
{
    protected static ?string $model = Comment::class;

   
    protected static ?string $navigationIcon = 'heroicon-o-check-circle';

    protected static ?string $navigationLabel = 'Testimonios';

    protected static ?string $navigationGroup = 'Pagina Web';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Testimonios')
                    ->description('Testimonios sobre la pagina')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                        ->label('name')
                        ->translateLabel()
                        ->required(),
                        Forms\Components\TextInput::make('email')
                        ->label('Email')
                        ->required()
                        ->email(),
                        Forms\Components\Select::make('status')
                        ->label('Status')
                        ->options(['0'=> 'Invalido', '2'=> 'Pendiente', '1' => 'Acceptado'])
                        ->searchable()
                        ->required(),
                        Textarea::make('description')
                        ->required()
                        ->columnSpanFull(),
                        DateTimePicker::make('date')->label('date')
                        ->required()
                    ])->columns(3)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->sortable()->searchable()->label('Name'),
                Tables\Columns\TextColumn::make('email')->sortable()->searchable()->label('Email'),
                SelectColumn::make('status')
                ->options([
                    '0' => 'Invalido',
                    '2' => 'Pendiente',
                    '1' => 'Aceptado',
                ])->sortable(),
            ])
            ->filters([
                Filter::make('email')->label('Email'),
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
            'index' => Pages\ListComments::route('/'),
            'create' => Pages\CreateComment::route('/create'),
            'edit' => Pages\EditComment::route('/{record}/edit'),
        ];
    }
}
