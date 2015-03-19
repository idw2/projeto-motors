<?php /* Smarty version Smarty-3.1.19, created on 2014-12-29 11:11:35
         compiled from "/home/dlab34/motors.designlab.com.br/application/views/admin/navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1095808154a1a767542957-00774134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f7036d5dbee0fad6e37b645e5cb027840f24f0c' => 
    array (
      0 => '/home/dlab34/motors.designlab.com.br/application/views/admin/navbar.tpl',
      1 => 1419874187,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1095808154a1a767542957-00774134',
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
  'unifunc' => 'content_54a1a76762a429_60045888',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a1a76762a429_60045888')) {function content_54a1a76762a429_60045888($_smarty_tpl) {?><nav class="sidebar-nav">
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
/html/vender-carro">Venda seu carro</a></li>
    </ul>
    <hr>
    <h4 class="heading">Veículos</h4>
    <ul class="nav">
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="veiculos_lista") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/veiculos/veiculos-lista">Lista</a></li>
    </ul>
    <hr>
    <h4 class="heading">Serviços</h4>
    <ul class="nav">
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="alterar_senha") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/admin/alterar-senha">Alterar senha</a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value=="logout") {?> class="active" <?php } else { ?> class="" <?php }?>><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/admin/logout">Sair</a></li>
    </ul>
</nav><?php }} ?>
