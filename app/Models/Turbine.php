<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Turbine extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'wind_farm_id',
    ];

    public function windFarm(): BelongsTo
    {
        return $this->belongsTo(WindFarm::class);
    }

    public function components(): HasMany
    {
        return $this->hasMany(Component::class);
    }
}
