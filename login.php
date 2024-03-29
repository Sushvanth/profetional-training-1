<!DOCTYPE html>
<html lang="en">
<head>
<title>login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
.navbar {
margin-bottom: 0;
border-radius: 0;
}

form {
 	background:#1c1d1f; 
  width:300px;
  margin:40px auto;
  border-radius:0.4em;
  border:1px solid #191919;
  overflow:hidden;
  position:relative;
  box-shadow: 0 5px 10px 5px rgba(0,0,0,0.2);
  
  top:8px;
  left:25px;
}

.inset {
 	padding:20px; 
  border-top:1px solid #19191a;
}


label {
 	color:#666;
  display:block;
  padding-bottom:9px;
}

input[type=text],
input[type=password],input[type=email] {
 	width:100%;
  padding:8px 5px;
  background:linear-gradient(#fof3f7, #f0f3f7);
  border:1px solid #222;
  box-shadow:
    0 1px 0 rgba(255,255,255,0.1);
  border-radius:0.3em;
  margin-bottom:20px;
}

label[for=remember]{
 	color:white;
  display:inline-block;
  padding-bottom:0;
  padding-top:5px;
}


input[type=checkbox] {
 	display:inline-block;
  vertical-align:top;
}

.p-container {
 	padding:0 20px 20px 20px; 
}

.p-container:after {
 	clear:both;
  display:table;
  content:"";
}

.p-container span {
  display:block;
  float:left;
  color:#0d93ff;
  padding-top:8px;
}

input[type=submit] {
 	padding:5px 20px;
  border:1px solid rgba(0,0,0,0.4);
  text-shadow:0 -1px 0 rgba(0,0,0,0.4);
  box-shadow:
    inset 0 1px 0 rgba(255,255,255,0.3),
    inset 0 10px 10px rgba(255,255,255,0.1);
  border-radius:0.3em;
  background:#0184ff;
  color:white;
  float:right;
  font-weight:bold;
  cursor:pointer;
  font-size:13px;
}
form h1 {
  font-size:18px;
  text-shadow:0 1px 0 black;
  text-align:center;
  padding:15px 0;
  border-bottom:1px solid rgba(0,0,0,1);
  position:relative;
}

form h1:after {
 	content:"";
  display:block;
  width:250px;
  height:100px;
  position:absolute;
  top:0;
  left:50px;
  pointer-events:none;
  transform:rotate(70deg);
  background:linear-gradient(50deg, rgba(255,255,255,0.15), rgba(0,0,0,0));
  
}

input[type=submit]:hover {
  box-shadow:
    inset 0 1px 0 rgba(255,255,255,0.3),
    inset 0 -10px 10px rgba(255,255,255,0.1);
}
/*
input[type=text]:hover,
input[type=password]:hover,
label:hover ~ input[type=text],
label:hover ~ input[type=password] {
 	background:#27292c;
}*/
*{
            margin:0;
            padding:0;
            font-family:Century 'MS Gothic';
        }

</style>
</head>
<body style="background-color:#49abd3;">
<nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>                        
</button>
<a class="navbar-brand" href="#">Logo</a>
</div>
<div class="collapse navbar-collapse" id="myNavbar">
<ul class="nav navbar-nav navbar-right">

<!-- <li><a href="home.html"><span class="glyphicon glyphicon-home"></span> Home</a></li> -->
<li><a href="Registration.php"><span class="glyphicon glyphicon-user"></span> register</a></li>
<!-- <li><a href="contact.html"><span class="glyphicon glyphicon-earphone"></span> Contact</a></li> -->

</ul>
</div>
</div>
</nav>
<form>
  <h1 style="color:white"text-align="center";>Sign in </h1>
  <div class="inset">
  <p>
    <label for="email">EMAIL ADDRESS</label>
    <input type="email" name="email" id="email" required>
  </p>
  <p>
    <label for="password">PASSWORD</label>
    <input type="password" id="psw" name="psw" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
  </p>
  
  </div>
  <p class="p-container">
    <span><a href="Registration.php">New user?</a></span>
    <input type="submit" name="login" id="go" value="Login">
  </p>

<?php
	  			if(isset($_REQUEST["login"]))
				{
					
					$user_id=$_REQUEST["email"];
					$password_id=$_REQUEST["psw"];
					$con=new mysqli("localhost","root","","testdb");
					$rs=$con->query("select * from login");
					while($cols=$rs->fetch_assoc())
					{
						if($user_id==$cols["email"] && $password_id==$cols["password"])
						{
							header("location:home.html");
							
						}
						/*else
						{
							 if($user_id!=$cols["email"] && $password_id==$cols["password"])
							{
								?>
								<script>
								alert ("Incorrect User id");
								</script>
								<?php
							}
							else if($user_id!=$cols["email"] && $password_id!=$cols["password"])
							{
								?>
								<script>
								alert ("Incorrect User id & password");
								</script>
								<?php
							}
							
							else if( $password_id!=$cols["password"])
							{
								?>
								<script>
								alert ("Incorrect Password");
								</script>
								<?php
							}
						}*/
					}
 ?>
								<script>
								alert ("Invalid credentials!");
								</script>
								<?php
				}
	  ?>
</form>

</body>
</html>
