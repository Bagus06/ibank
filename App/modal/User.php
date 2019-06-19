<?php 
// require_once 'Connection.php';
class User extends Connection
{
	public $table = "user";
	public $table1 = "siswa";

	public function conn()
	{
		$db = parent::connect();
		return $db;
	}  	    

	function inputadmin($nis, $username, $password, $kelas)
	{
		$pass1 = mysqli_real_escape_string($this->conn(), $password); 
		$usernameCheck = mysqli_query($this->conn() , "SELECT * FROM " . $this->table . " WHERE nis='$nis'");
		// var_dump(mysqli_fetch_assoc($emailCheck));die;
	    	// echo "string";die;
	    	// var_dump(mysqli_fetch_assoc($usernameCheck));die;
		if (mysqli_fetch_assoc($usernameCheck)) {
			echo "
			<script>
			alert('Admin is registered!');
			location.href = '{$_SERVER['HTTP_REFERER']}';
			</script>
			";
			return false;
		}else{
			$convertPas = password_hash($password, PASSWORD_DEFAULT);
			$role = 2;
			$query = mysqli_query($this->conn(), "INSERT INTO " . $this->table . " (kelas_id,nis, username, password, role_id) VALUES ('$kelas', '$nis', '$username', '$convertPas', '$role')");
			// var_dump($query);die;
			if ($query == true) {	
				echo "<div class='demo1'></div>";
				header("location:../../View/user/addadminUser.view");
			}else{
				echo "
				<script>
				alert('Sorry system add user failed!!.');
				location.href = '{$_SERVER['HTTP_REFERER']}';
				</script>
				";
			}
		}
	}
	function input($nis,$name, $email, $phone, $address, $birth, $kelamin, $kelas, $password)
	{
		$pass1 = mysqli_real_escape_string($this->conn(), $password); 
		$usernameCheck = mysqli_query($this->conn() , "SELECT * FROM " . $this->table1 . " WHERE nis='$nis'");
		// var_dump(mysqli_fetch_assoc($emailCheck));die;
	    	// echo "string";die;
	    	// var_dump(mysqli_fetch_assoc($usernameCheck));die;
		if (mysqli_fetch_assoc($usernameCheck)) {
			echo "
			<script>
			alert('Students with the student are already registered!');
			location.href = '{$_SERVER['HTTP_REFERER']}';
			</script>
			";
			return false;
		}else{
			$convertPas = password_hash($password, PASSWORD_DEFAULT);
			$date=date("d-m-y");
			var_dump($nis,$name,$email,$convertPas,$kelamin,$kelas,$phone,$address,$birth);
			$query = mysqli_query($this->conn(), "INSERT INTO " . $this->table1 . " (nis,nama,email,password,kelamin_id,saldo,kelas_id,no_telephone,img,address,tanggal_lahir,verifed) VALUES ('$nis','$name', '$email', '$convertPas', '$kelamin', 0, '$kelas', '$phone', 0, '$address', '$birth', '$date')");
			// var_dump($query);die;
			if ($query == true) {	
				echo "<div class='demo1'></div>";
				header("location:../../View/user/createUser.view");
			}else{
				echo "
				<script>
				alert('Sorry system add user failed!!.');
				location.href = '{$_SERVER['HTTP_REFERER']}';
				</script>
				";
			}
		}
	}
	function tampiladmin()
	{
		$data = mysqli_query($this->conn() , "select * from " . $this->table . " inner join kelas on user.kelas_id = kelas.id_kelas");
		while ($dats = mysqli_fetch_array($data)) {
			$hasil[] = $dats;
		}
		return $hasil;
	}
	function tampilsiswa()
	{
		$kelas = $_SESSION['kelas'];
		$data = mysqli_query($this->conn() , "select * from " . $this->table1 . " inner join kelamin on siswa.kelamin_id = kelamin.id_kelamin inner join kelas on siswa.kelas_id = kelas.id_kelas where kelas_id=$kelas");
		while ($dats = mysqli_fetch_array($data)) {
			$hasil[] = $dats;
		}
		return $hasil;
	}
	function tampilsiswaById()
	{
		$id = $_SESSION['id'];
		$data = mysqli_query($this->conn() , "select * from " . $this->table1 . " inner join kelamin on siswa.kelamin_id = kelamin.id_kelamin inner join kelas on siswa.kelas_id = kelas.id_kelas where id_siswa=$id");
		while ($dats = mysqli_fetch_array($data)) {
			$hasil[] = $dats;
		}
		return $hasil;
	}

}
?>