<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inspection extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'wind_farm_id',
        'grade_id',
        'inspection_window_id',
        'inspection_status_id',
        'inspector_id',
    ];

    public function windFarm(): BelongsTo
    {
        return $this->belongsTo(WindFarm::class);
    }

    public function grade(): BelongsTo
    {
        return $this->belongsTo(Grade::class);
    }

    public function inspectionWindow(): BelongsTo
    {
        return $this->belongsTo(InspectionWindow::class);
    }

    public function inspectionStatus(): BelongsTo
    {
        return $this->belongsTo(InspectionStatus::class);
    }

    public function inspector(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function componentInspections(): HasMany
    {
        return $this->hasMany(ComponentInspection::class);
    }

    public function components(): HasManyThrough
    {
        return $this->hasManyThrough(Component::class, ComponentInspection::class);
    }

    public function scopeForStatus(Builder $query, string $status): Builder
    {
        return $query->where('inspection_status_id', $status);
    }

    public function scopeForWindow(Builder $query, string $window): Builder
    {
        return $query->where('inspection_window_id', $window);
    }
}
