<?php
//headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// includiamo database.php e atleta.php per poterli usare
include_once '../config/database.php';
include_once '../models/atleta.php';
$database = new Database();
$db = $database->getConnection();
$atleta = new Atleta($db);
$data = json_decode(file_get_contents("php://input"));
if(
    !empty($data->CF)
){
    $atleta->CF = $data->CF;
    if($atleta->delete()){
        http_response_code(200);
        echo json_encode(array("message" => "Atleta eliminato correttamente."));
    }
    else{
        //503 servizio non disponibile
        http_response_code(503);
        echo json_encode(array("message" => "Impossibile eliminare l'atleta."));
    }
}
else{
    //400 bad request
    http_response_code(400);
    echo json_encode(array("message" => "Impossibile eliminare l'atleta, i dati sono incompleti."));
}



?>