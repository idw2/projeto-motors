<?php /* Smarty version Smarty-3.1.19, created on 2014-11-17 08:45:23
         compiled from "/home/dlab34/auto.designlab.com.br/application/views/contato.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1471279699546a2623491c54-41326805%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '521fa073967e62793359057903f92297abed632f' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/contato.tpl',
      1 => 1416240056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1471279699546a2623491c54-41326805',
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
  'unifunc' => 'content_546a2623599cd4_77473556',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546a2623599cd4_77473556')) {function content_546a2623599cd4_77473556($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="container">

    <div class="row">
        <div class="col-md-6">
            <!-- h1 e p que já tínhamos -->
            <h2>Ainda está com problemas?</h2>
            <br/>
            <p><strong>E-mail:</strong><br />
                contato@torresauto.com.br
            </p>
            <br/>
            <p><strong>Obs:</strong><br/>
                O prazo de respostas para as solicitações é de até 24h.
            </p>

        </div> 

        <div class="col-md-6">
            <form class="navbar-form navbar-left" style="width: 100%" action="/registro/contato" method="post">

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

                <h2>Fale conosco</h2>
                <br/>
                <p><input type="text" class="form-control" id="nome" name="nome" maxlength="40" value="<?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
" placeholder="Nome completo"/></p>
                <p><input type="email" class="form-control" id="email" name="email" maxlength="70" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" placeholder="E-mail"/></p>
                <p><input type="text" class="form-control" id="assunto" name="assunto" maxlength="70" value="<?php echo $_smarty_tpl->tpl_vars['assunto']->value;?>
" placeholder="Assunto"/></p>
                <p><textarea class="form-control" rows="5" id="mensagem" name="mensagem"><?php echo $_smarty_tpl->tpl_vars['mensagem']->value;?>
</textarea></p>
                <p><button type="submit" class="btn red" name="enviar">ENVIAR</button></p>

            </form>
        </div>
    </div>
</div>
<div style="clear: both;"></div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
