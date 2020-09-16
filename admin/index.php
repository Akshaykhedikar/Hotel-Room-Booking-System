<html>
<head><title>login</title>
<meta charset = "utf-8">
  
  <meta name = "viewport" content = "width=device-width, initial-scale=1">
  
  <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  
  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  
  <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  
  <script src="https://kit.fontawesome.com/455b3880a2.js" crossorigin="anonymous"></script>
<style>
body{
	  background: url(home_bg.jpg)no-repeat ;
    }
.container
{
-webkit-box-shadow: 1px 3px 5px 12px rgba(0,0,0,0.75);
-moz-box-shadow: 1px 3px 5px 12px rgba(0,0,0,0.75);
box-shadow: 1px 3px 5px 12px rgba(0,0,0,0.75);

background: ;
}
.btn{

    }
img{
	 height: 60px;
	 width: 60px;
	 border-radius: 50%;
   }	
</style>
</head>
<body>
<div class="container col-5 pb-2" style="margin-top: 200px;">
<h3 class="text-white" style="margin-left: 190px;">Login Here</h3>
<img src="icon.jpg"style="margin-left: 230px;">
<form  method="post" class="col-6" action="submit.php">
 <label style="margin-left: 120px;" class="text-white">Username</label>
 <input style="margin-left: 120px;" type="text" class="form-control" name="uname" required placeholder="Username"><br>
  <label style="margin-left: 120px;" class="text-white">Password</label>
 <input style="margin-left: 120px;" type="password" class="form-control" required placeholder="Password" name="pswd"><br>
<input style="margin-left: 120px;" type="submit" class="btn btn-success">
</form>
</div>
</body>
</html>
