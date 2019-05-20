<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Image;
use App\Video;

class Product extends Model
{
    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

    public function Images()
    {
        return $this->hasMany(Image::class);
    }

    public function Videos()
    {
        return $this->hasMany(Video::class);
    }
}
