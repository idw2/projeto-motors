<?php /* Smarty version Smarty-3.1.19, created on 2015-03-12 08:16:45
         compiled from "/home/dlab34/motors.designlab.com.br/application/views/usuarios_editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13961699005501adddadc361-89928427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d8f3858fea55867fdb7e03d8698ddae1ba2e12f' => 
    array (
      0 => '/home/dlab34/motors.designlab.com.br/application/views/usuarios_editar.tpl',
      1 => 1426172928,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13961699005501adddadc361-89928427',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'erro' => 0,
    'post_nome' => 0,
    'usuario' => 0,
    'updatePassword' => 0,
    'post_lembrete' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5501adddc292c3_73273452',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5501adddc292c3_73273452')) {function content_5501adddc292c3_73273452($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit User</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form method="post">

                                <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/usuarios" class="btn btn-default navbar-btn"><i class="fa fa-reply">&nbsp</i> Back</a>
                                <br/>

                                <?php if ($_smarty_tpl->tpl_vars['erro']->value=='') {?>
                                    <div class="alert alert-success" role="alert"><strong>Heads Up: </strong>Fill in all required fields!</div>
                                <?php } else { ?>
                                    <div class="alert alert-danger" role="alert"><strong>Heads Up: </strong><?php echo $_smarty_tpl->tpl_vars['erro']->value;?>
</div>
                                <?php }?>

                                <br/>    

                                <h4>Username:</h4>
                                <div><input type="text" class="form-control" id="nome" name="nome" maxlength="15" value="<?php if ($_smarty_tpl->tpl_vars['post_nome']->value=='') {?><?php echo $_smarty_tpl->tpl_vars['usuario']->value->USERNAME;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['post_nome']->value;?>
<?php }?>" placeholder="Username"/></div>

                                <h4>
                                    <input type="checkbox" name="updatePassword" id="updatePassword" <?php if ($_smarty_tpl->tpl_vars['updatePassword']->value=="on") {?> checked="true" <?php }?> /> I wish to register a new password.
                                </h4>
                                <div class="updatePassword <?php if (isset($_smarty_tpl->tpl_vars['updatePassword']->value)) {?> <?php if (isset($_smarty_tpl->tpl_vars['updatePassword']->value)!="on") {?> hide <?php }?> <?php } else { ?> hide <?php }?> ">
                                    <hr/>
                                    <div><input type="password" class="form-control" id="passwd" name="passwd" maxlength="50" value="" placeholder="Password"/></div>
                                    <br>
                                    <div><input type="password" class="form-control" id="passwd2" name="passwd2" maxlength="50" value=""  placeholder="Repeat password"/></div>
                                    <h4>Safety Reminder:</h4>
                                    <div><input type="text" class="form-control" id="lembrete" name="lembrete" maxlength="30" value="<?php if ($_smarty_tpl->tpl_vars['post_lembrete']->value=='') {?><?php echo $_smarty_tpl->tpl_vars['usuario']->value->LEMBRETE;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['post_lembrete']->value;?>
<?php }?>" placeholder="Password reminder"/></div>
                                    <hr/>
                                </div>
                                <div><?php echo $_smarty_tpl->getSubTemplate ("btn_send.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
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
