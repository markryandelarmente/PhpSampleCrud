<?php

session_start();

if(!isset($_SESSION['id']) || (trim ($_SESSION['id']) == '' )) {
	header:("Location: index.php" );
	exit();
}  
 $session_id = $_SESSION['id'];
 
 $user_query = $connect->query("SELECT * FROM tb_information WHERE id = '$session_id'");
 	$user_row = $user_query->fetch();		
 $name = $user_row['name'];
 



?>