<?php 
	include('connect.php');
	$id = $_GET['id'];
	$query = "DELETE FROM pinball WHERE Id = $id";
	$q = mysqli_query($con, $query);
	if ($q) {
		header("Location:admin.php");
	} else {
		echo 'Nese var';
	}
?>