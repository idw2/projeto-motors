<?php /* Smarty version Smarty-3.1.19, created on 2015-03-16 09:17:20
         compiled from "/home/dlab34/motors.designlab.com.br/application/views/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:600394229550702100f8ab2-08170612%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '268b9b5027e6f20822dd9018df4a27668902fb95' => 
    array (
      0 => '/home/dlab34/motors.designlab.com.br/application/views/navbar.tpl',
      1 => 1426173403,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '600394229550702100f8ab2-08170612',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'session_codusuario' => 0,
    'session_username' => 0,
    'session_email' => 0,
    'session_codconta' => 0,
    'page' => 0,
    'session_papel' => 0,
    'logomarca' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_550702102f84c1_92388795',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550702102f84c1_92388795')) {function content_550702102f84c1_92388795($_smarty_tpl) {?><!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/admin/welcome"><?php if (strlen($_smarty_tpl->tpl_vars['session_codusuario']->value)==32) {?>Username: <?php echo $_smarty_tpl->tpl_vars['session_username']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['session_email']->value;?>
<?php }?></a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <?php if (strlen($_smarty_tpl->tpl_vars['session_codusuario']->value)!=32) {?>
                    <li><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/admin/meus-dados/<?php echo strtolower($_smarty_tpl->tpl_vars['session_codconta']->value);?>
"><i class="fa fa-user fa-fw"></i> My Data</a></li>
                    <?php }?>      
                <li><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/admin/alterar-senha"><i class="fa fa-key fa-fw"></i> Change Password</a></li>
                    
                <li class="divider"></li>
                <li><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/admin/logout"><i class="fa fa-sign-out fa-fw"></i> Sign Out</a></li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">

                <?php echo $_smarty_tpl->getSubTemplate ("logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


                <?php if ($_smarty_tpl->tpl_vars['page']->value=="contas") {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['session_papel']->value=="ADMINISTRADOR") {?>
                    <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="contas") {?> class="active"<?php }?>>
                        <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/contas"><i class="fa fa-users fa-fw"></i> Account List</a>
                    </li>
                <?php }?>

                <?php if (strlen($_smarty_tpl->tpl_vars['session_codusuario']->value)!=32) {?>
                    <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="usuarios_lista") {?> class="active"<?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/usuarios"><i class="fa fa-user fa-fw"></i> Member List</a></li>
                <?php }?>
                
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="veiculos_lista") {?> class="active"<?php }?>>
                    <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/veiculos/veiculos-lista"><i class="fa fa-automobile fa-fw"></i> Vehicle List</a>                    
                </li>

                
                
                
                
                
                
                
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>


<!--
<nav class="sidebar-nav">

    <div style="background: #fff; margin: 0 11px; padding: 32px; height: 98px;"><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/html/logomarca"><span id="logo_default"><img class="area-restrita img-responsive center-block" src="<?php if ($_smarty_tpl->tpl_vars['logomarca']->value=='') {?>/web-files/logomarcas/logo_default.png<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['logomarca']->value;?>
<?php }?>" alt="" border="0" title="" /></span></a></div>

    <hr>
    <ul class="nav">
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="welcome") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/admin/welcome">Home</a></li>
    </ul>
    <hr>

<?php if ($_smarty_tpl->tpl_vars['session_papel']->value=="ADMINISTRADOR") {?>
    <h4 class="heading">Contas</h4>
    <ul class="nav">
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="contas") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/contas">Lista</a></li>
    </ul>
    <hr>
<?php }?>
<h4 class="heading">Veículos</h4>
<ul class="nav">
    <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="veiculos_lista") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/veiculos/veiculos-lista">Lista</a></li>
</ul>
<hr>
<h4 class="heading">Páginas</h4>
<ul class="nav">
    <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="empresa") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/html/empresa">A empresa</a></li>
    <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="onde-estamos") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/html/onde-estamos">Onde estamos</a></li>
    <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="configuracao") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/html/configuracao">Configuração</a></li>


</ul>
<hr>
<h4 class="heading">Serviços</h4>
<ul class="nav">
<li <?php if ($_smarty_tpl->tpl_vars['page']->value=="alterar_senha") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/admin/alterar-senha">Alterar senha</a></li>
<li <?php if ($_smarty_tpl->tpl_vars['page']->value=="meus-dados") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/admin/meus-dados/<?php echo strtolower($_smarty_tpl->tpl_vars['session_codconta']->value);?>
">Meus Dados</a></li>
<li <?php if ($_smarty_tpl->tpl_vars['page']->value=="logout") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/admin/logout">Sair</a></li>
</ul>

<hr>

<div style="background: #fff; margin: 0 11px; padding: 32px;"><img class="area-restrita img-responsive center-block" src="/web-files/img/brand.png" alt="" border="0" title="" /></div>

<hr>
</nav>

--><?php }} ?>
