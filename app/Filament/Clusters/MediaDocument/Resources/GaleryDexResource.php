<?php

namespace App\Filament\Clusters\MediaDocument\Resources;

use App\Filament\Clusters\MediaDocument;
use App\Filament\Clusters\MediaDocument\Resources\GaleryDexResource\Pages;
use App\Filament\Clusters\MediaDocument\Resources\GaleryDexResource\RelationManagers;
use App\Models\GaleryDex;
use App\Models\MediaDocument as ModelsMediaDocument;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\SubNavigationPosition;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GaleryDexResource extends Resource
{
    protected static ?string $model = ModelsMediaDocument::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $cluster = MediaDocument::class;

    protected static ?string $navigationLabel = 'Galery Dex';

    protected static SubNavigationPosition $subNavigationPosition = SubNavigationPosition::Top;
    

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('type')
                ->label('Tipe')
                ->default('Galery Dex')
                ->readonly()
                ->columnSpan([
                    'sm' => 2,
                ]),
            Forms\Components\FileUpload::make('path')
                ->label('Galery Dex')
                ->directory('media-document/galery-dex')
                ->columnSpan([
                    'sm' => 2,
                ]),
            Forms\Components\Select::make('media_type')
                ->label('Tipe Media')
                ->required()
                ->options([
                    'image' => 'Image' ,
                    'video' => 'Video' 
                ])
                ->helperText('The input type must match the uploaded file')
                ->searchable(),
            Forms\Components\TextInput::make('caption')
                ->label('Caption')
                ->columnSpan([
                    'sm' => 2,
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('path')
            ->label('Name File')
            ->searchable(),
            Tables\Columns\TextColumn::make('type')
                ->label('Tipe')
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
        ])
        ->modifyQueryUsing(fn (Builder $query) => $query->where('type', 'Galery Dex'));
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
            'index' => Pages\ListGaleryDexes::route('/'),
            'create' => Pages\CreateGaleryDex::route('/create'),
            'edit' => Pages\EditGaleryDex::route('/{record}/edit'),
        ];
    }

    public static function getBreadcrumb(): string
    {
        return 'Galery Dex';
    }
}
