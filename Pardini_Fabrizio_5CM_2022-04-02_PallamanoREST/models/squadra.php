<?php
class Squadra{
    private $conn;
    private $table_name = "squadra";
    // proprietà di un atleta
    public $nome;
    public $sede;
    // costruttore
    public function __construct($db){
        $this->conn = $db;
    }
    // READ atleti
    function read(){
        // select all
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }
    // CREARE ATLETA
    function create(){
        // query to insert record
        $query = "INSERT INTO " . $this->table_name . " VALUES(?,?)";
        // prepare query
        $stmt = $this->conn->prepare($query);
        // sanitize
        $this->nome = htmlspecialchars(strip_tags($this->nome));
        $this->sede = htmlspecialchars(strip_tags($this->sede));
        // bind values
        $stmt->bind_param("ss", $this->nome, $this->sede);
        // execute query
        if($stmt->execute()){
            return true;
        }
        return false;
    }
    // UPDATE ATLETA
    function update(){
        // query to insert record
        $query = "UPDATE " . $this->table_name . " SET sede=? WHERE nome=?";
        // prepare query
        $stmt = $this->conn->prepare($query);
        // sanitize
        $this->nome = htmlspecialchars(strip_tags($this->nome));
        $this->sede = htmlspecialchars(strip_tags($this->sede));
        // bind values
        $stmt->bind_param("ss", $this->sede, $this->nome);
        // execute query
        if($stmt->execute()){
            return true;
        }
        return false;
    }
    // DELETE ATLETA
    function delete(){
        // query to insert record
        $query = "DELETE FROM " . $this->table_name . " WHERE nome=?";
        // prepare query
        $stmt = $this->conn->prepare($query);
        // sanitize
        $this->nome = htmlspecialchars(strip_tags($this->nome));
        // bind values
        $stmt->bind_param("s", $this->nome);
        // execute query
        if($stmt->execute()){
            return true;
        }
        return false;
    }
}





?>