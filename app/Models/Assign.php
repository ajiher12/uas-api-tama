<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Assign extends Model
{
    use HasFactory;

    protected $fillable = ['assign_name', 'is_active', 'created_by'];


    public function exam(): HasMany
    {
        return $this->hasMany(Exam::class);
    }
}
