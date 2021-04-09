<?php

namespace App\Portfolio\Articles\Books;

use App\Portfolio\Articles\Books\Book;
use Illuminate\Support\Collection;

class Books
{
    public function all(): Collection
    {
        return Book::get();
    }
}
