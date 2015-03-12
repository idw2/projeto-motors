<?php /* Smarty version Smarty-3.1.19, created on 2014-12-16 11:35:33
         compiled from "/home/dlab34/auto.designlab.com.br/application/views/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2040650302549089854f5183-41296858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '500fcddbb3138c5958db2eeec67f5e3c58c3871b' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/header.tpl',
      1 => 1416242419,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2040650302549089854f5183-41296858',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54908985532ed1_36337304',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54908985532ed1_36337304')) {function content_54908985532ed1_36337304($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <!-- Define Charset -->
        <meta charset="utf-8">

        <!-- Page Title -->
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

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
                                <li><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/informacoes/empresa">Sobre</a></li>
                                <li><a href="#">Sitemap</a></li>
                                <li><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/informacoes/contato">Contato</a></li>
                                <li><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/informacoes/onde-estamos">Onde estamos</a></li>
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
                        <a class="navbar-brand" href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/"><img src="/web-files/img/logo.png" alt="logo image"></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        
                        <?php echo $_smarty_tpl->getSubTemplate ("navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

                        
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

        <?php }} ?>
