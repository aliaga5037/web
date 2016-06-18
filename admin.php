<?php
	include('connect.php');
	$base = 'SELECT * FROM Pinball';
	$query = mysqli_query($con, $base);
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<style>
			
			a{

				text-decoration: none;
			}
		</style>
	</head>
	<body>
		<table>
			<thead>
				<th>id</th>
				<th>filmin adi</th>
				<th>kateqoriya</th>
				<th>on soz</th>
				<th>full soz</th>
				<th>sekil</th>
			</thead>
			<tbody>
				<?php 
					while ($row = mysqli_fetch_assoc($query)) {
						echo "<tr>";
						echo "<td>".$row['Id']."</td>";
						echo "<td>".$row['filmin_adi']."</td>";
						echo "<td>".$row['Kateqoriya']."</td>";
						echo "<td>".$row['on_soz']."</td>";
						echo "<td>".$row['full_soz']."</td>";
						echo "<td>".$row['sekil']."</td>";
						echo "<td>"."<a href='del.php?id=".$row['Id']."'>SIL</>&nbsp&nbsp&nbsp<a href='edit.php?id=".$row['Id']."'>EDIT</a> "."</td>";
						echo "</tr>";
					}

				?>
			</tbody>
		</table>
		<a href="insert.php">Add</a>
	
	</body>
</html>