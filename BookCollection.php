<?php
class BookCollection implements IteratorAggregate {
    private $books = [];

    public function addBook(Book $book) {
        $this->books[] = $book;
    }

    public function getIterator() : Iterator {
        return new ArrayIterator($this->books);
    }
}
?>
