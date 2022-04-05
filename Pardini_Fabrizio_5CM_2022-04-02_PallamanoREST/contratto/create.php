<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../config/database.php';
include_once '../models/contratto.php';

$database = new Database();
$db = $database->getConnection();
$contratto = new Contratto($db);
$data = json_decode(file_get_contents("php://input"));
// Creazione
if(
    !empty($data->atleta) &&
    !empty($data->squadra) &&
    !empty($data->data_inizio) &&
    !empty($data->data_fine)
){
    $contratto->atleta = $data->atleta;
    $contratto->squadra = $data->squadra;
    $contratto->data_inizio = $data->data_inizio;
    $contratto->data_fine = $data->data_fine;
    if($contratto->create()){
        http_response_code(201);
        echo json_encode(array("message" => "Contratto creato."));
    }else{
        http_response_code(503);
        echo json_encode(array("message" => "Impossibile creare il contratto."));
    }
}else{
    http_response_code(400);
    echo json_encode(array("message" => "Non hai inserito tutti i campi necessari."));
}


?>