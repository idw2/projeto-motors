<?php /* Smarty version Smarty-3.1.19, created on 2014-08-18 21:53:49
         compiled from "/home/storage/e/be/ce/designlab2/public_html/veiculos/application/views/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59930591953f2a01dd2b069-89811598%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acb01a2a147296e4290a5c10339c262c4d0409a0' => 
    array (
      0 => '/home/storage/e/be/ce/designlab2/public_html/veiculos/application/views/navbar.tpl',
      1 => 1408106407,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59930591953f2a01dd2b069-89811598',
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
  'unifunc' => 'content_53f2a01dda1e68_60403839',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f2a01dda1e68_60403839')) {function content_53f2a01dda1e68_60403839($_smarty_tpl) {?><!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">

        <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="index") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/">Home</a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="empresa") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/informacoes/empresa/">Empresa</a></li>            
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="zero_km") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/informacoes/zero_km/">Zero KM</a></li>           
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="seminovos") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/informacoes/seminovos/">Seminovos</a></li>           
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="financiamento") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/informacoes/financiamento/">Financie</a></li>            
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="vender_carro") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/informacoes/vender_carro/">Venda seu carro</a></li>            
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="contato") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/informacoes/contato/">Contato</a></li>           

    </ul>
</div><?php }} ?>
