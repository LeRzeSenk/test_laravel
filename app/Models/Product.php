<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function countSum(){
        $sum = $this->price * $this->pivot->count;
        return $sum;
    }

    public function priceFormat(){
        return number_format($this->price, 2, '.', ' ');
    }
    public function countPriceFormat(){
        return number_format($this->countSum(), 2, '.', ' ');
    }
}
