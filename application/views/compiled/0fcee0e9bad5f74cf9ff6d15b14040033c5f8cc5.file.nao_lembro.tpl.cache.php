<?php /* Smarty version Smarty-3.1.19, created on 2014-08-12 11:30:08
         compiled from "/home/regis147/public_html/application/views/nao_lembro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114451986853ea24f02fc631-85290685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0fcee0e9bad5f74cf9ff6d15b14040033c5f8cc5' => 
    array (
      0 => '/home/regis147/public_html/application/views/nao_lembro.tpl',
      1 => 1407510314,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114451986853ea24f02fc631-85290685',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'erro' => 0,
    'sucesso' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ea24f03b0678_42839415',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ea24f03b0678_42839415')) {function content_53ea24f03b0678_42839415($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>



<div class="col-md-6">

    <div class="jumbotron">
        <div class="container">

            <!-- h1 e p que já tínhamos -->
            <h2>Não lembra?</h2>
            <br/>
            <p>Lhe enviaremos um e-mail com o lembrete da conta que você deixou ao se cadastrar.<br/>
            
        </div>
    </div>
</div> 

<div class="col-md-6">
    <form class="navbar-form navbar-left" style="width: 100%" action="/conta/nao_lembro" method="post">

            <?php if ($_smarty_tpl->tpl_vars['erro']->value=='') {?>
            <div class="alert alert-success" role="alert"><strong>Atenção: </strong>Preencher todos os campos!</div>
            <?php } else { ?>

                    <?php if ($_smarty_tpl->tpl_vars['sucesso']->value=="FALSE") {?>
                    <div class="alert alert-danger" role="alert"><strong>Atenção: </strong><?php echo $_smarty_tpl->tpl_vars['erro']->value;?>
</div>
                    <?php } else { ?>
                    <div class="alert alert-success" role="alert"><strong>Atenção: </strong><?php echo $_smarty_tpl->tpl_vars['erro']->value;?>
</div>	
                    <?php }?>

            <?php }?>

            <h2><span class="label label-default">Não lembro</span></h2>
            <br/>

            <p><input type="text" class="form-control" style="min-width: 60%" id="email" name="email" maxlength="70" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" placeholder="E-mail" /></p>
            <br/>

            <p><button type="submit" class="btn btn-primary" name="enviar">ENVIAR</button></p>

    </form>
</div>
	
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
