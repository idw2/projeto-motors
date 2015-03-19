<?php /* Smarty version Smarty-3.1.19, created on 2014-08-12 11:32:24
         compiled from "/home/regis147/public_html/application/views/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189110644253ea2578848fe7-02877185%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf93062104c2f102f66f104b3a1a8a9840960282' => 
    array (
      0 => '/home/regis147/public_html/application/views/login.tpl',
      1 => 1407601794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189110644253ea2578848fe7-02877185',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'erro' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ea25788af222_54897882',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ea25788af222_54897882')) {function content_53ea25788af222_54897882($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>



<div class="col-md-6">

    <div class="jumbotron">
        <div class="container">

            <!-- h1 e p que já tínhamos -->
            <h2>Bem-vindo a sua conta administrativa!</h2>
            <br/>
            <p>Informe o seu <b>ID</b> e <b>Senha</b> para ter acesso aos nossos serviços.</p><br/>
        
        </div>
    </div>
</div> 

<div class="col-md-6">
    
    <form class="navbar-form navbar-left" role="search" action="/conta/login" method="post">

            <?php if ($_smarty_tpl->tpl_vars['erro']->value=='') {?>
            <div class="alert alert-success" role="alert"><strong>Atenção: </strong>Preencher todos os campos!</div>
            <?php } else { ?>
            <div class="alert alert-danger" role="alert"><strong>Atenção: </strong><?php echo $_smarty_tpl->tpl_vars['erro']->value;?>
</div>
            <?php }?>

            <h2><span class="label label-default">Acessar Conta</span></h2>
            <br/>				
            <p>
                    <div class="input-group">
                      <input type="text" class="form-control" id="login" name="login" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" autofocus="1" placeholder="Informe o seu ID"/>
                      <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    </div>
                    <div class="input-group"><a href="/conta/nao_lembro" class="text-link">» Não lembro</a></div>			
            </p>
            <p>
                    <div class="input-group">
                     <input type="password" class="form-control" id="password" name="password"  placeholder="Senha"/>
                      <span class="input-group-addon"><span class="glyphicon glyphicon-ok"></span></span>
                    </div>
                    <div class="input-group"><a href="/conta/recuperar_senha">» Esqueci ou não tenho a senha</a></div>			
            <p>
            <p><button type="submit" class="btn btn-primary" name="enviar">ENTRAR</button></p>

            <div class="alert alert-warning" role="alert">Ainda não sou usuário <strong><span onclick="javascript:window.location='/conta/cadastro'" style="cursor: pointer;">CRIAR CONTA</span></strong></div>

    </form>
                      
</div>	
                      
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
