<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "hotelbook";
$con = mysqli_connect($servername, $username, $password,$db);

if(!$con){
	
 die("Connection failed: " . mysqli_connect_error());
          
	     }

	$sql = "UPDATE admintable SET Name='$_POST[name]', Username='$_POST[uname]', Password='$_POST[pswd]'  WHERE ID=$_REQUEST[id]";	 
	
	if(mysqli_query($con,$sql))
	{
    echo "<script>alert('Data updated Successfully')</script>";
    echo "<script>location.href='Accounts.php'</script>";		
    }
    else
	{
		echo "Not Updated";
	}
?>