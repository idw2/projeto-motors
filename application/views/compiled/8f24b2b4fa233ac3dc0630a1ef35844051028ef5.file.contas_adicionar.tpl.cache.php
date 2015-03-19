<?php /* Smarty version Smarty-3.1.19, created on 2015-03-10 11:09:55
         compiled from "/home/dlab34/motors.designlab.com.br/application/views/contas_adicionar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63647308754ff3373d516d7-39338751%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f24b2b4fa233ac3dc0630a1ef35844051028ef5' => 
    array (
      0 => '/home/dlab34/motors.designlab.com.br/application/views/contas_adicionar.tpl',
      1 => 1425760886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63647308754ff3373d516d7-39338751',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'error' => 0,
    'tipo_pessoa' => 0,
    'post_cpf' => 0,
    'post_cnpj' => 0,
    'post_nome' => 0,
    'post_site' => 0,
    'post_email' => 0,
    'aniversario' => 0,
    'datagrid' => 0,
    'post_cep' => 0,
    'post_logradouro' => 0,
    'post_numero' => 0,
    'post_complemento' => 0,
    'post_bairro' => 0,
    'post_cidade' => 0,
    'post_estado' => 0,
    'post_administrador' => 0,
    'post_cliente' => 0,
    'updatePassword' => 0,
    'post_lembrete' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54ff3374223492_76979742',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ff3374223492_76979742')) {function content_54ff3374223492_76979742($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Criar Conta</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form method="post">

                                <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/contas" class="btn btn-default navbar-btn"><i class="fa fa-reply">&nbsp</i> Voltar</a>
                                <br/>

                                <?php if ($_smarty_tpl->tpl_vars['error']->value=='') {?>
                                    <div class="alert alert-success" role="alert"><strong>Atenção: </strong>Preencher todos os campos!</div>
                                <?php } else { ?>
                                    <div class="alert alert-danger" role="alert"><strong>Atenção: </strong><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
                                <?php }?>

                                <br/>    
                                <h4 style="position: relative">Tipo de conta</h4>
                                <p> 
                                <div class="input-group">
                                    <span class="input-group-2">
                                        <input type="radio" name="tipo_pessoa" value="pf" onclick="javascript:show_Tipopessoa('cpf')" <?php if (isset($_smarty_tpl->tpl_vars['tipo_pessoa']->value)) {?><?php if ($_smarty_tpl->tpl_vars['tipo_pessoa']->value=="pf") {?> checked="true"<?php }?> <?php } else { ?> checked="true"  <?php }?>/> Pessoa Física 
                                    </span>
                                    <span class="input-group-2">
                                        <input type="radio" name="tipo_pessoa" value="pj" onclick="javascript:show_Tipopessoa('cnpj')" <?php if ($_smarty_tpl->tpl_vars['tipo_pessoa']->value=="pj") {?> checked="true"<?php }?>/> Pessoa Jurídica
                                    </span>
                                </div>
                                </p>

                                <div class="tipo-pessoa-cpf <?php if (isset($_smarty_tpl->tpl_vars['tipo_pessoa']->value)) {?><?php if ($_smarty_tpl->tpl_vars['tipo_pessoa']->value!="pf") {?> hide <?php }?> <?php }?>">
                                    <h4 style="position: relative">CPF:</h4>
                                    <p> 
                                        <input type="text" class="form-control" id="cpf" name="cpf" name="cpf" maxlength="70" value="<?php if ($_smarty_tpl->tpl_vars['post_cpf']->value!='..-') {?><?php echo $_smarty_tpl->tpl_vars['post_cpf']->value;?>
<?php }?>" placeholder="CPF" onkeypress="return formataCPF(event, this);"/>
                                    </p>
                                </div>
                                <div class="tipo-pessoa-cnpj <?php if (isset($_smarty_tpl->tpl_vars['tipo_pessoa']->value)) {?><?php if ($_smarty_tpl->tpl_vars['tipo_pessoa']->value!="pj") {?> hide <?php }?> <?php } else { ?> hide <?php }?>">
                                    <h4 style="position: relative">CNPJ:</h4>
                                    <p> 
                                        <input type="text" class="form-control" id="cnpj" id="cnpj" name="cnpj" maxlength="70" value="<?php if ($_smarty_tpl->tpl_vars['post_cnpj']->value!='..-') {?><?php echo $_smarty_tpl->tpl_vars['post_cnpj']->value;?>
<?php }?>" placeholder="CNPJ" onkeypress="return formataCNPJ(event, this);"/>
                                    </p>
                                </div>    

                                <h4>Nome:</h4>
                                <p>
                                    <input type="text" class="form-control" id="nome" name="nome" maxlength="40" value="<?php echo $_smarty_tpl->tpl_vars['post_nome']->value;?>
" placeholder="Nome ou Empresa"/>
                                </p>
                                <h4>Site:</h4>
                                <p>
                                    <input type="text" class="form-control" id="site" name="site" value="<?php if ($_smarty_tpl->tpl_vars['post_site']->value!='') {?><?php echo $_smarty_tpl->tpl_vars['post_site']->value;?>
<?php } else { ?>http://<?php }?>" placeholder="http:// ou https://"/>
                                </p>
                                <h4>E-mail:</h4>
                                <p>
                                    <input type="text" class="form-control" id="email" name="email" maxlength="70" value="<?php echo $_smarty_tpl->tpl_vars['post_email']->value;?>
" placeholder="E-mail"/>
                                </p>
                                <h4>Data de nascimento ou fundação:</h4>
                                <p><?php echo $_smarty_tpl->tpl_vars['aniversario']->value;?>
</p>
                                <div class="tipo-pesso-sexo <?php if (isset($_smarty_tpl->tpl_vars['tipo_pessoa']->value)) {?><?php if ($_smarty_tpl->tpl_vars['tipo_pessoa']->value=="pj") {?> hide <?php }?> <?php }?>">
                                    <h4>Sexo</h4>
                                    <p> 
                                        <select name="sexo" class="form-control">
                                            <option value="M">Masculino</option>
                                            <option value="F">Feminino</option>
                                        </select>
                                    </p>
                                </div>

                                <hr/>

                                <label>
                                    <h4>
                                        Telefones:
                                        <img src="/web-files/img/less.png" class="datagrid datagrid-less" onclick="javascript: datagrid_less()" style="cursor: pointer" alt="Tirar telefone" title="Tirar telefone" border="0"/>
                                        <img src="/web-files/img/plus.png" class="datagrid datagrid-plus" onclick="javascript: datagrid_plus()" style="cursor: pointer" alt="Adicionar telefone" title="Adicionar telefone" border="0"/>
                                    </h4>

                                </label>

                                <br/>

                                <?php if ($_smarty_tpl->tpl_vars['datagrid']->value=='') {?>
                                    <a href="contas_lista.tpl"></a>
                                    <div id="data">
                                        <div class="row datagrid">
                                            <div class="col col-sm-2">
                                                <input type="text" class="form-control" id="ddd_0" name="ddd_0" maxlength="4" value="" placeholder="DDD" onkeypress="return formataNumDV(event, this, 2);"/>
                                            </div>
                                            <div class="col col-sm-3">
                                                <input type="text" class="form-control" id="tel_0" name="tel_0" maxlength="10" value="" placeholder="Telefone ou celular" onkeypress="return formataNumDV(event, this, 9);"/>
                                            </div>
                                            <div class="col col-sm-7">
                                                <input type="text" class="form-control" id="ramal_0" name="ramal_0" maxlength="100" value="" placeholder="informações adicionais"/>    
                                            </div>
                                        </div>
                                    </div>    
                                <?php } else { ?>
                                    <?php echo $_smarty_tpl->tpl_vars['datagrid']->value;?>
                    
                                <?php }?>
                                <hr/>

                                <h4>Endereço</h4>
                                <h5>CEP</h5>
                                <div class="form-inline">
                                    <input type="text" class="form-control" id="cep" name="cep" maxlength="9" value="<?php echo $_smarty_tpl->tpl_vars['post_cep']->value;?>
" placeholder="CEP" style="margin-right: 15px;" onkeypress="return formataCEP(event, this);"/>
                                    <span class="input-group" style="cursor: pointer; font-size: 15px;" id="pesquisar_endereco"><img src="/web-files/img/search-32.png" alt="Pesquisar" title="Pesquisar" border="0"></span>  
                                    <span class="Loader hide"><img src="/web-files/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0" style="width: 25px"/></span>
                                </div>

                                <h5>Endereço</h5>
                                <div class="row">
                                    <div class="col col-sm-8">
                                        <input type="text" class="form-control" id="logradouro" name="logradouro" maxlength="140" value="<?php echo $_smarty_tpl->tpl_vars['post_logradouro']->value;?>
" placeholder="Endereço"/>
                                    </div>
                                    <div class="col col-sm-4">
                                        <input type="text" class="form-control" id="numero" name="numero" maxlength="5" value="<?php echo $_smarty_tpl->tpl_vars['post_numero']->value;?>
" placeholder="Nº" onkeypress="return formataNumDV(event, this, 6);"/>
                                    </div>
                                </div>

                                <h5>Completemento</h5>
                                <input type="text" class="form-control" id="complemento" name="complemento" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['post_complemento']->value;?>
" placeholder="Complemento"/>

                                <h5>Bairro</h5>
                                <input type="text" class="form-control" id="bairro" name="bairro" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['post_bairro']->value;?>
" placeholder="Bairro"/>

                                <h5>Cidade / Estado</h5>
                                <div class="row">
                                    <div class="col col-sm-8">
                                        <input type="text" class="form-control" id="cidade" name="cidade" maxlength="80" value="<?php echo $_smarty_tpl->tpl_vars['post_cidade']->value;?>
" placeholder="Cidade"/>
                                    </div>
                                    <div class="col col-sm-4">
                                        <input type="text" class="form-control" id="estado" name="estado" maxlength="2" value="<?php echo $_smarty_tpl->tpl_vars['post_estado']->value;?>
" placeholder="UF"/>
                                    </div>
                                </div>


                                <hr/>

                                <h4>Permissões:</h4>
                                <input type="checkbox" name="ADMINISTRADOR" id="ADMINISTRADOR" <?php if ($_smarty_tpl->tpl_vars['post_administrador']->value=="on") {?> checked="true" <?php }?>/> Administrador do Portal<br/>
                                <input type="checkbox" name="CLIENTE" id="CLIENTE" <?php if ($_smarty_tpl->tpl_vars['post_cliente']->value=="on") {?> checked="true" <?php }?>/> Cliente <br/>
                                

                                <hr/>

                                <h4>
                                    <input type="checkbox" name="updatePassword" id="updatePassword" <?php if ($_smarty_tpl->tpl_vars['updatePassword']->value=="on") {?> checked="true" <?php }?> /> Desejo cadastrar uma senha.
                                </h4>
                                <hr/>
                                <div class="updatePassword <?php if (isset($_smarty_tpl->tpl_vars['updatePassword']->value)) {?> <?php if (isset($_smarty_tpl->tpl_vars['updatePassword']->value)!="on") {?> hide <?php }?> <?php } else { ?> hide <?php }?> ">
                                    <p><input type="password" class="form-control" id="passwd" name="passwd" maxlength="50" value="" placeholder="Senha"/></p>
                                    <p><input type="password" class="form-control" id="passwd2" name="passwd2" maxlength="50" value=""  placeholder="Repetir senha"/></p>
                                    <h4>Lembrete de segurança:</h4>
                                    <p><input type="text" class="form-control" id="lembrete" name="lembrete" maxlength="30" value="<?php echo $_smarty_tpl->tpl_vars['post_lembrete']->value;?>
" placeholder="Lembrete de senha"/></p>
                                    <hr/>
                                </div>

                                <p><button type="submit" class="btn btn-primary" name="enviar">ENVIAR</button></p>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /#page-wrapper -->

<?php echo $_smarty_tpl->getSubTemplate ("tinymce_1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php }} ?>
