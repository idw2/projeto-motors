<?php /* Smarty version Smarty-3.1.19, created on 2014-08-11 10:44:17
         compiled from "/home/regis147/public_html/application/views/enviar_amigo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182211937653e8c8b1791735-16719921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ab542922eb405b08054ac1699942f69fcd3eef6' => 
    array (
      0 => '/home/regis147/public_html/application/views/enviar_amigo.tpl',
      1 => 1407713038,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182211937653e8c8b1791735-16719921',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'erro' => 0,
    'sucesso' => 0,
    'seu_nome' => 0,
    'amigo_nome' => 0,
    'seu_email' => 0,
    'amigo_email' => 0,
    'mensagem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53e8c8b1889de1_96305329',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e8c8b1889de1_96305329')) {function content_53e8c8b1889de1_96305329($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="col-md-6">

    <div class="jumbotron">
        <div class="container">

            <h2>Gostou dos nossos serviços?</h2>
            <br/>
            <p>Convide alguém que você conhece para visitar o nosso site!</p><br/>
        
        </div>
    </div>
</div> 

<div class="col-md-6">
    <form class="navbar-form navbar-left" style="width: 100%" action="/registro/enviar_amigo" method="post">

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
                
        <h2><span class="label label-default">Envie para um amigo</span></h2>
        <br/>
        <p><input type="text" class="form-control" style="min-width: 100%" id="nome" name="seu_nome" maxlength="40" value="<?php echo $_smarty_tpl->tpl_vars['seu_nome']->value;?>
" placeholder="Seu nome"/></p>
        <p><input type="text" class="form-control" style="min-width: 100%" id="nome" name="amigo_nome" maxlength="40" value="<?php echo $_smarty_tpl->tpl_vars['amigo_nome']->value;?>
" placeholder="Nome do seu amigo"/></p>
        <p><input type="text" class="form-control" style="max-width: 47%" id="email" name="seu_email" maxlength="70" value="<?php echo $_smarty_tpl->tpl_vars['seu_email']->value;?>
" placeholder="Seu e-mail"/></p>
        <p><input type="text" class="form-control" style="max-width: 47%" id="email" name="amigo_email" maxlength="70" value="<?php echo $_smarty_tpl->tpl_vars['amigo_email']->value;?>
" placeholder="E-mail do seu amigo"/></p>
        <p><textarea class="form-control" rows="5" style="min-width: 100%" id="mensagem" name="mensagem" placeholder="Mensagem para seu amigo"><?php echo $_smarty_tpl->tpl_vars['mensagem']->value;?>
</textarea></p>
        <p><button type="submit" class="btn btn-primary" name="enviar">ENVIAR</button></p>
        
    </form>
</div>
	
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php }} ?>
