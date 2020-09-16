<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "hotelbook";
$con = mysqli_connect($servername, $username, $password,$db);


    if(!$con) {
	
    die("Connection failed: " . mysqli_connect_error());
          
	       	 }
		 
      $sql = "DELETE FROM reg_cust WHERE ID='$_GET[id]'";
	  
	  if(mysqli_query($con,$sql))
	  {
         echo "<script>location.href='Reservation.php'</script>";
	  }		  
	else
	{
	      echo "Not Deleted"; 		
	}			
		 		 
?>
