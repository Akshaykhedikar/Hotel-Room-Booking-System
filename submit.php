<?php

$conn = new mysqli("localhost", "root", "", "hotelbook") or die(mysqli_error());

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	    $username = $_POST['uname'];	
	    $password = $_POST['pswd'];
		$query = $conn->query("SELECT * FROM `rusers` WHERE `username` = '$username' && `password` = '$password'") or die(mysqli_error());
		$fetch = $query->fetch_array();
		$row = $query->num_rows;
		
		if($row > 0){
			session_start();
			$_SESSION['ID'] = $fetch['ID'];		
			echo "<script>location.href='Reservation.php'</script>";	
		}else{
			echo "<script>alert('Invalid username or password')</script>";
			echo "<script>location.href='Login.php'</script>";
		}
	}
	
?>	
