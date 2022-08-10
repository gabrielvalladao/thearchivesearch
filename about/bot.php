<?php include("../load.php");?>
<html>
 <head>
  <?php head("Dingo, The Web Search Bot");?>
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
  <div class="container">
   <h2>Dingo!</h2>
   <p>Web Search's bot is called <b>Dingo</b>. Its used for crawling the web.<br/>No, Dingo doesn't SPAM and is 100% safe.<br/>If it visited your site, be happy<br/>Your website was just indexed by Dingo.</p>
   <p>Dingo runs every minute and indexes up to <br/><b>100</b> sites each minute.</p>
   <p>And it's randomly named.</p>
  </div>
  <?php footer();?>
  </div>
 </body>

</html>
