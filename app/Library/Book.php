<?php

declare(strict_types=1);

namespace App\Library;

class Book {

    private $title;
    private $numOfPages;
    private $pageNum = 1;
    private $timesRead = 0;

    public function __construct(string $title,float $numOfPages){
        $this->title = $title;
        $this->numOfPages = $numOfPages;
    }

    public function currentPage()
    {
        $currentPage = $this->pageNum;
        $numOfSittings = $this->timesRead;

        if ($numOfSittings === 1){
            return "{$currentPage} - start on page 1";
        } else {
            return $currentPage;
        }
    }

    public function read($pagesRead)
    {
        $this->pageNum += $pagesRead;
        $this->timesRead += 1;
    }

    public function title()
    {
        return $this->title;
    }

}