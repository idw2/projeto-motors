<?php /* Smarty version Smarty-3.1.19, created on 2014-08-18 18:47:33
         compiled from "/home/storage/e/be/ce/designlab2/public_html/veiculos/application/views/admin/welcome.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28460434853f27475635958-01535494%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13d84e831e1fbc0687ac3da3dc8e620f70625fdd' => 
    array (
      0 => '/home/storage/e/be/ce/designlab2/public_html/veiculos/application/views/admin/welcome.tpl',
      1 => 1408133076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28460434853f27475635958-01535494',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53f274756a99c6_61490302',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f274756a99c6_61490302')) {function content_53f274756a99c6_61490302($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="sidebar">
    <?php echo $_smarty_tpl->getSubTemplate ("admin/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="pull-left">
                <?php echo $_smarty_tpl->getSubTemplate ("admin/logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h2><span class="label label-default">Bem-vindo</span></h2>
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
