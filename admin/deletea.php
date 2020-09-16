<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "hotelbook";
$con = mysqli_connect($servername, $username, $password,$db);


    if(!$con) {
	
    die("Connection failed: " . mysqli_connect_error());
          
	       	 }
		 
      $sql = "DELETE FROM admintable WHERE ID='$_GET[id]'";
	  
	  if(mysqli_query($con,$sql))
	  {
		   echo "<script>location.href='Accounts.php'</script>";
	  }		  
	else
	{
	      echo "Not Deleted"; 		
	}			
		 		 
?>
