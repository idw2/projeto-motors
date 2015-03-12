<?php /* Smarty version Smarty-3.1.19, created on 2014-07-23 09:28:17
         compiled from "C:\xampp\htdocs\MVC\application\views\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:163553cfaa61cf2696-15001548%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '190c0e796c5a1393dca7c892099f1601301b1f22' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MVC\\application\\views\\login.tpl',
      1 => 1406058087,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163553cfaa61cf2696-15001548',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53cfaa61d25e92_10075495',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53cfaa61d25e92_10075495')) {function content_53cfaa61d25e92_10075495($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<div>	
    <p class="title">Acessar conta</p>
    <form method="post">
			<div>
				<div>
					<div>
						<label>Usuário</label>
						<input type="text" id="user" autofocus="1" placeholder="ID, CPF ou CNPJ">
						 <a href="nao_lembro" class="text-link">
							 » Não lembro
						 </a>
					</div>
					<div>
						<label>Senha</label>
						<input type="password" id="password"/>
						<a  href="/suporte/token">
							» Esqueci ou não tenho a senha
						</a>
					</div>
					<div>
						<label>Token</label>
						<input type="text" maxlength="12"/>
						<div>
							Seu usuário possui o Token do Registro.br habilitado, portanto é
							necessário	informar o código de segurança para continuar.
							<a href="/suporte/token" class="text-link">
								» Mais informações
							</a>
						</div>
					</div>
				</div>
			</div>
			<div>
				<div>
					<label></label>
					<div>
						<button type="button">acessar
						</button>
					</div>
				</div>
			</div>
			
			<div>
				<p>
					Ainda não sou usuário <a href="cadastro">CRIAR CONTA</a>
				</p>
			</div>

		</form>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
