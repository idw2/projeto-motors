<?php /* Smarty version Smarty-3.1.19, created on 2014-12-29 11:11:35
         compiled from "/home/dlab34/motors.designlab.com.br/application/views/admin/welcome.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13869904754a1a767328654-15942752%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab782410d8b362cc27961ae17f60566dae0049df' => 
    array (
      0 => '/home/dlab34/motors.designlab.com.br/application/views/admin/welcome.tpl',
      1 => 1419874198,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13869904754a1a767328654-15942752',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54a1a7673ed357_72299117',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a1a7673ed357_72299117')) {function content_54a1a7673ed357_72299117($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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
