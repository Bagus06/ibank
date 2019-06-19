<?php 
// require_once 'Connection.php';
class Message extends Connection
{
	public $table = "message";

	public function conn()
	{
		$db = parent::connect();
		return $db;
	}  	    

	function CP($nis,$oldpass, $newpass, $id)
	{
		$time = date("d/m, h:ia");
		$dari_role = 'siswa';
		$ke_role = 'admin';
		$subject = "Request to Change Password";
		$message = "Hello admin I want to change the old password (".$oldpass.") with a new password (".$newpass.") nis (".$nis.")";
		$query = mysqli_query($this->conn(), "INSERT INTO " . $this->table . " (dari_role, ke_role, dari,ke,subject,message,status,time) VALUES ('$dari_role', '$ke_role', '$id','1', '$subject', '$message', '1','$time')");
		echo "
			<script>
			alert('Success to sent message!');
			location.href = '../../View/message/showAllMessage';
			</script>
			";
	}
	function CCA($oldNis, $newNis, $id)
	{
		$time = date("d/m, h:ia");
		$dari_role = 'member';
		$ke_role = 'admin';
		$subject = "Request to Change Class Admin";
		$message = "Hello admin I want to change the old admin NIS (".$oldNis.") with a new admin NIS (".$newNis.")";
		$query = mysqli_query($this->conn(), "INSERT INTO " . $this->table . " (dari_role, ke_role, dari,ke,subject,message,status,time) VALUES ('$dari_role', '$ke_role', '$id','1', '$subject', '$message', '1','$time')");
		echo "
			<script>
			alert('Success to sent message!');
			location.href = '../../View/message/showAllMessage';
			</script>
			";
	}
	function ANS($nis, $name, $kelamin, $kelas, $id)
	{
		$time = date("d/m, h:ia");
		$dari_role = 'member';
		$ke_role = 'admin';
		$subject = "Request to Addition of New Students";
		$message = "hello, my admin asks for the addition of new students with names (".$name."), nis (".$nis."), gender (".$kelamin."), class (".$kelas."). Thank you";
		$query = mysqli_query($this->conn(), "INSERT INTO " . $this->table . " (dari_role, ke_role, dari,ke,subject,message,status,time) VALUES ('$dari_role', '$ke_role', '$id','1', '$subject', '$message', '1','$time')");
		echo "
			<script>
			alert('Success to sent message!');
			location.href = '../../View/message/showAllMessage';
			</script>
			";
	}
	function tampilmessage()
	{
		$id=$_SESSION['id'];
		$data = mysqli_query($this->conn() , "select * from " . $this->table);
		while ($dats = mysqli_fetch_array($data)) {
			$hasil[] = $dats;
		}
		return $hasil;
	}
	function readMessage()
	{
		$id = $_GET['id'];
		mysqli_query($this->conn() , "UPDATE " . $this->table . " SET status='0' WHERE id=$id");
		$data = mysqli_query($this->conn() , "select * from " . $this->table . " where id=$id");
		while ($dats = mysqli_fetch_array($data)) {
			$hasil[] = $dats;
		}
		return $hasil;
	}

}
?>