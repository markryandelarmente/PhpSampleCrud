<?php include('db_con.php'); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="login-form">
		<form action="index.php" method="POST">
			<input name="username" type="text" placeholder="USERNAME">
			<br>
			<input name="password" type="password" placeholder="PASSWORD">
			<br>
			<input type="submit" name="submit" value="LOGIN">
		</form>
	</div>s
</body>
</html>

<?php
	if(isset($_POST['submit'])) 
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$result=$connect-> query("select * from tb_information where username='$username' and password='$password' "); 	
		$count = $result->rowCount();
		$row = $result->fetch();	
		
		if($count > 0)
		{
			session_start();   								
			$_SESSION['id']=$row['id'];				
			?>	
			<script>
				alert('Succesfully Login!!');
				window.location = "dashboard.php";
			</script>
			<?php
		}
		else 
		{
			?>	
			<script>
				alert('login error!!');
				window.location = "index.php";
			</script>
			<?php
		}
	}
	
	?>