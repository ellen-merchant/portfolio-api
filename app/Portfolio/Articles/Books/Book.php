<?php

namespace App\Portfolio\Articles\Books;

use App\Portfolio\PortfolioModel;

class Book extends PortfolioModel
{
    public function bookImages()
    {
        return $this->hasMany(BookImage::class);
    }
}
