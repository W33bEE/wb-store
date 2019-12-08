<?php

namespace App;
use App\Product;
Use App\Billing;
Use App\Address;
Use App\User;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
