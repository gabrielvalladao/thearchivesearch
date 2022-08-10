<?php
	
	include '../inc/db_connect.php';
	$alert=NULL;
	if(isset($_POST['bio']))
	{
		$folder="../storage/images/bio/";
		$file_type=pathinfo($_FILES['p_image']['name'], PATHINFO_EXTENSION);
		$pic=rand(1000,100000)."-".$_FILES['p_image']['name'];
		move_uploaded_file($_FILES['p_image']['tmp_name'],$folder.$pic);

		$folder="../storage/pdf/";
		$file_type=pathinfo($_FILES['p_pdf']['name'], PATHINFO_EXTENSION);
		$pdf=$_FILES['p_pdf']['name'];
		move_uploaded_file($_FILES['p_pdf']['tmp_name'],$folder.$pdf);

		$folder="../storage/zip/";
		$file_type=pathinfo($_FILES['p_zip']['name'], PATHINFO_EXTENSION);
		$zip=$_FILES['p_zip']['name'];
		move_uploaded_file($_FILES['p_zip']['tmp_name'],$folder.$zip);

		
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
		
		
		$sql="INSERT INTO bio (`pic`,`pdf`,`zip`,`name`,`cat`,`des`,`tag`,`title1`,`title2`,`title3`,`title4`,`title5`,`desc1`,`desc2`,`desc3`,`desc4`,`desc5`,`wiki`,`fb`,`tw`,`insta`,`yt`,`status`) VALUES ('".$pic."','".$pdf."','".$zip."','".$name."','".$cat."','".$des."','".$tag."','".$title1."','".$title2."','".$title3."','".$title4."','".$title5."','".$desc1."','".$desc2."','".$desc3."','".$desc4."','".$desc5."','".$_POST['wiki']."','".$_POST['fb']."','".$_POST['tw']."','".$_POST['insta']."','".$_POST['yt']."','published')";
		if(mysqli_query($conn,$sql))
		{
			$alert='<div class="alert alert-success">
					  <strong>Success!</strong> New Bio Graph Added.
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

	<title>Add New Bio</title>

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

    
		<div class="content">
		<?php echo $alert; ?>
            <div class="container-fluid">
                <div style="height:2215px;" class="card card-map">
					
					<div style="padding:40px;" class="map">
					<div class="row">
						<form action="" method="post" enctype="multipart/form-data">
						<div class="col">
								<div class="form-group has-success">
									<label>Imagem</label>
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
							<label>Faça upload de um arquivo Zip </em>(opcional)</em></label>
									<input type="file" name="p_zip" class="form-control"/>
								</div>
						</div>
						<div class="col">
								<div class="form-group has-success">
									<label>Título</label>
									<input type="text" name="name" class="form-control"/>
								</div>
						</div>
							
							<div class="col">
								<div class="form-group has-success">
									<label>Categoria</label>
									<textarea name="cat" class="form-control"></textarea>
								</div>
							</div>
							<div class="col">
								<div class="form-group has-success">
									<label>Resumo</label>
									<textarea name="des" class="form-control"></textarea>
								</div>
							</div>
							
								<div class="form-group has-success">
									<label>Tag (Pode ser um código HTML)</label>
									<textarea style="height:150px;" name="tag" class="form-control"></textarea>
								</div>

							<div class="col">
								<div class="form-group has-success">
									<label>Título 1</label>
									<textarea name="title1" class="form-control"></textarea>
								</div>
							</div>
							<div class="col">
								<div class="form-group has-success">
									<label>Descrição 1</label>
									<textarea name="desc1" class="form-control"></textarea>
								</div>
							</div>
							<div class="col">
								<div class="form-group has-success">
									<label>Título 2</label>
									<textarea name="title2" class="form-control"></textarea>
								</div>
							</div>
							<div class="col">
								<div class="form-group has-success">
									<label>Descrição 2</label>
									<textarea name="desc2" class="form-control"></textarea>
								</div>
							</div>
							<div class="col">
								<div class="form-group has-success">
									<label>Título 3</label>
									<textarea name="title3" class="form-control"></textarea>
								</div>
							</div>
							<div class="col">
								<div class="form-group has-success">
									<label>Descrição 3</label>
									<textarea name="desc3" class="form-control"></textarea>
								</div>
							</div>
							<div class="col">
								<div class="form-group has-success">
									<label>Título 4</label>
									<textarea name="title4" class="form-control"></textarea>
								</div>
							</div>
							<div class="col">
								<div class="form-group has-success">
									<label>Descrição 4</label>
									<textarea name="desc4" class="form-control"></textarea>
								</div>
							</div>
							<div class="col">
								<div class="form-group has-success">
									<label>Título 5</label>
									<textarea name="title5" class="form-control"></textarea>
								</div>
							</div>
							<div class="col">
								<div class="form-group has-success">
									<label>Descrição 5</label>
									<textarea name="desc5" class="form-control"></textarea>
								</div>
							</div>
							<div class="col">
								<div class="form-group has-success">
									<label>Wikipedia Link</label>
									<input type="text" name="wiki" class="form-control"/>
								</div>
							</div>
							<div class="col">
								<div class="form-group has-success">
									<label>Facebook Link</label>
									<input type="text" name="fb" class="form-control"/>
								</div>
							</div>
							<div class="col">
								<div class="form-group has-success">
									<label>Twitter Link</label>
									<input type="text" name="tw" class="form-control"/>
								</div>
							</div>
							<div class="col">
								<div class="form-group has-success">
									<label>Instagram Link</label>
									<input type="text" name="insta" class="form-control"/>
								</div>
							</div>
							<div class="col">
								<div class="form-group has-success">
									<label>Youtube Channal Link</label>
									<input type="text" name="yt" class="form-control"/>
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
