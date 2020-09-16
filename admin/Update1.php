<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "hotelbook";
$con = mysqli_connect($servername, $username, $password,$db);

if(!$con){
	
 die("Connection failed: " . mysqli_connect_error());
          
	     }

	$sql = "UPDATE reg_cust SET firstname='$_POST[fname]', middlename='$_POST[mname]', lastname='$_POST[lname]', address='$_POST[address]',  contactno='$_POST[contactno]', roomtype='$_POST[rmtyp]', amount='$_POST[amt]', checkin='$_POST[date]' WHERE id=$_REQUEST[id]";	 
	
	if(mysqli_query($con,$sql))
	{
    echo "<script>alert('Data updated Successfully')</script>";
    echo "<script>location.href='Reservation.php'</script>";		
    }
    else
	{
		echo "Not Updated";
	}
?>