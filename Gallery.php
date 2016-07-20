<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>gallery</title>
	<link rel="icon" href="images">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">


	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.cycle2.min.js"></script>
	<script type="text/javascript" src="js/jquery.cycle2.tile.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<style>
body{
	padding-top:20px;
	margin-left:-10px;
	margin-right:-10px;
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
                           <li <!--class="active"--><a href="index.php"><span class="home"></span> Home </a></li>
                           <li ><a href="aboutus.php"><span class="aboutus"></span>About Us</a></li>
                           <li  <!--class="active"--><a href="Gallery.php"><span class="Gallery"></span>Gallery</a></li>
                           <li  <!--class="active"--><a href="#FAQ"><span class="FAQ"></span>FAQ</a></li>
                           <li  <!--class="active"--><a href="#contactus"><span class="contactus"></span>Contact</a></li>
						   <li  <!--class="active"--><a href="#home"><span class="home"></span> Notice</a></li>
                       </ul>    	
                    </div> 
	    </div> 
       </nav>
    </div>
</div>
	 
	 
	 
	 
	<div id="wrapper">

		<!--navigation-->
		<?php include_once("includes/header.php"); ?>

		<div class="container">

			<div class="row hidden-xs">
				<div class="col-xs-12"
			
									<
				<div id="portfolio">
					<div id="slider" class="cycle-slideshow"
					data-cycle-speed="1000"
					data-cycle-timeout="3000"
					data-cycle-next="#next"
					data-cycle-prev="#prev"
					data-cycle-fx="tileSlide"
					data-cycle-pager="#pager"
					data-cycle-caption="#caption"
					data-cycle-caption-template="<p>{{cycleTitle}}</p>"
					data-cycle-manual-fx="scrollHorz"
					data-cycle-pause-on-hover="true">
						<img src="images/1.png" alt="" class="img-responsive" data-cycle-title="">
						<img src="images/2.png" alt="" class="img-responsive" data-cycle-title="">
						<img src="images/3.png" alt="" class="img-responsive" data-cycle-title="">
						<img src="images/4.png" alt="" class="img-responsive" data-cycle-title="">
				</div>
					<div id="pager"></div>
					<div id="caption"></div>
					<span class="glyphicon glyphicon-chevron-right" id="next"></span>
					<span class="glyphicon glyphicon-chevron-left" id="prev"></span>
					<div id="pager"></div>
					<div id="caption"></div>
			</div>
			
			
			
	<div class="container">		
  <div class="row">
      <div class="col-xs-4">
          <a href="images/1.png" class="thumbnail">
          <p>Pulpit Rock: A famous tourist attraction in Forsand, Ryfylke, Norway.</p>
          <img src="images/1.png" alt="Pulpit Rock" style="width:150px;height:150px">
          </a>
  </div>
  <div class="col-xs-4">
    <a href="images/2.png" class="thumbnail">
      <p>Moustiers-Sainte-Marie: Considered as one of the "most beautiful villages of France".</p>
      <img src="images/2.png" alt="Moustiers Sainte Marie" style="width:150px;height:150px">
    </a>
  </div>
  <div class="col-xs-4">
    <a href="images/4.png" class="thumbnail">
      <p>The Cinque Terre: A rugged portion of coast in the Liguria region of Italy.</p>
      <img src="images/4.png" alt="Cinque Terre" style="width:150px;height:150px">
    </a>
	
  </div>
</div>
		</div>



			<!--footer-->
			<?php include_once("includes/footer.php"); ?>
		</div>

	
	</div>
</body>
</html>