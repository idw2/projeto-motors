<?php /* Smarty version Smarty-3.1.19, created on 2015-03-12 15:39:38
         compiled from "/home/dlab34/motors.designlab.com.br/application/views/primeiro_acesso.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1275873915550215aac54b84-63521635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f858fee0508309cad49b749218af1aa7baa7e47' => 
    array (
      0 => '/home/dlab34/motors.designlab.com.br/application/views/primeiro_acesso.tpl',
      1 => 1426173117,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1275873915550215aac54b84-63521635',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'erro' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_550215aad87ae1_26018110',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550215aad87ae1_26018110')) {function content_550215aad87ae1_26018110($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>




<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Set Password First Access</h1>
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
                                
                                <?php if ($_smarty_tpl->tpl_vars['erro']->value=='') {?>
                                    <div class="alert alert-success" role="alert"><strong>Heads Up: </strong>Fill in all required fields!</div>
                                <?php } else { ?>
                                    <div class="alert alert-danger" role="alert"><strong>Heads Up: </strong><?php echo $_smarty_tpl->tpl_vars['erro']->value;?>
</div>
                                <?php }?>

                                <br/>
                                <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                                    <input type="password" class="form-control" id="senha_nova" name="senha_nova" placeholder="Set password"/>
                                    <span class="input-group-addon"><i class="fa fa-pencil">&nbsp</i></span>
                                </div>	
                                <br/>
                                <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                                    <input type="password" class="form-control" id="senha_repetir" name="senha_repetir" placeholder="Repeat password"/>
                                    <span class="input-group-addon"><i class="fa fa-pencil">&nbsp</i></span>
                                </div>	
                                <br/>
                                <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                                    <input type="text" class="form-control" id="lembrete" name="lembrete" placeholder="Password reminder"/>
                                    <span class="input-group-addon"><i class="fa fa-pencil">&nbsp</i></span>
                                </div>	
                                <br/>
                                <div class="input-group input-group-lg">
                                    <?php echo $_smarty_tpl->getSubTemplate ("btn_send.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
