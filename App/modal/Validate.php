<?php 
include '../../init.php';

$aksi1 = $_GET['aksi1'];
if ($aksi1 == "addUser") {
	$user->input($_POST['nis'],$_POST['name'], $_POST['email'], $_POST['phone'], $_POST['address'], $_POST['birth'], $_POST['kelamin'], $_POST['kelas'], $_POST['password']);
}elseif ($aksi1 == "addadminUser") {
	$user->inputadmin($_POST['nis'], $_POST['username'], $_POST['password'], $_POST['kelas']);
}elseif ($aksi1 == "logAdmin") {
	$auth->adminlogin($_POST['username'], $_POST['password']);
}elseif ($aksi1 == "log") {
	$auth->login($_POST['nis'], $_POST['password']);
}elseif ($aksi1 == "logout") {
	$auth->logout();
}elseif ($aksi1 == "addMutasi") {
	$transaction->addMutasi($_POST['rupiah'], $_POST['mutasi'], $_POST['id']);
}elseif ($aksi1 == "CP") {
	$message->CP($_POST['nis'], $_POST['oldpass'], $_POST['newpass'], $_POST['id']);
}elseif ($aksi1 == "CCA") {
	$message->CCA($_POST['oldNis'], $_POST['newNis'], $_POST['id']);
}elseif ($aksi1 == "ANS") {
	$message->ANS($_POST['nis'],$_POST['name'], $_POST['kelas'], $_POST['kelamin'], $_POST['id']);
}
?>