<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title> UPLOAD</title>
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
		
		<div class="container-fluid">
			<div class="row" id="login">
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-1">


					<div class="form-login col-md-12">
						<div class="col-md-10 col-md-offset-1">

							<div class="page-header">
								<h1>UPLOAD files</h1>
							</div>
<form enctype="multipart/form-data"
action="uploadck.php" method=post>

  Select image to upload:
<input name="file_Up"
type="file">
<input
type="submit"
value="Upload... "
name="submit">
</form>



                      </div>
                 </div>
            </div>
      </div>
<!--
$file_upload="true";
$file_up_size=$_FILES['file_up'][size];
echo$_FILES[file_up][name];
if($_FILES[file_up][size]>250000){$msg=$msg."Your up loaded file size is more than 250KB so please reduce the file size and then upload.<BR>";
$file_upload="false";}

if(!($_FILES[file_up]=="image/jpeg" OR $_FILES[file_up][type]=="image/gif"))
{
$msg=$msg."Your uploaded file must be of JPG of GIF.Other file types are not allowed<BR>";
$file_upload="false";
}
$file_name=$_FILES[file_up][name];
$add="upload/$file_name";
//the path with the file name where the will be stored

if($file_upload=="true")
{
	if(move_upload_file($_FILES[fileup][tmp_name],$add))
	{
		//do your coding here to give a thanks message of any other things.
		
	}
	else
	{
	echo $msg;	
	}
-->

</div>
</body>
</html> 