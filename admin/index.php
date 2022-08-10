<?php
error_reporting(0);
session_start();

if($_SESSION['ap_login_success_admin'])
	{
		echo '
		        <script>
                    window.location = "dashboard";
                </script>
		';
	}
	
	include '../inc/db_connect.php';
	 $alert=NULL;
	 if(isset($_POST['login']))
	 {
		 $sql="SELECT * FROM admin where admin_username='".$_POST['admin_username']."' and admin_password='".$_POST['admin_password']."'";
		 $result=mysqli_query($conn,$sql);
		 $count=mysqli_num_rows($result);
		 
		 if($count==1)
		 {
			 $sql="SELECT id FROM admin where admin_username='".$_POST['admin_username']."' and admin_password='".$_POST['admin_password']."'";
			 $result=mysqli_query($conn,$sql);
			 $rows=mysqli_fetch_array($result);
			 $admin_id=$rows[0];
			 $_SESSION['ap_login_success_admin']=$admin_id;
			 header ('location:dashboard');
			 
			  $alert='
				<div class="alert alert-success alert-dismissible">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>Login Success</strong>
				</div>
			 ';
		 } else {
			 $alert='
				<div class="alert alert-danger alert-dismissible">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>Login Failed!</strong> Please Try Again.
				</div>
			 ';
		 }
		 
	 }
	 
	 
?>
<html>
	<head>
		<title>Login</title>
		<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
         <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
		<style>
			body {
  background: #eee !important;
}

.wrapper {
  margin-top: 80px;
  margin-bottom: 80px;
}

.form-signin {
  max-width: 380px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color: #fff;
  border: 1px solid rgba(0, 0, 0, 0.1);
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 30px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  font-size: 16px;
  height: auto;
  padding: 10px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="text"] {
  margin-bottom: -1px;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 20px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
		</style>
	</head>
	<body>
	<div class="wrapper">
    <form action="" method="post" class="form-signin"> 
	<?php echo $alert; ?>	
	<br>
		<center><h4>Admin Panel</h4></center>
	<br>
      <input type="text" class="form-control" name="admin_username" placeholder="Enter Username" required="" autofocus="" />
      <input type="password" class="form-control" name="admin_password" placeholder="Enter Password" required=""/>      
      <button class="btn btn-lg btn-danger btn-block" name="login" type="submit">Login</button>   
    </form>
  </div>
	</body>
</html>