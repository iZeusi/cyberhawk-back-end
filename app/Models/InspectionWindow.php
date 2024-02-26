<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class InspectionWindow extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'start_date',
        'end_date',
    ];

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
        'start_date',
        'end_date',
    ];

    public function inspections(): HasMany
    {
        return $this->hasMany(Inspection::class);
    }
}
