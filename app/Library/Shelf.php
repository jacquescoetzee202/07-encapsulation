<?php

declare(strict_types=1);

namespace App\Library;

class Shelf {

    private $books;

    public function __construct()
    {
        $this->books = collect();
    }

    public function addBook(Book $book)
    {
        $this->books->push($book);
    }

    public function titles()
    {
        return $this->books->map(fn($book)=>$book->title())->all();
    }
}