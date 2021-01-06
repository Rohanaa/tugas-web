<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db ='web';


$link =mysqli_connect($host,$user,$pass,$db);

if (!$link){
	die(mysqli_connect_error());
}
?>