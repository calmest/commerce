<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Video extends Model
{
    public function Products()
    {
        return $this->belongsTo(Product::class);
    }
}
