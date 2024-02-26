<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ComponentInspection extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'component_id',
        'grade_id',
        'inspection_id',
    ];

    public function component(): BelongsTo
    {
        return $this->belongsTo(Component::class);
    }

    public function grade(): BelongsTo
    {
        return $this->belongsTo(Grade::class);
    }

    public function inspection(): BelongsTo
    {
        return $this->belongsTo(Inspection::class);
    }
}
