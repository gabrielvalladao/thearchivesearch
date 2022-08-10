<link rel="stylesheet" type="text/css" href="cdn/css/snippets.css">

<?php
error_reporting(0);
$sresult = NULL;
include 'inc/db_connect.php';

if (isset($_GET['q'])) {
    $sresult = $_GET['q'];
    if ($_GET['q'] == '') {
        header('location:search.php');
    }
}

$limit = 8;
if (isset($_GET["page"])) {
    $page  = $_GET["page"];
} else {
    $page = 1;
};
$start_from = ($page - 1) * $limit;

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
<?php

$sql = "SELECT title_strong, desc_snippet, title, url FROM snippet WHERE title LIKE '%$sresult%'";


$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);
$rows = mysqli_fetch_array($result);
$mean = $rows[1];

if ($count == 1) {
    if ($sresult == $mean) {
        echo '';
    } else {
        echo ' 
                                <div class="box-results">
                                <div class="website-chooser-title">        	
                                <h2>' . $rows['title_strong'] . '</h2> 
                                </div>
                                <p class="card-text" style="font-size:15px;">' . $rows['desc_snippet'] . '</p>
                                <div class="website-chooser">
											<h2><a href="' . $rows['url'] . '">' . $rows['title'] . '</a></h2>
                                            
                                            </div>
                                <div class="website-chooser">
                                            <h4>' . $rows['url'] . '</h4>
                                            </div>
                                            </div>
                                            <div class="snippets">
                                                <ul>
                                                <li>
                                                    <a href="#"><svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="
                                                        height: 16px;
                                                        line-height: 16px;
                                                        width: 16px;
                                                    "><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm2.07-7.75l-.9.92C13.45 12.9 13 13.5 13 15h-2v-.5c0-1.1.45-2.1 1.17-2.83l1.24-1.26c.37-.36.59-.86.59-1.41 0-1.1-.9-2-2-2s-2 .9-2 2H8c0-2.21 1.79-4 4-4s4 1.79 4 4c0 .88-.36 1.68-.93 2.25z"></path></svg>&nbsp;About Featured Snippets</a>
                                                    <a href="#"><svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="
                                                        height: 16px;
                                                        line-height: 16px;
                                                        width: 16px;
                                                    "><path d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-7 9h-2V5h2v6zm0 4h-2v-2h2v2z"></path></svg>&nbsp;Feedback</a>
                                                    </li>
                                                    </ul>
                                            </div>
                                        ';
    }
}
?>