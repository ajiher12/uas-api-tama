<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = ['id_student', 'assign_type', 'score', 'created_by'];


    public function exam(): HasMany
    {
        return $this->hasMany(Exam::class);
    }
}
