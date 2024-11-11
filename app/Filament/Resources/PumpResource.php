<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PumpResource\Pages;
use App\Filament\Resources\PumpResource\RelationManagers;
use App\Models\Pump;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PumpResource extends Resource
{
    protected static ?string $model = Pump::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Database Pompa';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('location')
                    ->label('Lokasi Pompa')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('serial_number')
                    ->label('No Seri Pompa')
                    ->numeric()
                    ->required(),
                Forms\Components\TextInput::make('flow_and_head')
                    ->label('Flow & Head')
                    ->required(),
                Forms\Components\TextInput::make('unit')
                    ->label('No Unit Pompa')
                    ->numeric()
                    ->required(),
                Forms\Components\TextInput::make('number_of_inspection')
                    ->label('Pemeriksaan')
                    ->numeric()
                    ->readonly()
                    ->default(0),
                Forms\Components\TextInput::make('running_hours_total')
                    ->label('Running Hours Total')
                    ->numeric()
                    ->readonly()
                    ->default(0),
                Forms\Components\TextInput::make('running_hours_monthly')
                    ->label('Running Hours Bulanan')
                    ->numeric()
                    ->readonly()
                    ->default(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('location')->searchable(),
                Tables\Columns\TextColumn::make('serial_number')->searchable(),
                Tables\Columns\TextColumn::make('flow_and_head'),
                Tables\Columns\TextColumn::make('unit'),
                Tables\Columns\TextColumn::make('number_of_inspection'),
                Tables\Columns\TextColumn::make('running_hours_total'),
                Tables\Columns\TextColumn::make('running_hours_monthly'),
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
            'index' => Pages\ListPumps::route('/'),
            'create' => Pages\CreatePump::route('/create'),
            'edit' => Pages\EditPump::route('/{record}/edit'),
        ];
    }
}
