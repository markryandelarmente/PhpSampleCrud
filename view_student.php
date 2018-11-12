<?php include('db_con.php');
$id = $_GET['id'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>view</title>

	<?php include('session.php');?>

</head>
<body>
	<?php
	$query_home = $connect->query("SELECT * FROM tb_information WHERE id = '$session_id'")or die(mysql_error());
		$row = $query_home->fetch();
	?>

	<p> hello <?php echo $row['name']?> </p> 
		<a href="logout.php"> LOGOUT </a>
		
		<h4><a href="dashboard.php">BACK</a></h4>
		
		<?php
		$query_edit = $connect->query("select * from student_info where id = '$id' ");
		$row_edit = $query_edit->fetch();
		?>

		<h2> VIEW STUDENT </h2>

		<p>FIRSTNAME:  <?php echo $row_edit['fname'];?></p>
		<p>LASTNAME : <?php echo $row_edit['lname'];?></p>

</body>
</html>