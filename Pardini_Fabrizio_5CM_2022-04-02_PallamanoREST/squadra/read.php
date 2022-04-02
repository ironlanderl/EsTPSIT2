<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../config/database.php';
include_once '../models/squadra.php';

$database = new Database();
$db = $database->getConnection();
$squadra = new Squadra($db);
$result = $squadra->read();
$num = $result->num_rows;
if($num>0){
    $squadra_arr = array();
    $squadra_arr["records"] = array();
    while ($row = $result->fetch_assoc()) {
        extract($row);
        $squadra_item = array(
            "nome" => $nome,
            "sede" => $sede
        );
        array_push($squadra_arr["records"], $squadra_item);
    }
    echo json_encode($squadra_arr);
}else{
    echo json_encode(
        array("message" => "Nessuna Squadra Trovata.")
    );
}



?>