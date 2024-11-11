<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Maintenance extends Model
{
    use HasFactory;

    public function maintenanceAssignment(): BelongsTo
    {
        return $this->belongsTo(MaintenanceAssignment::class);
    }

    public function maintenancePumpData(): HasOne
    {
        return $this->hasOne(MaintenancePumpData::class);
    }

    public function maintenanceLvmdp(): HasOne
    {
        return $this->hasOne(maintenanceLvmdp::class);
    }

    public function maintenanceJunctionBox(): HasOne
    {
        return $this->hasOne(maintenanceJunctionBox::class);
    }

    public function maintenancePanel(): HasOne
    {
        return $this->hasOne(maintenancePanel::class);
    }

    public function maintenancePanelFunction(): HasOne
    {
        return $this->hasOne(maintenancePanelFunction::class);
    }

    public function maintenanceElectroMechanical(): HasOne
    {
        return $this->hasOne(MaintenanceElectroMechanical::class);
    }

    public function maintenanceColumnPipeWaterOutput(): HasOne
    {
        return $this->hasOne(MaintenanceColumnPipeWaterOutput::class);
    }

    public function maintenanceSensorTest(): HasOne
    {
        return $this->hasOne(MaintenanceSensorTest::class);
    }

    public function maintenanceMegger(): HasOne
    {
        return $this->hasOne(MaintenanceMegger::class);
    }

    public function maintenanceInsulation(): HasOne
    {
        return $this->hasOne(MaintenanceInsulation::class);
    }
    
    public function maintenanceResistance(): HasOne
    {
        return $this->hasOne(MaintenanceResistance::class);
    }

    public function maintenancePumpCondition(): HasOne
    {
        return $this->hasOne(MaintenancePumpCondition::class);
    }

    public function maintenanceDocumentation(): HasOne
    {
        return $this->hasOne(MaintenanceDocumentation::class);
    }

    public function pump(): BelongsTo
    {
        return $this->belongsTo(Pump::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'technician_id');
    }
}
