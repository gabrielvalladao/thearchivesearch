<?php
error_reporting(0);
session_start();
if(!$_SESSION['ap_login_success_admin'])
	{
		echo '
		        <script>
                    window.location = "index.php";
                </script>
		';
	}
?>