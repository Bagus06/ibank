<?php
session_start();
class Auth extends Connection
{
	public $table = "siswa";
	public $table2 = "user";

	public function conn()
	{
		$db = parent::connect();
		return $db;
	}

	public function login($nis,$password)
	{
		$find = mysqli_query($this->conn() , "SELECT * FROM " . $this->table . " WHERE nis='$nis'");
		if (mysqli_num_rows($find) == 1) {
			$row = mysqli_fetch_assoc($find);
			$user = $row['nama'];
			$id = $row['id_siswa'];
			$kelas = $row['kelas_id'];

			if (password_verify($password, $row['password'])) {
				$_SESSION["login"] = true;
				$_SESSION["id"] = $id;
				$_SESSION["kelas"] = $kelas;
				echo "
				<script>
				location.href = '{$_SERVER['HTTP_REFERER']}';
				</script>
				";
				exit;
			}else{
				$_SESSION["not"] = 'Your password does not match!';
				echo "
				<script>
				location.href = '{$_SERVER['HTTP_REFERER']}';
				</script>
				";
			}
		}else{
			$_SESSION["not"] = 'Your Nis is not registered!';
			echo "
			<script>
			location.href = '{$_SERVER['HTTP_REFERER']}';
			</script>
			";
		}
		return $row;		    		
	}
	public function adminlogin($username,$password)
	{
		$find = mysqli_query($this->conn() , "SELECT * FROM " . $this->table2 . " WHERE username='$username'");
		if (mysqli_num_rows($find) == 1) {
			$row = mysqli_fetch_assoc($find);
			$id = $row['id_user'];
			$kelas = $row['kelas_id'];

			if (password_verify($password, $row['password'])) {
				$_SESSION["login"] = true;
				$_SESSION["id"] = $id;
				$_SESSION["kelas"] = $kelas;
				if ($row['role_id'] == 1) {
					$_SESSION["admin"] = true;
				}else if ($row['role_id'] == 2) {
					$_SESSION["member"] = true;
				}
				echo "
				<script>
				location.href = '{$_SERVER['HTTP_REFERER']}';
				</script>
				";
				exit;
			}else{
				$_SESSION["not"] = 'Your password does not match!';
				echo "
				<script>
				location.href = '{$_SERVER['HTTP_REFERER']}';
				</script>
				";
			}
		}else{
			$_SESSION["not"] = 'sorry, you cannot access this page!';
			echo "
			<script>
			location.href = '{$_SERVER['HTTP_REFERER']}';
			</script>
			";
		}
		return $row;		    		
	}
	public function logout()
	{
		$_SESSION = [];
		session_unset();
		session_destroy();
		header("location:../../");
	}
}

?>