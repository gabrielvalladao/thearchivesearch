<?php
	
	include '../inc/db_connect.php';
	include 'session.php';
	
	if(isset($_POST['delete']))
	{
		$sql="UPDATE search SET status='deleted' where id='".$_POST['id']."'";
		mysqli_query($conn,$sql);
	}
		
$limit = 25;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>All Links</title>

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
                    <a class="navbar-brand" href="#">All Links</a>
                </div>
                <?php include 'header.php'; ?>
            </div>
        </nav>

		<div class="content">
            <div class="container-fluid">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<?php
			$sql = "SELECT count(id) FROM search WHERE status='published'";  
			$rs_result = mysqli_query($conn,$sql);  
			$row = mysqli_fetch_array($rs_result,MYSQLI_NUM);  
			$total_records = $row[0];
			if($total_records<250)
			{
				$total_pages = ceil($total_records / $limit);  
				$pagLink = "<ul class='pagination'>";  
				for ($i=1; $i<=$total_pages; $i++) {  
							 $pagLink .= "<li class='page-item'><a class='page-link' href='?page=".$i."'>".$i."</a></li>";  
				};  
				echo $pagLink . "</ul>";  
			} else {
			$total_pages = ceil($total_records/$limit);
			$start_loop = $page;
			$difference = $total_pages - $page;
			if($difference <= 10)
			{
			 $start_loop = $total_pages - 10;
			}
			$end_loop = $start_loop + 8;
						
			echo "<ul  class='pagination'>";			
			if($page > 1)
			{
				
			if($page==$i)
						{
							$status=" active";
						}
						else
						{
							$status="";
						}
						
			 echo "<li class='page-item ".$status."'><a class='page-link' href='q=".$sresult."&page=1'>First</a></li>";
			 echo "<li class='page-item ".$status."'><a class='page-link' href='?page=".($page - 1)."'><<</a></li>";
			}
			for($i=$start_loop; $i<=$end_loop; $i++)
			{     

			if($page==$i)
						{
							$status=" active";
						}
						else
						{
							$status="";
						}
			 echo "<li class='page-item ".$status."'><a class='page-link' href='?page=".$i."'>".$i."</a></li>";
			}
			if($page <= $end_loop)
			{
			 echo "<li class='page-item ".$status."'><a class='page-link' href='?page=".($page + 1)."'>>></a></li>";
			 echo "<li class='page-item ".$status."'><a class='page-link' href='?page=".$total_pages."'>Last</a></li>";
			}
			echo "</ul>";
			}
		?>
                <div style="height:3500px" class="card card-map">
					<div class="header">
                        <h4 class="title">All Links</h4>
                    </div>
					<div class="map">
					<table class="table table-striped">
                                    <thead>
                                    	<th>ID</th>
                                    	<th>Titulo</th>
                                    	<th>Icon</th>
                                    	<th>Link</th>
                                    	<th>Descrição</th>
                                    	<th>Action</th>
                                    </thead>
                                    <tbody>
						<?php
						
						$sql="SELECT * FROM search where status='published' ORDER BY id ASC LIMIT $start_from, $limit";
						$result=mysqli_query($conn,$sql);
						$count=0;
						while($rows=mysqli_fetch_assoc($result)){
							$count++;
						
									echo ' <tr>
                                        	<td>'.$count.'</td>
                                        	<td>'.$rows['title'].'</td>
                                        	<td>'.$rows['icons'].'</td>
                                        	<td><span class="badge badge-success">'.$rows['url'].'</span></td>
                                        	<td>'.$rows['description'].'</td>
                                        	<td>
											<form action="" method="post">
											<input type="hidden" name="id" value="'.$rows['id'].'">
											<button name="delete" class="btn btn-danger"><i class="ti-trash"></i></button>
											</form>
											</td>
                                        </tr>';
						}
						?>
						</tbody>
						</table>
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
