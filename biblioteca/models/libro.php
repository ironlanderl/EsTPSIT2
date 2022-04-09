<?php
class Libro
	{
	private $conn;
	private $table_name = "libri";
	// proprietà di un libro
	public $ISBN;
	public $Autore;
	public $Titolo;
	// costruttore
	public function __construct($db)
		{
		$this->conn = $db;
		}
	// READ libri
	function read()
		{
		// select all
		$query = "SELECT
                        a.ISBN, a.Autore, a.Titolo
                    FROM
                   " . $this->table_name . " a ";
		$stmt = $this->conn->prepare($query);
		// execute query
		$stmt->execute();
		return $stmt;
		}

	function create()
	{

		$query = "INSERT INTO
					" . $this->table_name . "
				SET
					ISBN=:isbn, Autore=:autore, Titolo=:titolo";


		$stmt = $this->conn->prepare($query);


		$this->ISBN = htmlspecialchars(strip_tags($this->ISBN));
		$this->Autore = htmlspecialchars(strip_tags($this->Autore));
		$this->Titolo = htmlspecialchars(strip_tags($this->Titolo));

		// binding
		$stmt->bindParam(":isbn", $this->ISBN);
		$stmt->bindParam(":autore", $this->Autore);
		$stmt->bindParam(":titolo", $this->Titolo);

		// execute query
		if($stmt->execute()){
			return true;
		}

		return false;

	}

	function update(){

		$query = "UPDATE
					" . $this->table_name . "
				SET
					Titolo = :titolo,
					Autore = :autore
				WHERE
					ISBN = :isbn";
	
		$stmt = $this->conn->prepare($query);
	
		$this->ISBN = htmlspecialchars(strip_tags($this->ISBN));
		$this->Autore = htmlspecialchars(strip_tags($this->Autore));
		$this->Titolo = htmlspecialchars(strip_tags($this->Titolo));
	
		// binding
		$stmt->bindParam(":isbn", $this->ISBN);
		$stmt->bindParam(":autore", $this->Autore);
		$stmt->bindParam(":titolo", $this->Titolo);
	
		// execute the query
		if($stmt->execute()){
			return true;
		}
	
		return false;
	}

	function delete(){

		$query = "DELETE FROM " . $this->table_name . " WHERE ISBN = ?";


		$stmt = $this->conn->prepare($query);

		$this->ISBN = htmlspecialchars(strip_tags($this->ISBN));


		$stmt->bindParam(1, $this->ISBN);

		// execute query
		if($stmt->execute()){
			return true;
		}

		return false;

	}
	}
?>