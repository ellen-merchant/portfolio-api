<?php

namespace App\Portfolio\Articles\Books;

use Illuminate\Support\Collection;

class GetBooks
{
    private $books;

    public function __construct(Books $books)
    {
        $this->books = $books;
    }

    public function get(): Collection
    {
        return $this->books->all();
    }
}
