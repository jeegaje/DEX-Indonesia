<?php

namespace App\Filament\Clusters\MediaDocument\Resources;

use App\Filament\Clusters\MediaDocument;
use App\Filament\Clusters\MediaDocument\Resources\RecommendProductResource\Pages;
use App\Filament\Clusters\MediaDocument\Resources\RecommendProductResource\RelationManagers;
use App\Models\MediaDocument as ModelsMediaDocument;
use App\Models\RecommendProduct;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\SubNavigationPosition;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RecommendProductResource extends Resource
{
    protected static ?string $model = ModelsMediaDocument::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Documentation Product';

    protected static SubNavigationPosition $subNavigationPosition = SubNavigationPosition::Top;

    protected static ?string $cluster = MediaDocument::class;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Forms\Components\Select::make('type')
                ->label('Tipe')
                ->required()
                ->options([
                    'Documentation Product Axial Flow Pump' => 'Documentation Product Axial Flow Pump' ,
                    'Documentation Product Sewage Centrifugal Pump' => 'Documentation Product Sewage Centrifugal Pump' 
                ])
                ->searchable(),
            Forms\Components\FileUpload::make('path')
                ->label('Galery DEX')
                ->directory('media-document/documentation-product')
                ->columnSpan([
                    'sm' => 2,
                ])
                ->preserveFilenames(),
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
        ->modifyQueryUsing(fn (Builder $query) => $query->where('type', 'Documentation Product Axial Flow Pump')->orWhere('type' , 'Documentation Product Sewage Centrifugal Pump'));
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
            'index' => Pages\ListRecommendProducts::route('/'),
            'create' => Pages\CreateRecommendProduct::route('/create'),
            'edit' => Pages\EditRecommendProduct::route('/{record}/edit'),
        ];
    }

    public static function getBreadcrumb(): string
    {
        return 'Documentation Product';
    }
}
