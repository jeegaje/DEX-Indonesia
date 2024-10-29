<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MaintenanceResource\Pages;
use App\Filament\Resources\MaintenanceResource\RelationManagers;
use App\Models\Maintenance;
use Filament\Forms;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Form;
use Filament\Pages\Page;
use Filament\Pages\SubNavigationPosition;
use Filament\Resources\Resource;
use Filament\Support\Enums\ActionSize;
use Filament\Support\Enums\Alignment;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MaintenanceResource extends Resource
{
    protected static ?string $model = Maintenance::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static SubNavigationPosition $subNavigationPosition = SubNavigationPosition::Top;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Tabs::make('Maintenance Details')
                    ->columnSpan('full')
                    ->tabs([
                        // Tab untuk informasi umum Maintenance
                        Tab::make('Data Pompa')
                            ->schema([
                                Section::make('Pump Data')
                                    ->headerActions([
                                        Action::make('pump_data_waiting_approval_status')
                                            ->label('Belum Approve')
                                            ->color('danger')
                                            ->size(ActionSize::Large)
                                            ->badge()
                                            ->disabled(true)
                                            ->visible(function (Model $record) {
                                                return $record->maintenancePumpData->status == 'waiting_approval';
                                            }),
                                        Action::make('pump_data_approved_status')
                                            ->label('Approve')
                                            ->color('success')
                                            ->size(ActionSize::Large)
                                            ->badge()
                                            ->disabled(true)
                                            ->visible(function (Model $record) {
                                                return $record->maintenancePumpData->status == 'approved';
                                            }),
                                        Action::make('pump_data_approve')
                                            ->label('Approve')
                                            ->color('success')
                                            ->visible(function (Model $record) {
                                                return $record->maintenancePumpData->status == 'waiting_approval';
                                            })
                                            ->action(fn(Model $record) => $record->maintenancePumpData->update(['status' => 'approved', 'approved_by' => auth()->user()->id]))
                                            ->requiresConfirmation(),
                                    ])
                                    ->schema([
                                        Fieldset::make('Data Pompa')
                                            ->relationship('maintenanceAssignment')
                                            ->schema([
                                                Group::make()
                                                    ->relationship('user')
                                                    ->columnSpan(2)
                                                    ->schema([
                                                        Forms\Components\TextInput::make('name')
                                                            ->label('Tim Teknisi')
                                                            ->readOnly(),
                                                    ]),
                                                Group::make()
                                                    ->relationship('pump')
                                                    ->columnSpan(2)
                                                    ->schema([
                                                        Forms\Components\TextInput::make('location')
                                                            ->label('Lokasi Pompa')
                                                            ->readOnly(),
                                                        Forms\Components\TextInput::make('serial_number')
                                                            ->label('Nomor Seri Pompa')
                                                            ->numeric()
                                                            ->readOnly(),
                                                        Forms\Components\TextInput::make('flow_and_head')
                                                            ->label('Flow and Head')
                                                            ->readOnly(),
                                                        Forms\Components\TextInput::make('unit')
                                                            ->label('No Unit Pompa')
                                                            ->readOnly(),
                                                    ])
                                            ]),
                                        Group::make()
                                            ->relationship('maintenancePumpData')
                                            ->schema([
                                                Forms\Components\TextInput::make('number_of_inspection')
                                                    ->label('Pemeriksaan')
                                                    ->readOnly(),
                                                Forms\Components\TextInput::make('running_hours_total')
                                                    ->label('Running Hours Total'),
                                                Forms\Components\FileUpload::make('running_hours_total_image')
                                                    ->label('Running Hours Total Documentation')
                                                    ->directory('maintenance/data-pump')
                                                    ->image()
                                                    ->openable()
                                                    ->downloadable(),
                                                Forms\Components\TextInput::make('running_hours_monthly')
                                                    ->label('Running Hours Bulanan'),
                                                Forms\Components\FileUpload::make('running_hours_monthly_image')
                                                    ->label('Running Hours Bulanan Documentation')
                                                    ->directory('maintenance/data-pump')
                                                    ->image()
                                                    ->openable()
                                                    ->downloadable(),
                                            ])
                                    ])
                            ]),
                        Tab::make('LVMDP')
                            ->schema([
                                Section::make('LVMDP')
                                    ->headerActions([
                                        Action::make('lvmdp_waiting_approval_status')
                                            ->label('Belum Approve')
                                            ->color('danger')
                                            ->size(ActionSize::Large)
                                            ->badge()
                                            ->disabled(true)
                                            ->visible(function (Model $record) {
                                                return $record->maintenanceLvmdp->status == 'waiting_approval';
                                            }),
                                        Action::make('lvmdp_approved_status')
                                            ->label('Approve')
                                            ->color('success')
                                            ->size(ActionSize::Large)
                                            ->badge()
                                            ->disabled(true)
                                            ->visible(function (Model $record) {
                                                return $record->maintenanceLvmdp->status == 'approved';
                                            }),
                                        Action::make('lvmdp_approve')
                                            ->label('Approve')
                                            ->color('success')
                                            ->visible(function (Model $record) {
                                                return $record->maintenanceLvmdp->status == 'waiting_approval';
                                            })
                                            ->action(fn(Model $record) => $record->maintenanceLvmdp->update(['status' => 'approved', 'approved_by' => auth()->user()->id]))
                                            ->requiresConfirmation(),
                                    ])
                                    ->schema([
                                        Fieldset::make('LVMDP')
                                            ->relationship('maintenanceLvmdp')
                                            ->schema([
                                                Forms\Components\Radio::make('indicator_light_rst')
                                                    ->label('Lampu Indikator R.S.T')
                                                    ->options([
                                                        'normal' => 'Normal',
                                                        'abnormal' => 'Tidak Normal',
                                                    ])
                                                    ->inline()
                                                    ->inlineLabel(false)
                                                    ->columnSpan(2),
                                                Forms\Components\TextInput::make('indicator_light_rst_detail')
                                                    ->label('Lampu Indikator R.S.T Detail')
                                                    ->columnSpan(2),
                                                Forms\Components\Radio::make('voltage_balance')
                                                    ->label('Balance Voltase')
                                                    ->options([
                                                        'normal' => 'Normal',
                                                        'abnormal' => 'Tidak Normal',
                                                    ])
                                                    ->inline()
                                                    ->inlineLabel(false)
                                                    ->columnSpan(2),
                                                Forms\Components\TextInput::make('voltage_balance_detail')
                                                    ->label('Balance Voltase Detail')
                                                    ->columnSpan(2),
                                                Forms\Components\TextInput::make('frequency')
                                                    ->numeric()
                                                    ->label('Frekuensi')
                                                    ->columnSpan(2),
                                                Forms\Components\TextInput::make('v1')
                                                    ->numeric()
                                                    ->label('V1')
                                                    ->columnSpan(2),
                                                Forms\Components\TextInput::make('v2')
                                                    ->numeric()
                                                    ->label('V2')
                                                    ->columnSpan(2),
                                                Forms\Components\TextInput::make('v3')
                                                    ->numeric()
                                                    ->label('V3')
                                                    ->columnSpan(2),
                                                Forms\Components\Radio::make('power')
                                                    ->label('Power')
                                                    ->options([
                                                        'normal' => 'Normal',
                                                        'abnormal' => 'Tidak Normal',
                                                    ])
                                                    ->inline()
                                                    ->inlineLabel(false),
                                            ])
                                    ])

                            ]),
                        Tab::make('Junction Box')
                            ->schema([
                                Section::make('Junction Box')
                                    ->headerActions([
                                        Action::make('junction_box_waiting_approval_status')
                                            ->label('Belum Approve')
                                            ->color('danger')
                                            ->size(ActionSize::Large)
                                            ->badge()
                                            ->disabled(true)
                                            ->visible(function (Model $record) {
                                                return $record->maintenanceJunctionBox->status == 'waiting_approval';
                                            }),
                                        Action::make('junction_box_approved_status')
                                            ->label('Approve')
                                            ->color('success')
                                            ->size(ActionSize::Large)
                                            ->badge()
                                            ->disabled(true)
                                            ->visible(function (Model $record) {
                                                return $record->maintenanceJunctionBox->status == 'approved';
                                            }),
                                        Action::make('junction_box_approve')
                                            ->label('Approve')
                                            ->color('success')
                                            ->visible(function (Model $record) {
                                                return $record->maintenanceJunctionBox->status == 'waiting_approval';
                                            })
                                            ->action(fn(Model $record) => $record->maintenanceJunctionBox->update(['status' => 'approved', 'approved_by' => auth()->user()->id]))
                                            ->requiresConfirmation(),
                                    ])
                                    ->schema([

                                        Fieldset::make('Junction Box')
                                            ->relationship('maintenanceJunctionBox')
                                            ->schema([
                                                Forms\Components\Radio::make('cable_bolt_connection')
                                                    ->label('Koneksi Kabel/Baut')
                                                    ->options([
                                                        'normal' => 'Normal',
                                                        'abnormal' => 'Tidak Normal',
                                                    ])
                                                    ->inline()
                                                    ->inlineLabel(false)
                                                    ->columnSpan(2),
                                                Forms\Components\Radio::make('cable_condition')
                                                    ->label('Koneksi Kabel')
                                                    ->options([
                                                        'normal' => 'Normal',
                                                        'abnormal' => 'Tidak Normal',
                                                    ])
                                                    ->inline()
                                                    ->inlineLabel(false)
                                                    ->columnSpan(2),
                                                Forms\Components\Radio::make('connection_neatness')
                                                    ->label('Kerapian Koneksi')
                                                    ->options([
                                                        'normal' => 'Normal',
                                                        'abnormal' => 'Tidak Normal',
                                                    ])
                                                    ->inline()
                                                    ->inlineLabel(false)
                                                    ->columnSpan(2),
                                                Forms\Components\TextInput::make('humidity_inside_box')
                                                    ->numeric()
                                                    ->label('Kelembapan Dalam Box')
                                                    ->columnSpan(2),
                                                Forms\Components\TextInput::make('temperature_inside_box')
                                                    ->numeric()
                                                    ->label('Suhu Dalam Box')
                                                    ->columnSpan(2),
                                            ])
                                    ])
                            ]),
                        Tab::make('Panel')
                            ->schema([
                                Section::make('Panel')
                                    ->headerActions([
                                        Action::make('panel_waiting_approval_status')
                                            ->label('Belum Approve')
                                            ->color('danger')
                                            ->size(ActionSize::Large)
                                            ->badge()
                                            ->disabled(true)
                                            ->visible(function (Model $record) {
                                                return $record->maintenancePanel->status == 'waiting_approval';
                                            }),
                                        Action::make('panel_approved_status')
                                            ->label('Approve')
                                            ->color('success')
                                            ->size(ActionSize::Large)
                                            ->badge()
                                            ->disabled(true)
                                            ->visible(function (Model $record) {
                                                return $record->maintenancePanel->status == 'approved';
                                            }),
                                        Action::make('panel_approve')
                                            ->label('Approve')
                                            ->color('success')
                                            ->visible(function (Model $record) {
                                                return $record->maintenancePanel->status == 'waiting_approval';
                                            })
                                            ->action(fn(Model $record) => $record->maintenancePanel->update(['status' => 'approved', 'approved_by' => auth()->user()->id]))
                                            ->requiresConfirmation(),
                                    ])
                                    ->schema([
                                        Fieldset::make('Panel')
                                            ->relationship('maintenancePanel')
                                            ->schema([
                                                Forms\Components\Radio::make('cable_bolt_connection')
                                                    ->label('Koneksi Kabel/Baut')
                                                    ->options([
                                                        'normal' => 'Normal',
                                                        'abnormal' => 'Tidak Normal',
                                                    ])
                                                    ->inline()
                                                    ->inlineLabel(false)
                                                    ->columnSpan(2),
                                                Forms\Components\Radio::make('cable_condition')
                                                    ->label('Koneksi Kabel')
                                                    ->options([
                                                        'normal' => 'Normal',
                                                        'abnormal' => 'Tidak Normal',
                                                    ])
                                                    ->inline()
                                                    ->inlineLabel(false)
                                                    ->columnSpan(2),
                                                Forms\Components\Radio::make('connection_neatness')
                                                    ->label('Kerapian Koneksi')
                                                    ->options([
                                                        'normal' => 'Normal',
                                                        'abnormal' => 'Tidak Normal',
                                                    ])
                                                    ->inline()
                                                    ->inlineLabel(false)
                                                    ->columnSpan(2),
                                                Forms\Components\TextInput::make('humidity_inside_panel')
                                                    ->numeric()
                                                    ->label('Kelembapan Dalam Panel')
                                                    ->columnSpan(2),
                                                Forms\Components\TextInput::make('temperature_inside_panel')
                                                    ->numeric()
                                                    ->label('Suhu Dalam Panel')
                                                    ->columnSpan(2),

                                            ])
                                    ])
                            ]),
                        Tab::make('Fungsi Panel')
                            ->schema([
                                Section::make('Fungsi Panel')
                                    ->headerActions([
                                        Action::make('function_panel_waiting_approval_status')
                                            ->label('Belum Approve')
                                            ->color('danger')
                                            ->size(ActionSize::Large)
                                            ->badge()
                                            ->disabled(true)
                                            ->visible(function (Model $record) {
                                                return $record->maintenancePanelFunction->status == 'waiting_approval';
                                            }),
                                        Action::make('function_panel_approved_status')
                                            ->label('Approve')
                                            ->color('success')
                                            ->size(ActionSize::Large)
                                            ->badge()
                                            ->disabled(true)
                                            ->visible(function (Model $record) {
                                                return $record->maintenancePanelFunction->status == 'approved';
                                            }),
                                        Action::make('function_panel_approve')
                                            ->label('Approve')
                                            ->color('success')
                                            ->visible(function (Model $record) {
                                                return $record->maintenancePanelFunction->status == 'waiting_approval';
                                            })
                                            ->action(fn(Model $record) => $record->maintenancePanelFunction->update(['status' => 'approved', 'approved_by' => auth()->user()->id]))
                                            ->requiresConfirmation(),
                                    ])
                                    ->schema([
                                        Fieldset::make('Fungsi Panel')
                                            ->relationship('maintenancePanelFunction')
                                            ->schema([
                                                Forms\Components\Radio::make('rst_indicator')
                                                    ->label('Indikator R.S.T')
                                                    ->options([
                                                        'functional' => 'Fungsi',
                                                        'not_functional' => 'Tidak Fungsi',
                                                    ])
                                                    ->inline()
                                                    ->inlineLabel(false),
                                                Forms\Components\Radio::make('pump_on_indicator')
                                                    ->label('Indikator Pump On')
                                                    ->options([
                                                        'functional' => 'Fungsi',
                                                        'not_functional' => 'Tidak Fungsi',
                                                    ])
                                                    ->inline()
                                                    ->inlineLabel(false),
                                                Forms\Components\Radio::make('cable_bolt_connection')
                                                    ->label('Koneksi Kabel Baut')
                                                    ->options([
                                                        'functional' => 'Fungsi',
                                                        'not_functional' => 'Tidak Fungsi',
                                                    ])
                                                    ->inline()
                                                    ->inlineLabel(false),
                                                Forms\Components\Radio::make('vsd_standby_indicator')
                                                    ->label('Indikator VSD Stand By')
                                                    ->options([
                                                        'functional' => 'Fungsi',
                                                        'not_functional' => 'Tidak Fungsi',
                                                    ])
                                                    ->inline()
                                                    ->inlineLabel(false),
                                                Forms\Components\Radio::make('drive_monitor')
                                                    ->label('Monitor Drive')
                                                    ->options([
                                                        'functional' => 'Fungsi',
                                                        'not_functional' => 'Tidak Fungsi',
                                                    ])
                                                    ->inline()
                                                    ->inlineLabel(false),
                                                Forms\Components\Radio::make('sensor_monitor')
                                                    ->label('Monitor Sensor')
                                                    ->options([
                                                        'functional' => 'Fungsi',
                                                        'not_functional' => 'Tidak Fungsi',
                                                    ])
                                                    ->inline()
                                                    ->inlineLabel(false),
                                                Forms\Components\Radio::make('power_meter_monitor')
                                                    ->label('Monitor Power Meter')
                                                    ->options([
                                                        'functional' => 'Fungsi',
                                                        'not_functional' => 'Tidak Fungsi',
                                                    ])
                                                    ->inline()
                                                    ->inlineLabel(false),
                                                Forms\Components\Radio::make('moa_selector')
                                                    ->label('Selektor MOA')
                                                    ->options([
                                                        'functional' => 'Fungsi',
                                                        'not_functional' => 'Tidak Fungsi',
                                                    ])
                                                    ->inline()
                                                    ->inlineLabel(false),
                                                Forms\Components\Radio::make('start_button')
                                                    ->label('Tombol Start')
                                                    ->options([
                                                        'functional' => 'Fungsi',
                                                        'not_functional' => 'Tidak Fungsi',
                                                    ])
                                                    ->inline()
                                                    ->inlineLabel(false),
                                                Forms\Components\Radio::make('stop_button')
                                                    ->label('Tombol Stop')
                                                    ->options([
                                                        'functional' => 'Fungsi',
                                                        'not_functional' => 'Tidak Fungsi',
                                                    ])
                                                    ->inline()
                                                    ->inlineLabel(false),
                                                Forms\Components\Radio::make('reset_button')
                                                    ->label('Tombol Reset')
                                                    ->options([
                                                        'functional' => 'Fungsi',
                                                        'not_functional' => 'Tidak Fungsi',
                                                    ])
                                                    ->inline()
                                                    ->inlineLabel(false),
                                                Forms\Components\Radio::make('emergency_button')
                                                    ->label('Tombol Emergency')
                                                    ->options([
                                                        'functional' => 'Fungsi',
                                                        'not_functional' => 'Tidak Fungsi',
                                                    ])
                                                    ->inline()
                                                    ->inlineLabel(false),
                                                Forms\Components\Radio::make('exhaust_fan')
                                                    ->label('Kipas Exhaust')
                                                    ->options([
                                                        'functional' => 'Fungsi',
                                                        'not_functional' => 'Tidak Fungsi',
                                                    ])
                                                    ->inline()
                                                    ->inlineLabel(false),
                                            ])
                                    ])
                            ]),
                        Tab::make('Elektrikal Mekanikal')
                            ->schema([
                                Section::make('Elektrikal Mekanikal')
                                    ->headerActions([
                                        Action::make('electro_mechanicals_waiting_approval_status')
                                            ->label('Belum Approve')
                                            ->color('danger')
                                            ->size(ActionSize::Large)
                                            ->badge()
                                            ->disabled(true)
                                            ->visible(function (Model $record) {
                                                return $record->maintenanceElectroMechanical->status == 'waiting_approval';
                                            }),
                                        Action::make('electro_mechanicals_approved_status')
                                            ->label('Approve')
                                            ->color('success')
                                            ->size(ActionSize::Large)
                                            ->badge()
                                            ->disabled(true)
                                            ->visible(function (Model $record) {
                                                return $record->maintenanceElectroMechanical->status == 'approved';
                                            }),
                                        Action::make('electro_mechanicals_approve')
                                            ->label('Approve')
                                            ->color('success')
                                            ->visible(function (Model $record) {
                                                return $record->maintenanceElectroMechanical->status == 'waiting_approval';
                                            })
                                            ->action(fn(Model $record) => $record->maintenanceElectroMechanical->update(['status' => 'approved', 'approved_by' => auth()->user()->id]))
                                            ->requiresConfirmation(),
                                    ])
                                    ->schema([
                                        Fieldset::make('Elektrikal Mekanikal')
                                            ->relationship('maintenanceElectroMechanical')
                                            ->schema([
                                                Fieldset::make('KW')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('40_hz_kw')
                                                            ->numeric()
                                                            ->label('40 HZ'),
                                                        Forms\Components\FileUpload::make('40_hz_kw_image_path')
                                                            ->label('40 HZ Dokumentasi')
                                                            ->directory('maintenance/electro-mechanical')
                                                            ->image()
                                                            ->openable()
                                                            ->downloadable(),
                                                        Forms\Components\TextInput::make('45_hz_kw')
                                                            ->numeric()
                                                            ->label('45 HZ'),
                                                        Forms\Components\FileUpload::make('45_hz_kw_image_path')
                                                            ->label('45 HZ Dokumentasi')
                                                            ->directory('maintenance/electro-mechanical')
                                                            ->image()
                                                            ->openable()
                                                            ->downloadable(),
                                                        Forms\Components\TextInput::make('50_hz_kw')
                                                            ->numeric()
                                                            ->label('50 HZ'),
                                                        Forms\Components\FileUpload::make('50_hz_kw_image_path')
                                                            ->label('50 HZ Dokumentasi')
                                                            ->directory('maintenance/electro-mechanical')
                                                            ->image()
                                                            ->openable()
                                                            ->downloadable(),
                                                    ]),
                                                Fieldset::make('Amper')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('40_hz_amper')
                                                            ->numeric()
                                                            ->label('40 HZ'),
                                                        Forms\Components\FileUpload::make('40_hz_amper_image_path')
                                                            ->label('40 HZ Dokumentasi')
                                                            ->directory('maintenance/electro-mechanical')
                                                            ->image()
                                                            ->openable()
                                                            ->downloadable(),
                                                        Forms\Components\TextInput::make('45_hz_amper')
                                                            ->numeric()
                                                            ->label('45 HZ'),
                                                        Forms\Components\FileUpload::make('45_hz_amper_image_path')
                                                            ->label('45 HZ Dokumentasi')
                                                            ->directory('maintenance/electro-mechanical')
                                                            ->image()
                                                            ->openable()
                                                            ->downloadable(),
                                                        Forms\Components\TextInput::make('50_hz_amper')
                                                            ->numeric()
                                                            ->label('50 HZ'),
                                                        Forms\Components\FileUpload::make('50_hz_amper_image_path')
                                                            ->label('50 HZ Dokumentasi')
                                                            ->directory('maintenance/electro-mechanical')
                                                            ->image()
                                                            ->openable()
                                                            ->downloadable(),
                                                    ]),
                                                Fieldset::make('RPM')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('40_hz_rpm')
                                                            ->numeric()
                                                            ->label('40 HZ'),
                                                        Forms\Components\FileUpload::make('40_hz_rpm_image_path')
                                                            ->label('40 HZ Dokumentasi')
                                                            ->directory('maintenance/electro-mechanical')
                                                            ->image()
                                                            ->openable()
                                                            ->downloadable(),
                                                        Forms\Components\TextInput::make('45_hz_rpm')
                                                            ->numeric()
                                                            ->label('45 HZ'),
                                                        Forms\Components\FileUpload::make('45_hz_rpm_image_path')
                                                            ->label('45 HZ Dokumentasi')
                                                            ->directory('maintenance/electro-mechanical')
                                                            ->image()
                                                            ->openable()
                                                            ->downloadable(),
                                                        Forms\Components\TextInput::make('50_hz_rpm')
                                                            ->numeric()
                                                            ->label('50 HZ'),
                                                        Forms\Components\FileUpload::make('50_hz_rpm_image_path')
                                                            ->label('50 HZ Dokumentasi')
                                                            ->directory('maintenance/electro-mechanical')
                                                            ->image()
                                                            ->openable()
                                                            ->downloadable(),
                                                    ]),
                                                Fieldset::make('Torsi')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('40_hz_torsi')
                                                            ->numeric()
                                                            ->label('40 HZ'),
                                                        Forms\Components\FileUpload::make('40_hz_torsi_image_path')
                                                            ->label('40 HZ Dokumentasi')
                                                            ->directory('maintenance/electro-mechanical')
                                                            ->image()
                                                            ->openable()
                                                            ->downloadable(),
                                                        Forms\Components\TextInput::make('45_hz_torsi')
                                                            ->numeric()
                                                            ->label('45 HZ'),
                                                        Forms\Components\FileUpload::make('45_hz_torsi_image_path')
                                                            ->label('45 HZ Dokumentasi')
                                                            ->directory('maintenance/electro-mechanical')
                                                            ->image()
                                                            ->openable()
                                                            ->downloadable(),
                                                        Forms\Components\TextInput::make('50_hz_torsi')
                                                            ->numeric()
                                                            ->label('50 HZ'),
                                                        Forms\Components\FileUpload::make('50_hz_torsi_image_path')
                                                            ->label('50 HZ Dokumentasi')
                                                            ->directory('maintenance/electro-mechanical')
                                                            ->image()
                                                            ->openable()
                                                            ->downloadable(),
                                                    ]),
                                                Fieldset::make('Suhu Winding')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('40_hz_winding_temperature')
                                                            ->numeric()
                                                            ->label('40 HZ'),
                                                        Forms\Components\FileUpload::make('40_hz_winding_temperature_image_path')
                                                            ->label('40 HZ Dokumentasi')
                                                            ->directory('maintenance/electro-mechanical')
                                                            ->image()
                                                            ->openable()
                                                            ->downloadable(),
                                                        Forms\Components\TextInput::make('45_hz_winding_temperature')
                                                            ->numeric()
                                                            ->label('45 HZ'),
                                                        Forms\Components\FileUpload::make('45_hz_winding_temperature_image_path')
                                                            ->label('45 HZ Dokumentasi')
                                                            ->directory('maintenance/electro-mechanical')
                                                            ->image()
                                                            ->openable()
                                                            ->downloadable(),
                                                        Forms\Components\TextInput::make('50_hz_winding_temperature')
                                                            ->numeric()
                                                            ->label('50 HZ'),
                                                        Forms\Components\FileUpload::make('50_hz_winding_temperature_image_path')
                                                            ->label('50 HZ Dokumentasi')
                                                            ->directory('maintenance/electro-mechanical')
                                                            ->image()
                                                            ->openable()
                                                            ->downloadable(),
                                                    ]),
                                                Fieldset::make('Pump humidity')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('40_hz_pump_humidity')
                                                            ->numeric()
                                                            ->label('40 HZ'),
                                                        Forms\Components\FileUpload::make('40_hz_pump_humidity_image_path')
                                                            ->label('40 HZ Dokumentasi')
                                                            ->directory('maintenance/electro-mechanical')
                                                            ->image()
                                                            ->openable()
                                                            ->downloadable(),
                                                        Forms\Components\TextInput::make('45_hz_pump_humidity')
                                                            ->numeric()
                                                            ->label('45 HZ'),
                                                        Forms\Components\FileUpload::make('45_hz_pump_humidity_image_path')
                                                            ->label('45 HZ Dokumentasi')
                                                            ->directory('maintenance/electro-mechanical')
                                                            ->image()
                                                            ->openable()
                                                            ->downloadable(),
                                                        Forms\Components\TextInput::make('50_hz_pump_humidity')
                                                            ->numeric()
                                                            ->label('50 HZ'),
                                                        Forms\Components\FileUpload::make('50_hz_pump_humidity_image_path')
                                                            ->label('50 HZ Dokumentasi')
                                                            ->directory('maintenance/electro-mechanical')
                                                            ->image()
                                                            ->openable()
                                                            ->downloadable(),
                                                    ]),
                                                Fieldset::make('Suhu Bearing')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('40_hz_bearing_temperature')
                                                            ->numeric()
                                                            ->label('40 HZ'),
                                                        Forms\Components\FileUpload::make('40_hz_bearing_temperature_image_path')
                                                            ->label('40 HZ Dokumentasi')
                                                            ->directory('maintenance/electro-mechanical')
                                                            ->image()
                                                            ->openable()
                                                            ->downloadable(),
                                                        Forms\Components\TextInput::make('45_hz_bearing_temperature')
                                                            ->numeric()
                                                            ->label('45 HZ'),
                                                        Forms\Components\FileUpload::make('45_hz_bearing_temperature_image_path')
                                                            ->label('45 HZ Dokumentasi')
                                                            ->directory('maintenance/electro-mechanical')
                                                            ->image()
                                                            ->openable()
                                                            ->downloadable(),
                                                        Forms\Components\TextInput::make('50_hz_bearing_temperature')
                                                            ->numeric()
                                                            ->label('50 HZ'),
                                                        Forms\Components\FileUpload::make('50_hz_bearing_temperature_image_path')
                                                            ->label('50 HZ Dokumentasi')
                                                            ->directory('maintenance/electro-mechanical')
                                                            ->image()
                                                            ->openable()
                                                            ->downloadable(),
                                                    ]),
                                                Fieldset::make('Suhu Kabel 1')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('40_hz_cable_1_temperature')
                                                            ->numeric()
                                                            ->label('40 HZ'),
                                                        Forms\Components\FileUpload::make('40_hz_cable_1_temperature_image_path')
                                                            ->label('40 HZ Dokumentasi')
                                                            ->directory('maintenance/electro-mechanical')
                                                            ->image()
                                                            ->openable()
                                                            ->downloadable(),
                                                        Forms\Components\TextInput::make('45_hz_cable_1_temperature')
                                                            ->numeric()
                                                            ->label('45 HZ'),
                                                        Forms\Components\FileUpload::make('45_hz_cable_1_temperature_image_path')
                                                            ->label('45 HZ Dokumentasi')
                                                            ->directory('maintenance/electro-mechanical')
                                                            ->image()
                                                            ->openable()
                                                            ->downloadable(),
                                                        Forms\Components\TextInput::make('50_hz_cable_1_temperature')
                                                            ->numeric()
                                                            ->label('50 HZ'),
                                                        Forms\Components\FileUpload::make('50_hz_cable_1_temperature_image_path')
                                                            ->label('50 HZ Dokumentasi')
                                                            ->directory('maintenance/electro-mechanical')
                                                            ->image()
                                                            ->openable()
                                                            ->downloadable(),
                                                    ]),
                                                Fieldset::make('Suhu Kabel 2')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('40_hz_cable_2_temperature')
                                                            ->numeric()
                                                            ->label('40 HZ'),
                                                        Forms\Components\FileUpload::make('40_hz_cable_2_temperature_image_path')
                                                            ->label('40 HZ Dokumentasi')
                                                            ->directory('maintenance/electro-mechanical')
                                                            ->image()
                                                            ->openable()
                                                            ->downloadable(),
                                                        Forms\Components\TextInput::make('45_hz_cable_2_temperature')
                                                            ->numeric()
                                                            ->label('45 HZ'),
                                                        Forms\Components\FileUpload::make('45_hz_cable_2_temperature_image_path')
                                                            ->label('45 HZ Dokumentasi')
                                                            ->directory('maintenance/electro-mechanical')
                                                            ->image()
                                                            ->openable()
                                                            ->downloadable(),
                                                        Forms\Components\TextInput::make('50_hz_cable_2_temperature')
                                                            ->numeric()
                                                            ->label('50 HZ'),
                                                        Forms\Components\FileUpload::make('50_hz_cable_2_temperature_image_path')
                                                            ->label('50 HZ Dokumentasi')
                                                            ->directory('maintenance/electro-mechanical')
                                                            ->image()
                                                            ->openable()
                                                            ->downloadable(),
                                                    ]),
                                                Fieldset::make('Suhu Kabel 3')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('40_hz_cable_3_temperature')
                                                            ->numeric()
                                                            ->label('40 HZ'),
                                                        Forms\Components\FileUpload::make('40_hz_cable_3_temperature_image_path')
                                                            ->label('40 HZ Dokumentasi')
                                                            ->directory('maintenance/electro-mechanical')
                                                            ->image()
                                                            ->openable()
                                                            ->downloadable(),
                                                        Forms\Components\TextInput::make('45_hz_cable_3_temperature')
                                                            ->numeric()
                                                            ->label('45 HZ'),
                                                        Forms\Components\FileUpload::make('45_hz_cable_3_temperature_image_path')
                                                            ->label('45 HZ Dokumentasi')
                                                            ->directory('maintenance/electro-mechanical')
                                                            ->image()
                                                            ->openable()
                                                            ->downloadable(),
                                                        Forms\Components\TextInput::make('50_hz_cable_3_temperature')
                                                            ->numeric()
                                                            ->label('50 HZ'),
                                                        Forms\Components\FileUpload::make('50_hz_cable_3_temperature_image_path')
                                                            ->label('50 HZ Dokumentasi')
                                                            ->directory('maintenance/electro-mechanical')
                                                            ->image()
                                                            ->openable()
                                                            ->downloadable(),
                                                    ]),
                                                Fieldset::make('Vibrasi')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('40_hz_vibration')
                                                            ->numeric()
                                                            ->label('40 HZ'),
                                                        Forms\Components\FileUpload::make('40_hz_vibration_image_path')
                                                            ->label('40 HZ Dokumentasi')
                                                            ->directory('maintenance/electro-mechanical')
                                                            ->image()
                                                            ->openable()
                                                            ->downloadable(),
                                                        Forms\Components\TextInput::make('45_hz_vibration')
                                                            ->numeric()
                                                            ->label('45 HZ'),
                                                        Forms\Components\FileUpload::make('45_hz_vibration_image_path')
                                                            ->label('45 HZ Dokumentasi')
                                                            ->directory('maintenance/electro-mechanical')
                                                            ->image()
                                                            ->openable()
                                                            ->downloadable(),
                                                        Forms\Components\TextInput::make('50_hz_vibration')
                                                            ->numeric()
                                                            ->label('50 HZ'),
                                                        Forms\Components\FileUpload::make('50_hz_vibration_image_path')
                                                            ->label('50 HZ Dokumentasi')
                                                            ->directory('maintenance/electro-mechanical')
                                                            ->image()
                                                            ->openable()
                                                            ->downloadable(),
                                                    ]),
                                                Fieldset::make('Suara (db)')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('40_hz_sound')
                                                            ->numeric()
                                                            ->label('40 HZ'),
                                                        Forms\Components\FileUpload::make('40_hz_sound_image_path')
                                                            ->label('40 HZ Dokumentasi')
                                                            ->directory('maintenance/electro-mechanical')
                                                            ->image()
                                                            ->openable()
                                                            ->downloadable(),
                                                        Forms\Components\TextInput::make('45_hz_sound')
                                                            ->numeric()
                                                            ->label('45 HZ'),
                                                        Forms\Components\FileUpload::make('45_hz_sound_image_path')
                                                            ->label('45 HZ Dokumentasi')
                                                            ->directory('maintenance/electro-mechanical')
                                                            ->image()
                                                            ->openable()
                                                            ->downloadable(),
                                                        Forms\Components\TextInput::make('50_hz_sound')
                                                            ->numeric()
                                                            ->label('50 HZ'),
                                                        Forms\Components\FileUpload::make('50_hz_sound_image_path')
                                                            ->label('50 HZ Dokumentasi')
                                                            ->directory('maintenance/electro-mechanical')
                                                            ->image()
                                                            ->openable()
                                                            ->downloadable(),
                                                    ]),
                                                Fieldset::make('Suhu Terminal')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('40_hz_terminal_temperature')
                                                            ->numeric()
                                                            ->label('40 HZ'),
                                                        Forms\Components\FileUpload::make('40_hz_terminal_temperature_image_path')
                                                            ->label('40 HZ Dokumentasi')
                                                            ->directory('maintenance/electro-mechanical')
                                                            ->image()
                                                            ->openable()
                                                            ->downloadable(),
                                                        Forms\Components\TextInput::make('45_hz_terminal_temperature')
                                                            ->numeric()
                                                            ->label('45 HZ'),
                                                        Forms\Components\FileUpload::make('45_hz_terminal_temperature_image_path')
                                                            ->label('45 HZ Dokumentasi')
                                                            ->directory('maintenance/electro-mechanical')
                                                            ->image()
                                                            ->openable()
                                                            ->downloadable(),
                                                        Forms\Components\TextInput::make('50_hz_terminal_temperature')
                                                            ->numeric()
                                                            ->label('50 HZ'),
                                                        Forms\Components\FileUpload::make('50_hz_terminal_temperature_image_path')
                                                            ->label('50 HZ Dokumentasi')
                                                            ->directory('maintenance/electro-mechanical')
                                                            ->image()
                                                            ->openable()
                                                            ->downloadable(),
                                                    ]),
                                            ])
                                    ])
                            ]),
                        Tab::make('Pipa Kolom & Output Air')
                            ->schema([
                                Section::make('Pipa Kolom & Output Air')
                                    ->headerActions([
                                        Action::make('column_pipe_water_output_waiting_approval_status')
                                            ->label('Belum Approve')
                                            ->color('danger')
                                            ->size(ActionSize::Large)
                                            ->badge()
                                            ->disabled(true)
                                            ->visible(function (Model $record) {
                                                return $record->maintenanceColumnPipeWaterOutput->status == 'waiting_approval';
                                            }),
                                        Action::make('column_pipe_water_output_approved_status')
                                            ->label('Approve')
                                            ->color('success')
                                            ->size(ActionSize::Large)
                                            ->badge()
                                            ->disabled(true)
                                            ->visible(function (Model $record) {
                                                return $record->maintenanceColumnPipeWaterOutput->status == 'approved';
                                            }),
                                        Action::make('column_pipe_water_output_approve')
                                            ->label('Approve')
                                            ->color('success')
                                            ->visible(function (Model $record) {
                                                return $record->maintenanceColumnPipeWaterOutput->status == 'waiting_approval';
                                            })
                                            ->action(fn(Model $record) => $record->maintenanceColumnPipeWaterOutput->update(['status' => 'approved', 'approved_by' => auth()->user()->id]))
                                            ->requiresConfirmation(),
                                    ])
                                    ->schema([
                                        Fieldset::make('Pipa Kolom & Output Air')
                                            ->relationship('maintenanceColumnPipeWaterOutput')
                                            ->schema([
                                                Forms\Components\TextInput::make('water_ph_value_condition')
                                                    ->label('Kondisi Nilai PH Air')
                                                    ->readOnly(),

                                                Forms\Components\FileUpload::make('water_ph_value_condition_image_path')
                                                    ->label('Kondisi Nilai PH Air Dokumentasi')
                                                    ->directory('maintenance/pipe-column-water-output')
                                                    ->image()
                                                    ->openable()
                                                    ->downloadable(),
                                                Forms\Components\Radio::make('column_pipe_condition')
                                                    ->label('Kondisi Kolom Pipa')
                                                    ->options([
                                                        'normal' => 'Normal',
                                                        'abnormal' => 'Tidak Normal',
                                                    ])
                                                    ->inline()
                                                    ->inlineLabel(false),
                                                Forms\Components\Radio::make('output_pipe_condition')
                                                    ->label('Kondisi Pipa Output')
                                                    ->options([
                                                        'normal' => 'Normal',
                                                        'abnormal' => 'Tidak Normal',
                                                    ])
                                                    ->inline()
                                                    ->inlineLabel(false),
                                                Forms\Components\Radio::make('valve_condition')
                                                    ->label('Kondisi Valve (Ops)')
                                                    ->options([
                                                        'normal' => 'Normal',
                                                        'abnormal' => 'Tidak Normal',
                                                    ])
                                                    ->inline()
                                                    ->inlineLabel(false),
                                                Forms\Components\Radio::make('flap_condition')
                                                    ->label('Kondisi Flap (Ops)')
                                                    ->options([
                                                        'normal' => 'Normal',
                                                        'abnormal' => 'Tidak Normal',
                                                    ])
                                                    ->inline()
                                                    ->inlineLabel(false),
                                                Forms\Components\Radio::make('water_output_condition')
                                                    ->label('Volume Output Air')
                                                    ->options([
                                                        'normal' => 'Normal',
                                                        'abnormal' => 'Tidak Normal',
                                                    ])
                                                    ->inline()
                                                    ->inlineLabel(false),
                                            ])
                                    ])
                            ]),
                        Tab::make('Sensor Test')
                            ->schema([
                                Section::make('Sensor Test')
                                    ->headerActions([
                                        Action::make('sensor_test_waiting_approval_status')
                                            ->label('Belum Approve')
                                            ->color('danger')
                                            ->size(ActionSize::Large)
                                            ->badge()
                                            ->disabled(true)
                                            ->visible(function (Model $record) {
                                                return $record->maintenanceSensorTest->status == 'waiting_approval';
                                            }),
                                        Action::make('sensor_test_approved_status')
                                            ->label('Approve')
                                            ->color('success')
                                            ->size(ActionSize::Large)
                                            ->badge()
                                            ->disabled(true)
                                            ->visible(function (Model $record) {
                                                return $record->maintenanceSensorTest->status == 'approved';
                                            }),
                                        Action::make('sensor_test_approve')
                                            ->label('Approve')
                                            ->color('success')
                                            ->visible(function (Model $record) {
                                                return $record->maintenanceSensorTest->status == 'waiting_approval';
                                            })
                                            ->action(fn(Model $record) => $record->maintenanceSensorTest->update(['status' => 'approved', 'approved_by' => auth()->user()->id]))
                                            ->requiresConfirmation(),
                                    ])
                                    ->schema([
                                        Fieldset::make('Sensor Test')
                                            ->relationship('maintenanceSensorTest')
                                            ->schema([

                                                Fieldset::make('Pump Fault')
                                                    ->schema([
                                                        Forms\Components\Radio::make('pump_fault_temperature_sensor')
                                                            ->label('Sensor Suhu')
                                                            ->options([
                                                                'normal' => 'Normal',
                                                                'abnormal' => 'Tidak Normal',
                                                            ])
                                                            ->inline()
                                                            ->inlineLabel(false),
                                                        Forms\Components\Radio::make('pump_fault_wlc_sensor')
                                                            ->label('Sensor WLC')
                                                            ->options([
                                                                'normal' => 'Normal',
                                                                'abnormal' => 'Tidak Normal',
                                                            ])
                                                            ->inline()
                                                            ->inlineLabel(false),
                                                        Forms\Components\Radio::make('pump_fault_voltage_sensor')
                                                            ->label('Sensor Voltase')
                                                            ->options([
                                                                'normal' => 'Normal',
                                                                'abnormal' => 'Tidak Normal',
                                                            ])
                                                            ->inline()
                                                            ->inlineLabel(false),
                                                        Forms\Components\Radio::make('pump_fault_vsd_sensor')
                                                            ->label('Sensor VSD')
                                                            ->options([
                                                                'normal' => 'Normal',
                                                                'abnormal' => 'Tidak Normal',
                                                            ])
                                                            ->inline()
                                                            ->inlineLabel(false),
                                                    ]),
                                                Fieldset::make('Low Water')
                                                    ->schema([
                                                        Forms\Components\Radio::make('low_water_temperature_sensor')
                                                            ->label('Sensor Suhu')
                                                            ->options([
                                                                'normal' => 'Normal',
                                                                'abnormal' => 'Tidak Normal',
                                                            ])
                                                            ->inline()
                                                            ->inlineLabel(false),
                                                        Forms\Components\Radio::make('low_water_wlc_sensor')
                                                            ->label('Sensor WLC')
                                                            ->options([
                                                                'normal' => 'Normal',
                                                                'abnormal' => 'Tidak Normal',
                                                            ])
                                                            ->inline()
                                                            ->inlineLabel(false),
                                                        Forms\Components\Radio::make('low_water_voltage_sensor')
                                                            ->label('Sensor Voltase')
                                                            ->options([
                                                                'normal' => 'Normal',
                                                                'abnormal' => 'Tidak Normal',
                                                            ])
                                                            ->inline()
                                                            ->inlineLabel(false),
                                                        Forms\Components\Radio::make('low_water_vsd_sensor')
                                                            ->label('Sensor VSD')
                                                            ->options([
                                                                'normal' => 'Normal',
                                                                'abnormal' => 'Tidak Normal',
                                                            ])
                                                            ->inline()
                                                            ->inlineLabel(false),
                                                    ]),
                                                Fieldset::make('Voltage Fuult')
                                                    ->schema([
                                                        Forms\Components\Radio::make('voltage_fault_temperature_sensor')
                                                            ->label('Sensor Suhu')
                                                            ->options([
                                                                'normal' => 'Normal',
                                                                'abnormal' => 'Tidak Normal',
                                                            ])
                                                            ->inline()
                                                            ->inlineLabel(false),
                                                        Forms\Components\Radio::make('voltage_fault_wlc_sensor')
                                                            ->label('Sensor WLC')
                                                            ->options([
                                                                'normal' => 'Normal',
                                                                'abnormal' => 'Tidak Normal',
                                                            ])
                                                            ->inline()
                                                            ->inlineLabel(false),
                                                        Forms\Components\Radio::make('voltage_fault_voltage_sensor')
                                                            ->label('Sensor Voltase')
                                                            ->options([
                                                                'normal' => 'Normal',
                                                                'abnormal' => 'Tidak Normal',
                                                            ])
                                                            ->inline()
                                                            ->inlineLabel(false),
                                                        Forms\Components\Radio::make('voltage_fault_vsd_sensor')
                                                            ->label('Sensor VSD')
                                                            ->options([
                                                                'normal' => 'Normal',
                                                                'abnormal' => 'Tidak Normal',
                                                            ])
                                                            ->inline()
                                                            ->inlineLabel(false),
                                                    ]),
                                                Fieldset::make('VSD Vault')
                                                    ->schema([
                                                        Forms\Components\Radio::make('vsd_vault_temperature_sensor')
                                                            ->label('Sensor Suhu')
                                                            ->options([
                                                                'normal' => 'Normal',
                                                                'abnormal' => 'Tidak Normal',
                                                            ])
                                                            ->inline()
                                                            ->inlineLabel(false),
                                                        Forms\Components\Radio::make('vsd_vault_wlc_sensor')
                                                            ->label('Sensor WLC')
                                                            ->options([
                                                                'normal' => 'Normal',
                                                                'abnormal' => 'Tidak Normal',
                                                            ])
                                                            ->inline()
                                                            ->inlineLabel(false),
                                                        Forms\Components\Radio::make('vsd_vault_voltage_sensor')
                                                            ->label('Sensor Voltase')
                                                            ->options([
                                                                'normal' => 'Normal',
                                                                'abnormal' => 'Tidak Normal',
                                                            ])
                                                            ->inline()
                                                            ->inlineLabel(false),
                                                        Forms\Components\Radio::make('vsd_vault_vsd_sensor')
                                                            ->label('Sensor VSD')
                                                            ->options([
                                                                'normal' => 'Normal',
                                                                'abnormal' => 'Tidak Normal',
                                                            ])
                                                            ->inline()
                                                            ->inlineLabel(false),
                                                    ]),
                                                Fieldset::make('Trouble Alarm')
                                                    ->schema([
                                                        Forms\Components\Radio::make('trouble_alarm_temperature_sensor')
                                                            ->label('Sensor Suhu')
                                                            ->options([
                                                                'normal' => 'Normal',
                                                                'abnormal' => 'Tidak Normal',
                                                            ])
                                                            ->inline()
                                                            ->inlineLabel(false),
                                                        Forms\Components\Radio::make('trouble_alarm_wlc_sensor')
                                                            ->label('Sensor WLC')
                                                            ->options([
                                                                'normal' => 'Normal',
                                                                'abnormal' => 'Tidak Normal',
                                                            ])
                                                            ->inline()
                                                            ->inlineLabel(false),
                                                        Forms\Components\Radio::make('trouble_alarm_voltage_sensor')
                                                            ->label('Sensor Voltase')
                                                            ->options([
                                                                'normal' => 'Normal',
                                                                'abnormal' => 'Tidak Normal',
                                                            ])
                                                            ->inline()
                                                            ->inlineLabel(false),
                                                        Forms\Components\Radio::make('trouble_alarm_vsd_sensor')
                                                            ->label('Sensor VSD')
                                                            ->options([
                                                                'normal' => 'Normal',
                                                                'abnormal' => 'Tidak Normal',
                                                            ])
                                                            ->inline()
                                                            ->inlineLabel(false),
                                                    ]),
                                                Fieldset::make('Pump Trip')
                                                    ->schema([
                                                        Forms\Components\Radio::make('pump_trip_temperature_sensor')
                                                            ->label('Sensor Suhu')
                                                            ->options([
                                                                'normal' => 'Normal',
                                                                'abnormal' => 'Tidak Normal',
                                                            ])
                                                            ->inline()
                                                            ->inlineLabel(false),
                                                        Forms\Components\Radio::make('pump_trip_wlc_sensor')
                                                            ->label('Sensor WLC')
                                                            ->options([
                                                                'normal' => 'Normal',
                                                                'abnormal' => 'Tidak Normal',
                                                            ])
                                                            ->inline()
                                                            ->inlineLabel(false),
                                                        Forms\Components\Radio::make('pump_trip_voltage_sensor')
                                                            ->label('Sensor Voltase')
                                                            ->options([
                                                                'normal' => 'Normal',
                                                                'abnormal' => 'Tidak Normal',
                                                            ])
                                                            ->inline()
                                                            ->inlineLabel(false),
                                                        Forms\Components\Radio::make('pump_trip_vsd_sensor')
                                                            ->label('Sensor VSD')
                                                            ->options([
                                                                'normal' => 'Normal',
                                                                'abnormal' => 'Tidak Normal',
                                                            ])
                                                            ->inline()
                                                            ->inlineLabel(false),
                                                    ]),
                                            ])
                                    ])
                            ]),
                        Tab::make('Megger')
                            ->schema([
                                Section::make('Megger')
                                    ->headerActions([
                                        Action::make('megger_waiting_approval_status')
                                            ->label('Belum Approve')
                                            ->color('danger')
                                            ->size(ActionSize::Large)
                                            ->badge()
                                            ->disabled(true)
                                            ->visible(function (Model $record) {
                                                return $record->maintenanceMegger->status == 'waiting_approval';
                                            }),
                                        Action::make('megger_approved_status')
                                            ->label('Approve')
                                            ->color('success')
                                            ->size(ActionSize::Large)
                                            ->badge()
                                            ->disabled(true)
                                            ->visible(function (Model $record) {
                                                return $record->maintenanceMegger->status == 'approved';
                                            }),
                                        Action::make('megger_approve')
                                            ->label('Approve')
                                            ->color('success')
                                            ->visible(function (Model $record) {
                                                return $record->maintenanceMegger->status == 'waiting_approval';
                                            })
                                            ->action(fn(Model $record) => $record->maintenanceMegger->update(['status' => 'approved', 'approved_by' => auth()->user()->id]))
                                            ->requiresConfirmation(),
                                    ])
                                    ->schema([
                                        Fieldset::make('Data Pompa')
                                            ->relationship('maintenanceAssignment')
                                            ->schema([
                                                Group::make()
                                                    ->relationship('user')
                                                    ->columnSpan(2)
                                                    ->schema([
                                                        Forms\Components\TextInput::make('name')
                                                            ->label('Tim Teknisi')
                                                            ->readOnly(),
                                                    ]),
                                                Group::make()
                                                    ->relationship('pump')
                                                    ->columnSpan(2)
                                                    ->schema([
                                                        Forms\Components\TextInput::make('location')
                                                            ->label('Lokasi Pompa')
                                                            ->readOnly(),
                                                        Forms\Components\TextInput::make('serial_number')
                                                            ->label('Nomor Seri Pompa')
                                                            ->numeric()
                                                            ->readOnly(),
                                                        Forms\Components\TextInput::make('unit')
                                                            ->label('No Unit Pompa')
                                                            ->readOnly(),
                                                    ])
                                            ]),
                                        Fieldset::make('Megger')
                                            ->relationship('maintenanceMegger')
                                            ->schema([
                                                Forms\Components\DatePicker::make('date')
                                                    ->label('Tanggal')
                                                    ->format('d/m/Y'),
                                                Forms\Components\TextInput::make('running_hours')
                                                    ->label('Running Hours')
                                                    ->numeric(),

                                            ])

                                    ])
                            ]),
                        Tab::make('Insulasi')
                            ->schema([
                                Section::make('Insulasi')
                                    ->headerActions([
                                        Action::make('insulation_waiting_approval_status')
                                            ->label('Belum Approve')
                                            ->color('danger')
                                            ->size(ActionSize::Large)
                                            ->badge()
                                            ->disabled(true)
                                            ->visible(function (Model $record) {
                                                return $record->maintenanceInsulation->status == 'waiting_approval';
                                            }),
                                        Action::make('insulation_approved_status')
                                            ->label('Approve')
                                            ->color('success')
                                            ->size(ActionSize::Large)
                                            ->badge()
                                            ->disabled(true)
                                            ->visible(function (Model $record) {
                                                return $record->maintenanceInsulation->status == 'approved';
                                            }),
                                        Action::make('insulation_approve')
                                            ->label('Approve')
                                            ->color('success')
                                            ->visible(function (Model $record) {
                                                return $record->maintenanceInsulation->status == 'waiting_approval';
                                            })
                                            ->action(fn(Model $record) => $record->maintenanceInsulation->update(['status' => 'approved', 'approved_by' => auth()->user()->id]))
                                            ->requiresConfirmation(),
                                    ])
                                    ->schema([
                                        Fieldset::make('Insulasi')
                                    ->relationship('maintenanceInsulation')
                                    ->schema([
                                        Forms\Components\TextInput::make('u1_pe')
                                            ->label('U1 - PE'),
                                        Forms\Components\FileUpload::make('u1_pe_image_path')
                                            ->label('Dokumentasi U1 - PE')
                                            ->directory('maintenance/insulation')
                                            ->image()
                                            ->openable()
                                            ->downloadable(),
                                        Forms\Components\TextInput::make('v1_pe')
                                            ->label('V1 - PE'),
                                        Forms\Components\FileUpload::make('v1_pe_image_path')
                                            ->label('Dokumentasi V1 - PE')
                                            ->directory('maintenance/insulation')
                                            ->image()
                                            ->openable()
                                            ->downloadable(),
                                        Forms\Components\TextInput::make('w1_pe')
                                            ->label('W1 - PE'),
                                        Forms\Components\FileUpload::make('w1_pe_image_path')
                                            ->label('Dokumentasi W1 - PE')
                                            ->directory('maintenance/insulation')
                                            ->image()
                                            ->openable()
                                            ->downloadable(),
                                        Forms\Components\TextInput::make('u2_pe')
                                            ->label('U2 - PE'),
                                        Forms\Components\FileUpload::make('u2_pe_image_path')
                                            ->label('Dokumentasi U2 - PE')
                                            ->directory('maintenance/insulation')
                                            ->image()
                                            ->openable()
                                            ->downloadable(),
                                        Forms\Components\TextInput::make('u2_pe')
                                            ->label('U2 - PE'),
                                        Forms\Components\FileUpload::make('u2_pe_image_path')
                                            ->label('Dokumentasi U2 - PE')
                                            ->directory('maintenance/insulation')
                                            ->image()
                                            ->openable()
                                            ->downloadable(),
                                        Forms\Components\TextInput::make('w2_pe')
                                            ->label('W2 - PE'),
                                        Forms\Components\FileUpload::make('w2_pe_image_path')
                                            ->label('Dokumentasi W2 - PE')
                                            ->directory('maintenance/insulation')
                                            ->image()
                                            ->openable()
                                            ->downloadable(),
                                        Forms\Components\TextInput::make('u1_v2')
                                            ->label('U1 - V2'),
                                        Forms\Components\TextInput::make('u1_w2')
                                            ->label('U1 - W2'),
                                        Forms\Components\TextInput::make('v1_u2')
                                            ->label('U1 - U2'),
                                        Forms\Components\TextInput::make('v1_w2')
                                            ->label('V1 - W2'),
                                        Forms\Components\TextInput::make('w1_u2')
                                            ->label('W1 - U2'),
                                        Forms\Components\TextInput::make('w1_v2')
                                            ->label('W1 - V2'),
                                    ])
                                ])
                            ]),
                        Tab::make('Resistensi')
                            ->schema([
                                Section::make('resistensi')
                                    ->headerActions([
                                        Action::make('resistance_waiting_approval_status')
                                            ->label('Belum Approve')
                                            ->color('danger')
                                            ->size(ActionSize::Large)
                                            ->badge()
                                            ->disabled(true)
                                            ->visible(function (Model $record) {
                                                return $record->maintenanceResistance->status == 'waiting_approval';
                                            }),
                                        Action::make('resistance_approved_status')
                                            ->label('Approve')
                                            ->color('success')
                                            ->size(ActionSize::Large)
                                            ->badge()
                                            ->disabled(true)
                                            ->visible(function (Model $record) {
                                                return $record->maintenanceResistance->status == 'approved';
                                            }),
                                        Action::make('resistance_approve')
                                            ->label('Approve')
                                            ->color('success')
                                            ->visible(function (Model $record) {
                                                return $record->maintenanceResistance->status == 'waiting_approval';
                                            })
                                            ->action(fn(Model $record) => $record->maintenanceResistance->update(['status' => 'approved', 'approved_by' => auth()->user()->id]))
                                            ->requiresConfirmation(),
                                    ])
                                    ->schema([
                                        Fieldset::make('Resistensi')
                                    ->relationship('maintenanceResistance')
                                    ->schema([
                                        Forms\Components\TextInput::make('pe_pe')
                                            ->label('PE - PE'),
                                        Forms\Components\FileUpload::make('pe_pe_image_path')
                                            ->label('Dokumentasi PE - PE')
                                            ->directory('maintenance/resistance')
                                            ->image()
                                            ->openable()
                                            ->downloadable(),
                                        Forms\Components\TextInput::make('u1_u2')
                                            ->label('U1 - U2'),
                                        Forms\Components\FileUpload::make('u1_u2_image_path')
                                            ->label('Dokumentasi U1 - U2')
                                            ->directory('maintenance/resistance')
                                            ->image()
                                            ->openable()
                                            ->downloadable(),
                                        Forms\Components\TextInput::make('v1_v2')
                                            ->label('V1 - V2'),
                                        Forms\Components\FileUpload::make('v1_v2_image_path')
                                            ->label('Dokumentasi V1 - V2')
                                            ->directory('maintenance/resistance')
                                            ->image()
                                            ->openable()
                                            ->downloadable(),
                                        Forms\Components\TextInput::make('w1_w2')
                                            ->label('W1 - W2'),
                                        Forms\Components\FileUpload::make('w1_w2_image_path')
                                            ->label('Dokumentasi W1 - W2')
                                            ->directory('maintenance/resistance')
                                            ->image()
                                            ->openable()
                                            ->downloadable(),
                                    ])
                                ])
                            ]),
                        Tab::make('Kondisi Pompa')
                            ->schema([
                                Section::make('Kondisi Pompa')
                                    ->headerActions([
                                        Action::make('pump_condition_waiting_approval_status')
                                            ->label('Belum Approve')
                                            ->color('danger')
                                            ->size(ActionSize::Large)
                                            ->badge()
                                            ->disabled(true)
                                            ->visible(function (Model $record) {
                                                return $record->maintenancePumpCondition->status == 'waiting_approval';
                                            }),
                                        Action::make('pump_condition_approved_status')
                                            ->label('Approve')
                                            ->color('success')
                                            ->size(ActionSize::Large)
                                            ->badge()
                                            ->disabled(true)
                                            ->visible(function (Model $record) {
                                                return $record->maintenancePumpCondition->status == 'approved';
                                            }),
                                        Action::make('pump_condition_approve')
                                            ->label('Approve')
                                            ->color('success')
                                            ->visible(function (Model $record) {
                                                return $record->maintenancePumpCondition->status == 'waiting_approval';
                                            })
                                            ->action(fn(Model $record) => $record->maintenancePumpCondition->update(['status' => 'approved', 'approved_by' => auth()->user()->id]))
                                            ->requiresConfirmation(),
                                    ])
                                    ->schema([
                                        Fieldset::make('Kondisi Pompa')
                                    ->relationship('maintenancePumpCondition')
                                    ->schema([
                                        Forms\Components\Radio::make('pump_body')
                                            ->label('Bodi Pompa')
                                            ->options([
                                                'ok' => 'Ok',
                                                'bad' => 'Tidak Ok',
                                            ])
                                            ->inline()
                                            ->inlineLabel(false)
                                            ->columnSpan(2),
                                        Forms\Components\TextInput::make('pump_body_note')
                                            ->label('Catatan Bodi Pompa')
                                            ->columnSpan(2),
                                        Forms\Components\Radio::make('wearing_ring')
                                            ->label('Wearing Ring')
                                            ->options([
                                                'ok' => 'Ok',
                                                'bad' => 'Tidak Ok',
                                            ])
                                            ->inline()
                                            ->inlineLabel(false)
                                            ->columnSpan(2),
                                        Forms\Components\TextInput::make('wearing_ring_note')
                                            ->label('Catatan Wearing Ring')
                                            ->columnSpan(2),
                                        Forms\Components\Radio::make('pump_bolt')
                                            ->label('Baut Pompa')
                                            ->options([
                                                'ok' => 'Ok',
                                                'bad' => 'Tidak Ok',
                                            ])
                                            ->inline()
                                            ->inlineLabel(false)
                                            ->columnSpan(2),
                                        Forms\Components\TextInput::make('pump_bolt_note')
                                            ->label('Catatan Baut Pompa')
                                            ->columnSpan(2),
                                        Forms\Components\Radio::make('column_pipe_bolt')
                                            ->label('Baut Column Pipa')
                                            ->options([
                                                'ok' => 'Ok',
                                                'bad' => 'Tidak Ok',
                                            ])
                                            ->inline()
                                            ->inlineLabel(false)
                                            ->columnSpan(2),
                                        Forms\Components\TextInput::make('column_pipe_bolt_note')
                                            ->label('Catatan Baut Column Pipa')
                                            ->columnSpan(2),
                                        Forms\Components\Radio::make('impeller')
                                            ->label('Impeller')
                                            ->options([
                                                'ok' => 'Ok',
                                                'bad' => 'Tidak Ok',
                                            ])
                                            ->inline()
                                            ->inlineLabel(false)
                                            ->columnSpan(2),
                                        Forms\Components\TextInput::make('impeller_note')
                                            ->label('Catatan Impeller')
                                            ->columnSpan(2),
                                        Forms\Components\Radio::make('cable')
                                            ->label('Kabel')
                                            ->options([
                                                'ok' => 'Ok',
                                                'bad' => 'Tidak Ok',
                                            ])
                                            ->inline()
                                            ->inlineLabel(false)
                                            ->columnSpan(2),
                                        Forms\Components\TextInput::make('cable_note')
                                            ->label('Catatan Kabel')
                                            ->columnSpan(2),
                                        Forms\Components\Radio::make('pump_condition')
                                            ->label('Kondisi Pompa')
                                            ->options([
                                                'ok' => 'Ok',
                                                'bad' => 'Tidak Ok',
                                            ])
                                            ->inline()
                                            ->inlineLabel(false)
                                            ->columnSpan(2),
                                        Forms\Components\TextInput::make('pump_condition_note')
                                            ->label('Catatan Kondisi Pompa')
                                            ->columnSpan(2),
                                    ])
                                ])
                            ]),
                        Tab::make('Dokumentasi')
                            ->schema([
                                Section::make('Dokumentasi')
                                    ->headerActions([
                                        Action::make('documentation_waiting_approval_status')
                                            ->label('Belum Approve')
                                            ->color('danger')
                                            ->size(ActionSize::Large)
                                            ->badge()
                                            ->disabled(true)
                                            ->visible(function (Model $record) {
                                                return $record->maintenanceDocumentation->status == 'waiting_approval';
                                            }),
                                        Action::make('documentation_approved_status')
                                            ->label('Approve')
                                            ->color('success')
                                            ->size(ActionSize::Large)
                                            ->badge()
                                            ->disabled(true)
                                            ->visible(function (Model $record) {
                                                return $record->maintenanceDocumentation->status == 'approved';
                                            }),
                                        Action::make('documentation_approve')
                                            ->label('Approve')
                                            ->color('success')
                                            ->visible(function (Model $record) {
                                                return $record->maintenanceDocumentation->status == 'waiting_approval';
                                            })
                                            ->action(fn(Model $record) => $record->maintenanceDocumentation->update(['status' => 'approved', 'approved_by' => auth()->user()->id]))
                                            ->requiresConfirmation(),
                                    ])
                                    ->schema([
                                        Fieldset::make('Dokumentasi')
                                    ->relationship('maintenanceDocumentation')
                                    ->schema([
                                        Forms\Components\FileUpload::make('tightening_panel_bolts')
                                            ->label('Mengencangkan Baut Panel')
                                            ->directory('maintenance/documentation')
                                            ->image()
                                            ->openable()
                                            ->downloadable(),
                                        Forms\Components\FileUpload::make('cleaning_panel_with_cloth')
                                            ->label('Membersihkan Panel Dengan Kain')
                                            ->directory('maintenance/documentation')
                                            ->image()
                                            ->openable()
                                            ->downloadable(),
                                        Forms\Components\FileUpload::make('cleaning_panel_with_brush')
                                            ->label('Membersihkan Panel Dengan Kuas')
                                            ->directory('maintenance/documentation')
                                            ->image()
                                            ->openable()
                                            ->downloadable(),
                                        Forms\Components\FileUpload::make('cleaning_panel_with_vacuum')
                                            ->label('Membersihkan Panel Dengan Vacuum')
                                            ->directory('maintenance/documentation')
                                            ->image()
                                            ->openable()
                                            ->downloadable(),
                                        Forms\Components\FileUpload::make('panel_condition_after_cleaning')
                                            ->label('Kondisi Panel Setelah Dibersihkan')
                                            ->directory('maintenance/documentation')
                                            ->image()
                                            ->openable()
                                            ->downloadable(),
                                        Forms\Components\FileUpload::make('junction_box_after_cleaning')
                                            ->label('Junction Box Setelah Dibersihkan')
                                            ->directory('maintenance/documentation')
                                            ->image()
                                            ->openable()
                                            ->downloadable(),
                                        Forms\Components\FileUpload::make('water_level')
                                            ->label('Ketinggian Air')
                                            ->directory('maintenance/documentation')
                                            ->image()
                                            ->openable()
                                            ->downloadable(),
                                        Forms\Components\FileUpload::make('pump_cleaning')
                                            ->label('Pump Cleaning')
                                            ->directory('maintenance/documentation')
                                            ->image()
                                            ->openable()
                                            ->downloadable(),
                                        Forms\Components\FileUpload::make('lifting_pump')
                                            ->label('Mengangkat Pompa')
                                            ->directory('maintenance/documentation')
                                            ->image()
                                            ->openable()
                                            ->downloadable(),
                                        Forms\Components\FileUpload::make('cleaning_pump_body')
                                            ->label('Membersihkan Bodi Pompa')
                                            ->directory('maintenance/documentation')
                                            ->image()
                                            ->openable()
                                            ->downloadable(),
                                        Forms\Components\FileUpload::make('polishing_wearing_ring')
                                            ->label('Memoles Wearing Ring')
                                            ->directory('maintenance/documentation')
                                            ->image()
                                            ->openable()
                                            ->downloadable(),
                                        Forms\Components\FileUpload::make('replacing_pump_oil')
                                            ->label('Menganti Oli Pompa')
                                            ->directory('maintenance/documentation')
                                            ->image()
                                            ->openable()
                                            ->downloadable(),
                                        Forms\Components\FileUpload::make('tightening_pump_bolts')
                                            ->label('Mengencangkan Baut-Baut Pompa')
                                            ->directory('maintenance/documentation')
                                            ->image()
                                            ->openable()
                                            ->downloadable(),
                                        Forms\Components\FileUpload::make('cleaning_pump_impeller')
                                            ->label('Membersihkan Impeller Pompa')
                                            ->directory('maintenance/documentation')
                                            ->image()
                                            ->openable()
                                            ->downloadable(),
                                    ])
                                    ])
                                ]),
                    ]),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('maintenanceAssignment.user.name')
                    ->label('Nama Teknisi')
                    ->searchable(),
                TextColumn::make('inspection_date')
                    ->label('Tanggal')
                    ->searchable(),
                TextColumn::make('maintenanceAssignment.pump.serial_number')
                    ->label('No Seri Pompa')
                    ->searchable(),
                TextColumn::make('maintenanceAssignment.pump.unit')
                    ->label('No Unit Pompa')
                    ->searchable(),
                TextColumn::make('maintenance_status')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'waiting_approval' => 'danger',
                        'approve' => 'success',
                    })
                    ->formatStateUsing(fn(string $state): string => match ($state) {
                        'waiting_approval' => 'Belum Approve',
                        'approve' => 'Approved',
                        default => $state,
                    })
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMaintenances::route('/'),
            'create' => Pages\CreateMaintenance::route('/create'),
            'edit' => Pages\EditMaintenance::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }
}
