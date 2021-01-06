<?php
/*
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
*/




// db credentials
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'angular_db');


// Connect with the database.
function connect() {
    $connect = mysqli_connect(DB_HOST ,DB_USER ,DB_PASS ,DB_NAME);

    if (mysqli_connect_errno($connect)) {
        die("Failed to connect:" . mysqli_connect_error());
    }

    mysqli_set_charset($connect, "utf8");

    return $connect;
}

$con = connect();

