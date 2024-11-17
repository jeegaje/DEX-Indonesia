<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MaintenanceAssignmentResource\Pages;
use App\Filament\Resources\MaintenanceAssignmentResource\RelationManagers;
use App\Models\MaintenanceAssignment;
use App\Models\Pump;
use App\Models\Role;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Enums\Alignment;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Hash;
use Filament\Forms\Components\Group;

class MaintenanceAssignmentResource extends Resource
{
    protected static ?string $model = MaintenanceAssignment::class;

    protected static ?int $navigationSort = 2;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Penugasan  Maintenance';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('user_id')
                            ->label('Teknisi')
                            ->searchable()
                            ->getSearchResultsUsing(function (string $search): array {
                                return User::where('name', 'like', "%{$search}%")
                                    ->where('role_id', 4)
                                    ->limit(10)
                                    ->get()
                                    ->mapWithKeys(function ($user) {
                                        return [$user->id => "{$user->name}"];
                                    })
                                    ->toArray();
                            })
                            ->getOptionLabelUsing(function ($value) {
                                return User::find($value)?->name;
                            }),
                            Select::make('maintenance_type')
                            ->label('Tipe Maintenance')
                            ->options([
                                'monthly' => 'Maintenance Bulanan',
                                'full' => 'Full Maintenance',
                            ])
                            ->hidden(fn ($get) => $form->getRecord() === null),
                            Select::make('status')
                            ->label('Status')
                            ->options([
                                'active' => 'Aktif',
                                'inactive' => 'Non Aktif',
                            ])
                            ->hidden(fn ($get) => $form->getRecord() === null),

                            Select::make('pump_id')
                            ->label('No Seri Pompa')
                            ->searchable()
                            ->getSearchResultsUsing(function (string $search): array {
                                return Pump::where('serial_number', 'like', "%{$search}%")
                                    ->orWhere('location', 'like', "%{$search}%")
                                    ->limit(10)
                                    ->get()
                                    ->mapWithKeys(function ($pump) {
                                        return [$pump->id => "{$pump->serial_number} ({$pump->location})"];
                                    })
                                    ->toArray();
                            })
                            ->getOptionLabelUsing(function ($value) {
                                return Pump::find($value)?->serial_number;
                            })
                            ->hidden(fn ($get) => $form->getRecord() === null),


                            
                Repeater::make('pumps')
                    ->label('Data Pompa')
                    ->schema([
                        Select::make('pump_id')
                            ->label('No Seri Pompa')
                            ->searchable()
                            ->getSearchResultsUsing(function (string $search): array {
                                return Pump::where('serial_number', 'like', "%{$search}%")
                                    ->orWhere('location', 'like', "%{$search}%")
                                    ->limit(10)
                                    ->get()
                                    ->mapWithKeys(function ($pump) {
                                        return [$pump->id => "{$pump->serial_number} ({$pump->location})"];
                                    })
                                    ->toArray();
                            }),
                        Select::make('maintenance_type')
                            ->label('Tipe Maintenance')
                            ->options([
                                'monthly' => 'Maintenance Bulanan',
                                'full' => 'Full Maintenance',
                            ])
                    ])
                    ->columns(2)
                    ->columnSpan([
                        'sm' => 2,
                    ])
                    ->hidden(fn ($get) => $form->getRecord() !== null),

        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('user.email')
                    ->label('Email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pump.serial_number')
                    ->label('Pump Serial Number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('maintenance_type')
                    ->label('Tipe Maintenance')
                    ->searchable(),
                Tables\Columns\TextColumn::make('user.role.name')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Manajemen' => 'warning',
                        'Internal' => 'success',
                        'Teknisi' => 'danger',
                    })
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'active' => 'success',
                        'inactive' => 'warning',
                    })
                    ->searchable(),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Action::make('customAction')
                    ->label('Generate Link') // Tulisan untuk tombol action
                    ->modalHeading('Generate Link') // Tulisan custom di bagian heading modal
                    ->modalDescription('Link Telah Berhasil digenerate, silahkan copy link di bawah ini') // Tulisan kustom di dalam modal
                    ->form(function (Form $form) {
                        return $form
                            ->schema([
                                Forms\Components\TextInput::make('generateLink')
                                    ->hiddenLabel()
                                    ->default(function (MaintenanceAssignment $maintenanceAssignment) {
                                        return url('') . '/maintenance/create?token=' . $maintenanceAssignment->token . '&pump=' . Hash::make( $maintenanceAssignment->pump_id);
                                    }),

                                Forms\Components\Actions::make([
                                    Forms\Components\Actions\Action::make('Copy Link')
                                        ->action(function (Forms\Get $get, Forms\Set $set) {
                                            $set('excerpt', str($get('content'))->words(45, end: ''));
                                        })
                                    ])->fullWidth()->extraAttributes(['id' => 'generated-link'])
                                ]);
                    })
                    ->modalSubmitAction(false)            //Remove Submit Button
                    ->modalCancelAction(false)
                    ->modalAlignment(Alignment::Center)
                    ->color('primary') // Warna tombol, bisa diubah sesuai keinginan
                    ->icon('heroicon-o-check')
                    ->button(),
                Tables\Actions\ActionGroup::make([
                    Action::make('change_maintenance_status_to_active')
                        ->label('Aktifkan')
                        ->color('success')
                        ->visible(function (Model $record) {
                            return $record->status == 'inactive';
                        })
                        ->action(fn(Model $record) => $record->update(['status' => 'active']))
                        ->requiresConfirmation(),
                    Action::make('change_maintenance_status_to_inactive')
                        ->label('Non Aktifkan')
                        ->color('danger')
                        ->visible(function (Model $record) {
                            return $record->status == 'active';
                        })
                        ->action(fn(Model $record) => $record->update(['status' => 'inactive']))
                        ->requiresConfirmation(),
                ]),
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
            'index' => Pages\ListMaintenanceAssignments::route('/'),
            'create' => Pages\CreateMaintenanceAssignment::route('/create'),
            'edit' => Pages\EditMaintenanceAssignment::route('/{record}/edit'),
        ];
    }
}
