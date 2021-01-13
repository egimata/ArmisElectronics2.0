<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // public function presentPrice()
    // {
    //     $fmt = numfmt_create( 'de_DE', NumberFormatter::CURRENCY );
    //     return numfmt_format_currency($fmt, $this->price, "EUR");

    // }
    public function scopeRecommended($query)
    {
        return $query->inRandomOrder()->take(9);
    }
}
