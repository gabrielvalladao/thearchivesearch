<?php
include '../inc/db_connect.php';
include 'session.php';
$alert = NULL;

$sql = "SELECT * FROM settings where id='1'";
$result = mysqli_query($conn, $sql);
$rows = mysqli_fetch_assoc($result);

if ($rows['url_set'] == 'yes') {
    $link_status = "published";
    $alerts = '<div class="alert alert-success">
					  <strong>Your URL has been Published!</strong>.
					</div>';
} else {
    $link_status = "pending";
    $alerts = '<div class="alert alert-warning">
					  <strong>Your URL Is Under Pending, Wait for 24 Hour!</strong>.
					</div>';
}

if (isset($_POST['insert'])) {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $url = mysqli_real_escape_string($conn, $_POST['url']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $key = mysqli_real_escape_string($conn, $_POST['keywords']);
    
    $folder="../storage/images/icons/";
		$file_type=pathinfo($_FILES['p_icons']['name'], PATHINFO_EXTENSION);
		$icons=rand(1000,100000)."-".$_FILES['p_icons']['name'];
		move_uploaded_file($_FILES['p_icons']['tmp_name'],$folder.$icons);

    $sql = "INSERT INTO search (`title`,`url`,`description`,`keywords`,`icons`,`status`) VALUES ('".$title."','".$url."','".$description."','".$key."','".$icons."','".$link_status."')";
    if (mysqli_query($conn, $sql)) {
        $alert = $alerts;
        echo '<meta http-equiv="refresh" content="3">';
    } else {
        echo 'Failed to add data!';
    }
}
?>
<html>
<head>
    <title>Spaceheel</title>
    <link rel="apple-touch-icon" sizes="76x76" href="admin/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="admin/assets/img/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700|Open+Sans:400,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../cdn/css-admin/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../cdn/css-admin/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../cdn/css-admin/font-awesome.min.css">
</head>
<body>
    
        <?php echo $alert; ?>
        <p>
            Insira um link na base de dados
        </p>
        
        <p id="msg"></p>
        <form action="" method="post" enctype="multipart/form-data">
            <input style="width:60%;" class="form-control" type="search" name="title" placeholder="TITLE"><br>
            <input style="width:60%;" class="form-control" type="search" name="url" placeholder="URL"><br>
             <input style="width:60%;" class="form-control" type="file" name="p_icons" placeholder="Icon"><br>
            <input style="width:60%;" class="form-control" type="search" name="keywords" placeholder="Keywords"><br>
            <textarea style="width:60%;" class="form-control" type="search" name="description" placeholder="Short description"></textarea><br>
            <div>
                <button name="insert" class="btn btn-warning btn-lg">Publicar meu resultado</button>
            </form>
        </div>
    </div>
</body>
</html>