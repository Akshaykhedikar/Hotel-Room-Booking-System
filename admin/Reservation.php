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
		 
 if(!ISSET($_SESSION['ID'])){
     header("location:index.php");
	}
 ?>

<!doctype html>
<html>
<head>
<title>Admin Panel</title>
<meta charset = "utf-8">
  
  <meta name = "viewport" content = "width=device-width, initial-scale=1">
  
  <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  
  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  
  <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  
   <script src="https://kit.fontawesome.com/455b3880a2.js" crossorigin="anonymous"></script>
   
    <style>
	
	  #tex{
		     font-size: 85px;
	         font-family: forte;
	      }
	
	
    </style>
</head>
<body>

  
    <div class="container bg-light">
	
    <h1 id="tex" class="text-center"> Admin Panel</h1>
	
    <br><br>
	   
    <ul class = "nav pl-5">
  
    <li class = "nav-item">
	
    <a class = "nav-link" href = "Home.php"> Home </a>
	  
    </li>
	
	<li class = "nav-item">
	
    <a class = "nav-link" href = "Accounts.php"> Accounts </a>
	  
    </li>
	
	<li class = "nav-item">
	
    <a class = "nav-link" href = "Reservation.php"> Reservation </a>
	  
    </li>
	
	
	<li class = "nav-item">
   <a style="margin-left: 500px;" class="btn btn-danger" href="logout.php"><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a>	
   </li>	
    </ul>

    </div>

	 <br><br><br>
	 
	 <?php
	 
	  $sql = "SELECT * FROM reg_cust";
	  
	  $records = mysqli_query($con,$sql);
	
	 ?>
	<div class="container"> 
	<table class = "table table-bordered">
         <tr> 	
		       <thead class="thead-dark">
	           <th>Id</th>
			   <th>Firstname</th>
			   <th>Middlename</th>
			   <th>Lastname</th>
			   <th>Address</th>
		       <th>Contactno</th>
			   <th>Roomtype</th>
			   <th>Amount</th>
			   <th>Checkin</th>
			   <th>Delete</th>
	           <th>Update</th> 
               </thead>			   
	    </tr>
	  <?php
            while($row = mysqli_fetch_array($records))
			{
				echo "<tr>";
				echo "<td>".$row['id']."</td>";
				echo "<td>".$row['firstname']."</td>";
				echo "<td>".$row['middlename']."</td>";
				echo "<td>".$row['lastname']."</td>";
				echo "<td>".$row['address']."</td>";
				echo "<td>".$row['contactno']."</td>";
				echo "<td>".$row["roomtype"]."</td>";
				echo "<td>".$row["amount"]."</td>";
				echo "<td>".$row["checkin"]."</td>";	
                echo "<td><a class='btn btn-danger' href=delete.php?id=".$row['id']."><i class='fas fa-trash-alt'></i> Delete</a></td>";	
                echo "<td><a class='btn btn-warning text-white' href=Update.php?id=".$row['id']."><i class='fas fa-edit'></i> Update</a></td>";
                echo "</tr>"; 				
			}
      ?>	 
     </div>	  
</body>
</html>