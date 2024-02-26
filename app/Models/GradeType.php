<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GradeType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'colour',
        'compliant',
        'order',
    ];

    public function grades(): HasMany
    {
        return $this->hasMany(Grade::class);
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
