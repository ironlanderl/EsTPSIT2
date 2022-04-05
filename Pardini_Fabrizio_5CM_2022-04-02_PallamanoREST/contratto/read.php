<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../config/database.php';
include_once '../models/contratto.php';

$database = new Database();
$db = $database->getConnection();
$contratto = new Contratto($db);
$result = $contratto->read();
$num = $result->num_rows;
if($num>0){
    $contratto_arr = array();
    $contratto_arr["records"] = array();
    while ($row = $result->fetch_assoc()) {
        extract($row);
        $contratto_item = array(
            "id" => $id,
            "atleta" => $atleta,
            "squadra" => $squadra,
            "data_inizio" => $data_inizio,
            "data_fine" => $data_fine,
        );
        array_push($contratto_arr["records"], $contratto_item);
    }
    echo json_encode($contratto_arr);
}else{
    echo json_encode(
        array("message" => "Nessun Contratto Trovato.")
    );
}




?>