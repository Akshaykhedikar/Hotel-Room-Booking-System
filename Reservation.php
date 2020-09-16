<?php 
   session_start();
  if(!ISSET($_SESSION['ID'])){
	header("location:Login.php");
	}
?>
<html>
<head>
<title> Hotel Booking Site</title>
 <meta charset = "utf-8">
  
  <meta name = "viewport" content = "width=device-width, initial-scale=1">
  
  <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  
  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  
  <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  
   <script src="https://kit.fontawesome.com/455b3880a2.js" crossorigin="anonymous"></script>
<style>
 li{
           margin-left: 68px;
   
      }	
  #by{background: #CE960E;}  
  body
    {
	  background: url(home_b.jpg) no-repeat;
      background-size: cover;
    }
	 #demo   {
		        margin-right: 0px;
		        width: 100%;	
		      }
	#foot{
		  background-color: #000000;
background-image: linear-gradient(315deg, #000000 0%, #414141 74%);       
	     }	
  #bi{ background: #F5F5F5;
       border: 1px solid #F5F5F5;
     }		
  #tik{ 
	  }
 #navhed{
	         
			 background: #000;	         
	         height: 90px; 
			 width: 100%;
        }		 
	#nabi{
		     color: #F7D63C;
		     font-size: 65px;
	         font-family: forte;			 
	     }
</style>
  <head>
<body>
<div id= "navhed" class = "navbar-header">
			<h1 id="nabi" class="text-center pt-3">Hotel<i class="fa fa-university" aria-hidden="true"></i>Paradise </h1>
			</div>	   	   
<nav id="by" class="navbar navbar-expand-md  navbar-dark">
  <a class="navbar-brand" href="#"><img src="images/a.jpg" alt="Logo" style="width:40px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
     
      <li class="nav-item active"">
        <a class="nav-link" href="Reservation.php">Make a Reservation</a>
       </li> 
       <li class="nav-item">
        <a class="nav-link" href="Gallery.php">Gallery</a>
      </li> 
       <li class="nav-item">
        <a class="nav-link" href="About us.php">About us</a>
      </li>	  
	   <li class="nav-item">
        <a class="nav-link" href="Contact.php">Contact us</a>
      </li>
	  <li class = "nav-item">
   <a style="margin-left: 50px;" class="btn btn-danger" href="logout.php"><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a>	
   </li>
    </ul>
  </div>  
</nav>
<br>

<h3 class="text-center">Make A Reservation</h3><br>
<div class="container">
<div class="row" id = "con">
<div id="bi" class="container col-md-6" style = "height:400px; width:470px;">
<img src = "images/1.jpg" height = "250" width = "350" class="mt-3 ml-4 ">
<h4 class="text-primary  " style= "margin-left: 130px;" >Standard</h4>
<h5 class="text-success  " style= "margin-left: 130px">Rs: 2000/-</h5>
<a style = "margin-left: 130px" href = "Rooms/Standard.php" class = "btn btn-danger  "><i class="fa fa-stream" aria-hidden="true"></i> Reserve</a>
</div>
<div id="bi" class="container col-md-6" style = "height:400px; width:470px;">
<img src = "images/3.jpg" height = "250" width = "350" class="mt-3 ml-4 ">
<h4 class="text-primary  " style= "margin-left: 130px;" >Superior</h4>
<h5 class="text-success  " style= "margin-left: 130px">Rs: 2400/-</h5>
<a style = "margin-left: 130px" href = "Rooms/Superior.php" class = "btn btn-danger  "><i class="fa fa-stream" aria-hidden="true"></i> Reserve</a>
</div>
<div id="bi" class="container col-md-6" style = "height:400px; width:470px;">
<img src = "images/4.jpg" height = "250" width = "350" class="mt-3 ml-4 ">
<h4 class="text-primary  " style= "margin-left: 130px;" >Super Delux</h4>
<h5 class="text-success  " style= "margin-left: 130px">Rs: 2800/-</h5>
<a style = "margin-left: 130px" href = "Rooms/Super Delux.php" class = "btn btn-danger  "><i class="fa fa-stream" aria-hidden="true"></i> Reserve</a>
</div>
<div id="bi" class="container col-md-6" style = "height:400px; width:470px;">
<img src = "images/5.jpg" height = "250" width = "350" class="mt-3 ml-4 ">
<h4 class="text-primary  " style= "margin-left: 130px;" >Jr.Suit</h4>
<h5 class="text-success  " style= "margin-left: 130px">Rs: 3800/-</h5>
<a style = "margin-left: 130px" href = "Rooms/Jr.Suit.php" class = "btn btn-danger  "><i class="fa fa-stream" aria-hidden="true"></i> Reserve</a>
</div>
</div>
</div>
<div id="foot" class="">

   <div class="container row">  
         
     <div class="col-sm-4 pl-5">
	        <h6 class="text-white pt-3  ">Address :</h6>  
<pre class="text-white">
Pt no:44 Madan Mohan complex behind 
Genesh Temple Nandanvan, Nagpur-440024</pre>

	 </div>	 
      	
     <div class="col-sm-4 pl-5">
	        <h6 class="text-white pt-3 ">Contact No :</h6>  
<p class="text-white">
9975162682 , 9823460110 
</p>

	 </div>	 		
  
      <div class="col-sm-4">
	        <h6 class="text-white pt-3 ">Follow us at:</h6>  
<pre class="text-white">
<a href = "#" class="text-white" style="font-family: Andalus;"><i class="fab fa-facebook"></i>  Facebook </a> 
<a href = "#" class="text-white" style="font-family: Andalus;"><i class="fab fa-twitter"></i>  Twitter </a>
<a href = "#" class="text-white" style="font-family: Andalus;"><i class="fas fa-envelope"></i>  G-mail </a></pre>

	 </div>	 
	  
   </div> 
  
</div>
</body>
</html>