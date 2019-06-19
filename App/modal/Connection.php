<?php
/**
 * 
 */
class Connection
{

	protected 	$host ,
				$username,
				$pass,
				$db;
	
	function __construct($host= "localhost", $username= "root", $pass = "password", $db = "ibank")
	{
		$this->host = $host;
		$this->username = $username;
		$this->pass = $pass;
		$this->db = $db;
	}

	public function connect()
	{
		$db = mysqli_connect($this->host, $this->username, $this->pass, $this->db);
		return $db;
	}
}