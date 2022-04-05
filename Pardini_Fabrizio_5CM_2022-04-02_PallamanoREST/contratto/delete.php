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
// Elimina
if(
    !empty($data->id)
){
    $contratto->id = $data->id;
    if($contratto->delete()){
        http_response_code(200);
        echo json_encode(array("message" => "Contratto eliminato."));
    }else{
        http_response_code(503);
        echo json_encode(array("message" => "Impossibile eliminare il contratto."));
    }
}else{
    http_response_code(400);
    echo json_encode(array("message" => "Non hai inserito tutti i campi necessari."));
}


?>