<?php /* Smarty version Smarty-3.1.19, created on 2014-08-12 11:31:58
         compiled from "/home/regis147/public_html/application/views/cadastro_sucesso.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114612162553ea255e231489-92874952%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '313a7be3ecec698140533725c3f2a63da429f804' => 
    array (
      0 => '/home/regis147/public_html/application/views/cadastro_sucesso.tpl',
      1 => 1406835524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114612162553ea255e231489-92874952',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nome' => 0,
    'email' => 0,
    'iniciais' => 0,
    'lembrete' => 0,
    'codconta' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ea255e310c32_10006536',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ea255e310c32_10006536')) {function content_53ea255e310c32_10006536($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<form class="navbar-form navbar-left" role="search" action="/conta/cadastro_sucesso" method="post">
	
	<div class="alert alert-success" role="alert">Parabéns <strong><?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
</strong>, sua conta foi criada com sucesso!</div>
	<div class="alert alert-info" role="alert">Verifique um e-mail enviado para <strong><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</strong>!</div>
	
	<h2><span class="label label-default">Não recebi o e-mail.</span></h2>
	
	<p><input type="hidden" class="form-control" id="iniciais" name="iniciais" maxlength="40" value="<?php echo $_smarty_tpl->tpl_vars['iniciais']->value;?>
"/></p>
	<p><input type="hidden" class="form-control" id="lembrete" name="lembrete" maxlength="40" value="<?php echo $_smarty_tpl->tpl_vars['lembrete']->value;?>
"/></p>
	<p><input type="hidden" class="form-control" id="codconta" name="codconta" maxlength="40" value="<?php echo $_smarty_tpl->tpl_vars['codconta']->value;?>
"/></p>
	<p><input type="hidden" class="form-control" id="nome" name="nome" maxlength="40" value="<?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
" placeholder="Nome completo"/></p>
	<br/>
	<p><input type="text" class="form-control" id="email" name="email" maxlength="70" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" placeholder="E-mail" readonly /></p>
	<br/>
		
	<p><button type="submit" class="btn btn-primary" name="enviar">REENVIAR E-MAIL</button></p>
	
</form>
	
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
