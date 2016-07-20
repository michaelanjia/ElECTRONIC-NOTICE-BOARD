<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">


	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.cycle2.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
	<div id="wrapper">

		<!--navigation-->
		<?php include_once("includes/header.php"); ?>

		<div class="container-fluid">
			<div class="row" id="login">
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-1">


					<div class="form-login col-md-12">
						<div class="col-md-10 col-md-offset-1">

							<div class="page-header">
								<h1>LOGIN</h1>
							</div>

							<form action="" class="horizontal">
								
								<div class="input-group form-group">
									<span class="input-group-addon">
										<b class="glyphicon glyphicon-user"></b>
									</span>
									<input type="text" placeholder="Enter username..." name="" id="" class="form-control">
								</div>

								<div class="input-group form-group">
									<span class="input-group-addon">
										<b class="glyphicon glyphicon-lock"></b>
									</span>
									<input type="password" placeholder="Enter password..." name="" id="" class="form-control">
								</div>	

								<div class="form-group">
									<input type="submit" value="LOGIN" name="" id="" class="form-control btn btn-primary">
								</div>			
								
							</form>

							<div class="row">
								<div class="col-md-6 col-sm-6">
									<a href=" reset password.php">Forgotten password?</a>
								</div>
							
							</div>
						</div>
					</div>


				</div>
			</div>
		</div>
		

	</div>
</body>
</html>