<?php

include '../inc/db_connect.php';
include 'session.php';
$alert = NULL;
if (isset($_POST['snippet'])) {

    $title_strong = mysqli_real_escape_string($conn, $_POST['title_strong']);
    $desc_snippet = mysqli_real_escape_string($conn, $_POST['desc_snippet']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $keywords = mysqli_real_escape_string($conn, $_POST['keywords']);
    $url = mysqli_real_escape_string($conn, $_POST['url']);


    $sql = "INSERT INTO snippet (`title_strong`,`desc_snippet`,`title`,`keywords`,`url`,`status`) VALUES ('" . $title_strong . "','" . $desc_snippet . "','" . $title . "', '" . $keywords . "','" . $_POST['url'] . "','published')";
    if (mysqli_query($conn, $sql)) {
        $alert = '<div class="alert alert-success">
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

    <title>Add Quick Link</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet" />

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet" />

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!--  Fonts and icons     -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
</head>

<body>

    <div class="wrapper">

        <?php include 'sidebar.php'; ?>

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
                        <a class="navbar-brand" href="#">Add Quick Links</a>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                            What is this?
                        </button>
                    </div>
                    <?php include 'header.php'; ?>
                </div>
            </nav>

            <div class="content">
                <?php echo $alert; ?>
                <div class="container-fluid">
                    <div style="height:600px;" class="card card-map">
                        <div class="header">
                            <h4 class="title">Add Snippets</h4>
                            <br>
                            <h5 class="alert" style="color: black;"><strong><code>Disclaimer:</code>
                                </strong> você precisa associar todos os campos com uma palavra chave em comum, 
                                <br>
                                <em><strong>ex:</strong> todos os campos contém casa, </em><code>'%$sresult%'=casa</code></strong></h5>
                        </div>
                        <div class="row">
                            <form action="" method="post">
                                <div style="padding-left: 50px; padding-right: 50px;" class="row">
                                    <div class="form-group has-success">
                                        <label>Title Strong</label>
                                        <input name="title_strong" class="form-control">
                                    </div>
                                    <div class="form-group has-success">
                                        <label>Description</label>
                                        <input name="desc_snippet" class="form-control">
                                    </div>
                                    <div class="form-group has-success">
                                        <label>Title</label>
                                        <input name="title" class="form-control">
                                    </div>
                                    <div class="form-group has-success">
                                        <label>URL</label>
                                        <textarea style="height:100px;" name="url" class="form-control"></textarea>
                                    </div>
                                    <button name="snippet" class="btn btn-success">PUBLISH</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php include 'footer.php'; ?>

    </div>
    </div>

    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal body -->
                <div class="modal-body">
                    <img style="width:100%;" src="assets/img/ql.jpg">
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
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
    $().ready(function() {
        demo.initGoogleMaps();
    });
</script>

</html>