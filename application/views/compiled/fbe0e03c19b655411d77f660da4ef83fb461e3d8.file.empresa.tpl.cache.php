<?php /* Smarty version Smarty-3.1.19, created on 2015-03-11 10:28:20
         compiled from "/home/dlab34/motors.designlab.com.br/application/views/empresa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192344862655007b34aa2044-43469707%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbe0e03c19b655411d77f660da4ef83fb461e3d8' => 
    array (
      0 => '/home/dlab34/motors.designlab.com.br/application/views/empresa.tpl',
      1 => 1426094841,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192344862655007b34aa2044-43469707',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'erro' => 0,
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55007b34b79be8_00207023',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55007b34b79be8_00207023')) {function content_55007b34b79be8_00207023($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>





<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">A Empresa</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="pull-left">
                <?php if ($_smarty_tpl->tpl_vars['erro']->value!='') {?>
                    <div class="alert alert-success" role="alert"><?php echo $_smarty_tpl->tpl_vars['erro']->value;?>
</div>	
                <?php }?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-lg-6">
                        <form method="post">
                            <p><textarea class="form-control" rows="25" style="min-width: 100%" id="conteudo" name="conteudo"><?php echo $_smarty_tpl->tpl_vars['conteudo']->value;?>
</textarea></p>
                            <p><button type="submit" class="btn btn-primary" name="enviar">ENVIAR</button></p>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



<?php echo $_smarty_tpl->getSubTemplate ("tinymce_1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
