<?php

require 'connect.php';

class DetailCar {

    public function __construct() {
        $this->getDetail();
    }

    private function getDetail() {
        // Get the posted data.
        $postdata = file_get_contents("php://input");
        if (isset($postdata) && !empty($postdata)) {
            // Extract the data.
            $request = json_decode($postdata);

            // Validate.
            if (trim($request->unique_id) == '') {
                return;
            }

            // Sanitize.
            // todo: doresit SQL Injection
            $uid = trim($request->unique_id);

            // Get by id.
            $sql = dibi::select('*')->from('cars')->where('unique_id=%i', $uid)->limit(1);

            $row = $sql->fetchAll();

            $json = json_encode($row);
            echo $json;
        }
    }

}

$detailCar = new DetailCar();
