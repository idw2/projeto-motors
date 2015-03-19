<?php /* Smarty version Smarty-3.1.19, created on 2014-08-12 11:30:23
         compiled from "/home/regis147/public_html/application/views/contato.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175208989453ea24ff4aa0d0-80025316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96eb0709ef2eae34f774f13d25a7144956af33e6' => 
    array (
      0 => '/home/regis147/public_html/application/views/contato.tpl',
      1 => 1407630643,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175208989453ea24ff4aa0d0-80025316',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'erro' => 0,
    'sucesso' => 0,
    'nome' => 0,
    'email' => 0,
    'assunto' => 0,
    'mensagem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ea24ff557520_92699726',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ea24ff557520_92699726')) {function content_53ea24ff557520_92699726($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="col-md-6">

    <div class="jumbotron">
        <div class="container">

            <!-- h1 e p que já tínhamos -->
            <h2>Ainda está com problemas?</h2>
            <br/>
            <p><strong>E-mail:</strong><br/>
                <span style='font-size: 20'>contato@registrodeassinaturas.com.br</span>
            </p><br/>
            <br/>
            <p><strong>Obs:</strong><br/>O prazo de respostas para as solicitações é de até 24h.</p><br/>
        
        </div>
    </div>
</div> 

<div class="col-md-6">
    <form class="navbar-form navbar-left" style="width: 100%" action="/registro/contato" method="post">

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
                
        <h2><span class="label label-default">Fale conosco</span></h2>
        <br/>
        <p><input type="text" class="form-control" style="min-width: 100%" id="nome" name="nome" maxlength="40" value="<?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
" placeholder="Nome completo"/></p>
        <p><input type="text" class="form-control" style="max-width: 47%" id="email" name="email" maxlength="70" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" placeholder="E-mail"/></p>
        <p><input type="text" class="form-control" style="min-width: 100%" id="assunto" name="assunto" maxlength="70" value="<?php echo $_smarty_tpl->tpl_vars['assunto']->value;?>
" placeholder="Assunto"/></p>
        <p><textarea class="form-control" rows="5" style="min-width: 100%" id="mensagem" name="mensagem"><?php echo $_smarty_tpl->tpl_vars['mensagem']->value;?>
</textarea></p>
        <p><button type="submit" class="btn btn-primary" name="enviar">ENVIAR</button></p>
        
    </form>
</div>
	
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php }} ?>
