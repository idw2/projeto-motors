<?php /* Smarty version Smarty-3.1.19, created on 2014-07-23 12:20:48
         compiled from "C:\xampp\htdocs\MVC\application\views\cadastro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:669953cfd2d0ca2053-51483826%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd53d595e311b04bd5fb5259811b1758ba7a1c474' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MVC\\application\\views\\cadastro.tpl',
      1 => 1406118707,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '669953cfd2d0ca2053-51483826',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'stripe' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53cfd2d0ce3ec3_84226996',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53cfd2d0ce3ec3_84226996')) {function content_53cfd2d0ce3ec3_84226996($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<form action="<?php echo $_smarty_tpl->tpl_vars['stripe']->value;?>
conta/cadastro" method="post">
	<div>
		<div>
			<p>Conta Administrativa</p>
		</div>
		<div>
			<div>
				<div>
					<label for="nome">Nome</label>
					<input type="text" id="nome" name="nome" maxlength="40" value="" placeholder="Nome completo"/>
					<label for="email">Email</label>
					<input type="text" id="email" name="email" maxlength="70" value="" placeholder="E-mail"/>
				</div>
			</div>
			<div>
				<div>
					<div>
						<label for="cep">CEP</label>
						<input type="text" name="cep" maxlength="9" placeholder="CEP"/>
					</div>
				</div>
				<div>
					<div>
						<label for="lograd">Endereço</label>
						<input type="text" id="lograd" name="lograd" maxlength="140"  placeholder="Endereço"/>
					</div>
				</div>

				<div>
					<div>
						<label for="numero">Número</label>
						<input type="text" id="numero" name="numero" maxlength="5" value="" placeholder="Nº"/>
					</div>

					<div>
						<label for="compl">Complemento</label>
						<input type="text" id="compl" name="compl" maxlength="12" value=""  placeholder="Complemento"/>
					</div>
				</div>

				<div>
					<div>
						<label for="estado">UF</label>
						<input type="text" id="estado" name="estado" maxlength="2" placeholder="UF"/>
					</div>

					<div class="col-lg-7 col-md-7">
						<label for="cidade">Cidade</label>
						<input type="text" id="cidade" name="cidade" maxlength="80" placeholder="Cidade"/>
					</div>
				</div>
			</div>

			<div class="row form-group" id="dados-contato">
				<div>
					<label>Telefone</label>
					<input type="text" id="ddi" name="ddi" maxlength="4" placeholder="DDI"/>
					<input type="text" id="ddd" name="ddd" maxlength="4" value="" placeholder="DDD"/>
				</div>
				<div>
					<label for="telefone">Telefone</label>
					<input type="text" id="tel" name="tel" maxlength="10" value="" placeholder="Telefone"/>
				</div>
				<div>
					<label for="extension">Ramal</label>
					<input type="text" id="ramal" name="ramal" maxlength="8" value="" placeholder="Ramal"/>
				</div>
			</div>

			<div>
				<div>
					<div>
						<label for="passwd">Senha <span>(entre 6 e 50 caracteres)</span></label>
						<input type="password" id="passwd" name="passwd" maxlength="50" value="" placeholder="Senha"/>
					</div>

					<div>
						<label for="passwd2">Confirme a senha</label>
						<input type="password" id="passwd2" name="passwd2" maxlength="50" value=""  placeholder="Repetir senha"/>
					</div>
				</div>

				<div>
					<div>
						<label for="lembrete">Lembrete da senha</label>
						<input type="text" id="lembrete" name="lembrete" maxlength="30" value="">
					</div>
				</div>
			</div>
		</div>
		<div>
			<button type="submit" name="enviar">ENVIAR</button>
		</div>
	</div>
</form>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
