<?php 
/**
 * Configuration
 */

ini_set("display_errors", "on");

/**
 * Site URL
 * No '/' at the end
 */
define("HOST", "//search.gabrielvalladao.com");

$host = "localhost";
$port = "3306";
$user = "u240802769_search";
$pass = "Gtirado98@neves";
$db = "u240802769_search";
$dbh = new PDO('mysql:dbname='.$db.';host='.$host.';port='.$port, $user, $pass);
?>
