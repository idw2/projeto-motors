<?php /* Smarty version Smarty-3.1.19, created on 2014-12-16 11:36:44
         compiled from "/home/dlab34/auto.designlab.com.br/application/views/admin/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:673365070549089cc672ea7-09161799%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d7c8ebc10119b479d6c94f4d1aacfae16187fa2' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/admin/navbar.tpl',
      1 => 1418394615,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '673365070549089cc672ea7-09161799',
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
  'unifunc' => 'content_549089cc754a30_65332139',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549089cc754a30_65332139')) {function content_549089cc754a30_65332139($_smarty_tpl) {?><nav class="sidebar-nav">
    <ul class="nav">
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="welcome") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/admin/welcome">Home</a></li>
    </ul>
    <hr>
    <h4 class="heading">Páginas</h4>
    <ul class="nav">
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
    </ul>
    <hr>
    <h4 class="heading">Veículos</h4>
    <ul class="nav">
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="veiculos_lista") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/veiculos/veiculos_lista">Lista</a></li>
    </ul>
    <hr>
    <h4 class="heading">Serviços</h4>
    <ul class="nav">
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="alterar_senha") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/admin/alterar_senha">Alterar senha</a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="logout") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/admin/logout">Sair</a></li>
    </ul>
</nav><?php }} ?>
