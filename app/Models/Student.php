<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['student_name', 'is_active', 'created_by'];


    public function exam(): HasMany
    {
        return $this->hasMany(Exam::class);
    }
}
