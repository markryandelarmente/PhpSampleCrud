<?php include('db_con.php');

?>


<!doctype html>
	<head>
	<meta charset="UTF-8">
	<?php include('session.php');?>
		<style>
			.table_style {
				border: 1px solid black;
				 border-collapse: collapse;
				width: 50%;
			}
			th{ text-align: left;}
		</style>
	</head>

	<body>
	<?php
		$query_home = $connect->query("SELECT * FROM tb_information WHERE id = '$session_id'")or die(mysql_error());
		$row = $query_home->fetch();		
	?>

		<p> hello <?php echo $row['name']?> </p> 
		<a href="logout.php"> LOGOUT </a>
		
		<h4><a href="dashboard.php">BACK</a></h4>


	<form method="post">
	<label> firstname</label><br>
	<input type="text" name="fname"><br>
	<label> lastname</label><br>
	<input type="text" name="lname"><br>
	<input type="submit" name="submit"> 
	</form>
	<?php
		if(isset ($_POST['submit']))
		{
			$fname= $_POST['fname'];
			$lname= $_POST['lname'];
			
			$insert = "insert into student_info(fname, lname )values('$fname','$lname' ) ";
			$connect-> query($insert);
			
			?>
			<script>
				alert("success");
			</script>
			<?php
		}
	
	
	?>
	
	
</body>
</html>