<?php 
   session_start();
  if(!ISSET($_SESSION['ID'])){
	header("location:index.php");
	}
?>
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

  
    <div id="cont" class="container bg-light fixed-top">
	
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

   <div class = "container-fluid mt-5">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<center><img src = "../images/back.jpg" width="800px" heigh="600px" /></center>
			</div>
		</div>
	
</body>
</html>