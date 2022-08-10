<?php
	
	include '../inc/db_connect.php';
	include 'session.php';
	$alert=NULL;
	
		if(isset($_GET['id'])){
		$id=$_GET['id'];
	} else {
		header ('location:all_bio');
	}
	
	$sql="SELECT * FROM bio where id='".$id."'";
	$result=mysqli_query($conn,$sql);
	$rows=mysqli_fetch_assoc($result);
	
	if(isset($_POST['bio']))
	{
		if($_FILES['p_image']['name']=='')
		{
			$pic=$rows['pic'];
		} else {
		$folder="../storage/images/bio/";
		$file_type=pathinfo($_FILES['p_image']['name'], PATHINFO_EXTENSION);
		$pic=rand(1000,100000)."-".$_FILES['p_image']['name'];
		move_uploaded_file($_FILES['p_image']['tmp_name'],$folder.$pic);
		}

		if($_FILES['p_pdf']['name']=='')
		{
			$pdf=$rows['pdf'];
		} else {
		$folder="../storage/pdf/";
		$file_type=pathinfo($_FILES['p_pdf']['name'], PATHINFO_EXTENSION);
		$pdf=$_FILES['p_pdf']['name'];
		move_uploaded_file($_FILES['p_pdf']['tmp_name'],$folder.$pdf);
		}

		if($_FILES['p_zip']['name']=='')
		{
			$zip=$rows['zip'];
		} else {
		$folder="../storage/zip/";
		$file_type=pathinfo($_FILES['p_zip']['name'], PATHINFO_EXTENSION);
		$zip=$_FILES['p_zip']['name'];
		move_uploaded_file($_FILES['p_zip']['tmp_name'],$folder.$zip);
		}

		$des=mysqli_real_escape_string($conn, $_POST['des']);
		$tag=mysqli_real_escape_string($conn, $_POST['tag']);
		$name=mysqli_real_escape_string($conn, $_POST['name']);

		$title1=mysqli_real_escape_string($conn, $_POST['title1']);
		$desc1=mysqli_real_escape_string($conn, $_POST['desc1']);
		$title2=mysqli_real_escape_string($conn, $_POST['title2']);
		$desc2=mysqli_real_escape_string($conn, $_POST['desc2']);
		$title3=mysqli_real_escape_string($conn, $_POST['title3']);
		$desc3=mysqli_real_escape_string($conn, $_POST['desc3']);
		$title4=mysqli_real_escape_string($conn, $_POST['title4']);
		$desc4=mysqli_real_escape_string($conn, $_POST['desc4']);
		$title5=mysqli_real_escape_string($conn, $_POST['title5']);
		$desc5=mysqli_real_escape_string($conn, $_POST['desc5']);
		
		$sql="UPDATE bio SET pic='".$pic."', pdf='".$pdf."', zip='".$zip."', name='".$_POST['name']."', cat='".$_POST['cat']."', des='".$_POST['des']."', tag='".$tag."', title1='".$_POST['title1']."', desc1='".$_POST['desc1']."', title2='".$_POST['title2']."', desc2='".$_POST['desc2']."', title3='".$_POST['title3']."', desc3='".$_POST['desc3']."', title4='".$_POST['title4']."', desc4='".$_POST['desc4']."', title5='".$_POST['title5']."', desc5='".$_POST['desc5']."', wiki='".$_POST['wiki']."', fb='".$_POST['fb']."', tw='".$_POST['tw']."', insta='".$_POST['insta']."', yt='".$_POST['yt']."' WHERE id='".$id."'";
		if(mysqli_query($conn,$sql))
		{
			$alert='<div class="alert alert-success">
					  <strong>Success!</strong> Graph Updated.
					</div>';
			echo '<meta http-equiv="refresh" content="3">';	
		} else {
			echo 'Failed to add data!';
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

	<title>Edit Bio</title>

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
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Edit Bio</a>
                </div>
                <?php include 'header.php'; ?>
            </div>
        </nav>

		<div class="content">
		<?php echo $alert; ?>
            <div class="container-fluid">
                <div style="height:2225px;" class="card card-map">
					<div class="header">
                        <h4 class="title">Edit Bio Graph</h4>
                    </div>
					<div style="padding:40px;" class="map">
					<div class="row">
						<form action="" method="post" enctype="multipart/form-data">
						<div class="col">
								<div class="form-group has-success">
									<label>Image</label>
									<input type="file" name="p_image" class="form-control"/>
								</div>
							</div>
						<div class="col">
							<div class="form-group has-success">
							<label>Faça upload de um PDF </em>(opcional)</em></label>
									<input type="file" name="p_pdf" class="form-control"/>
								</div>
						</div>
						<div class="col">
							<div class="form-group has-success">
							<label>Faça upload de um Arquivo .Zip </em>(opcional)</em></label>
									<input type="file" name="p_zip" class="form-control"/>
							</div>
						</div>
							<div class="col">
								<div class="form-group has-success">
									<label>Name</label>
									<input type="text" name="name" class="form-control" value="<?php echo $rows['name']; ?>"/>
								</div>
							</div>
							<div class="col">
								<div class="form-group has-success">
									<label>Categoria</label>
									<textarea name="cat" class="form-control"><?php echo $rows['cat']; ?></textarea>
								</div>
							</div>
							<div class="col">
								<div class="form-group has-success">
									<label>Des</label>
									<textarea name="des" class="form-control"><?php echo $rows['des']; ?></textarea>
								</div>
							</div>
							
								<div class="form-group has-success">
									<label>Tag</label>
									<textarea style="height:150px;" name="tag" class="form-control"><?php echo $rows['tag']; ?></textarea>
								</div>

							<div class="col">
								<div class="form-group has-success">
									<label>Titulo 1</label>
									<textarea name="title1" class="form-control"><?php echo $rows['title1']; ?></textarea>
								</div>
							</div>
							<div class="col">
								<div class="form-group has-success">
									<label>Descrição 1</label>
									<textarea name="desc1" class="form-control"><?php echo $rows['desc1']; ?></textarea>
								</div>
							</div>

							<div class="col">
								<div class="form-group has-success">
									<label>Titulo 2</label>
									<textarea name="title2" class="form-control"><?php echo $rows['title2']; ?></textarea>
								</div>
							</div>
							<div class="col">
								<div class="form-group has-success">
									<label>Descrição 2</label>
									<textarea name="desc2" class="form-control"><?php echo $rows['desc2']; ?></textarea>
								</div>
							</div>

							<div class="col">
								<div class="form-group has-success">
									<label>Titulo 3</label>
									<textarea name="title3" class="form-control"><?php echo $rows['title3']; ?></textarea>
								</div>
							</div>
							<div class="col">
								<div class="form-group has-success">
									<label>Descrição 3</label>
									<textarea name="desc3" class="form-control"><?php echo $rows['desc3']; ?></textarea>
								</div>
							</div>

							<div class="col">
								<div class="form-group has-success">
									<label>Titulo 4</label>
									<textarea name="title4" class="form-control"><?php echo $rows['title4']; ?></textarea>
								</div>
							</div>
							<div class="col">
								<div class="form-group has-success">
									<label>Descrição 4</label>
									<textarea name="desc4" class="form-control"><?php echo $rows['desc4']; ?></textarea>
								</div>
							</div>

							<div class="col">
								<div class="form-group has-success">
									<label>Titulo 5</label>
									<textarea name="title5" class="form-control"><?php echo $rows['title5']; ?></textarea>
								</div>
							</div>
							<div class="col">
								<div class="form-group has-success">
									<label>Descrição 5</label>
									<textarea name="desc5" class="form-control"><?php echo $rows['desc5']; ?></textarea>
								</div>
							</div>

							<div class="col">
								<div class="form-group has-success">
									<label>Wikipedia Link</label>
									<input type="text" name="wiki" class="form-control" value="<?php echo $rows['wiki']; ?>"/>
								</div>
							</div>
							<div class="col">
								<div class="form-group has-success">
									<label>Facebook Link</label>
									<input type="text" name="fb" class="form-control" value="<?php echo $rows['fb']; ?>"/>
								</div>
							</div>
							<div class="col">
								<div class="form-group has-success">
									<label>Twitter Link</label>
									<input type="text" name="tw" class="form-control" value="<?php echo $rows['tw']; ?>"/>
								</div>
							</div>
							<div class="col">
								<div class="form-group has-success">
									<label>Instagram Link</label>
									<input type="text" name="insta" class="form-control" value="<?php echo $rows['insta']; ?>"/>
								</div>
							</div>
							<div class="col">
								<div class="form-group has-success">
									<label>Youtube Channal Link</label>
									<input type="text" name="yt" class="form-control" value="<?php echo $rows['yt']; ?>"/>
								</div>
							</div><br>
							<button name="bio" class="btn btn-success">Publish</button>
							<button type="reset" class="btn btn-danger">Reset</button>
							</form>
						</div>
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
