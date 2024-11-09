<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Illuminate\Support\Str;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Articles';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->live(debounce: 500)
                            ->afterStateUpdated(function (Get $get, Set $set, ?string $old, ?string $state) {
                                if (($get('slug') ?? '') !== Str::slug($old)) {
                                    return;
                                }

                                $set('slug', Str::slug($state));
                            }),

                        Forms\Components\TextInput::make('slug')
                            ->required()
                            ->unique(Blog::class, 'slug', fn ($record) => $record),

                        Forms\Components\TextInput::make('meta_title')
                            ->required()
                            ->unique(Blog::class, 'meta_title', fn ($record) => $record)
                            ->columnSpan([
                                'sm' => 2,
                            ]),
                            
                        Forms\Components\TextInput::make('meta_keywords')
                            ->required()
                            ->unique(Blog::class, 'meta_keywords', fn ($record) => $record)
                            ->columnSpan([
                                'sm' => 2,
                            ]),
                            
                        Textarea::make('meta_description')
                            ->rows(5)
                            ->required()
                            ->unique(Blog::class, 'meta_description', fn ($record) => $record)
                            ->columnSpan([
                                'sm' => 2,
                            ]),

                        Forms\Components\FileUpload::make('banner')
                            ->label('Banner')
                            ->image()
                            ->directory('blogs')
                            ->columnSpan([
                                'sm' => 2,
                            ]),

                        RichEditor::make('content')
                            ->columnSpan([
                                'sm' => 2,
                            ]),

                        // Forms\Components\Select::make('blog_author_id')
                        //     ->label(__('filament-blog::filament-blog.author'))
                        //     ->relationship(name: 'author', titleAttribute: 'name')
                        //     ->createOptionForm([
                        //         Forms\Components\TextInput::make('name')
                        //             ->required(),
                        //         Forms\Components\TextInput::make('email')
                        //             ->required()
                        //             ->email(),
                        //     ])
                        //     ->searchable()
                        //     ->required(),

                        // Forms\Components\Select::make('blog_category_id')
                        //     ->label(__('filament-blog::filament-blog.category'))
                        //     ->relationship(name: 'category', titleAttribute: 'name')
                        //     ->searchable()
                        //     ->required(),

                        Forms\Components\DateTimePicker::make('published_at')
                            ->label('Tanggal Publish'),
                    ])
                    ->columns([
                        'sm' => 2,
                    ])
                    ->columnSpan(2),
                Forms\Components\Section::make()
                    ->schema([
                        Select::make('category_id')
                        ->label('Blog Category')
                        ->options(BlogCategory::all()->pluck('name', 'id'))
                        ->searchable(),

                        Select::make('author_id')
                            ->label('Author')
                            ->options(User::all()->pluck('name', 'id'))
                            ->default('1'),
                            
                        Forms\Components\Placeholder::make('created_at')
                            ->content(fn (
                                ?Blog $record
                            ): string => $record ? $record->created_at->diffForHumans() : '-'),
                        Forms\Components\Placeholder::make('updated_at')
                            ->content(fn (
                                ?Blog $record
                            ): string => $record ? $record->updated_at->diffForHumans() : '-'),
                    ])
                    ->columnSpan(1),
            ])
            ->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Judul')
                    ->searchable(),
                Tables\Columns\TextColumn::make('published_at')
                    ->label('Tanggal Publikasi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('meta_description')
                    ->label('Deskripsi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('blogCategory.name')
                    ->label('Kategori')
                    ->searchable(),
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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
