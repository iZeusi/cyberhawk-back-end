<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GradeType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'score',
    ];

    public function grades(): HasMany
    {
        return $this->hasMany(Grade::class);
    }
}
