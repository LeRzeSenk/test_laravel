<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function products(){
        return $this->belongsToMany(Product::class)->withPivot('count')->withTimestamps();
    }

    public function orderSum(){
        $sum = 0;
        foreach ($this->products as $product){
            $sum +=$product->countSum();
        }
        return $sum;
    }
    public function orderSumFormat(){
        return number_format($this->orderSum(), 2, '.', ' ');
    }
}
