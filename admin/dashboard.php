<?php
include '../inc/db_connect.php';
include 'session.php';

$result = mysqli_query($conn,"SELECT * FROM link_clicks where date='".date('Y/m/d',strtotime("-6 days"))."'");
$sixweek = mysqli_num_rows($result);

$result = mysqli_query($conn,"SELECT * FROM link_clicks where date='".date('Y/m/d',strtotime("-5 days"))."'");
$fiveweek = mysqli_num_rows($result);

$result = mysqli_query($conn,"SELECT * FROM link_clicks where date='".date('Y/m/d',strtotime("-4 days"))."'");
$fourweek = mysqli_num_rows($result);

$result = mysqli_query($conn,"SELECT * FROM link_clicks where date='".date('Y/m/d',strtotime("-3 days"))."'");
$threeweek = mysqli_num_rows($result);

$result = mysqli_query($conn,"SELECT * FROM link_clicks where date='".date('Y/m/d',strtotime("-2 days"))."'");
$twoweek = mysqli_num_rows($result);

$result = mysqli_query($conn,"SELECT * FROM link_clicks where date='".date('Y/m/d',strtotime("-1 days"))."'");
$oneweek = mysqli_num_rows($result);

$result = mysqli_query($conn,"SELECT * FROM link_clicks where date='".date("Y/m/d")."'");
$week = mysqli_num_rows($result);
//week

$sql="SELECT count(id) FROM bio";
$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_array($result);
$bio=$rows[0];

$sql="SELECT count(id) FROM quick_know";
$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_array($result);
$ql=$rows[0];

$sql="SELECT count(id) FROM quick_response";
$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_array($result);
$ql=$rows[0];

$sql="SELECT count(id) FROM snippet";
$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_array($result);
$snippet=$rows[0];

$sql="SELECT count(id) FROM link_clicks";
$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_array($result);
$lk=$rows[0];

$sql="SELECT count(id) FROM search";
$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_array($result);
$link=$rows[0];
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Dashboard</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheetpu"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['DATE', 'VIEWS'],
          ['<?php echo date('Y/m/d',strtotime("-6 days"));?>',  <?php echo $sixweek; ?>],
          ['<?php echo date('Y/m/d',strtotime("-5 days"));?>',  <?php echo $fiveweek; ?>],
          ['<?php echo date('Y/m/d',strtotime("-4 days"));?>',  <?php echo $fourweek; ?>],
          ['<?php echo date('Y/m/d',strtotime("-3 days"));?>',  <?php echo $threeweek; ?>],
          ['<?php echo date('Y/m/d',strtotime("-2 days"));?>',  <?php echo $twoweek; ?>],
          ['Yesterday',  <?php echo $oneweek; ?>],
          ['Today',  <?php echo $week; ?>]
        ]);

         var options = {
          title: '',
          hAxis: {title: 'DATES',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
</head>
<body>

<div class="wrapper">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->
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
                    <a class="navbar-brand" href="#">Dashboard</a>
                    <a class="btn btn-info" href="../index.php">Home</a>
                    <a class="btn btn-info" href="publish">Publicar uma URL</a>
                    <a class="btn btn-info" href="../crawler/web-update.php">Atualizar Banco de Respostas</a>
                </div>
               <?php include 'header.php'; ?>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                            <i class="ti-server"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Bio Graphs</p>
                                            <?php echo $bio; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-success text-center">
                                            <i class="ti-link"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Total Links</p>
                                            <?php echo $link; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-danger text-center">
                                            <i class="ti-pulse"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Quick Links</p>
                                            <?php echo $ql; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-danger text-center">
                                            <i class="ti-pulse"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Snippets</p>
                                            <?php echo $snippet; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-info text-center">
                                            <i class="ti-hand-point-up"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Link Clicks</p>
                                            +<?php echo $lk; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Weekly Link Clicks</h4>
                            </div>
                            <div class="content">
                                <div id="chart_div" style="width: 100%; height: 500px"></div>
                            </div>
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

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

    	});
	</script>

</html>
