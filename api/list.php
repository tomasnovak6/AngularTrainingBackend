<?php
/*
require 'connect.php';

class ListCars {

    public function __construct() {
        $this->getList();
    }

    private function getList() {
        $cars = [];

        $select = dibi::select('id, model, price')->from('cars')->fetchAll();
        $cr = 0;

        if ($select) {
            foreach ($select as $row) {
                $cars[$cr]['id'] = $row['id'];
                $cars[$cr]['model'] = $row['model'];
                $cars[$cr]['price'] = $row['price'];

                $cr++;
            }

            echo json_encode(['data'=>$cars]);
        } else {
            http_response_code(404);
        }

    }

}

$listCars = new ListCars();
*/


$cars = [];
$sql = "SELECT id, model, price FROM cars";

if($result = mysqli_query($con, $sql)) {
    $cr = 0;
    while($row = mysqli_fetch_assoc($result)) {
        $cars[$cr]['id']    = $row['id'];
        $cars[$cr]['model'] = $row['model'];
        $cars[$cr]['price'] = $row['price'];
        $cr++;
    }

    echo json_encode(['data'=>$cars]);
} else {
    http_response_code(404);
}
