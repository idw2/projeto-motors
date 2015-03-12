<?php /* Smarty version Smarty-3.1.19, created on 2014-07-23 12:20:48
         compiled from "C:\xampp\htdocs\MVC\application\views\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2829653cfd2d0d27ab1-82109468%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d081780b689e9f1a8d5dccb56addd57ddc8a7ca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MVC\\application\\views\\header.tpl',
      1 => 1406117776,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2829653cfd2d0d27ab1-82109468',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'stripe' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53cfd2d0d341b7_51030645',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53cfd2d0d341b7_51030645')) {function content_53cfd2d0d341b7_51030645($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	<script language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['stripe']->value;?>
web-files/js/jquery-2.1.1.min.js"></script>
	<script>
		//alert(window.location.href)
		$(document).ready(function(){
			alert("aqui");
		});
	</script>
</head>
<body>
	
	<?php echo $_smarty_tpl->getSubTemplate ("topo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>



<?php }} ?>
