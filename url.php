<?php 
$url=isset($_GET['u']) ? urldecode($_GET['u']):"";
if(filter_var($url, FILTER_VALIDATE_URL) === FALSE || $url==""){
 header("Location: http://".$_SERVER['HTTP_HOST'], 302);
 exit;
}else{
?>
 <html>
  <head>
   <noscript><META http-equiv="refresh" content="0;URL=<?php echo$url;?>"></noscript>
   <script>window.location.replace("<?php echo$url;?>");</script>
  </head>
  <body></body>
 </html>
<?php 
}
?>

<?php

include 'inc/config.php';

if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$url=$_GET['url'];
}

date_default_timezone_set("Asia/Kolkata");

mysqli_query($conn,"UPDATE search SET clicks = clicks + 1 where id='".$id."'");
mysqli_query($conn,"INSERT INTO link_clicks (`link_id`,`status`,`date`,`time`) VALUES ('".$id."','clicked','".date("Y-m-d")."','".date("H:i:s")."')");

header ('location:'.$url.'');

?>

