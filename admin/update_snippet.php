<?php
	
	include '../inc/db_connect.php';
	include 'session.php';
	$alert=NULL;
	if(isset($_GET['id'])){
		$id=$_GET['id'];
	} else {
		header ('location:all_snippets');
	}
	
	$sql="SELECT * FROM snippet where id='".$id."'";
	$result=mysqli_query($conn,$sql);
	$rows=mysqli_fetch_assoc($result);
	
	if(isset($_POST['update']))
	{
		
		$title_strong=mysqli_real_escape_string($conn, $_POST['title_strong']);
        $desc_snippet=mysqli_real_escape_string($conn, $_POST['desc_snippet']);
        $title=mysqli_real_escape_string($conn, $_POST['title']);
		
		$sql="UPDATE snippet SET title_strong='".$title_strong."', desc_snippet='".$desc_snippet."', title='".$title."', url='".$_POST['url']."' where id='".$id."'";
		if(mysqli_query($conn,$sql))
		{
			//header('Location: '.$_SERVER['REQUEST_URI']);
			$alert='<div class="alert alert-success">
					  <strong>Success!</strong> This Quick Knowladge Data has been updated.
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

	<title>Edit Quick Link</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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
                    <a class="navbar-brand" href="#">Edit Snippets</a>
                </div>
                <?php include 'header.php'; ?>
            </div>
        </nav>

		<div class="content">
		<?php echo $alert; ?>
            <div class="container-fluid">
                <div style="height:700px;" class="card card-map">
					<div class="header">
                        <h4 class="title">Update Snippet</h4>
                    </div>
					<div class="map">
					<form action="" method="post">
						<div style="padding:50px;" class="row">
								<div class="form-group has-success">
									<label>Title Strong</label>
									<input name="title_strong" class="form-control" value="<?php echo $rows['title_strong'] ?>">
								</div>
                                <div class="form-group has-success">
									<label>Description</label>
									<input name="desc_snippet" class="form-control" value="<?php echo $rows['desc_snippet'] ?>">
								</div>
                                <div class="form-group has-success">
									<label>Title</label>
									<input name="title" class="form-control" value="<?php echo $rows['title'] ?>">
								</div>
                                <div class="form-group has-success">
									<label>URL</label>
									<textarea style="height:100px;" name="url" class="form-control"><?php echo $rows['url'] ?></textarea>
								</div>
								<button name="update" class="btn btn-success">PUBLISH</button>
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

	<script>
	$('#bold').on('click', function() {
   document.execCommand('bold', false, null);
});

$('#italic').on('click', function() {
   document.execCommand('italic', false, null);
});

$('#underline').on('click', function() {
   document.execCommand('underline', false, null);
});

$('#align-left').on('click', function() {
   document.execCommand('justifyLeft', false, null);
});

$('#align-center').on('click', function() {
   document.execCommand('justifyCenter', false, null);
});

$('#align-right').on('click', function() {
   document.execCommand('justifyRight', false, null);
});

$('#list-ul').on('click', function() {
   document.execCommand('insertUnorderedList', false, null);
});

$('#list-ol').on('click', function() {
   document.execCommand('insertOrderedList', false, null);
});

$('#fonts').on('change', function() {
   var font = $(this).val();
   document.execCommand('fontName', false, font);
});

$('#size').on('change', function() {
   var size = $(this).val();
   $('.editor').css('fontSize', size + 'px');
});

$('#color').spectrum({
   color: '#000',
   showPalette: true,
   showInput: true,
   showInitial: true,
   showInput: true,
   preferredFormat: "hex",
   showButtons: false,
   change: function(color) {
      color = color.toHexString();
      document.execCommand('foreColor', false, color);
   }
});

$('.editor').perfectScrollbar();
	</script>
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
