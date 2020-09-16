<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  
  <style>
  .container{			  
              background: rgba(0, 151, 19, 0.3);
              -webkit-box-shadow: 3px 2px 5px 5px rgba(0,0,0,0.75);
              -moz-box-shadow: 3px 2px 5px 5px rgba(0,0,0,0.75);
              box-shadow: 3px 2px 5px 5px rgba(0,0,0,0.75);
            }
  body
  {
	  background: url('a.jpg')no-repeat;
	  background-size: cover;
  }
  </style>
</head>
<body>

<div class="container col-6 mt-5 pb-2 ">
<h3 class="text-danger">Sign Up</h3>
<form method="post" name="myForm" onsubmit="return validateForm()" action="">
<label>Full Name</label>
<input type="text" class="form-control" name="flname" required placeholder="Full Name">
<label>Mobile No</label>
<input type="number" class="form-control" name="mobno" required placeholder="Mobile No">
<label>City</label>
<Select name="cty" required class="form-control">
<option>Select</option>
<option>Nagpur</option>
<option>Pune</option>
<option>Mumbai</option>
<option>Gondia</option>
</Select>
<label>Username</label>
<input type="text" required class="form-control" name="uname" placeholder="Username">
<label>Password</label>
<input type="Password" required class="form-control" name="pswd" placeholder="Password">
<input type="submit" required class="btn btn-primary mt-3">
</form>
</div>

<script>
function validateForm() {
  var a = document.forms["myForm"]["flname"].value;
  var b = document.forms["myForm"]["cty"].value;
  var c = document.forms["myForm"]["uname"].value;
  var regex = /^[a-zA-Z]+$/;
  if (a == "") {
    alert("must be filled out");
    return false;
  }
  if(regex.test(a) == false )
  {				   
      alert("Full name must be in alphabets only");
	  return false;
  }
  if(regex.test(b) == false )
  {				   
      alert(" City must be in alphabets only");
	  return false;
  }
  if(regex.test(c) == false )
  {				   
      alert(" Username must be in alphabets only");
	  return false;
  }
}	 
</script>
</body>
</html>