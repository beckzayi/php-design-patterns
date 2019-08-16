<?php
require 'BookInterface.php';

class Book implements BookInterface {
    public function open() {
        var_dump('Book Open');
    }

    public function turnPage() {
        var_dump('Book Turn Page');
    }
}