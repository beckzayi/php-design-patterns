<?php
require_once 'Sub.php';

class VeggieSub extends Sub {
    function addFruit() {
        var_dump('add fruit');
        return $this;
    }

    function addTop() {
        var_dump('add top Vegie');
        return $this;
    }
}