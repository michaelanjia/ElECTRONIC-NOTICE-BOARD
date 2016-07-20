<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Index</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">


	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.cycle2.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<style>
body{
	padding-top:10px;
	margin-left:10px;
	margin-right:10px;
}

</style>
<body>
<div id="wrapper">
    <!--Navbar-->
     <nav class="navbar navbar-default navbar -fixed-top"id="my-navbar">
      <div class="container">
       <div class="navbar-hearder">
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			 <span class="icon-bar"></span>
			 <span class="icon-bar"></span>
			 <span class="icon-bar"></span>
			 <span class="icon-bar"></span>
			 </button>
	
        
                    <div class="collapse navbar-collapse" id="myNavbar">
                       <ul class="nav navbar-nav">
                           <li class="active"><a href="#home"><span class="home"></span> Home </a></li>
                           <li><a href="aboutus.php"><span class="aboutus"></span>aboutUs</a></li>
                           <li><a href="Gallery.php"><span class="Gallery"></span>Gallery</a></li>
                           <li><a href="#FAQ"><span class="FAQ"></span>FAQ</a></li>
                           <li class="last"><a href="#contactus"><span class="contactus"></span>Contact</a></li>
						   <li><a href="#home"><span class="home"></span> Notice</a></li>
                       </ul> 

				<ul class="nav navbar-nav navbar-right">
        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>	   
                    </div> 
	    </div> 
       </nav>
    </div>
</div>
</body>
</html>