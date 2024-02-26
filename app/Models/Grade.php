<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\SoftDeletes;

class Grade extends Model
{
    use HasFactory, SoftDeletes;

    public function inspections(): HasManyThrough
    {
        return $this->hasManyThrough(Inspection::class, ComponentInspection::class);
    }

    public function components(): HasManyThrough
    {
        return $this->hasManyThrough(Component::class, ComponentInspection::class);
    }

    public function gradeType(): BelongsTo
    {
        return $this->belongsTo(GradeType::class);
    }
}
