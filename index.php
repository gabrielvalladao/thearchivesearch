<?php
include 'inc/db_connect.php';
//include 'admin/session.php';
require_once "load.php";
?>
    <html>

    <head>

        <?php head("", array("style")); ?>
        <!--
                            <div class="collapse navbar-collapse">
                                            <ul class="nav navbar-nav navbar-right">
                        						<li>
                                                    <a href="admin/logout">
                        								<i class="ti-back-left"></i>
                        								<p>Logout</p>
                                                    </a>
                                                </li>
                                            </ul>

                                        </div>-->
    </head>

    <body>

        <div class="container">

            <!--New Interface-->


            <div class="outer-wrapper">

                <h1><img class="logo-front" alt="Spaceheel" height="60" src="/cdn/img/logo-front.png" srcset="/cdn/img/logo-front.png" width="272"></h1>
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

                <section class="top-sites">
                    <div class="wrapper">

                        <div>
                            <h2 class="h3">Explore por Categoria</h2>
                            <!--<p class="meta">
                                    Tire Dúvidas com <a href="#">Spaceheel</a>
                                </p>-->
                        </div>
                        <br>

                        <div class="tile-grid">

                            <a href="https://search.gabrielvalladao.com/search.php?q=grafico">
                                <div class="tile">
                                    <div class="card card-raised">
                                        <img loading="lazy" width="50" height="50" src="https://datavizcatalogue.com/blog/wp-content/uploads/2020/12/distribution_density_plot.png" style="padding: 15px;">

                                    </div>
                                    <div class="title small">
                                        Distribuição
                                    </div>
                                    <div class="meta small">
                                        
                                    </div>
                                </div>
                            </a>


                            <a href="https://search.gabrielvalladao.com/search.php?q=grafico">
                                <div class="tile">
                                    <div class="card card-raised">
                                        <img loading="lazy" width="50" height="50" src="https://datavizcatalogue.com/blog/wp-content/uploads/2020/12/comparisons_bar_chart.png" style="padding: 15px;">

                                    </div>
                                    <div class="title small">
                                        Comparação
                                    </div>
                                    <div class="meta small">
                                        
                                    </div>
                                </div>
                            </a>

                            <a href="https://search.gabrielvalladao.com/search.php?q=grafico">
                                <div class="tile">
                                    <div class="card card-raised">
                                        <img loading="lazy" width="50" height="50" src="https://datavizcatalogue.com/blog/wp-content/uploads/2020/12/overtime_control_chart.png" style="padding: 15px;">


                                    </div>
                                    <div class="title small">
                                        Dados no Tempo
                                    </div>
                                    <div class="meta small">
                                        
                                    </div>
                                </div>
                            </a>

                            <a href="https://search.gabrielvalladao.com/search.php?q=grafico">
                                <div class="tile">
                                    <div class="card card-raised">
                                        <img loading="lazy" width="50" height="50" src="https://datavizcatalogue.com/blog/wp-content/uploads/2020/12/proportions_bubble_chart.png" style="padding: 15px;">


                                    </div>
                                    <div class="title small">
                                        Proporções
                                    </div>
                                    <div class="meta small">
                                        
                                    </div>
                                </div>
                            </a>

                            <a href="#">
                                <div class="tile">
                                    <div class="card card-raised">
                                        <img loading="lazy" width="50" height="50" src="https://datavizcatalogue.com/blog/wp-content/uploads/2020/12/geographical_choropleth_map.png" style="padding: 15px;">


                                    </div>
                                    <div class="title small">
                                        Geográfico
                                    </div>
                                    <div class="meta small">
                                        
                                    </div>
                                </div>
                            </a>

                            <a href="#">
                                <div class="tile">
                                    <div class="card card-raised">
                                        <img loading="lazy" width="50" height="50" src="https://datavizcatalogue.com/blog/wp-content/uploads/2020/12/connections_circular_tree_diagram.png" style="padding: 15px;">


                                    </div>
                                    <div class="title small">
                                        Conexões
                                    </div>
                                    <div class="meta small">
                                        
                                    </div>
                                </div>
                            </a>

                            <a href="#">
                                <div class="tile">
                                    <div class="card card-raised">
                                        <img loading="lazy" width="50" height="50" src="https://datavizcatalogue.com/blog/wp-content/uploads/2020/12/financial_candlestick_chart.png" style="padding: 15px;">


                                    </div>
                                    <div class="title small">
                                        Financeiro
                                    </div>
                                    <div class="meta small">
                                        
                                    </div>
                                </div>
                            </a>

                            <a href="#">
                                <div class="tile">
                                    <div class="card card-raised">
                                        <img loading="lazy" width="50" height="50" src="https://datavizcatalogue.com/blog/wp-content/uploads/2020/12/hierarchy_tree_diagram.png" style="padding: 15px;">


                                    </div>
                                    <div class="title small">
                                        Hierarquia
                                    </div>
                                    <div class="meta small">
                                        
                                    </div>
                                </div>
                            </a>

                            <a href="#">
                                <div class="tile">
                                    <div class="card card-raised">
                                        <img loading="lazy" width="50" height="50" src="https://datavizcatalogue.com/blog/wp-content/uploads/2020/12/parttoawhole_donut_chart.png" style="padding: 15px;">


                                    </div>
                                    <div class="title small">
                                        Partes para um todo
                                    </div>
                                    <div class="meta small">
                                        
                                    </div>
                                </div>
                            </a>


                            <a href="#">
                                <div class="tile">
                                    <div class="card card-raised">
                                        <img loading="lazy" width="50" height="50" src="https://datavizcatalogue.com/blog/wp-content/uploads/2020/12/flow_alluvial_diagram.png" style="padding: 15px;">


                                    </div>
                                    <div class="title small">
                                        Fluxo
                                    </div>
                                    <div class="meta small">
                                        
                                    </div>
                                </div>
                            </a>


                            <a href="#">
                                <div class="tile">
                                    <div class="card card-raised">
                                        <img loading="lazy" width="50" height="50" src="https://datavizcatalogue.com/blog/wp-content/uploads/2020/12/ranges_barbell_plot.png" style="padding: 15px;">


                                    </div>
                                    <div class="title small">
                                        Intervalos
                                    </div>
                                    <div class="meta small">
                                        
                                    </div>
                                </div>
                            </a>

                            <a href="#">
                                <div class="tile">
                                    <div class="card card-raised">
                                        <img loading="lazy" width="50" height="50" src="https://datavizcatalogue.com/blog/wp-content/uploads/2020/12/correlation_scatterplot.png" style="padding: 15px;">


                                    </div>
                                    <div class="title small">
                                        Correlações
                                    </div>
                                    <div class="meta small">
                                        
                                    </div>
                                </div>
                            </a>

                            <a href="#">
                                <div class="tile">
                                    <div class="card card-raised">
                                        <img loading="lazy" width="50" height="50" src="https://datavizcatalogue.com/blog/wp-content/uploads/2020/12/multivariable_radar_chart.png" style="padding: 15px;">


                                    </div>
                                    <div class="title small">
                                        Análise multivariável
                                    </div>
                                    <div class="meta small">
                                        
                                    </div>
                                </div>
                            </a>

                            <a href="#">
                                <div class="tile">
                                    <div class="card card-raised">
                                        <img loading="lazy" width="50" height="50" src="https://datavizcatalogue.com/blog/wp-content/uploads/2020/12/error_error_bars.png" style="padding: 15px;">


                                    </div>
                                    <div class="title small">
                                        Incerteza e Erro
                                    </div>
                                    <div class="meta small">
                                        
                                    </div>
                                </div>
                            </a>

                            <a href="#">
                                <div class="tile">
                                    <div class="card card-raised">
                                        <img loading="lazy" width="50" height="50" src="https://datavizcatalogue.com/blog/wp-content/uploads/2020/12/change_slopegraph.png" style="padding: 15px;">


                                    </div>
                                    <div class="title small">
                                        Mostrando a Mudança
                                    </div>
                                    <div class="meta small">
                                        
                                    </div>
                                </div>
                            </a>

                        </div>

                    </div>

                    <br>
                    <br>

                    <!--

                    <div class="suggestions-grid">
                        
                        <a href="#">
                            <div class="tile tile-wide">
                                <div class="card card-raised">
                                    <img loading="lazy" width="auto" height="74px" src="https://preview.redd.it/4zh2hgl46cp51.png?width=3325&amp;format=png&amp;auto=webp&amp;s=b9123bff12e1d5b86248d27a059104b4c92e05b5" style="padding: 3px;border-radius: 6px;">
    
                                </div>
                                <div class="title small">
                                    Dicas
                                </div>
                                <div class="meta small">
                                    Acesse dicas e tutoriais
                                </div>
                            </div>
                        </a>

                        <a href="#">
                            <div class="tile tile-wide">
                                <div class="card card-raised">
                                    <img loading="lazy" width="auto" height="74px" src="https://assets-global.website-files.com/5f9072399b2640f14d6a2bf4/625489cc18bfe0b12a83e4a2_202201010_PM_CommandPermissionsBlog_JJ_v04.jpg" style="padding: 3px;border-radius: 6px;">
    
                                </div>
                                <div class="title small">
                                    Tire Dúvidas
                                </div>
                                <div class="meta small">
                                    Nosso buscador responde dúvidas
                                </div>
                            </div>
                        </a>
                        
                        <a href="admin/publish">
                            <div class="tile tile-wide">
                                <div class="card card-raised">
                                    <img loading="lazy" width="auto" height="74px" src="https://external-preview.redd.it/fuckEnW3n-blz9vfl6C6KppN4DIOUJAmtdwfnQpY_Kk.jpg?auto=webp&s=515ef1805ff01d145d11d5bcf7ba889d2f689914" style="padding: 3px;border-radius: 6px;">
    
                                </div>
                                <div class="title small">
                                    Cadastrar respostas
                                </div>
                                <div class="meta small">
                                    Popule seu buscador com dados
                                </div>
                            </div>
                        </a>
                        
                    </div> -->

                </section>


            </div>

            <!--COUNTER
            <div class="outer-wrapper">

                <center>
                    <h3>Adicionados Recentemente</h3>
                    <ul style="width: 200px;overflow: auto;">
                        <?php
                        $sql = $dbh->query("SELECT * FROM `search` ORDER BY id DESC LIMIT 5");
                        while ($r = $sql->fetch()) {
                            echo "<li style='margin-bottom:5px;'><a href=" . $r['url'] . ">" . $r['title'] . "</a></li>";
                        }
                        ?>
                    </ul>
                </center>
                <br>
                <br>
                <br>

            <div>  -->

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