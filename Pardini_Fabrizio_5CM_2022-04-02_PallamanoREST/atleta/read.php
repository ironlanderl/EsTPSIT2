<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
// includiamo database.php e atleta.php per poterli usare
include_once '../config/database.php';
include_once '../models/atleta.php';
// creiamo un nuovo oggetto Database e ci colleghiamo al nostro database
$database = new Database();
$db = $database->getConnection();
// Creiamo un nuovo oggetto Libro
$atleta = new Atleta($db);
// query products
$result = $atleta->read();
$num = $result->num_rows;
// se vengono trovati libri nel database
if($num>0){
    // array di libri
    $atleta_arr = array();
    $atleta_arr["records"] = array();
    while ($row = $result->fetch_assoc()) {
        extract($row);
        $atleta_item = array(
            "CF" => $CF,
            "nome" => $nome,
            "cognome" => $cognome,
            "numero_maglia" => $numero_maglia,
            "data_nascita" => $data_nascita
        );
        array_push($atleta_arr["records"], $atleta_item);
    }
    echo json_encode($atleta_arr);
}else{
    echo json_encode(
        array("message" => "Nessun Atleta Trovato.")
    );
}
?>