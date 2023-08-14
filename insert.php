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
		if(!$conn) 
		{ 
			die("Connection failed: " . mysqli_connect_error()); 
		} 

		$sql = "INSERT INTO result (Opponent,Status,Score,Scorer) VALUES ('$_POST[Oppnentname]', '$_POST[Status]', '$_POST[Score]', '$_POST[Scorer]')"; 
		
		
		if (mysqli_query($conn, $sql)) 
		{ 
			echo "New record created successfully"; 
		} 
		else 
		{ 
			echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
		} 
		mysqli_close($conn); 
	?>
</body>
</html>