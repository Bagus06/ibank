<?php 
class Transaction extends Connection
{
	public $table = "mutasi";
	public $table1 = "siswa";
	public $table2 = "user";
	public $id;

	public function conn()
	{
		$db = parent::connect();
		return $db;
	}

	function tampil_data()
	{
		$data = mysqli_query($this->conn() , "select nis, nama, kelas_id, mutasi, rupiah, date, siswa_id from ". $this->table ." inner join ". $this->table1 ." on mutasi.siswa_id = siswa.id_siswa");
		while ($dats = mysqli_fetch_array($data)) {
			$hasil[] = $dats;
		}
		// var_dump($hasil);die;
		if (!isset($hasil)) {
			return false;
		}else{
			return $hasil;
		}
	}

	function MAX()
	{
		if (isset($_SESSION['admin'])) {
			$data = mysqli_query($this->conn() , "select * from ". $this->table1 ." order by saldo desc limit 1");
			while ($dats = mysqli_fetch_array($data)) {
				$hasil[] = $dats;
			}
			if (!isset($hasil)) {
				return false;
			}else{
				return $hasil;
			}
		} elseif (isset($_SESSION['member'])) {
			$kelas = $_SESSION['kelas'];

			$data = mysqli_query($this->conn() , "select * from ". $this->table1 ." where kelas_id=$kelas order by saldo desc limit 1");
			while ($dats = mysqli_fetch_array($data)) {
				$hasil[] = $dats;
			}
			if (!isset($hasil)) {
				return false;
			}else{
				return $hasil;
			}
		}else{
			$kelas = $_SESSION['kelas'];

			$data = mysqli_query($this->conn() , "select * from ". $this->table1 ." where kelas_id=$kelas order by saldo desc limit 1");
			while ($dats = mysqli_fetch_array($data)) {
				$hasil[] = $dats;
			}
			if (!isset($hasil)) {
				return false;
			}else{
				return $hasil;
			}
		}
		
	}

	function count()
	{
		if (isset($_SESSION['admin'])) {
			$data = mysqli_query($this->conn() , "select * from ". $this->table1 ." order by saldo desc limit 1");
			while ($dats = mysqli_fetch_array($data)) {
				$hasil[] = $dats;
			}
			if (!isset($hasil)) {
				return false;
			}else{
				return $hasil;
			}
		} elseif (isset($_SESSION['member'])) {
			$data = mysqli_query($this->conn() , "select * from ". $this->table1);
			while ($dats = mysqli_fetch_array($data)) {
				$hasil[] = $dats;
			}
			if (!isset($hasil)) {
				return false;
			}else{
				return $hasil;
			}
		}else{
			$kelas = $_SESSION['kelas'];

			$data = mysqli_query($this->conn() , "select * from ". $this->table1 ." where kelas_id=$kelas");
			while ($dats = mysqli_fetch_array($data)) {
				$hasil[] = $dats;
			}
			if (!isset($hasil)) {
				return false;
			}else{
				return $hasil;
			}
		}
	}

	function tampil_dataById()
	{
		$id = $_SESSION['id'];
		$data = mysqli_query($this->conn() , "select nis, nama, kelas_id, mutasi, rupiah, date, siswa_id from ". $this->table ." inner join ". $this->table1 ." on mutasi.siswa_id = siswa.id_siswa where siswa_id=$id");
		while ($dats = mysqli_fetch_array($data)) {
			$hasil[] = $dats;
		}
		// var_dump($hasil);die;
		if (!isset($hasil)) {
			return false;
		}else{
			return $hasil;
		}
	}

	function addMutasi($rupiah, $mutasi, $id)
	{
		$convert= preg_replace("/[^0-9]/", "", $rupiah);
		$query = mysqli_query($this->conn() , "select * from " . $this->table1 . " where id_siswa=$id");
		while ($dats = mysqli_fetch_array($query)) {
			$hasil[] = $dats;
		}
		foreach ($hasil as $key) {
		}
		$saldo = $key['saldo'];

		$b = date('d-m-Y');
		if ($mutasi == 'Tabung') {
			$tabung = $saldo + $convert;
		 	$query1 = mysqli_query($this->conn(), "update " . $this->table1 . " set saldo='$tabung' WHERE id_siswa='$id'");
		 }elseif ($mutasi == 'Ambil'){
		 	$ambil = $saldo - $convert;
		 	if ($ambil <= 0) {
		 		echo "
				<script>
				alert('Your balance is insufficient!');
				location.href = '{$_SERVER['HTTP_REFERER']}';
				</script>
				";
				exit;
		 	}else{
		 		$d = date('d-m-Y', strtotime('+1 month', strtotime( $b )));
		 		$query2 = mysqli_query($this->conn(), "UPDATE " . $this->table1 . " SET verifed='$d', saldo='$ambil' WHERE id_siswa='$id'");
		 	}
		 }
		$query3 = mysqli_query($this->conn(), "INSERT INTO " . $this->table . " (mutasi, rupiah, date, siswa_id) VALUES ('$mutasi', '$convert', '$b', '$id')");
			// var_dump($query3);die;
		header("location:../../View/transaction/addTransaction.view");
		}
}
?>