<?php

spl_autoload_register(function($classM){
	require_once __DIR__ . '/App/modal/' . $classM . '.php';
});
	$role = new Role();
	$kelas = new Kelas();
	$message = new Message();
	$transaction = new Transaction();
	$kelamin = new Kelamin();
	$user = new User();
	$auth = new Auth();