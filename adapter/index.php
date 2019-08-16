<?php
require 'Book.php';
require 'Kindle.php';
require 'eReaderAdapter.php';

class Person {
    public function read(BookInterface $book) {
        $book->open();
        $book->turnPage();
    }
}

$person = new Person;
$book = new Book;
$kindle = new Kindle;

$person->read($book);
$person->read(new eReaderAdapter($kindle));
?>