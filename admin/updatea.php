<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "hotelbook";
$con = mysqli_connect($servername, $username, $password,$db);

if(!$con){
	
 die("Connection failed: " . mysqli_connect_error());
          
	     }
		
$query = $con->query("SELECT * FROM `admintable` WHERE `ID` = '$_REQUEST[id]'") or die(mysqli_error());
		 $fetch = $query->fetch_array();
		
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
<form class="col-5" method = "POST" action = "updatea1.php?id=<?php echo $fetch['ID']?>">
<div class="form-group">
<input type="text" name="name" class = "form-control" value="<?php echo $fetch['Name']?>" placeholder="Name"><br><br>
<input type="text" name="uname" class = "form-control" value="<?php echo $fetch['Username']?>" placeholder="Username"><br><br>
<input type="text" name="pswd" class = "form-control" value="<?php echo $fetch['Password']?>" placeholder="Password"><br><br>
<input type="submit" class = "btn btn-primary form-control">
<div>
</form>
</div>
</body>
</html>