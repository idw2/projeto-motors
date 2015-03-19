<?php /* Smarty version Smarty-3.1.19, created on 2014-08-18 21:53:49
         compiled from "/home/storage/e/be/ce/designlab2/public_html/veiculos/application/views/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:86782067753f2a01dd07935-42048995%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1b9636c01ca0d0db985c72ea591e6ab24f5cad0' => 
    array (
      0 => '/home/storage/e/be/ce/designlab2/public_html/veiculos/application/views/header.tpl',
      1 => 1408394175,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86782067753f2a01dd07935-42048995',
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
  'unifunc' => 'content_53f2a01dd16934_98812912',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f2a01dd16934_98812912')) {function content_53f2a01dd16934_98812912($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

  <head>
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">


    <link rel="icon" type="image/vnd.microsoft.icon" href="/web-files/img/favicon.ico"/>
    <link rel="shortcut icon" type="image/x-icon" href="/web-files/img/favicon.ico"/>

    <link rel="stylesheet" href="/web-files/font-awesome-4.1.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="/web-files/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="/web-files/bootstrap/css/bootstrap-theme.css"/>		
    <link rel="stylesheet" href="/web-files/css/docs.min.css"/>
    <link rel="stylesheet" href="/web-files/css/style.css?v=2"/>

    <script language="javascript" src="/web-files/js/funcoes.js"></script>
    <script language="javascript" src="/web-files/js/jquery-2.1.1.min.js"></script>
    <script language="javascript" src="/web-files/js/jQuery-Mask-Plugin.js"></script>
    <script language="javascript" src="/web-files/bootstrap/js/bootstrap.js"></script>


  </head>
  <body>

    <div class="container">
      <div class="row" style="padding: 2% 0">
        <div class="col-sm-7 col-md-8">
          <div class="brand auto-img"><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/"><img src="/web-files/img/logo.png" alt="" border="0" title="" class="img-responsive"/></a></div>
        </div>
        <div class="col-sm-5 col-md-4"> 
          <form class="navbar-form navbar-right" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Pesquisa">
              <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="container">
      <nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <?php echo $_smarty_tpl->getSubTemplate ("navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

      </nav>
    </div>
<?php }} ?>
