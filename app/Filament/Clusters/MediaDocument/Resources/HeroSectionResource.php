<?php

namespace App\Filament\Clusters\MediaDocument\Resources;

use App\Filament\Clusters\MediaDocument;
use App\Filament\Clusters\MediaDocument\Resources\HeroSectionResource\Pages;
use App\Filament\Clusters\MediaDocument\Resources\HeroSectionResource\RelationManagers;
use App\Models\HeroSection;
use App\Models\MediaDocument as ModelsMediaDocument;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\SubNavigationPosition;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HeroSectionResource extends Resource
{
    protected static ?string $model = ModelsMediaDocument::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Hero Section';

    protected static SubNavigationPosition $subNavigationPosition = SubNavigationPosition::Top;

    protected static ?string $cluster = MediaDocument::class;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('type')
                    ->label('Tipe')
                    ->default('Hero Section')
                    ->readonly()
                    ->columnSpan([
                        'sm' => 2,
                    ]),
                Forms\Components\FileUpload::make('path')
                    ->label('Banner Hero Section')
                    ->image()
                    ->columnSpan([
                        'sm' => 2,
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListHeroSections::route('/'),
            'create' => Pages\CreateHeroSection::route('/create'),
            'edit' => Pages\EditHeroSection::route('/{record}/edit'),
        ];
    }

    public static function getBreadcrumb(): string
    {
        return 'Hero Section';
    }
}
