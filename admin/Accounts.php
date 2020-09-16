<?php
session_start();
 if(!ISSET($_SESSION['ID'])){
		header("location:index.php");
	}
	
$servername = "localhost";
$username = "root";
$password = "";
$db = "hotelbook";
$con = mysqli_connect($servername, $username, $password,$db);


if(!$con) {
	
    die("Connection failed: " . mysqli_connect_error());
          
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
	
$sql = "SELECT * FROM admintable";

$records = mysqli_query($con,$sql);
	
?>   
<div class="container">
<a href="Add New User.php" class = "btn btn-success">Add</a><br><br>
<table class = "table table-bordered">
         <tr> 	
		       <thead class="thead-dark">
	           <th>ID</th>
			   <th>Name</th>
			   <th>Username</th>
			   <th>Password</th>
               <th>Delete</th>
	           <th>Update</th>			   
               </thead>			   
	    </tr>
<?php
            while($row = mysqli_fetch_array($records))
			{
				echo "<tr>";
				echo "<td>".$row['ID']."</td>";
				echo "<td>".$row['Name']."</td>";
				echo "<td>".$row['Username']."</td>";
				echo "<td>".$row['Password']."</td>";	
                echo "<td><a class='btn btn-danger' href=deletea.php?id=".$row['ID']."><i class='fas fa-trash-alt'></i> Delete</a></td>";	
                echo "<td><a class='btn btn-warning text-white' href=updatea.php?id=".$row['ID']."><i class='fas fa-edit'></i> Update</a></td>";
                echo "</tr>"; 				
			}
?>	 
</div>
</body>
</html>