<?php
require_once 'Sub.php';

class TurkeySub extends Sub {
    function addMeat() {
        var_dump('add meat');
        return $this;
    }

    function addTop() {
        var_dump('add top Turkey');
        return $this;
    }
}