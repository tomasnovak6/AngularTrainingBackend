<?php


class Index
{

    function __construct() {
        $this->getEcho();
    }

    private function getEcho() {
        echo 'hovno';
    }

}

$indexObj = new Index();
