<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelNo extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'product_id', 'serial_no', 'prod_date', 'warranty_date', 'warranty_duration', 'used'];
}
