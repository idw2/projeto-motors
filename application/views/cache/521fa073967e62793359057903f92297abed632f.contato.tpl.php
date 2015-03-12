<?php /*%%SmartyHeaderCode:1471279699546a2623491c54-41326805%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '521fa073967e62793359057903f92297abed632f' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/contato.tpl',
      1 => 1416240056,
      2 => 'file',
    ),
    '500fcddbb3138c5958db2eeec67f5e3c58c3871b' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/header.tpl',
      1 => 1416242419,
      2 => 'file',
    ),
    'db308b1edfd773cfd096ea777abda4e55df7772e' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/navbar.tpl',
      1 => 1416242368,
      2 => 'file',
    ),
    '8350abd1f4a65fbcad0819e9ba6f7681a0a08058' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/footer.tpl',
      1 => 1416242677,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1471279699546a2623491c54-41326805',
  'variables' => 
  array (
    'erro' => 0,
    'sucesso' => 0,
    'nome' => 0,
    'email' => 0,
    'assunto' => 0,
    'mensagem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546a2623679567_76670685',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546a2623679567_76670685')) {function content_546a2623679567_76670685($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <!-- Define Charset -->
        <meta charset="utf-8">

        <!-- Page Title -->
        <title>Minha Concessionária | Fale conosco</title>

        <!-- Responsive Metatag -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

        <!-- CSS -->
        <link rel="stylesheet" href="/web-files/css/bootstrap.css"/>

        <!-- Slider Revolution -->
        <link rel="stylesheet" href="/web-files/plugins/revolution/css/settings.css">

        <!-- Font icons -->
        <link rel="stylesheet" href="/web-files/css/fontello.css" >
        <!--[if IE 7]>
        <link rel="stylesheet" href="css/fontello-ie7.css" ><![endif]-->
        <link rel="stylesheet" href="/web-files/css/styles.css" />
        <link rel="stylesheet" href="/web-files/css/media-queries.css" />

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
              <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>        
        <![endif]-->

        <!-- Media queries -->
        <!--[if lt IE 9]>
              <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <![endif]-->
    </head>


    <body>

        <header>
            <!-- begin Top Bar -->
            <div class="topbar" >
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-md-8">
                            <ul id="topmenu">
                                <li><a href="/pt/informacoes/empresa">Sobre</a></li>
                                <li><a href="#">Sitemap</a></li>
                                <li><a href="/pt/informacoes/contato">Contato</a></li>
                                <li><a href="/pt/informacoes/onde-estamos">Onde estamos</a></li>
                                <li><a href="tel:+550000000">Ligue: (00) 0000 0000</a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                                <ul id="topsocial">
                                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                                    <li><a href="#"><i class="icon-gplus"></i></a></li>
                                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                                </ul>
                        </div>
                        
                    </div>

                </div>
            </div>
            <!-- end Top Bar -->


            <!-- begin NavBar -->
            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/pt/"><img src="/web-files/img/logo.png" alt="logo image"></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        
                        <ul class="nav navbar-nav">
    <li class="active"><a href="/pt/">Home</a></li>
    <li class="buy" >
        <a href="/pt/">Seminovos</a>
        <div class="menu-buy">
            <span class="arrow"></span>
            <button class="btn btn-sm red">Ver todos</button>
            <div class="clearfix"></div>
            <div class="items">
                <a 
                    href="#"
                    data-title="HONDA CITY 2012"
                    data-desc= "..."
                    data-img = "/web-files/img/buy/car-menu01.jpg"
                    >
                    <img src="/web-files/img/rent/rent01.jpg" alt="//">
                    <strong>HONDA CITY 2012</strong>
                    <span>A partir de R$ 52.900</span>
                </a>
                <a 
                    href="#"
                    data-title="HONDA CITY 2012"
                    data-desc= "..."
                    data-img = "/web-files/img/buy/car-menu02.jpg"
                    >
                    <img src="/web-files/img/rent/rent02.jpg" alt="//">
                    <strong>HONDA CITY 2012</strong>
                    <span>A partir de R$ 52.900</span>
                </a>
                <a 
                    href="#"
                    data-title="HONDA CITY 2012"
                    data-desc= "..."
                    data-img = "/web-files/img/buy/car-menu01.jpg"
                    >
                    <img src="/web-files/img/rent/rent01.jpg" alt="//">
                    <strong>HONDA CITY 2012</strong>
                    <span>A partir de R$ 52.900</span>
                </a>
                <a 
                    href="#"
                    data-title="HONDA CITY 2012"
                    data-desc= "..."
                    data-img = "/web-files/img/buy/car-menu02.jpg"
                    >
                    <img src="/web-files/img/rent/rent02.jpg" alt="//">
                    <strong>HONDA CITY 2012</strong>
                    <span>A partir de R$ 52.900</span>
                </a>
                <a 
                    href="#"
                    data-title="HONDA CITY 2012"
                    data-desc= "..."
                    data-img = "/web-files/img/buy/car-menu01.jpg"
                    >
                    <img src="/web-files/img/rent/rent01.jpg" alt="//">
                    <strong>HONDA CITY 2012</strong>
                    <span>A partir de R$ 52.900</span>
                </a>
                <a 
                    href="#"
                    data-title="HONDA CITY 2012"
                    data-desc= "..."
                    data-img = "/web-files/img/buy/car-menu02.jpg"
                    >
                    <img src="/web-files/img/rent/rent02.jpg" alt="//">
                    <strong>HONDA CITY 2012</strong>
                    <span>A partir de R$ 52.900</span>
                </a>
                <a 
                    href="#"
                    data-title="HONDA CITY 2012"
                    data-desc= "..."
                    data-img = "/web-files/img/buy/car-menu01.jpg"
                    >
                    <img src="/web-files/img/rent/rent01.jpg" alt="//">
                    <strong>HONDA CITY 2012</strong>
                    <span>A partir de R$ 52.900</span>
                </a>
            </div>
            <div class="car">
                <strong>HONDA CITY 2012</strong>
                <span>...</span>
                <img src="/web-files/img/buy/car-menu01.jpg" alt="//">
            </div>
        </div>
    </li>
    <li ><a href="/pt/">Venda seu carro</a></li>
    <li><a href="/pt/informacoes/financiamento">Financiamento</a></li>
    <li class="dropdown ">
        <a href="/pt/informacoes/empresa" class="dropdown-toggle" data-toggle="dropdown">Institucional<i class="icon-down-open-big"></i></a>
        <ul class="dropdown-menu">
            <li><a href="/pt/informacoes/empresa">A Empresa</a></li>
            <li><a href="/pt/informacoes/onde-estamos">Onde estamos</a></li>
            <li><a href="/pt/informacoes/contato">Contato</a></li>
        </ul>
    </li>

</ul>
                        
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Pesquise seu carro...">
                                    <span class="input-group-btn">
                                        <button class="btn" type="button"><i class="icon-search"></i></button>
                                    </span>
                                </div>
                            </div>

                        </form>
                    </div><!-- /.navbar-collapse -->
                </div>
            </nav>
            <!-- end NavBar -->

            <!-- begin Sub Bar -->
            <div class="subbar" >
                <div class="container">
                    <div id="carousel-top" class="carousel slide">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">

                            <div class="item active">
                                <a href="#" class="offer">
                                    <img src="/web-files/img/top-carrossel/offer01.jpg" alt="//">
                                    <span><strong>AGILE 2012</strong>A partir de R$18.000</span>
                                </a>
                                <a href="#" class="offer">
                                    <img src="/web-files/img/top-carrossel/offer02.jpg" alt="//">
                                    <span><strong>SONIC 2013</strong>A partir de R$24.000</span>
                                </a>
                                <a href="#" class="offer">
                                    <img src="/web-files/img/top-carrossel/offer03.jpg" alt="//">
                                    <span><strong>CRUZE 2013</strong>A partir de R$20.000</span>
                                </a>
                                <a href="#" class="offer">
                                    <img src="/web-files/img/top-carrossel/offer04.jpg" alt="//">
                                    <span><strong>PALIO 2014</strong>A partir de R$30.000</span>
                                </a>
                            </div>

                            <div class="item">
                                <a href="#" class="offer">
                                    <img src="/web-files/img/top-carrossel/offer01.jpg" alt="//">
                                    <span><strong>AGILE 2012</strong>A partir de R$18.000</span>
                                </a>
                                <a href="#" class="offer">
                                    <img src="/web-files/img/top-carrossel/offer02.jpg" alt="//">
                                    <span><strong>SONIC 2013</strong>A partir de R$24.000</span>
                                </a>
                                <a href="#" class="offer">
                                    <img src="/web-files/img/top-carrossel/offer03.jpg" alt="//">
                                    <span><strong>CRUZE 2013</strong>A partir de R$20.000</span>
                                </a>
                                <a href="#" class="offer">
                                    <img src="/web-files/img/top-carrossel/offer04.jpg" alt="//">
                                    <span><strong>PICASSO 2014</strong>A partir de R$30.000</span>
                                </a>
                            </div>

                            <div class="item">
                                <a href="#" class="offer">
                                    <img src="/web-files/img/top-carrossel/offer01.jpg" alt="//">
                                    <span><strong>AGILE 2012</strong>A partir de R$18.000</span>
                                </a>
                                <a href="#" class="offer">
                                    <img src="/web-files/img/top-carrossel/offer02.jpg" alt="//">
                                    <span><strong>SONIC 2013</strong>A partir de R$24.000</span>
                                </a>
                                <a href="#" class="offer">
                                    <img src="/web-files/img/top-carrossel/offer03.jpg" alt="//">
                                    <span><strong>CRUZE 2013</strong>A partir de R$20.000</span>
                                </a>
                                <a href="#" class="offer">
                                    <img src="/web-files/img/top-carrossel/offer04.jpg" alt="//">
                                    <span><strong>PICASSO 2014</strong>A partir de R$30.000</span>
                                </a>
                            </div>

                        </div>

                        <!-- Controls -->
                        <a class="carousel-control" href="#carousel-top" data-slide="prev">
                            <span class="icon-left-circled"></span>
                        </a>
                        <a class="carousel-control next" href="#carousel-top" data-slide="next">
                            <span class="icon-right-circled"></span>
                        </a>

                    </div>
                </div>
            </div>
            <!-- end Sub Bar -->

            

        </header>
        <!-- End header -->

        

<div class="container">

    <div class="row">
        <div class="col-md-6">
            <!-- h1 e p que já tínhamos -->
            <h2>Ainda está com problemas?</h2>
            <br/>
            <p><strong>E-mail:</strong><br />
                contato@torresauto.com.br
            </p>
            <br/>
            <p><strong>Obs:</strong><br/>
                O prazo de respostas para as solicitações é de até 24h.
            </p>

        </div> 

        <div class="col-md-6">
            <form class="navbar-form navbar-left" style="width: 100%" action="/registro/contato" method="post">

                
                
                <h2>Fale conosco</h2>
                <br/>
                <p><input type="text" class="form-control" id="nome" name="nome" maxlength="40" value="" placeholder="Nome completo"/></p>
                <p><input type="email" class="form-control" id="email" name="email" maxlength="70" value="" placeholder="E-mail"/></p>
                <p><input type="text" class="form-control" id="assunto" name="assunto" maxlength="70" value="" placeholder="Assunto"/></p>
                <p><textarea class="form-control" rows="5" id="mensagem" name="mensagem"></textarea></p>
                <p><button type="submit" class="btn red" name="enviar">ENVIAR</button></p>

            </form>
        </div>
    </div>
</div>
<div style="clear: both;"></div>

<footer>

            <!-- begin middle Footer -->
            <div class="middlefoot">
                <div class="container">
                    <div class="row bread-top">
                        <div class="col-xs-6 breadcrumbs">
                            Você está aqui: <a href="#">Home</a>
                        </div>
                        <div class="col-xs-6 go-top">
                            <a href="#" id="go-top">Para o topo <i class="icon-up-open"></i></a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-2 about">
                            <h2>Contato</h2>
                            <p>Ligue: (00) 0000 0000</p>
                            <p>Av. das Américas, 200<br />
                            Rio de Janeiro - RJ<br />
                            CEP: 00000-000</p>
                            <a href="#">Ver mapa</a>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <h2>Últimas Notícias</h2>

                            <div class="recent-news">
                                <div>
                                    <div class="post-icon"><i class="icon-pencil"></i></div>
                                    <img src="/web-files/img/footer-thumbnail-news/recent1.jpg" alt="//" />
                                </div>
                                <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a>
                                <span>Mai 12, 2014 por Editor</span>
                            </div>
                            <div class="recent-news">
                                <div>
                                    <div class="post-icon"><i class="icon-pencil"></i></div>
                                    <img src="/web-files/img/footer-thumbnail-news/recent2.jpg" alt="//" />
                                </div>
                                <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a>
                                <span>Mai 12, 2014 por Editor</span>
                            </div>
                            <div class="recent-news">
                                <div>
                                    <div class="post-icon"><i class="icon-pencil"></i></div>
                                    <img src="/web-files/img/footer-thumbnail-news/recent3.jpg" alt="//" />
                                </div>
                                <a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a>
                                <span>Mai 12, 2014 por Editor</span>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-2">
                            <h2>Veículos</h2>
                            <ul>
                                <li><i class="icon-plus"></i><a href="#">Populares</a></li>
                                <li><i class="icon-plus"></i><a href="#">Hacth</a></li>
                                <li><i class="icon-plus"></i><a href="#">Sedans</a></li>
                                <li><i class="icon-plus"></i><a href="#">Pickups</a></li>
                                <li><i class="icon-plus"></i><a href="#">Motos</a></li>
                            </ul>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-2">
                            <h2>Serviços</h2>
                            <ul>
                                <li><i class="icon-plus"></i><a href="#">Semi novos</a></li>
                                <li><i class="icon-plus"></i><a href="#">Venda seu carro</a></li>
                                <li><i class="icon-plus"></i><a href="#">Financiamento</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <h2>Horário de funcionamento</h2>
                            <ul class="hours">
                                <li><span class="icon"><i class="icon-clock"></i></span>Segunda<span class="pull-right">06.00 - 22.00</span></li>
                                <li><span class="icon"><i class="icon-clock"></i></span>Terça<span class="pull-right">06.00 - 22.00</span></li>
                                <li><span class="icon"><i class="icon-clock"></i></span>Quarta<span class="pull-right">06.00 - 22.00</span></li>
                                <li><span class="icon"><i class="icon-clock"></i></span>Quinta<span class="pull-right">06.00 - 22.00</span></li>
                                <li><span class="icon"><i class="icon-clock"></i></span>Sexta<span class="pull-right">06.00 - 21.00</span></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <!-- end middle Footer -->

            <!-- begin bottom Footer -->
            <div class="bottomfoot">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="copy">Desenvolvido por <a href="http://www.designlab.com.br" target="_blank">DesignLab</a> - &copy; 2015 Todos os direitos reservados</p>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <ul class="social">



                                <li><a href="#" class="gplus"><i class="icon-gplus"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="icon-linkedin"></i></a></li>
                                <li><a href="#" class="twitter"><i class="icon-twitter"></i></a></li>
                                <li><a href="#" class="facebook"><i class="icon-facebook"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- begin bottom Footer -->
        </footer>


        <!-- Javascript Files -->

        <!-- jQuery -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write("<script src=\"/web-files/js/jquery-1.9.1.min.js\"")</script>

        <!-- Respond.js media queries for IE8 -->
        <script src="/web-files/js/respond.min.js"></script>

        <!-- Bootstrap-->
        <script src="/web-files/js/bootstrap.min.js" ></script>

        <!-- Retina.js -->
        <script src="/web-files/js/retina.js" ></script>

        <!-- Placeholder.js http://widgetulous.com/placeholderjs/ -->
        <script src="/web-files/js/placeholder.js" ></script>

        <!-- Go to top -->
        <script src="/web-files/js/jquery.scrollTo-1.4.3.1-min.js" ></script>

        <!-- Slider Revolution -->
        <script src="/web-files/plugins/revolution/js/jquery.themepunch.plugins.min.js"></script>
        <script src="/web-files/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>

        <!-- Custom -->
        <script src="/web-files/js/script.js"  ></script>

        <!-- End Javascript Files -->


    </body>
</html><?php }} ?>
