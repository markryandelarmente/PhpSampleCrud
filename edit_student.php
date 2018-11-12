<?php include('db_con.php');
$id = $_GET['id'];


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>EDIT STUDENT</title>

	<?php include('session.php');?>

</head>
<body>
	<?php
	$query_home = $connect->query("SELECT * FROM tb_information WHERE id = '$session_id'")or die(mysql_error());
	$row = $query_home->fetch();
	?>

	<p>hello <?php echo $row['fname']?></p>
	<a href="logout.php">LOGOUT</a>

	<a href="dashboard.php">BACK</a>
<?php
	
	$query_edit = $connect->query("select * from student_info where id = '$id' ");
	$row_edit = $query_edit->fetch();

?>

	<h2> EDIT STUDENT </h2>
	<form method="post">
	<label> firstname</label><br>
	<input type="text" name="fname" value="<?php echo $row_edit['fname'];?>"><br>
	<label>lastname</label><br>
	<input type="text" name="lname" value="<?php echo $row_edit['lname'];?>"><br>
	<br>
	<input type="submit" name="submit"> 
	</form>

	<?php 
		if(isset($_POST['submit']))
		{
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];

			$update = "update student_info set fname='$fname', lname='$lname' where id = '$id' ";
			$connect-> query($update);

			?>
			<script>
				alert("updated!")
			</script>
			<?php
		}



	?>
</body>
</html>