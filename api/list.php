<?php

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
