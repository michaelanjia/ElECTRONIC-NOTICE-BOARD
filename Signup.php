<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SIGNUP</title>
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
       
		  <div class="container" id="reg-page">
              
			         <div class="row">
				        <div class="col-md-6 col-md-offset-3 form-reg">
					       <div class="page-header">
						      <h3>SIGNUP</h3>
					           </div>
					    <div class="col-md-12">
						
						  <form method="post" class="form-horizontal">
							<div class="form-group">
								<label for="" class="text-primary">USERNAME:</label>
								<input type="text" name="" placeholder="Username..." id="" class="form-control">
							</div>
							<div class="form-group">
								<label for="" class="text-primary">FIRSTNAME:</label>
								<input type="text" name="" placeholder="Firstname..." id="" class="form-control">
							</div>
							<div class="form-group">
								<label for="" class="text-primary">LASTNAME:</label>
								<input type="text" name="" placeholder="lastname..." id="" class="form-control">
							</div>
							<div class="form-group">
								<label for="" class="text-primary">GENDER:</label>
								<div class="radio">
								  <label>
								    <input type="radio" name="gender" value="M" checked>
								    Male
								  </label>
								</div>
								<div class="radio">
								  <label>
								    <input type="radio" name="gender" value="F">
								    Female
								  </label>
								</div>
							</div>
							<div class="form-group">
								<label for="" class="text-primary">EMAIL:</label>
								<input type="text" name="" placeholder="Email..." id="" class="form-control">
							</div>
							<div class="form-group">
								<label for="" class="text-primary">REGISTRATION NUMBER:</label>
								<input type="text" name="" placeholder="Registration number..." id="" class="form-control">
							</div>
							<div class="form-group">
								<label for="" class="text-primary">COURSE:</label>
								<select name="" id="" class="form-control">
									<option value="null">--select--</option>
									<option value="IT">Information Technology</option>
									<option value="BBIT">Bachelor of Business Information Technology</option>
									<option value="MCS">Mathematics and Computer Science</option>
									<option value="STATISTICS">Statistics</option>
									<option value="MMPE">Mining and Mineral Proccessing</option>
									<option value="BPS">Bachelor of purchasing and Supplies</option>
									<option value="BCOM">Bachelor of Commerce</option>
								</select>
							</div>
							<div class="form-group">
								<label for="" class="text-primary">PASSWORD:</label>
								<input type="text" name="" placeholder="Password..." id="" class="form-control">
							</div>
							<div class="form-group">
								<label for="" class="text-primary">CONFIRM PASSWORD:</label>
								<input type="text" name="" id="" placeholder="confirm password..." class="form-control">
							</div>
							<div class="form-group">
								<input type="submit" name="" data-toggle="tooltip" data-replacement="right" title="click here to submit your details" id="" value="SIGNUP" class="btn btn-primary form-control">
							</div>
						</form>
					</div>
				</div>
				
			</div>

			<!--footer-->
			<?php include_once("includes/footer.php"); ?>
		</div>
		</div>
	</div>
</body>
</html>