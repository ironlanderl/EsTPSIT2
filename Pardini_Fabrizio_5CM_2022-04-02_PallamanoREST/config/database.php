<?php
class Database
	{
	// credenziali
	private $host = "localhost";
	private $db_name = "pallamano";
	private $username = "root";
	private $password = "root";
	public $conn;
	// connessione al database
	public function getConnection()
		{
		$this->conn = null;
		try
			{
			$this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);
			$this->conn->query("set names utf8");
			}
		catch(PDOException $exception)
			{
			echo "Errore di connessione: " . $exception->getMessage();
			}
		return $this->conn;
		}
	}
?>