<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

check_post();

function check_post(){
	$errors = [];
	$analyzed_data = $_SERVER['REQUEST_METHOD'];
	

	if ($analyzed_data === 'POST') {

		 
    $login = trim($_POST['user_login'] ?? '');
    $password = trim($_POST['user_pas'] ?? '');


    if ($login === '') {
        $errors['login'] = 'не заполнен';
    } 
	if ($password === '') {
		$errors['password'] = 'не заполнен';
	}

	if (count($errors) === 0) {
		$_SESSION['login'] = $login;
		$_SESSION['password'] = $password;
		$_SESSION['authorized'] = 'true';
		header('Location: index.php');
		exit;
		
	} else {
		return $errors;
	}


	}

}

function check_login(){
	if ($_SESSION['authorized'] === 'true') {
		echo "log-in is completed";
	}
	
}
// isset($_POST_Imitation['profile']['name']);
// isset($_POST_Imitation['profile']['email']);
// isset($_POST_Imitation['profile']['skills']);
// is_array($_POST_Imitation['profile']['skills']);
// count($_POST_Imitation['profile']['skills']) > 0;

	// if ($analyzed_data === 'POST'){

	// }

