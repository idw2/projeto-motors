<?php /* Smarty version Smarty-3.1.19, created on 2014-08-08 12:17:39
         compiled from "/home/regis147/public_html/application/views/trocar_senha.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105274643753e4ea13bfa195-35079134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a364c539f91563037a60062d319c6d50175238f' => 
    array (
      0 => '/home/regis147/public_html/application/views/trocar_senha.tpl',
      1 => 1407511056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105274643753e4ea13bfa195-35079134',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'codconta' => 0,
    'erro' => 0,
    'sucesso' => 0,
    'senha' => 0,
    'repetir_senha' => 0,
    'novo_lembrete' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53e4ea13cc0338_98859257',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e4ea13cc0338_98859257')) {function content_53e4ea13cc0338_98859257($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="col-md-6">
    <form class="navbar-form navbar-left" style="width: 100%" action="/conta/trocar_senha/codigo/<?php echo $_smarty_tpl->tpl_vars['codconta']->value;?>
" method="post">

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

            <h2><span class="label label-default">Trocar senha</span></h2>
            <br/>				
            <p>
                    <div class="input-group">
                      <input type="password" class="form-control" id="senha" name="senha" value="<?php echo $_smarty_tpl->tpl_vars['senha']->value;?>
" autofocus="1" placeholder="Nova senha"/>
                      <span class="input-group-addon"><span class="glyphicon glyphicon-cog"></span></span>
                    </div>		
            </p>
            <p>
                    <div class="input-group">
                      <input type="password" class="form-control" id="repetir_senha" name="repetir_senha" value="<?php echo $_smarty_tpl->tpl_vars['repetir_senha']->value;?>
" autofocus="1" placeholder="Repetir senha"/>
                      <span class="input-group-addon"><span class="glyphicon glyphicon-cog"></span></span>
                    </div>		
            </p>
            <p>
                    <div class="input-group">
                      <input type="text" class="form-control" id="novo_lembrete" name="novo_lembrete" value="<?php echo $_smarty_tpl->tpl_vars['novo_lembrete']->value;?>
" autofocus="1" placeholder="Novo lembrete"/>
                      <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
                    </div>
            </p>
            <p>
                <button type="submit" class="btn btn-primary" name="enviar">ALTERAR</button>
                <span class="input-group"><a href="/conta/login">» Acessar conta?</a></span>  
            </p>

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
