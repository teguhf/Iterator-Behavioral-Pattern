<?php
// Include classes
require_once 'Book.php';
require_once 'BookCollection.php';

// Create some books
$book1 = new Book("To Kill a Mockingbird", "Harper Lee");
$book2 = new Book("1984", "George Orwell");
$book3 = new Book("The Great Gatsby", "F. Scott Fitzgerald");

// Create book collection
$bookCollection = new BookCollection();
$bookCollection->addBook($book1);
$bookCollection->addBook($book2);
$bookCollection->addBook($book3);

// Iterate through the book collection
foreach ($bookCollection as $book) {
    echo "Title: " . $book->getTitle() . ", Author: " . $book->getAuthor() . "\n";
}
?>
