<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;


class Image extends Model
{
    public function Products()
    {
        return $this->belongsTo(Product::class);
    }
}
