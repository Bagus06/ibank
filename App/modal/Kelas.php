<?php 
	// require_once 'Connection.php';

	class Kelas extends Connection
	{
		public $table = "kelas";

		public function conn()
		{
			$db = parent::connect();
			return $db;
		}
	    function tampil()
	    {
	    	$data = mysqli_query($this->conn() , "select * from " . $this->table);
	    	while ($dats = mysqli_fetch_array($data)) {
	    	    $hasil[] = $dats;
	    	}
	    	return $hasil;
	    }
	}

	// $tampil = new Role();
	// var_dump($tampil->tampil());die;
 ?>