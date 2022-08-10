<?php 
	$sql="SELECT * FROM bio WHERE status='published' and name LIKE '%$sresult%'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);

	if($count==1)
	{
	$sql="SELECT * FROM bio WHERE status='published' and name LIKE '%$sresult%'";
	$result=mysqli_query($conn,$sql);
	$rows=mysqli_fetch_assoc($result);
	echo '
	<div class="card" style="width:380px">
    <img class="card-img-top" src="storage/images/bio/'.$rows['pic'].'" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">'.$rows['name'].'</h4>
	  <p style="color:#23ce5f;">'.$rows['cat'].'</p>
      <p class="card-text" style="font-size:15px;">'.$rows['des'].'<a href="'.$rows['wiki'].'">&nbsp;Wikipedia</a></p>	  

<br>

	  ';
	  if(!empty($rows['title1']))
	  {
		echo '
		<details class="collapse">
  <summary class="title"><strong>'.$rows['title1'].'</strong></summary>
  <div class="description">'.$rows['desc1'].'</div>
</details>
	  ';
	  }
	   if(!empty($rows['title2']))
	  {
		echo '
		<details class="collapse">
  <summary class="title"><strong>'.$rows['title2'].'</strong></summary>
  <div class="description">'.$rows['desc2'].'</div>
</details>
	  ';
	  }
	   if(!empty($rows['title3']))
	  {
		echo '
		<details class="collapse">
  <summary class="title"><strong>'.$rows['title3'].'</strong></summary>
  <div class="description">'.$rows['desc3'].'</div>
</details>
	  ';
	  }
	   if(!empty($rows['title4']))
	  {
		echo '
		<details class="collapse">
  <summary class="title"><strong>'.$rows['title4'].'</strong></summary>
  <div class="description">'.$rows['desc4'].'</div>
</details>
	  ';
	  }
	   if(!empty($rows['title5']))
	  {
		echo '
		<details class="collapse">
  <summary class="title"><strong>'.$rows['title5'].'</strong></summary>
  <div class="description">'.$rows['desc5'].'</div>
</details>
	  ';
	  }
		
	  if(!empty($rows['tag']))
	  {
		echo '
		<br>
		<details class="collapse">
  <summary class="title">Mais sobre: <strong>'.$rows['name'].'</strong></summary>
  <div class="card-tags">'.$rows['tag'].'</div>
</details>';
	  }
	  if(!empty($rows['pdf']))
	  {
		echo '
		<hr>
		<iframe src="storage/pdf/'.$rows['pdf'].'" width="440" height="480" style="border: none;"></iframe>
		';
	  }
	  if(!empty($rows['zip']))
	  {
		echo '
		<center>
		<br>
		<p class="card-download-title" style="font-size: 18px;">Existe um anexo para Download</p>
		<br>
		<button class="btn btn-success btn-lg" style="background-color: #ffffff; border-color: #d7d7d7;"><a class="hidden" href="storage/zip/'.$rows['zip'].'" style="color: #5c5c5c;">Download '.$rows['zip'].'</a></button></center>
		<hr>';
	  }
	  if(!empty($rows['fb']))
	  {
		echo '<a href="'.$rows['fb'].'"><i class="fa fa-facebook-official fa-2x" style="color:#3B5998;" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
	  }
	  
	   if(!empty($rows['tw']))
	  {
		echo '<a href="'.$rows['tw'].'"><i class="fa fa-twitter fa-2x" style="color:#00aced;" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
	  }

	  if(!empty($rows['insta']))
	  {
		echo '<a href="'.$rows['insta'].'"><i class="fa fa-instagram fa-2x" style="color:#e4405f;" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
	  }
	  
	   if(!empty($rows['yt']))
	  {
		echo '<a href="'.$rows['yt'].'"><i class="fa fa-youtube-play fa-2x" style="color:#cd201f;" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
	  }
    echo '</div>
  </div>';
	} else {} 
	?>
