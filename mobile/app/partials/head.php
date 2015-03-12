<?php
$seo = new SEO();
$page = $seo->get_slug();
$title = $seo->get_title();
$description = $seo->get_description();
$author = SEO::author;
?>
<!DOCTYPE html>
<html class="no-js">
    <head>

        <title><?php echo $title; ?></title>
        <meta name="title" content="<?php echo $title; ?>">
        <meta name="description" content="<?php echo $description; ?>">
        <meta name="author" content="<?php echo $author; ?>">

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="shortcut icon" href="<?php echo asset('img/favicon.png'); ?>">

        <link rel="stylesheet" href="<?php echo asset('css/material-design-iconic-font.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo asset('css/uikit.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo asset('css/uikit.almost-flat.min.css'); ?>">

        <link rel="stylesheet" href="<?php echo asset('css/components/upload.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo asset('css/components/upload.almost-flat.min.css'); ?>">


        <link rel="stylesheet" href="<?php echo asset('css/style.css'); ?>">

        <!--[if IE 8]>
              <link href="<?php echo asset('css/ie8.css'); ?>" rel="stylesheet" />
              <script src="<?php echo asset('js/respond.js'); ?>"></script>	
        <![endif]-->
    </head>
    <body>


        <div id="offcanvas" class="uk-offcanvas">
            <div class="uk-offcanvas-bar">
                <ul class="uk-nav uk-nav-offcanvas">
                    <li>
                        <a href="#">Website</a>
                    </li>
                    <!--
                    <li class="<?php echo set_active('home'); ?>">
                        <a href="./">Veículos</a>
                    </li>
                    -->
                    <li class="<?php echo set_active('add'); ?>">
                        <a href="add">Adicionar Veículo</a>
                    </li>
                    <li>
                        <a href="http://auto.designlab.com.br/pt/admin/logout">Sair</a>
                    </li>
                </ul>
            </div>
        </div>


        <nav class="uk-navbar">
            <a href="#offcanvas" class="uk-navbar-toggle" data-uk-offcanvas=""></a>
            <div class="uk-navbar-brand"><?php echo page_title(); ?></div>
            <div class="uk-navbar-flip">
                <ul class="uk-navbar-nav">
                    <li>
                        <a href="add">Novo</a>
                    </li>
                </ul>

            </div>
        </nav>

        <div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">