<?php
include '../inc/db_connect.php';
include 'session.php';
$alert=NULL;
$sql="SELECT * FROM settings where id='1'";
$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_assoc($result);

$sql="SELECT * FROM admin where id='1'";
$result=mysqli_query($conn,$sql);
$admin=mysqli_fetch_assoc($result);

if(isset($_POST['admin']))
{
	$st=mysqli_query($conn,"UPDATE admin SET admin_username='".$_POST['admin_username']."', admin_password='".$_POST['admin_password']."'");
	if($st)
		{
			$alert='<div class="alert alert-success">
					  <strong>Success!</strong> Setting Updated.
					</div>';
			echo '<meta http-equiv="refresh" content="3">';	
		} else {
			
		}
}

if(isset($_POST['y']))
{
	$st=mysqli_query($conn,"UPDATE settings SET url_set='yes'");
	if($st)
		{
			$alert='<div class="alert alert-success">
					  <strong>Success!</strong> Setting Updated.
					</div>';
			echo '<meta http-equiv="refresh" content="3">';	
		} else {
			
		}
}

if(isset($_POST['n']))
{
	$st=mysqli_query($conn,"UPDATE settings SET url_set='no'");
	if($st)
		{
			$alert='<div class="alert alert-success">
					  <strong>Success!</strong> Setting Updated.
					</div>';
			echo '<meta http-equiv="refresh" content="3">';	
		} else {
			
		}
}

if(isset($_POST['uplogo']))
{
		$folder="../";
		$file_type=pathinfo($_FILES['logo']['name'], PATHINFO_EXTENSION);
		$pic='logo.png';
		if(move_uploaded_file($_FILES['logo']['tmp_name'],$folder.$pic))
		{
			$alert='<div class="alert alert-success">
					  <strong>Success!</strong> Setting Updated.
					</div>';
			echo '<meta http-equiv="refresh" content="3">';	
		} else {
			
		}
}

if(isset($_POST['upfav']))
{
		$folder="assets/img/";
		$file_type=pathinfo($_FILES['favicon']['name'], PATHINFO_EXTENSION);
		$pic='favicon.png';
		$pic1='apple-icon.png';
		if(move_uploaded_file($_FILES['favicon']['tmp_name'],$folder.$pic))
		{
			$alert='<div class="alert alert-success">
					  <strong>Success!</strong> Setting Updated.
					</div>';
			echo '<meta http-equiv="refresh" content="3">';	
		} else {
			
		}
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Settings</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!--  Fonts and icons     -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">

</head>
<body>

<div class="wrapper">

<?php include 'sidebar.php';?>

    <div class="main-panel">

		<div class="content">
            <div class="container-fluid">
			<?php echo $alert; ?>
                <div class="card card-map">
					<div class="header">
                        <h4 class="title">Settings</h4>
                    </div>
					<div style="height:800px;padding:20px;" class="map">
						<p>Everyone Can Publish URL Instantly <b>(Current: <?php echo $rows['url_set'];?>)</b></p>
						<form action="" method="post">
						<button name="y" class="btn btn-success">YES</button>
						<button name="n" class="btn btn-danger">NO</button>
						</form><hr>
						<p>Change Logo</p>
						<form action="" method="post" enctype="multipart/form-data">
						<input class="form-control" type="file" name="logo">
						<button name="uplogo" class="btn btn-success">Change</button>
						</form><hr>
						<p>FavIcon</p>
						<form action="" method="post" enctype="multipart/form-data">
						<input class="form-control" type="file" name="favicon">
						<button name="upfav" class="btn btn-success">Change</button>
						</form><hr>
						<p>Admin Username/Password</p>
						<form action="" method="post">
								<div class="form-group has-success">
									<label>Username</label>
									<input type="text" name="admin_username" class="form-control" value="<?php echo $admin['admin_username'];?>"/>
								</div>
								<div class="form-group has-success">
									<label>Password</label>
									<input type="text" name="admin_password" class="form-control" value="<?php echo $admin['admin_password'];?>"/>
								</div>
						<button name="admin" class="btn btn-success">CHANGE</button>
						</form>
					</div>
				</div>
			</div>
		</div>

		
        <?php include 'footer.php'; ?>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

    <script>
        $().ready(function(){
            demo.initGoogleMaps();
        });
    </script>

</html>
