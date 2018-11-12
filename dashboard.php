<?php include('db_con.php'); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard</title>

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


		<br>
		<br>
		<a href="add_student.php"><button type="submit">ADD STUDENT</button></a>
		<br>	
		<br>


		<table class="table_style">
			<tr>
				<th>ID</th>
				<th>FIRSTNAME</th>
				<th>LASTNAME</th>
			</tr>
			<?php
				$student_query = $connect->query('SELECT * FROM student_info');
				while ($row1 = $student_query->fetch()) 
				{
					$id = $row1['id'];
					?>
					<tr>
						<td><?php echo $row1['id']; ?></td>
						<td><?php echo $row1['fname']; ?></td>
						<td><?php echo $row1['lname']; ?></td>

						<td><a id="<?php echo $id;?>" href="edit_student.php <?php echo '?id='.$id;?>">Edit</a>
						</td>
						<td><a id="<?php echo $id;?>" href="delete_student.php <?php echo '?id='.$id;?>">Delete</a>
						</td>
						<td><a id="<?php echo $id;?>" href="view_student.php <?php echo '?id='.$id;?>">View</a>
						</td>
					</tr>
					<?php
				}
			?>
		</table>
</body>
</html>
