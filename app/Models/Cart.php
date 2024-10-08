<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "product_id",
        "option_id",
        "quantity"
    ];

    protected $table = "cart";

    public $timestamps = false;

    // relationships
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'product_id');
    }
    public function option()
    {
        return $this->belongsTo('App\Models\Option', 'option_id');
    }


}
