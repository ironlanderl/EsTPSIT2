<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
// includiamo database.php e squadra.php per poterli usare
include_once '../config/database.php';
include_once '../models/squadra.php';
// creiamo un nuovo oggetto Database e ci colleghiamo al nostro database
$database = new Database();
$db = $database->getConnection();   
$squadra = new Squadra($db);
$data = json_decode(file_get_contents("php://input"));
if(
    !empty($data->nome) &&
    !empty($data->sede)
){
    $squadra->nome = $data->nome;
    $squadra->sede = $data->sede;
    if($squadra->create()){
        http_response_code(201);
        echo json_encode(array("message" => "Squadra creata correttamente."));
    }
    else{
        //503 servizio non disponibile
        http_response_code(503);
        echo json_encode(array("message" => "Impossibile creare la squadra."));
    }
}
else{
    //400 bad request
    http_response_code(400);
    echo json_encode(array("message" => "Impossibile creare la squadra, i dati sono incompleti."));
}
