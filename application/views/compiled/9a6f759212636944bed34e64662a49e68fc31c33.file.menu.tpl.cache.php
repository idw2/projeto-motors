<?php /* Smarty version Smarty-3.1.19, created on 2014-08-12 11:32:24
         compiled from "/home/regis147/public_html/application/views/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:210349984853ea25788e0ce8-40668229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a6f759212636944bed34e64662a49e68fc31c33' => 
    array (
      0 => '/home/regis147/public_html/application/views/menu.tpl',
      1 => 1407710614,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210349984853ea25788e0ce8-40668229',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ea25788e3c20_03534762',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ea25788e3c20_03534762')) {function content_53ea25788e3c20_03534762($_smarty_tpl) {?><nav class="navbar navbar-inverse" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!--
	  <a class="navbar-brand" href="#">Home</a>
	  -->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="/registro/sobre_nos" class="dropdown-toggle" data-toggle="dropdown">Registro<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="/registro/sobre_nos">Sobre Nós</a></li>
            <li class="divider"></li>
            <li><a href="/registro/categorias">Conheça as Categorias</a></li>
            <li><a href="/registro/como_registrar">Como Registrar</a></li>
            <li><a href="/registro/liberacao">Processo de Liberação</a></li>
            <li class="divider"></li>
            <li><a href="/registro/politica">Política de Privacidade</a></li>
          </ul>
        </li>
		<li class="dropdown">
          <a href="/tecnologia/implantacao" class="dropdown-toggle" data-toggle="dropdown">Tecnologia<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="/tecnologia/implantacao">Implantação</a></li>
            <li class="divider"></li>
            <li><a href="/tecnologia/html">HTML</a></li>
            <li><a href="/tecnologia/ajax">Ajax</a></li>
            <li><a href="/tecnologia/iframe">iframe</a></li>
            <li class="divider"></li>
            <li><a href="/tecnologia/webservice">Web Service</a></li>
          </ul>
        </li>
		<!--
		<li class="active"><a href="#">Link</a></li>
		-->
        <li><a href="/registro/sobre_nos">Sobre Nós</a></li>
        <li><a href="/registro/contato">Contato</a></li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Pesquisar">
          
        </div>
        <button type="submit" class="btn btn-default">Enviar</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/registro/newsletter">Newsletter</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contas <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="/conta/cadastro">Criar conta</a></li>
            <li><a href="/conta/login">Acessar conta</a></li>
            <li><a href="/registro/enviar_amigo">Envie para um amigo</a></li>
            <li class="divider"></li>
            <li><a href="/conta/assinaturas">Pesquisar por assinaturas</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav><?php }} ?>
