<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "hotelbook";
$con = mysqli_connect($servername, $username, $password,$db);

if(!$con){
	
 die("Connection failed: " . mysqli_connect_error());
          
	     }
				
?>
<!doctype html>
<html>
<head>
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
	
    <a class = "nav-link" href = "Index.php"> Home </a>
	  
    </li>
	
	<li class = "nav-item">
	
    <a class = "nav-link" href = "Accounts.php"> Accounts </a>
	  
    </li>
	
	<li class = "nav-item">
	
    <a class = "nav-link" href = "Reservation.php"> Reservation </a>
	  
    </li>
	
	<li class = "nav-item">
	
    <a class = "nav-link" href = "#Payment Status"> Payment Status </a>
	  
    </li>
		
    </ul>

    </div>

	 <br><br><br>
<div class="container">
<h3 class="ml-2">Update Your Data</h3><br>
<form class="col-5" method = "POST" action = "AddNewUser_query.php">
<div class="form-group">
<label>Name</label>
<input type="text" name="name" class="form-control" placeholder="Name"><br><br>
<label>Username</label>
<input type="text" name="uname" class="form-control" placeholder="Username" ><br><br>
<label>Password</label>
<input type="password" name="pswd" class="form-control" placeholder="Password"><br><br>
<input type="submit" class = "btn btn-primary  form-control">
<div>
</form>
</div>
</body>
</html>