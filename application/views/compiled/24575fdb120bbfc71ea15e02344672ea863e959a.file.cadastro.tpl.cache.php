<?php /* Smarty version Smarty-3.1.19, created on 2014-08-12 11:31:09
         compiled from "/home/regis147/public_html/application/views/cadastro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:191455904853ea252db78df7-06552587%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24575fdb120bbfc71ea15e02344672ea863e959a' => 
    array (
      0 => '/home/regis147/public_html/application/views/cadastro.tpl',
      1 => 1407509327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191455904853ea252db78df7-06552587',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'erro' => 0,
    'nome' => 0,
    'email' => 0,
    'cep' => 0,
    'logradouro' => 0,
    'numero' => 0,
    'complemento' => 0,
    'bairro' => 0,
    'cidade' => 0,
    'estado' => 0,
    'ddd' => 0,
    'tel' => 0,
    'ramal' => 0,
    'lembrete' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ea252dc8c2b2_41845768',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ea252dc8c2b2_41845768')) {function content_53ea252dc8c2b2_41845768($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="col-md-6">
          
    <form class="navbar-form navbar-left" role="search" action="/conta/cadastro" method="post">

          <?php if ($_smarty_tpl->tpl_vars['erro']->value=='') {?>
          <div class="alert alert-success" role="alert"><strong>Atenção: </strong>Preencher todos os campos!</div>
          <?php } else { ?>
          <div class="alert alert-danger" role="alert"><strong>Atenção: </strong><?php echo $_smarty_tpl->tpl_vars['erro']->value;?>
</div>
          <?php }?>
          <h2><span class="label label-default">Conta Administrativa</span></h2>
          <br/>
          <h4>Dados pessoais</h4>
          <p><input type="text" class="form-control" style="min-width: 100%" id="nome" name="nome" maxlength="40" value="<?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
" placeholder="Nome completo"/></p>
          <p><input type="text" class="form-control" style="max-width: 47%" id="email" name="email" maxlength="70" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" placeholder="E-mail"/></p>
          <p><input type="text" class="form-control" style="max-width: 47%" id="cep" name="cep" maxlength="9" value="<?php echo $_smarty_tpl->tpl_vars['cep']->value;?>
" placeholder="CEP"/></p>
          <h4>Endereço</h4>
          <p><input type="text" class="form-control" style="min-width: 100%" id="logradouro" name="logradouro" maxlength="140" value="<?php echo $_smarty_tpl->tpl_vars['logradouro']->value;?>
" placeholder="Endereço"/></p>
          <p><input type="text" class="form-control" style="max-width: 15%" id="numero" name="numero" maxlength="5" value="<?php echo $_smarty_tpl->tpl_vars['numero']->value;?>
" placeholder="Nº" onkeypress="return formataNumDV(event, this, 6);"/></p>
          <p><input type="text" class="form-control" style="min-width: 100%" id="complemento" name="complemento" maxlength="12" value="<?php echo $_smarty_tpl->tpl_vars['complemento']->value;?>
" placeholder="Complemento"/></p>
          <p><input type="text" class="form-control" style="max-width: 47%" id="bairro" name="bairro" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['bairro']->value;?>
" placeholder="Bairro"/></p>
          <p><input type="text" class="form-control" style="max-width: 47%" id="cidade" name="cidade" maxlength="80" value="<?php echo $_smarty_tpl->tpl_vars['cidade']->value;?>
" placeholder="Cidade"/></p>
          <p><input type="text" class="form-control" style="max-width: 15%" id="estado" name="estado" maxlength="2" value="<?php echo $_smarty_tpl->tpl_vars['estado']->value;?>
" placeholder="UF"/></p>
          <p>
              <h4>Telefone ou celular</h4>
              <input type="text" class="form-control" style="max-width: 15%" id="ddd" name="ddd" maxlength="4" value="<?php echo $_smarty_tpl->tpl_vars['ddd']->value;?>
" placeholder="DDD" onkeypress="return formataNumDV(event, this, 2);"/>
              <input type="text" class="form-control" style="max-width: 30%" id="tel" name="tel" maxlength="10" value="<?php echo $_smarty_tpl->tpl_vars['tel']->value;?>
" placeholder="Telefone" onkeypress="return formataNumDV(event, this, 9);"/>
              <input type="text" class="form-control" style="max-width: 30%" id="ramal" name="ramal" maxlength="8" value="<?php echo $_smarty_tpl->tpl_vars['ramal']->value;?>
" placeholder="Ramal" onkeypress="return formataNumDV(event, this, 4);"/>
          </p>
          <h4>Sua senha</h4>
          <p><input type="password" class="form-control" style="max-width: 47%" id="passwd" name="passwd" maxlength="50" value="" placeholder="Senha"/></p>
          <p><input type="password" class="form-control" style="max-width: 47%" id="passwd2" name="passwd2" maxlength="50" value=""  placeholder="Repetir senha"/></p>
          <h4>Lembrete de segurança</h4>
          <p><input type="text" class="form-control" style="min-width: 100%" id="lembrete" name="lembrete" maxlength="30" value="<?php echo $_smarty_tpl->tpl_vars['lembrete']->value;?>
" placeholder="Lembrete de senha"/></p>
          <p><button type="submit" class="btn btn-primary" name="enviar">ENVIAR</button></p>

      </form>
          
</div>
                
<div class="col-md-6">

    <div class="jumbotron">
        <div class="container">

            <!-- h1 e p que já tínhamos -->
            <h2>O que é uma conta administrativa!</h2>
            <br/>
            <p>As contas administrativas do "Registro de Assinaturas" são contas que permitem a seus usuários cadastrarem uma ou mais assinatura, tanto para pessoas físicas quanto jurídicas.</p><br/>
            <p>Lembrando que na criação de uma conta administrativa o seu responsável aceita de imediato e concorda com as nossas políticas de privacidade juntamente com o nosso termos de uso e serviço.</p>
            <p><strong>Crie a sua conta, é bem rápido e prático.</strong></p>

        </div>
    </div>
</div>    
    
<script>
	$('#cep').mask('99999-999');
	$('#cep').change(function(){
		
		var cep = jQuery(this).val();
	
		$.ajax({
			type: 'post',
			data: "cep="+cep,
			url:'/web-files/server/cep.php',
			success: function(data){
				$("#logradouro").val(data["Logradouro"]);
				$("#bairro").val(data["Bairro"]);
				$("#cidade").val(data["Cidade"]);
				$("#estado").val(data["UF"]);
			}
		});
		
		
	});
</script>
	
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
