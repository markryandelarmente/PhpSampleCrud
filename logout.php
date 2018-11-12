<?php
include('db_con.php');
include('session.php');
	
	
session_destroy();
header('location: index.php');
?>