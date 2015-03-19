<?php /* Smarty version Smarty-3.1.19, created on 2015-03-11 16:36:43
         compiled from "/home/dlab34/motors.designlab.com.br/application/views/alterar_senha.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5180134925500d18b2eef25-26776675%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e655102d602b2f29f2be3be267f0f0fe5c59798' => 
    array (
      0 => '/home/dlab34/motors.designlab.com.br/application/views/alterar_senha.tpl',
      1 => 1426116162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5180134925500d18b2eef25-26776675',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'erro' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5500d18b3c8542_02355880',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5500d18b3c8542_02355880')) {function content_5500d18b3c8542_02355880($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Change Password</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form class="navbar-form navbar-left" style="width: 100%" action="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/admin/alterar_senha" method="post">

                                 <?php if ($_smarty_tpl->tpl_vars['erro']->value=='') {?>
                                    <div class="alert alert-success" role="alert"><strong>Heads Up: </strong>Fill in all required fields!</div>
                                <?php } else { ?>
                                    <div class="alert alert-danger" role="alert"><strong>Heads Up: </strong><?php echo $_smarty_tpl->tpl_vars['erro']->value;?>
</div>
                                <?php }?>
                                
                                <br/>
                                <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                                    <input type="password" class="form-control" id="senha_atual" name="senha_atual" placeholder="Current password"/>
                                    <span class="input-group-addon"><i class="fa fa-pencil">&nbsp</i></span>
                                </div>	
                                <br/>
                                <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                                    <input type="password" class="form-control" id="senha_nova" name="senha_nova" placeholder="New password"/>
                                    <span class="input-group-addon"><i class="fa fa-pencil">&nbsp</i></span>
                                </div>	
                                <br/>
                                <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                                    <input type="password" class="form-control" id="senha_repetir" name="senha_repetir" placeholder="Repeat senha"/>
                                    <span class="input-group-addon"><i class="fa fa-pencil">&nbsp</i></span>
                                </div>	
                                <br/>
                                <div class="input-group input-group-lg">
                                    <button type="submit" class="btn btn-primary btn-lg" role="button">Entrar</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /#page-wrapper -->

<?php echo $_smarty_tpl->getSubTemplate ("tinymce_1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
