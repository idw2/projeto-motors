<?php /* Smarty version Smarty-3.1.19, created on 2014-08-08 12:10:02
         compiled from "/home/regis147/public_html/application/views/recuperar_senha.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113453744053e4e84a20dc46-64613079%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c311f6c84d0320b06a0806add29a2c474c24aa0' => 
    array (
      0 => '/home/regis147/public_html/application/views/recuperar_senha.tpl',
      1 => 1407510590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113453744053e4e84a20dc46-64613079',
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
  'unifunc' => 'content_53e4e84a2ebc72_24560166',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e4e84a2ebc72_24560166')) {function content_53e4e84a2ebc72_24560166($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="col-md-6">
    <form class="navbar-form navbar-left" style="width: 100%" action="/conta/recuperar_senha" method="post">

            <?php if ($_smarty_tpl->tpl_vars['erro']->value=='') {?>

                <div class="alert alert-success" role="alert"><strong>Atenção: </strong>Preencher todos os campos!</div>

            <?php } else { ?>

                <?php if ($_smarty_tpl->tpl_vars['sucesso']->value=="FALSE") {?>
                <div class="alert alert-danger" role="alert"><strong>Atenção: </strong><?php echo $_smarty_tpl->tpl_vars['erro']->value;?>
</div>
                <?php } else { ?>
                <div class="alert alert-success" role="alert"><?php echo $_smarty_tpl->tpl_vars['erro']->value;?>
</div>	
                <?php }?>

            <?php }?>

            <h2><span class="label label-default">Recuperar senha</span></h2>
            <br/>

            <p><input type="text" class="form-control" style="min-width: 60%" id="email" name="email" maxlength="70" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" placeholder="E-mail" /></p>
            <br/>

            <p><button type="submit" class="btn btn-primary" name="enviar">ENVIAR</button></p>

    </form>
</div>
        
<div class="col-md-6">

    <div class="jumbotron">
        <div class="container">

            <!-- h1 e p que já tínhamos -->
            <h2>Por que recuperar senha?</h2>
            <br/>
            <p>A sua conta lhe permite o acesso de suas assinaturas.<br/>
            <p>Lhe enviaremos um e-mail com informações para a recuperação de sua senha.<br/>
            
        </div>
    </div>
</div> 
	
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
