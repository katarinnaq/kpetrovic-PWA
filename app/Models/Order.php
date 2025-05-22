<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
     use HasFactory;

    protected $fillable = [
        'user_id',
        'naziv',
        
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

     public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function adminOrder()
{
    return $this->hasOne(AdminOrder::class);
}

}
