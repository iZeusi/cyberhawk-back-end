<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'colour',
        'compliant',
    ];

    public function inspections(): HasManyThrough
    {
        return $this->hasManyThrough(Inspection::class, ComponentInspection::class);
    }

    public function components(): HasManyThrough
    {
        return $this->hasManyThrough(Component::class, ComponentInspection::class);
    }

    public function scopeCompliant(Builder $query): Builder
    {
        return $query->where('compliant', true);
    }

    public function scopeNonCompliant(Builder $query): Builder
    {
        return $query->where('compliant', false);
    }
}
