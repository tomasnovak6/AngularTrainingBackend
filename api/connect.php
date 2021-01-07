<?php

require_once '../vendor/autoload.php';

class Connect {

    public function __construct() {
        $this->connect();
    }

    private function connect() {
        try {
            $data = array(
                'driver'   => 'mysqli',
                'host'     => 'localhost',
                'username' => 'root',
                'password' => '',
                'database' => 'angular_db',
                'charset'  => 'utf8',
            );

            ini_set('display_errors', '1');

            dibi::connect($data);
        } catch (\Dibi\Exception $e) {
            echo get_class($e), ': ', $e->getMessage(), "\n";
        }
    }

}

$connect = new Connect();
