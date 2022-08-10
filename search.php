<?php
include 'inc/db_connect.php';
//include 'admin/session.php';
require_once "load.php";
?>
<html>

<head>
    <?php head($GLOBALS['displayQ'], array("search")); ?>
</head>

 

<body>
    <div class="container-fluid">
        <div class="row header">
            <?php headerElem(); ?>
            <div class="col-4"></div>
            <div class="col-4"></div>
            <div class="col-4"></div>
            <div class="col-4"></div>
            <div class="col-4"></div>
            <div class="col-4"></div>
            <div class="col-4"></div>
            <div class="col-4"></div>
            <div class="col-4"></div>

            <div class="col-5" style="z-index: 100;">
                <?php include 'include/launcher.html'; ?>
            </div>

        </div>
        <link rel="stylesheet" href="cdn/css/theme-header.css" />
        <div class="row container">
            <script>
                document.getElementById('query').focus();
            </script>
            <div class="row">

                <?php
                if ($GLOBALS['q'] == "") {
                    echo "A query please...";
                } else {
                    require "inc/class.spellcheck.php";
                    $corSp = \Fr\SC::check($GLOBALS['q']);
                    if ($corSp != null) {
                        echo "<p style='color:red;font-size:15px;margin-bottom:10px'>Did you mean ?  <br/><a href='?q=$corSp'>" . $corSp . "</a></p>";
                    }
                    $res = getResults();
                    if ($res === 0) {
                        echo "<div class='col-12-1'><h3>Parece que não há correspondências boas para  " . $q . "</h3><p>Dica: Tente usar palavras que possam aparecer na página que você está procurando.</p>
                        <br>
                        <h3>Que tal adicionar uma resposta essa pergunta?</h3>
                        <iframe src='https://search.gabrielvalladao.com/admin/publish-search' style='border:0px #ffffff none;' name='myiFrame' scrolling='no' frameborder='1' marginheight='0px' marginwidth='0px' height='500px' width='600px' allowfullscreen></iframe>
                        
                        </div>
                        <div class='col-12'>
                        <details class='collapse'>
  <summary class='title'><strong>Você também pode incluir um RichCard para a resposta " . $q . "</strong></summary>
  <div class='description'><p>Os RichCards são formatos de resposta rápidos que mostram informações úteis na tela de busca.<br> Mas eles só aparecem depois que você adicionar um link ao menos uma palavra igual.</p>
                        <iframe src='https://search.gabrielvalladao.com/admin/add_richcard' style='border:0px #ffffff none;' name='myiFrame' scrolling='no' frameborder='1' marginheight='0px' marginwidth='0px' height='2400px' width='600px' allowfullscreen></iframe></div>
</details>
                        
                        
                        </div>";
                    } else {
                        ?>


                        <div class="col">
                            <div class="info">
                                <strong><?php echo $res['count']; ?></strong>
                                <?php echo $res['count'] == 1 ? "result" : "results"; ?> found in <?php echo $res['time']; ?> seconds.
                            </div>
                            <br>

                            <?php include 'include/quick_know.php'; ?>

                            <?php include 'include/snippets.php'; ?>

                            <div class="info">
                                Resultados da página <strong> <?php echo $GLOBALS['p']; ?></strong>
                            </div>

                            <div class="results">
                                <?php
                                foreach ($res['results'] as $re) {
                                    $t = htmlFilt($re[0]);
                                    $u = htmlFilt($re[1]);
                                    $d = htmlFilt($re[2]);
                                    $i = htmlFilt($re[3]);
                                    if (strlen($GLOBALS['q']) > 2) {
                                        $t = str_replace($GLOBALS['q'], "<strong>{$GLOBALS['q']}</strong>", $t);
                                    }
                                    if (strlen($GLOBALS['q']) > 2) {
                                        $d = str_replace($GLOBALS['q'], "<strong>{$GLOBALS['q']}</strong>", $d);
                                    }
                                    ?>
                                    <div class="result">
                                        <h3 class="title">
                                            <a target="_blank" onmousedown="this.href='<?php echo HOST; ?>/url.php?u='+encodeURIComponent(this.getAttribute('data-href'));" data-href="<?php echo $u; ?>" href="<?php echo $u; ?>"><?php echo strlen($t) > 59 ? substr($t, 0, 59) . "..." : $t; ?></a>
                                        </h3>
                                        <p class="url" title="<?php echo $u; ?>">
                                            <!--<img src="storage/images/icons/<?php echo $i; ?>" style="width:10px">&nbsp;<?php echo $u; ?>-->
                                            <img src="storage/images/icons/world-link.png" style="width:10px">&nbsp;<?php echo $u; ?>
                                        </p>
                                        <p class="description">
                                            <?php echo strlen($d) > 159 ? substr($d, 0, 160) . "..." : $d; ?>
                                        </p>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>

                            <div class="pages">
                                <?php include 'include/relatedsearch.php'; ?>
                                <?php
                                $count = (ceil($res['count'] / 10));
                                $start = 1;
                                if ($GLOBALS['p'] > 5 && $count > ($GLOBALS['p'] + 4)) {
                                    $start = $GLOBALS['p'] - 4;
                                    $count = $count > ($start + 8) ? ($start + 8) : $count;
                                } elseif ($GLOBALS['p'] > 5) {
                                    if ($GLOBALS['p'] == $count) {
                                        $start = $GLOBALS['p'] - 8;
                                    } elseif ($GLOBALS['p'] == ($count - 1)) {
                                        $start = $GLOBALS['p'] - 7;
                                    } elseif ($GLOBALS['p'] == ($count - 2)) {
                                        $start = $GLOBALS['p'] - 6;
                                    } elseif ($GLOBALS['p'] == ($count - 3)) {
                                        $start = $GLOBALS['p'] - 5;
                                    } elseif ($GLOBALS['p'] == ($count - 4)) {
                                        $start = $GLOBALS['p'] - 4;
                                    }
                                } elseif ($GLOBALS['p'] <= 5 && $count > ($GLOBALS['p'] + 5)) {
                                    $count = $start + 8;
                                }
                                for ($i = $start; $i <= $count; $i++) {
                                    $isC = $GLOBALS['p'] == $i ? 'current' : '';
                                    echo "<a href='?p=$i&q={$GLOBALS['q']}' class='button $isC'>$i</a>";
                                }
                                ?>
                            </div>

                            <div class="row"></div>
                        </div>
                        <div class="col-4">
                           <?php include 'include/richcard.php'; ?>


                        </div>

                        <div class="row"></div>

                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <?php footer(); ?>

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