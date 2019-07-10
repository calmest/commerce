<?php

namespace App;

use App\Image;
use App\Product;
use App\Video;
use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    public function Images()
    {
        return $this->hasMany(Image::class);
    }    
    public function Videos()
    {
        return $this->hasMany(Video::class);
    }
}
