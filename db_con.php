<?php


		try 
		{
				$connect = new PDO('mysql:host=127.0.0.1; dbname=db_student', 'root', ''  );
				$connect-> setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

		}catch(PDOException $e) {
		
			echo $e-> getMessage();
			die();
	
		}

?>