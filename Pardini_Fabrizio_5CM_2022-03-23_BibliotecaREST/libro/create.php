<?php
//headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../config/database.php';
include_once '../models/libro.php';

$database = new Database();
$db = $database->getConnection();
$libro = new Libro($db);
$data = json_decode(file_get_contents("php://input"));
http_response_code(201);
echo file_get_contents("php://input");
die();
if(
    !empty($data->ISBN) &&
    !empty($data->Titolo) &&
    !empty($data->Autore)
){
    $libro->ISBN = $data->ISBN;
    $libro->Titolo = $data->Titolo;
    $libro->Autore = $data->Autore;

    if($libro->create()){
        http_response_code(201);
        echo json_encode(array("message" => "Libro creato correttamente."));
    }
    else{
        //503 servizio non disponibile
        http_response_code(503);
        echo json_encode(array("message" => "Impossibile creare il libro."));
    }
}
else{
    //400 bad request
    http_response_code(400);
    echo json_encode(array("message" => "Impossibile creare il libro i dati sono incompleti."));
}
?>