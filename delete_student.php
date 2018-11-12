<?php include('db_con.php');
$id = $_GET['id'];



?>

<?php
$query_edit = $connect->query("delete from student_info where id = '$id' ");
 ?>
	<script>
		alert("Deleted!");
		window.location = "dashboard.php";
	</script>
 <?php
?>


