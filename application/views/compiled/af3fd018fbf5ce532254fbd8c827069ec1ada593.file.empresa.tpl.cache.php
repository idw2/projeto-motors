<?php /* Smarty version Smarty-3.1.19, created on 2014-08-18 18:47:40
         compiled from "/home/storage/e/be/ce/designlab2/public_html/veiculos/application/views/admin/empresa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180309858453f2747ccdfa95-75833247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af3fd018fbf5ce532254fbd8c827069ec1ada593' => 
    array (
      0 => '/home/storage/e/be/ce/designlab2/public_html/veiculos/application/views/admin/empresa.tpl',
      1 => 1408134248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180309858453f2747ccdfa95-75833247',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53f2747cd8e159_05376750',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f2747cd8e159_05376750')) {function content_53f2747cd8e159_05376750($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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
            <form class="navbar-form navbar-left" style="width: 100%" action="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/html/empresa" method="post">
                <h2><span class="label label-default">Empresa</span></h2>
                <br/>
                <p><textarea class="form-control" rows="25" style="min-width: 100%" id="conteudo" name="conteudo"><?php echo $_smarty_tpl->tpl_vars['conteudo']->value;?>
</textarea></p>
                <p><button type="submit" class="btn btn-primary" name="enviar">ENVIAR</button></p>

            </form>

        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin/tinymce_1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
