<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Additional extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'key',
        'value'
    ];

    public $timestamps = false;
}
