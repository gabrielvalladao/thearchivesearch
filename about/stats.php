<?php include("../load.php"); ?>
<html>

<head>
    <?php head("Stats"); ?>
</head>

<body>
    <div class="container-fluid">
        <div class="row header">
            <?php headerElem(); ?>

            <div class="col-5" style="margin-left: 93%; z-index: 100;">
                <?php include '../include/launcher.html'; ?>
            </div>

        </div>
        <link rel="stylesheet" href="../cdn/css/theme-header.css" />
        <div class="container" style="width:100px;">
            <h2>Stats</h2>
            <p>See information about the crawled URLs by DingoBot.</p>
            <h3>Total URLs Crawled</h3>
            <strong>
                <?php
                $sql = $dbh->query("SELECT COUNT(id) FROM `search`");
                echo $sql->fetchColumn();
                ?>
            </strong>
            <h3>Last Crawled URLs</h3>
            <ul style="width: 400px;overflow: auto;">
                <?php
                $sql = $dbh->query("SELECT `url` FROM `search` ORDER BY id DESC LIMIT 5");
                while ($r = $sql->fetch()) {
                    echo "<li style='margin-bottom:5px;'>" . $r['url'] . "</li>";
                }
                ?>
            </ul>
            <br>
            <h3>Last Seen</h3>
            <strong>
                <?php
                $sql = $dbh->query("SELECT COUNT(id) FROM `search`");
                echo $sql->fetchColumn();
                ?>
            </strong>
            <h3>Last Crawled URLs</h3>
            <ul style="width: 400px;overflow: auto;">
                <?php
                $sql = $dbh->query("SELECT * FROM `search` ORDER BY id DESC LIMIT 5");
                while ($r = $sql->fetch()) {
                    echo "<li style='margin-bottom:5px;'><a href=" . $r['url'] . ">" . $r['title'] . "</a></li>";
                }
                ?>
            </ul>
            <p>Crawler Runs Every Minute and Stats are updated each minute.</p>
        </div>
        <?php footer(); ?>
    </div>
</body>

</html>