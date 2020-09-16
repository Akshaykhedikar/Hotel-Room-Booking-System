<?php

  session_start();
 
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
	$firstname = $_POST['firstname'];
	
	$middlename = $_POST['middlename'];
	
	$lastname = $_POST['lastname'];
	
	$address = $_POST['address'];
	
	$contactno = $_POST['contactno'];
	
	$roomtype = $_POST['rmtyp'];
	
	$_SESSION['roomtype'] = $_POST['rmtyp'];
	 
	 $amount = $_POST['amt'];
	
	$_SESSION['amount'] = $_POST['amt'];
	
	$_SESSION['firstname'] =  $_POST['firstname'];
	
	$date = $_POST['date'];
	
}

$sql = "INSERT INTO reg_cust (firstname , middlename , lastname , address , contactno , roomtype , amount  , checkin) 
                      VALUES ( '$firstname' , '$middlename'  , '$lastname'  , '$address' , '$contactno' , '$roomtype' ,'$amount' ,  '$date'  )";

if (mysqli_query($con, $sql)) {
	
	echo "<script>alert('Data Submitted Successfully')</script>";
    echo "<script>location.href='Reservation.php'</script>";		

   
} 
else {
       echo "Error occured while Inserting Record: " . $sql . "<br>" . mysqli_error($con);
     }

          mysqli_close($con);
					  
	

?>