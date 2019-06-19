
<?php 
class Checked
{
	function __construct()
	{
				// var_dump($_SESSION["login"]);die;
		if (!isset($_SESSION["login"])) {
			header("location:../auth/auth.view.php?log=2");
		}
	}
}
$checked = new Checked();

?>