<?php 
error_reporting(0);
$sresult=NULL;
include 'inc/db_connect.php';
	
if(isset($_GET['q']))
{
		$sresult=$_GET['q'];
		if($_GET['q']=='')
		{
			header('location:search.php');
		}
}

	$sql="SELECT * FROM quick_know WHERE status='published' and name LIKE '%$sresult%'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);

	if($count==1)
	{
	$sql="SELECT * FROM quick_know WHERE status='published' and name LIKE '%$sresult%'";
	$result=mysqli_query($conn,$sql);
	$rows=mysqli_fetch_assoc($result);
	echo '
	<div class="card" style="width:650px">    
    <div class="card-body">
           
	  ';
	  if(!empty($rows['name']))
	  {
		echo '
	  <p class="card-quick-title-name">'.$rows['name'].'</p>
	  <br>
	  <br>
	  ';
	  }
	  if(!empty($rows['title1']))
	  {
		echo '
		<p class="card-quick-title">'.$rows['title1'].'</p>
	  ';
	  }
	  if(!empty($rows['desc1']))
	  {
		echo '
		<p class="card-quick-desc">'.$rows['desc1'].'</p>
	  ';
	  }
	  if(!empty($rows['title2']))
	  {
		echo '
		<p class="card-quick-title">'.$rows['title2'].'</p>
	  ';
	  }
	  if(!empty($rows['desc2']))
	  {
		echo '
		<p class="card-quick-desc">'.$rows['desc2'].'</p>
	  ';
	  }
	  if(!empty($rows['title3']))
	  {
		echo '
		<p class="card-quick-title">'.$rows['title3'].'</p>
	  ';
	  }
	  if(!empty($rows['desc3']))
	  {
		echo '
		<p class="card-quick-desc">'.$rows['desc3'].'</p>
	  ';
	  }
	  if(!empty($rows['title4']))
	  {
		echo '
		<p class="card-quick-title">'.$rows['title4'].'</p>
	  ';
	  }
	  if(!empty($rows['desc4']))
	  {
		echo '
		<p class="card-quick-desc">'.$rows['desc4'].'</p>
	  ';
	  }
	  if(!empty($rows['title5']))
	  {
		echo '
		<p class="card-quick-title">'.$rows['title5'].'</p>
	  ';
	  }
	  if(!empty($rows['desc5']))
	  {
		echo '
		<p class="card-quick-desc">'.$rows['desc5'].'</p>
		<hr>
	  ';
	  }
	  if(!empty($rows['title6']))
	  {
		echo '
		<p class="card-quick-title">'.$rows['title6'].'</p>
	  ';
	  }
	  if(!empty($rows['desc6']))
	  {
		echo '
		<p class="card-quick-desc">'.$rows['desc6'].'</p>
		<hr>
	  ';
	  }
	  if(!empty($rows['title7']))
	  {
		echo '
		<p class="card-quick-title">'.$rows['title7'].'</p>
	  ';
	  }
	  if(!empty($rows['desc7']))
	  {
		echo '
		<p class="card-quick-desc">'.$rows['desc7'].'</p>
		<hr>
	  ';
	  }
	  if(!empty($rows['title8']))
	  {
		echo '
		<p class="card-quick-title">'.$rows['title8'].'</p>
	  ';
	  }
	  if(!empty($rows['desc8']))
	  {
		echo '
		<p class="card-quick-desc">'.$rows['desc8'].'</p>
		<hr>
	  ';
	  }
	  if(!empty($rows['data']))
	  {
		echo '
		<p class="card-quick-desc">'.$rows['data'].'</p>
		<hr>
	  ';
	  }
	  
	  
	  
	  /*Embed Session*/
	  if(!empty($rows['embed']))
	  {
		echo '<iframe style="border: 1px solid rgba(0, 0, 0, 0.1);" width="100%" height="450" src="'.$rows['embed'].'" allowfullscreen></iframe>';
	  }
	  
	   if(!empty($rows['slides']))
	  {
		echo '<iframe style="border: 1px solid rgba(0, 0, 0, 0.1);" width=100%" height="380" src="https://docs.google.com/presentation/d/'.$rows['slides'].'/embed?start=false&loop=false&delayms=3000" allowfullscreen></iframe>';
	  }
	  
	   if(!empty($rows['youtube']))
	  {
		echo '<iframe style="border: 1px solid rgba(0, 0, 0, 0.1);" width=100%" height="380" src="https://www.youtube.com/embed/'.$rows['slides'].'" allowfullscreen></iframe>';
	  }

	  
    echo '</div>
  </div>
  <br><br>';
	} else {}