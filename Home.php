<!doctype html>
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
 
     #ty{
		    max-width: 1364px; 
	    } 
 .btn-success {
color: #ffffff;
text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
background-color: #83a94c;
background-image: linear-gradient(to bottom, #95bf52, #678943);
background-repeat: repeat-x;
border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
}
.btn{
    padding: 4px 12px;
    margin-bottom: 0;
    font-size: 14px;
    line-height: 20px;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
	border: 1px solid #bbbbbb;
	border-radius: 4px;
	box-shadow: inset 0 1px 0 rgba(255,255,255,.2), 0 1px 2px rgba(0,0,0,.05);
	}		
</style>
  <head>
<body>
<div id = "navhed" class = "navbar-header">
			<h1 id="nabi" class="text-center pt-3">Hotel<i class="fa fa-university" aria-hidden="true"></i>Paradise </h1>
			</div>	   	   
<nav id="by" class="navbar navbar-expand-md  navbar-dark">
  <a class="navbar-brand" href="#"><img src="images/a.jpg" alt="Logo" style="width:40px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
  
    <ul id="coll" class="navbar-nav">
	
      <li class="nav-item">
        <a class="nav-link" href="Home.php">Home</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="Reservation.php">Make a Reservation</a>
      </li> 
	  
       <li class="nav-item">
        <a class="nav-link" href="Gallery.php">Gallery</a>
      </li> 
	  
       <li class="nav-item">
        <a class="nav-link" href="About Us.php">About us</a>
      </li>	  
	  
	   <li class="nav-item">
        <a class="nav-link" href="Contact.php">Contact us</a>
      </li>
	  
	  <a href="SignUp.php" style="margin-left: 150px;" class="btn btn-success pt-2"><i class="fa fa-hand-point-up" aria-hidden="true"></i> Sign Up</a>
	  <a href="Login.php" style="margin-left: 20px;" class="btn btn-primary pt-2"><i class="fa fa-sign-in-alt" aria-hidden="true"></i> Sign In</a>
	  
    </ul>
	
  </div>  
  
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">
 <ul class="carousel-indicators">
  
    <li data-target="#demo" data-slide-to="0" class="active"></li>
	
    <li data-target="#demo" data-slide-to="1"></li>
	
    <li data-target="#demo" data-slide-to="2"></li>
	
	<li data-target="#demo" data-slide-to="3"></li>
	
	<li data-target="#demo" data-slide-to="4"></li>
	
	<li data-target="#demo" data-slide-to="5"></li>
	
	<li data-target="#demo" data-slide-to="6"></li>
	
	<li data-target="#demo" data-slide-to="7"></li>
	
  </ul>
   <div class="carousel-inner">
  
    <div class="carousel-item active">
	
      <img src="1.jpg" alt="Nature" width="100%" height="400">
	  
    </div>
	
    <div class="carousel-item">
	
      <img src="2.jpg" alt="Nature" width="100%" height="400">
	  
    </div>
	
    <div class="carousel-item">
	
      <img src="3.jpg" alt="Nature" width="100%" height="400">
	  
    </div>
	
  
    <div class="carousel-item">
	
      <img src="4.jpg" alt="Nature" width="100%" height="400">
	  
    </div>
	
  
    <div class="carousel-item">
	
      <img src="5.jpg" alt="Nature" width="100%" height="400">
	  
    </div>
	
	<div class="carousel-item">
	
      <img src="6.jpg" alt="Nature" width="100%" height="400">
	  
    </div>
	<div class="carousel-item">
	
      <img src="7.jpg" alt="Nature" width="100%" height="400">
	  
    </div>
	<div class="carousel-item">
	
      <img src="8.jpg" alt="Nature" width="100%" height="400">
	  
    </div>
	 <a class="carousel-control-prev" href="#demo" data-slide="prev">
  
    <span class="carousel-control-prev-icon"></span>
	
  </a>
  
  <a class="carousel-control-next" href="#demo" data-slide="next">
  
    <span class="carousel-control-next-icon"></span>
	
  </a> 
</div>
</div>
<div id="ty" style="background: #FFF5D3;" class="row pt-3 pb-3">
<div style="" class="col-6 pl-5"><img src="images/dic1.png" height="300px" width="600px"></div>
<div class="col-6 pl-5"><img src="images/dic2.jpg" height="300px" width="600px"></div>
</div>
<div id="ty" style="background: #FFF5D3;" class="row">
         
       <div style="" class="col-3">
       <h4 style="font-family: forte; background: #DA0755;" class="text-white">Our Rooms</h4>
	   <p style="color: #DA0755;"><i class="fas fa-angle-right"></i>Clean And Hygine Rooms</p>
	   <p style="color: #DA0755;"><i class="fas fa-angle-right"></i>Excellent Management of Every Rooms</p>
	   <p style="color: #DA0755;"><i class="fas fa-angle-right"></i>Rooms For Every Budget</p>
	   <p style="color: #DA0755;"><i class="fas fa-angle-right"></i>A Variety of Excellent Food and Drink To Your Room</p>
       </div>

       <div style="" class="col-3">
       <h4 style="font-family: forte; background: #719500;" class="text-white">Our Services</h4>
	   <p style="color: #719500;"><i class="fas fa-angle-right"></i>24x7 Service To Customers </p>
	   <p style="color: #719500;"><i class="fas fa-angle-right"></i>Guest Reviews and Testimonials</p>
	   <p style="color: #719500;"><i class="fas fa-angle-right"></i>A User-Friendly online Booking Engine</p>
	   <p style="color: #719500;"><i class="fas fa-angle-right"></i>Social Media</p>
       </div>
	   
	   <div style="" class="col-3">
       <h4 style="font-family: forte; background: #F3744A;" class="text-white">Smart Features</h4>
	   <p style="color: #F3744A;"><i class="fas fa-angle-right"></i>Intelligent Travel Assistance</p>
	   <p style="color: #F3744A;"><i class="fas fa-angle-right"></i>Room Cost Forecasting</p>
	   <p style="color: #F3744A;"><i class="fas fa-angle-right"></i>Disruption Management</p>
	   <p style="color: #F3744A;"><i class="fas fa-angle-right"></i>Dynamic Pricing</p>	   
       </div>
	     
	   <div style="" class="col-3">
       <h4 style="font-family: forte; background: #929292; width: 326px;" class="text-white">Location</h4>
	   <p><iframe width = "300" height = "200"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d442.1574199297994!2d79.13092489783863!3d21.136845659669284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4c742b8355b1d%3A0x14a5864727eef499!2sArc%20Technologies%20And%20Institutions%20.!5e1!3m2!1sen!2sin!4v1585643827654!5m2!1sen!2sin" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></p>
       </div>
	   
</div>

<div id="foot" class="">

   <div class="container row">  
         
     <div class="col-sm-3">
	        <h6 class="text-white pt-3 ">Address :</h6>  
<pre class="text-white">
Pt no:44 Madan Mohan complex 
behind Ganesh Temple 
Nandanvan,Nagpur-440024</pre>

	 </div>	 
      	
     <div class="col-sm-3 pl-4">
	        <h6 class="text-white pt-3 ">Contact No :</h6>  
<p class="text-white">
9975162682 , 9823460110 
</p>

	 </div>	 		
  
       <div class="col-sm-3">
	        <h6 class="text-white pt-3 ">Follow us at:</h6>  
<pre class="text-white">
<a class="text-white" href = "#" style="font-family: Andalus;"><i class="fab fa-facebook"></i>  Facebook </a> 
<a class="text-white" href = "#" style="font-family: Andalus;"><i class="fab fa-twitter"></i>  Twitter </a>
<a class="text-white" href = "#" style="font-family: Andalus;"><i class="fas fa-envelope"></i>  G-mail </a></pre>

	 </div>	

<div class="col-sm-3">
	        <h6 class="text-white pt-3 ">Sections:</h6>  
<pre class="text-white">
<a class="text-white" href = "#" style="font-family: Andalus;">|Home</a>    <a class="text-white" href = "#" style="font-family: Andalus;">|About Us </a>
<a class="text-white" href = "#" style="font-family: Andalus;">|Reservation</a><a  class="text-white"href = "#" style="font-family: Andalus;">|Contact Us </a>
<a class="text-white" href = "#" style="font-family: Andalus;">|Gallery </a>         </pre>
	 </div>	 
	  
   </div> 
  
</div>
</body>
</html>