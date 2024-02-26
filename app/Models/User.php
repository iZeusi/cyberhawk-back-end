<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'password',
        'created_at',
        'updated_at',
        'deleted_at',
        'remember_token',
        'email_verified_at',
    ];

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
        'email_verified_at',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function inspections(): HasMany
    {
        return $this->hasMany(Inspection::class, 'inspector_id');
    }

    public function windFarms(): HasMany
    {
        return $this->hasMany(WindFarm::class, 'owner_id');
    }
}
