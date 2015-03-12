<?php /* Smarty version Smarty-3.1.19, created on 2014-08-12 11:32:17
         compiled from "/home/regis147/public_html/application/views/verificar_conta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:154594498053ea25716f1b17-12819991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e45556ad31446d5f97a0ad9503fff998ea7e093' => 
    array (
      0 => '/home/regis147/public_html/application/views/verificar_conta.tpl',
      1 => 1406829637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154594498053ea25716f1b17-12819991',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sucesso' => 0,
    'erro' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ea257176cb56_68180097',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ea257176cb56_68180097')) {function content_53ea257176cb56_68180097($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

	
	<h2><span class="label label-default">Conta Administrativa</span></h2>
	<br/>
	<?php if ($_smarty_tpl->tpl_vars['sucesso']->value=="TRUE") {?>
	<div class="alert alert-success" role="alert"><?php echo $_smarty_tpl->tpl_vars['erro']->value;?>
</div>
	<?php } else { ?>
	<div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['erro']->value;?>
</div>
	<?php }?>
	
	<p><button type="button" class="btn btn-primary" onclick="window.location='/conta/login'">FAZER LOGIN</button></p>
		
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
