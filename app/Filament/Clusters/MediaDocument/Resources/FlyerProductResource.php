<?php

namespace App\Filament\Clusters\MediaDocument\Resources;

use App\Filament\Clusters\MediaDocument;
use App\Filament\Clusters\MediaDocument\Resources\FlyerProductResource\Pages;
use App\Filament\Clusters\MediaDocument\Resources\FlyerProductResource\RelationManagers;
use App\Models\FlyerProduct;
use App\Models\MediaDocument as ModelsMediaDocument;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\SubNavigationPosition;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FlyerProductResource extends Resource
{
    protected static ?string $model = ModelsMediaDocument::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Flyer Product';

    protected static SubNavigationPosition $subNavigationPosition = SubNavigationPosition::Top;

    protected static ?string $cluster = MediaDocument::class;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('type')
                    ->label('Tipe')
                    ->default('Flyer Product')
                    ->readonly()
                    ->columnSpan([
                        'sm' => 2,
                    ]),
                Forms\Components\FileUpload::make('path')
                    ->label('Banner Flyer Product')
                    ->directory('media-document/flyer')
                    ->acceptedFileTypes(['application/pdf'])
                    ->columnSpan([
                        'sm' => 2,
                    ])
                    ->preserveFilenames(),
                Forms\Components\Select::make('caption')
                    ->label('Tipe Flyer')
                    ->options([
                        'submersible_sewage_centrifugal_pump' => 'Submersible Sewage Centrifugal Pump' ,
                        'submersible_axial_flow_pump' => 'Submersible Axial Flow Pump' 
                    ])
                    ->searchable(),

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
            ->modifyQueryUsing(fn (Builder $query) => $query->where('type', 'Flyer Product'));

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
            'index' => Pages\ListFlyerProducts::route('/'),
            'create' => Pages\CreateFlyerProduct::route('/create'),
            'edit' => Pages\EditFlyerProduct::route('/{record}/edit'),
        ];
    }

    public static function getBreadcrumb(): string
    {
        return 'Flyer Product';
    }
}
