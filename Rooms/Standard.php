<?php 
  session_start();
  if(!ISSET($_SESSION['ID'])){
	echo "<script>location.href='../Login.php'</script>";
	}
?>
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
	  background: url(home_bg.jpg) no-repeat;
      background-size: cover;
    }
	 #demo   {
		        margin-right: 0px;
		        width: 100%;	
		      }
	#foot{
		    height: 110px;     
	     }		  
  #bi{ 
	   background: ;
       border-radius: 1%;
     }	
	 #frm{
		    background: #F5F5F5;
		    width:100%;
			border-radius: 1%;
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
  </head>
<body>
<div id = "navhed" class = "navbar-header">
			<h1 id="nabi" class="text-center pt-3"> Hotel <i class="fa fa-university" aria-hidden="true"></i> Paradise </h1>
			</div>		   	   
<nav id="by" class="navbar navbar-expand-md  navbar-dark">
  <a class="navbar-brand" href="#"><img src="../images/a.jpg" alt="Logo" style="width:40px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">Home</a>
      </li>   
      <li class="nav-item">
        <a class="nav-link" href="../Reservation.php">Make a Reservation</a>
      </li> 
       <li class="nav-item">
        <a class="nav-link" href="../Gallery.php">Gallery</a>
      </li> 
       <li class="nav-item">
        <a class="nav-link" href="../About us.php">About us</a>
      </li>	  
	   <li class="nav-item">
        <a class="nav-link" href="../Contact.php">Contact us</a>
      </li>
	   <li class = "nav-item">
   <a style="margin-left: 50px;" class="btn btn-danger" href="../logout.php"><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a>	
   </li>
    </ul>
  </div>  
</nav>
<br>
<div class="container">
<h3 class="text-center">Make A Reservation</h3><br><br>
 <div class="row" id = "con">
        <div class="col-md-6 col-sm-3  ">
		
           <img src = "p1.jpg" height = "250" width = "350">
           
        </div>
		

	   <form class="col-md-5 col-sm-3 form-inline" name="myForm" onsubmit="return validateForm()" method="post" action="../Submit1.php">
	   
	    
	     <input type="text"  class="form-control" placeholder="Enter Firstname" name="firstname" required>
		 		
	     <input type="text" class="form-control ml-4" placeholder="Enter Middlename" name="middlename" required>
		 
	     <input type="text" class="form-control" placeholder="Enter Lastname" name="lastname" required>
		 
	     <input type="text" class="form-control ml-4" placeholder="Enter Address" name="address" required>
		 
		 <input type="number" class="form-control" placeholder="Enter Contactno" name="contactno" required>
		 
	     <input type="text" class="form-control ml-4" readonly value="Standard"  name="rmtyp" required>
		  
		 <input type="text" class="form-control" readonly value="2000" name="amt" required>
		 
	    <input type = "date" class = "form-control ml-4" name = "date" required = "required" /><br><br>
				 				
		<input type="submit" class= " btn btn-primary" >
		  
	   </form>
	   </div>
<script>
function validateForm() {
  var x = document.forms["myForm"]["firstname"].value;
  var y = document.forms["myForm"]["middlename"].value;
  var z = document.forms["myForm"]["lastname"].value;
  var regex = /^[a-zA-Z]+$/;
  if (x == "") {
    alert("must be filled out");
    return false;
  }
  if(regex.test(x) == false )
  {				   
      alert("firstname must be in alphabets only");
	  return false;
  }
  if(regex.test(y) == false )
  {				   
      alert(" middlename must be in alphabets only");
	  return false;
  }
  if(regex.test(z) == false )
  {				   
      alert(" lastname must be in alphabets only");
	  return false;
  }
}	 
</script>	   
</body>
</html>