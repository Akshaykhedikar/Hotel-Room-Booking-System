<?php
include 'config.php';

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$fullname = $_POST["flname"];
	
	$mobileno = $_POST["mobno"];
	
	$city = $_POST["cty"];
	
	$uname = $_POST["uname"];
	
	$pswd = $_POST["pswd"];
	
}

$sql = "INSERT INTO rusers(Full_Name , MobileNo , City , username , password) 
VALUES('$fullname' , '$mobileno' , '$city' , '$uname' , '$pswd')";

if (mysqli_query($con, $sql)) {
	
	echo "<script>alert('Data Submitted Successfully')</script>";
    echo "<script>location.href='Login.php'</script>";		

   
} 
else {
       echo "Error occured while Inserting Record: " . $sql . "<br>" . mysqli_error($con);
     }

          mysqli_close($con);
		




















?>