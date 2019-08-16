<?php
abstract class Sub {
    function make() {
        return $this
            ->addTop()
            ->addSource();
    }

    protected abstract function addTop();

    function addSource() {
        var_dump('add source');
        return $this;
    }
}