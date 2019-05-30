<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;


class Image extends Model
{
    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
}
