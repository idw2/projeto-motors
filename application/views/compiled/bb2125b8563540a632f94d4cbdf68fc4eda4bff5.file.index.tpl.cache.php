<?php /* Smarty version Smarty-3.1.19, created on 2014-12-16 11:33:38
         compiled from "/home/dlab34/auto.designlab.com.br/application/views/admin/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118267636549089126d3705-07285229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb2125b8563540a632f94d4cbdf68fc4eda4bff5' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/admin/index.tpl',
      1 => 1418665497,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118267636549089126d3705-07285229',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'erro' => 0,
    'sucesso' => 0,
    'language' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54908912802702_02158441',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54908912802702_02158441')) {function content_54908912802702_02158441($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="container">
    <div class="row box-login">

        <div class="form-login">

            <?php if ($_smarty_tpl->tpl_vars['erro']->value=='') {?>

                

            <?php } else { ?>

                <?php if ($_smarty_tpl->tpl_vars['sucesso']->value=="FALSE") {?>
                    <div class="alert alert-danger" role="alert"><strong>Atenção: </strong><?php echo $_smarty_tpl->tpl_vars['erro']->value;?>
</div>
                <?php } else { ?>
                    <div class="alert alert-success" role="alert"><?php echo $_smarty_tpl->tpl_vars['erro']->value;?>
</div>	
                <?php }?>

            <?php }?>

            <img class="area-restrita img-responsive center-block" src="/web-files/img/logo.png" alt="" border="0" title="" /><br/>
            <form role="form" method="post" action="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/admin/login">
                <div class="form-row input-group-2">
                    <span class="input-group-addon"><i class="md-email"></i></span>
                    <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
"/>
                </div>
                <div class="form-row input-group-2">
                    <span class="input-group-addon"><i class="md-lock"></i></span>
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha"/>
                </div>
                <div class="form-row">
                    <button type="submit" class="btn btn-primary" role="button">Entrar</button>
                </div>						
            </form>
        </div>

                <div class="login-footer-copy">&copy; <a href="http://designlab.com.br" target="_blank">DesignLab</a></div>

    </div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
