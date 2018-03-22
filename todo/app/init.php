<?php

session_start();

$_SESSION['user_id'] = 1;

$db = new PDO('mysql:dbname= ;host= ', 'username', 'password'); /* enter: db name; host; user; password */

if(!isset($_SESSION['user_id'])){
	die('You are not signed in!');
}
?>