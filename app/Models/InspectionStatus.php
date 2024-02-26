<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class InspectionStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'order',
    ];

    public function inspections(): HasMany
    {
        return $this->hasMany(Inspection::class);
    }
}
