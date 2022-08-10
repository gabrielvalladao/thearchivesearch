<?php
include 'inc/db_connect.php';
//include 'admin/session.php';
require_once "load.php";
?>
<html>

<head>

    <?php head("", array("style")); ?>
   
</head>

<body style="background-color: #ffffff00;">

    <div class="container">

        <!--New Interface-->


        <div class="outer-wrapper">

            <h1><img class="logo-front" alt="Spaceheel" height="92" src="/cdn/img/logo-front.png" srcset="/cdn/img/logo-front.png" width="272"></h1>
            <section class="top-sites">
                <div class="wrapper" style="text-align: -webkit-center;">

                    <form class="searchForm" action="search.php" method="GET" onsubmit="document.location='/spaceheel.com/index.php?q=search&q='+document.getElementById('q').value;return false;">
                        <input type="text" autocomplete="off" name="q" id="query" />

                        <button>
                            <svg class='shape-search' viewBox="0 0 100 100" class='shape-search'>
                                <use xlink:href='#shape-search'></use>
                            </svg>
                        </button>

                    </form>

                </div>
            </section>
            
            
        </div>
        

            </body>

        </html>

        <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <link rel="stylesheet" href="cdn/css/jquery-ui.css">
        <script type="text/javascript">
            $(document).ready(function() {
                $(document).on('keyup', '#query', function() {
                    var value = $(this).val();
                    $.getJSON('ajax_search_list.php?q=' + value, function(data) {
                        var availableTags = data;
                        $("#query").autocomplete({
                            source: availableTags,
                            select: function(event, ui) {
                                $(event.target).val(ui.item.value);
                                $('#search_form').submit();
                                return false;
                            },
                        });
                    });

                });
            });
        </script>