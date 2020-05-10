<?php

namespace App\Portfolio\Articles\Books;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function bookImages()
    {
        return $this->hasMany(BookImage::class);
    }
}
