<?php /* Smarty version Smarty-3.1.19, created on 2014-11-06 12:15:20
         compiled from "/home/dlab34/auto.designlab.com.br/application/views/zero_km.tpl" */ ?>
<?php /*%%SmartyHeaderCode:762912011545bd6d89289a5-40824048%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b223aaff33e13b166886383825facb0aaed194d6' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/zero_km.tpl',
      1 => 1413821088,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '762912011545bd6d89289a5-40824048',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545bd6d89e8f88_10370930',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545bd6d89e8f88_10370930')) {function content_545bd6d89e8f88_10370930($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="container">

    <div class="row">

        <div class="col-sm-12"> 
            <h2><span class="label label-default">Zero KM</span></h2>
            <br/>
            <?php echo $_smarty_tpl->tpl_vars['conteudo']->value;?>

            <br/>
        </div>

    </div>

</div>
<div style="clear: both;"></div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
