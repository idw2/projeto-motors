<?php /* Smarty version Smarty-3.1.19, created on 2014-08-19 09:47:31
         compiled from "/home/storage/e/be/ce/designlab2/public_html/veiculos/application/views/admin/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:80831006053f34763083481-34963005%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd030a24b43618f9298f1d4d7cf1039419109200a' => 
    array (
      0 => '/home/storage/e/be/ce/designlab2/public_html/veiculos/application/views/admin/navbar.tpl',
      1 => 1408133019,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80831006053f34763083481-34963005',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53f347631352c8_25874495',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f347631352c8_25874495')) {function content_53f347631352c8_25874495($_smarty_tpl) {?><nav class="navbar navbar-default" role="navigation">

    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>

    <div class="collapse navbar-collapse" style="padding-bottom: 3%">
        <div class="panel-heading"><h4>Painel Administrativo</h4></div>
        <ul class="nav nav-stacked">
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="welcome") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/admin/welcome">Home</a></li>
            <div class="panel-heading"><h4>Páginas</h4></div>
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="empresa") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/html/empresa">Empresa</a></li>
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="zero_km") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/html/zero_km">Zero KM</a></li>
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="seminovos") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/html/seminovos">Seminovos</a></li>              
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="financiamento") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/html/financiamento">Financie</a></li>              
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="vender_carro") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/html/vender_carro">Venda seu carro</a></li>              
            <div class="panel-heading"><h4>Veículos</h4></div>
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="veiculos_lista") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/veiculos/veiculos_lista">Lista</a></li>              
            <div class="panel-heading"><h4>Serviços</h4></div>
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="alterar_senha") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/admin/alterar_senha">Alterar senha</a></li>              
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="logout") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/admin/logout">Sair</a></li>              
        </ul>           

    </div><!-- /.navbar-collapse -->
</nav><?php }} ?>
