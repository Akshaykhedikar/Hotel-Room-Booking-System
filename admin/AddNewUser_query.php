<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "hotelbook";
$con = mysqli_connect($servername, $username, $password,$db);


if(!$con) {
	
    die("Connection failed: " . mysqli_connect_error());
          
		 }

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$name = $_POST['name'];
	
	$Username = $_POST['uname'];
	
	$Password = $_POST['pswd'];

}

$sql = "INSERT INTO admintable (Name , Username , Password) VALUES ( '$name' , '$Username'  , '$Password')";

if (mysqli_query($con, $sql)) {
	
	echo "<script>alert('New User Added Successfully')</script>";
    echo "<script>location.href='Accounts.php'</script>";		

   
} 
else {
       echo "Error occured while Inserting Record: " . $sql . "<br>" . mysqli_error($con);
     }

          mysqli_close($con);
					  
	

?>