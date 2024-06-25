<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\Blog;
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

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';


    protected static ?string $navigationLabel = 'Blog';

    protected static ?string $navigationGroup = 'Pagina Web';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Blog')
                ->description('Detalles de publiación')
                ->schema([
                    TextInput::make('title')
                        ->required()
                        ->placeholder('Titulo')
                        ->label(__('title'))
                        ->maxLength(255),
                    RichEditor::make('description')
                        ->required()
                        ->translateLabel()
                        ->columnSpanFull(),
                    FileUpload::make('img')
                        ->enableOpen()
                        ->translateLabel()
                        ->directory('blog')
                        ->image()
                        ->imageResizeMode('cover')
                        ->imageCropAspectRatio('16:9')
                        ->imageResizeTargetWidth('1920')
                        ->imageResizeTargetHeight('1080')
                        ->required(),
                    Forms\Components\Toggle::make('show')
                        ->required(),
                    Forms\Components\TextInput::make('order')
                        ->required()
                        ->translateLabel()
                        ->numeric(),
                    TextInput::make('slug')->label(__('slug'))->disabled()->nullable()
                ])->columns(3)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->label(__('title'))
                    ->searchable(),
                Tables\Columns\ImageColumn::make('img')
                    ->label(__('img'))
                    ->searchable(),
                TextColumn::make('slug')
                    ->copyable()
                    ->label(__('slug'))
                    ->label('Url')
                    ->copyMessage('Url copiada')
                    ->placeholder('sin url')
                    ->copyableState(fn (string $state): string =>  config('app.url') . "/ver-blog/{$state}")
                    ->formatStateUsing(fn (string $state): string => config('app.url') . "/ver-blog/{$state}"),
                Tables\Columns\IconColumn::make('show')
                    ->label(__('show'))
                    ->boolean(),
                Tables\Columns\TextColumn::make('order')
                    ->label(__('order'))
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->label(__('created_at'))
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->label(__('updated_at'))
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
            ])
            ->filters([
                //
            ])
            ->actions([
                Action::make('Previsualización')
                    ->url(fn (Blog $record): string => route('blog_information_show', $record->slug))
                    ->icon('heroicon-o-pencil')
                    ->openUrlInNewTab(),
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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
