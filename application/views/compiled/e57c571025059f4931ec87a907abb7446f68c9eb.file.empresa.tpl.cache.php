<?php /* Smarty version Smarty-3.1.19, created on 2014-12-16 11:35:33
         compiled from "/home/dlab34/auto.designlab.com.br/application/views/empresa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:323404150549089854053b7-83679634%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e57c571025059f4931ec87a907abb7446f68c9eb' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/empresa.tpl',
      1 => 1416239820,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '323404150549089854053b7-83679634',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_549089854ea8a2_69698102',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549089854ea8a2_69698102')) {function content_549089854ea8a2_69698102($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="container">

    <div class="row pagetitle">
        <div class="col-xs-12">
            <h2>Nossa empresa</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <?php echo $_smarty_tpl->tpl_vars['conteudo']->value;?>

        </div>
    </div>

</div>
<div style="clear: both;"></div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
