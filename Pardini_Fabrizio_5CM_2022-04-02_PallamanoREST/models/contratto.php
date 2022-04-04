<?php

class Contratto{
    private $conn;
    private $table_name = "contratto";
    // proprietà di un atleta
    public $id;
    public $atleta;
    public $squadra;
    public $data_inizio;
    public $data_fine;
    // costruttore
    public function __construct($db){
        $this->conn = $db;
    }
    // READ 
    function read(){
        // select all
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }
    // CREATE
    function create(){
        // query to insert record
        $query = "INSERT INTO " . $this->table_name . " (atleta,squadra,data_inizio,data_fine) VALUES(?,?,?,?)";
        // prepare query
        $stmt = $this->conn->prepare($query);
        // sanitize
        $this->atleta = htmlspecialchars(strip_tags($this->atleta));
        $this->squadra = htmlspecialchars(strip_tags($this->squadra));
        $this->data_inizio = htmlspecialchars(strip_tags($this->data_inizio));
        $this->data_fine = htmlspecialchars(strip_tags($this->data_fine));
        // bind values
        $stmt->bind_param("ssss", $this->atleta, $this->squadra, $this->data_inizio, $this->data_fine);
        // execute query
        if($stmt->execute()){
            return true;
        }
        return false;
    }
    // UPDATE
    function update(){
        // query to insert record
        $query = "UPDATE " . $this->table_name . " SET atleta=?,squadra=?,data_inizio=?,data_fine=? WHERE id=?";
        // prepare query
        $stmt = $this->conn->prepare($query);
        // sanitize
        $this->atleta = htmlspecialchars(strip_tags($this->atleta));
        $this->squadra = htmlspecialchars(strip_tags($this->squadra));
        $this->data_inizio = htmlspecialchars(strip_tags($this->data_inizio));
        $this->data_fine = htmlspecialchars(strip_tags($this->data_fine));
        $this->id = htmlspecialchars(strip_tags($this->id));
        // bind values
        $stmt->bind_param("ssssi", $this->atleta, $this->squadra, $this->data_inizio, $this->data_fine, $this->id);
        // execute query
        if($stmt->execute()){
            return true;
        }
        return false;
    }
    // DELETE
    function delete(){
        // query to insert record
        $query = "DELETE FROM " . $this->table_name . " WHERE id=?";
        // prepare query
        $stmt = $this->conn->prepare($query);
        // sanitize
        $this->id = htmlspecialchars(strip_tags($this->id));
        // bind values
        $stmt->bind_param("i", $this->id);
        // execute query
        if($stmt->execute()){
            return true;
        }
        return false;
    }
}


?>