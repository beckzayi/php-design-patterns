<?php
require 'eReaderInterface.php';

class Kindle implements eReaderInterface {
    public function turnOn() {
        var_dump('Kindle turn it on');
    }

    public function pressNextButton() {
        var_dump('Kindle press next button');
    }
}