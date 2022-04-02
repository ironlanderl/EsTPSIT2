<?php
//headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// includiamo database.php e squadra.php per poterli usare
include_once '../config/database.php';
include_once '../models/squadra.php';
$database = new Database();
$db = $database->getConnection();
$squadra = new Squadra($db);
$data = json_decode(file_get_contents("php://input"));
// elimina utilizzando il nome, ed ignorando la sede
if(
    !empty($data->nome)
){
    $squadra->nome = $data->nome;
    if($squadra->delete()){
        http_response_code(200);
        echo json_encode(array("message" => "Squadra eliminata correttamente."));
    }
    else{
        //503 servizio non disponibile
        http_response_code(503);
        echo json_encode(array("message" => "Impossibile eliminare la squadra."));
    }
}
else{
    //400 bad request
    http_response_code(400);
    echo json_encode(array("message" => "Impossibile eliminare la squadra, i dati sono incompleti."));
}
