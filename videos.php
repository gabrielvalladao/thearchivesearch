<?php
error_reporting(0);
$sresult=NULL;
include 'inc/config.php';
	
if(isset($_GET['q']))
{
		$sresult=$_GET['q'];
}
	
$limit = 8;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  

$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$start = $time;

	function get_domain($url)
								{
								  $pieces = parse_url($url);
								  $domain = isset($pieces['host']) ? $pieces['host'] : $pieces['path'];
								  if (preg_match('/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z\.]{2,6})$/i', $domain, $regs)) {
									return $regs['domain'];
								  }
								  return false;
								}
								
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $sresult; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container-fluid">
 <div class="row header">
    <div class="col-1" ><img style="margin-top:25px;width:130%;" src="logo.png"></div>
    <div class="col " style="padding:25px;">
		<form action="" method="get">
			<input style="width:100%;" type="text" class="form-control" name="q" value="<?php echo $sresult; ?>"><br>
			<div class="btn-group">
	  <a href="search?q=<?php echo $sresult; ?>"><button type="button" class="btn btn-default">All</button></a>
	</div>
	</div>
	<div class="col-2" style="margin-top:25px;">
		<button class="btn btn-primary">SEARCH</button></form>
	</div>
    <div class="col-4" ></div>
  </div>
  <div class="row cont">
	<div class="col-1"></div>
	<div style="padding:20px;" class="col">
	<?php $sql = "SELECT count(id) FROM search WHERE title LIKE '%$sresult%'";  
			$rs_result = mysqli_query($conn,$sql);  
			$row = mysqli_fetch_array($rs_result,MYSQLI_NUM);  
			$total_records = $row[0]; ?>
			
			<?php
			$sql="SELECT title FROM search WHERE title LIKE '%$sresult%'";
			$result=mysqli_query($conn,$sql);
			$count=mysqli_num_rows($result);
			$rows=mysqli_fetch_array($result);
			$mean=$rows[0];
			
			if($count==1)
			{
				if($sresult==$mean){
				echo '';
				} else {
					echo '<p>Do you mean <b><a href="?q='.$mean.'">'.$mean.'</a></b></p>';
				}
			}
			?>
	<p style="color:#898989;" >About <?php echo $total_records; ?> results <!--(<?php echo $total_time; ?> seconds)--> </p><br>
	<?php 
	$sql="SELECT * FROM search WHERE title LIKE '%$sresult%'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);

	if($count==1)
	{
	$sql="SELECT * FROM search WHERE title LIKE '%$sresult%'";
	$result=mysqli_query($conn,$sql);
	$rows=mysqli_fetch_assoc($result);
	echo $rows['data'];
	echo '
	<br>
	<br>';
	} else {}
  ?>
		<?php
			$sql="SELECT * FROM search WHERE title LIKE '%$sresult%' ORDER BY clicks DESC LIMIT $start_from, $limit";
			$result=mysqli_query($conn,$sql);
			
			while($rows=mysqli_fetch_assoc($result))
			{
				echo '
						<div class="search">
				
							';

							$url=get_domain($rows['url']);
							
							$yt_url="$url/watch";
							
							if($yt_url=='youtube.com/watch')
							{
								$video_id = explode("?v=", $rows['url']);
								$video_ids = $video_id[1];
								echo '
								<a target="_blank" href="url?id='.$rows['id'].'&url='.$rows['url'].'"><h4 class="title">'.$rows['title'].'</h4></a>
								<p class="link">'.$rows['url'].'&nbsp;<i class="fa fa-youtube-play fa-1.5x" style="color:#cd201f;" aria-hidden="true"></i></p>
								<div class="row">
									<div class="col"></div>
									<div class="col"></div>
								</div>
								<iframe width="200" height="100" src="https://www.youtube.com/embed/'.$video_ids.'" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe><br><br>
								<p class="des">'.$rows['des'].'</p>
								';
							}
							echo '
							<br>
							</div>
				';
			}
		?><br>
		<div class="row">
			<p class="rel">Searches related to <b><?php echo $sresult; ?></b></p>
			</div>
			<div style="margin-left:-8px;width:600px;" class="row">
			<br><?php
			
			$result = mysqli_query($conn,"SELECT * FROM keywords where title LIKE '%$sresult%'");
			$rows=mysqli_fetch_assoc($result);

			for($i=0;$i<1;$i++) {
			   $mark=explode(',', $rows['words']);//what will do here
			   foreach($mark as $out) {
				 echo '
						<div class="related">
							<a href="?q='.$sresult.''.$out.'">'.$sresult.' '.$out.'</a>
							</div>
				';
			   }
			}
			/*for($i=0;$i<10;$i++)
			{
				echo '
						<div class="related">
							Charlie Puth Song Download
							</div>
				';
			}*/
		?>
		</div><br>
		<?php
			$sql = "SELECT count(id) FROM search WHERE title LIKE '%$sresult%'";  
			$rs_result = mysqli_query($conn,$sql);  
			$row = mysqli_fetch_array($rs_result,MYSQLI_NUM);  
			$total_records = $row[0];
			if($total_records<80)
			{
				$total_pages = ceil($total_records / $limit);  
				$pagLink = "<ul class='pagination'>";  
				for ($i=1; $i<=$total_pages; $i++) {  
							 $pagLink .= "<li class='page-item'><a class='page-link' href='?q=".$sresult."&page=".$i."'>".$i."</a></li>";  
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
			 echo "<li class='page-item ".$status."'><a class='page-link' href='?q=".$sresult."&page=".($page - 1)."'><<</a></li>";
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
			 echo "<li class='page-item ".$status."'><a class='page-link' href='?q=".$sresult."&page=".$i."'>".$i."</a></li>";
			}
			if($page <= $end_loop)
			{
			 echo "<li class='page-item ".$status."'><a class='page-link' href='?q=".$sresult."&page=".($page + 1)."'>>></a></li>";
			 echo "<li class='page-item ".$status."'><a class='page-link' href='?q=".$sresult."&page=".$total_pages."'>Last</a></li>";
			}
			echo "</ul>";
			}
		?>
	</div><br><br>
	<div class="col-4"><br>
	<?php 
	$sql="SELECT * FROM bio WHERE status='published' and title LIKE '%$sresult%'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);

	if($count==1)
	{
	$sql="SELECT * FROM bio WHERE status='published' and title LIKE '%$sresult%'";
	$result=mysqli_query($conn,$sql);
	$rows=mysqli_fetch_assoc($result);
	echo '
	<div class="card" style="width:400px">
    <img class="card-img-top" src="images/bio/'.$rows['pic'].'" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">'.$rows['title'].'</h4><p style="color:#23ce5f;">'.$rows['cat'].'</p>
      <p class="card-text" style="font-size:15px;">'.$rows['des'].'<a href="'.$rows['wiki'].'">Wikipedia</a></p>
      <hr>
	  ';
	  if(!empty($rows['fb']))
	  {
		echo '<a href="'.$rows['fb'].'"><i class="fa fa-facebook-official fa-3x" style="color:#3B5998;" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
	  }
	  
	   if(!empty($rows['tw']))
	  {
		echo '<a href="'.$rows['tw'].'"><i class="fa fa-twitter fa-3x" style="color:#00aced;" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
	  }

	  if(!empty($rows['insta']))
	  {
		echo '<a href="'.$rows['insta'].'"><i class="fa fa-instagram fa-3x" style="color:#e4405f;" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
	  }
	  
	   if(!empty($rows['yt']))
	  {
		echo '<a href="'.$rows['yt'].'"><i class="fa fa-youtube-play fa-3x" style="color:#cd201f;" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
	  }
    echo '</div>
  </div>';
	} else {}
  ?>
	</div>
  </div>
   <!--<div class="row footer">
    <div class="col-1" ></div>
    <div class="col" style="padding:25px;">
	</div>
    <div class="col-4" ></div>
  </div>-->
  <br>
</div>
</body>
</html>
  <?php

$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$finish = $time;
$globals['total_time'] = round(($finish - $start), 4);
//echo $globals['total_time']
?>
