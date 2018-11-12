<?php include('db_con.php');
?>


<!Doctype html>
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
		$query_home = mysql_query("SELECT * FROM student_info WHERE id = '$session_id'")or die(mysql_error());
		$query_row = mysql_fetch_array($query_home);		
	?>

		<p> hello <?php echo $query_row['fname']?> </p> 
		<a href="logout.php"> LOGOUT </a>
	
	<br>
	</br>
	<table class="table_style">
		<tr>
			<th>Firstname</th>
			<th>Lastname</th>
			
		</tr>
		<?php
			$student_query = mysql_query("SELECT * FROM student_info")or die(mysql_error());
			while($row = mysql_fetch_array($student_query))
			{
				
				$id = $row['id'];
		?>
				<tr>
					<td><?php echo$row['student_id']; ?></td>
					<td><?php echo$row['fname']; ?></td>
					<td><?php echo$row['lname']; ?></td>
				</tr>
				<?php
			}
				?>
	</table>


</body>
</html>