<!DOCTYPE html>
<html>
<body>
	<?php 
		$servername = "localhost"; 
		$username = "root"; 
		$password = "";
		$dbname = "empires"; 
		// Create connection 
		$conn = mysqli_connect($servername, $username, $password, $dbname); 
		// Check connection 
		if (!$conn) 
		{ 
			die("Connection failed: " . mysqli_connect_error()); 
		} 
		$sql = "SELECT * FROM result"; 
		$results = mysqli_query($conn, $sql); 
		echo "<table border='1'>"; 
		echo "<tr>"; 
		echo "<th>Match No</th><th>Opponent</th><th>Status</th><th>Score</th><th>Scorer</th>"; 
		echo "</tr>"; 

		if (mysqli_num_rows($results) > 0) 
		{ 
			 // output data of each row 
			 while($row = mysqli_fetch_assoc($results)) 
			 { 
				 echo "<tr>"; 
				 echo "<td>" . $row['No'] . "</td>"; 
				 echo "<td>" . $row['Opponent'] . "</td>"; 
				 echo "<td>" . $row['Status'] . "</td>"; 
				 echo "<td>" . $row['Score'] . "</td>";
				 echo "<td>" . $row['Scorer'] . "</td>";
				 echo "</tr>"; 
			 } 
		} 
		else 
		{ 
			echo "0 results"; 
		} 
		echo "</table>"; 
		mysqli_close($conn); 
	?>

</body>
</html>