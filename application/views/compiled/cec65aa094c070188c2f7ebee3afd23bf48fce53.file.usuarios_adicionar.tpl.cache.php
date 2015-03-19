<?php /* Smarty version Smarty-3.1.19, created on 2015-03-13 10:14:46
         compiled from "/home/dlab34/motors.designlab.com.br/application/views/usuarios_adicionar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127069796155031b06181612-22160048%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cec65aa094c070188c2f7ebee3afd23bf48fce53' => 
    array (
      0 => '/home/dlab34/motors.designlab.com.br/application/views/usuarios_adicionar.tpl',
      1 => 1426172914,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127069796155031b06181612-22160048',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'erro' => 0,
    'post_nome' => 0,
    'updatePassword' => 0,
    'post_lembrete' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55031b063d82d3_45067728',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55031b063d82d3_45067728')) {function content_55031b063d82d3_45067728($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Create User</h1>
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
                                    <div class="alert alert-success" role="alert"><strong>Heads Up: </strong>Username required!</div>
                                <?php } else { ?>
                                    <div class="alert alert-danger" role="alert"><strong>Heads Up: </strong><?php echo $_smarty_tpl->tpl_vars['erro']->value;?>
</div>
                                <?php }?>

                                <br/> 





                                <h4>Username:</h4>
                                <div><input type="text" class="form-control" id="nome" name="nome" maxlength="15" value="<?php echo $_smarty_tpl->tpl_vars['post_nome']->value;?>
" placeholder="Username"/></div>


                                <h4>
                                    <input type="checkbox" name="updatePassword" id="updatePassword" <?php if ($_smarty_tpl->tpl_vars['updatePassword']->value=="on") {?> checked="true" <?php }?> /> I wish to register a new password.
                                </h4>
                                
                                <div class="updatePassword <?php if (isset($_smarty_tpl->tpl_vars['updatePassword']->value)) {?> <?php if (isset($_smarty_tpl->tpl_vars['updatePassword']->value)!="on") {?> hide <?php }?> <?php } else { ?> hide <?php }?> ">
                                    <hr/>
                                    <div><input type="password" class="form-control" id="passwd" name="passwd" maxlength="50" value="" placeholder="Password"/></div>
                                    <br>
                                    <div><input type="password" class="form-control" id="passwd2" name="passwd2" maxlength="50" value=""  placeholder="Repeat passwor"/></div>
                                    <h4>Safety Reminder:</h4>
                                    <div><input type="text" class="form-control" id="lembrete" name="lembrete" maxlength="30" value="<?php echo $_smarty_tpl->tpl_vars['post_lembrete']->value;?>
" placeholder="Password reminder"/></div>
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
