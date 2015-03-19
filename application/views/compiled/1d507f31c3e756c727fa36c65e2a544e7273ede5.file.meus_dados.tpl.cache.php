<?php /* Smarty version Smarty-3.1.19, created on 2015-03-07 13:31:27
         compiled from "/home/dlab34/motors.designlab.com.br/application/views/meus_dados.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197465486454fb6e2faaf6e2-98833263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d507f31c3e756c727fa36c65e2a544e7273ede5' => 
    array (
      0 => '/home/dlab34/motors.designlab.com.br/application/views/meus_dados.tpl',
      1 => 1425760951,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197465486454fb6e2faaf6e2-98833263',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'conta' => 0,
    'post_cpf' => 0,
    'post_cnpj' => 0,
    'post_nome' => 0,
    'post_site' => 0,
    'post_email' => 0,
    'aniversario' => 0,
    'tipo_pessoa' => 0,
    'datagrid' => 0,
    'telefones' => 0,
    'i' => 0,
    'telefone' => 0,
    'post_cep' => 0,
    'endereco' => 0,
    'post_logradouro' => 0,
    'post_numero' => 0,
    'post_complemento' => 0,
    'post_bairro' => 0,
    'post_cidade' => 0,
    'post_estado' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54fb6e2fdfd189_31341227',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54fb6e2fdfd189_31341227')) {function content_54fb6e2fdfd189_31341227($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/dlab34/motors.designlab.com.br/libraries/plugins/function.counter.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Meus Dados</h1>
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

                                <?php if ($_smarty_tpl->tpl_vars['error']->value=='') {?>
                                    <div class="alert alert-success" role="alert"><strong>Atenção: </strong>Preencher todos os campos!</div>
                                <?php } else { ?>
                                    <div class="alert alert-danger" role="alert"><strong>Atenção: </strong><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
                                <?php }?>

                                <br/>    
                                
                                <div class="tipo-pessoa-cpf <?php if ($_smarty_tpl->tpl_vars['conta']->value->TIPO_CONTA!="pf") {?> hide <?php }?>">
                                    <h4 style="position: relative">CPF:</h4>
                                    <p> 
                                        <label><?php echo $_smarty_tpl->tpl_vars['conta']->value->CPF;?>
</label>
                                        <input type="hidden" class="form-control" id="cpf" name="cpf" name="cpf" maxlength="70" value="<?php if (isset($_smarty_tpl->tpl_vars['post_cpf']->value)) {?><?php if ($_smarty_tpl->tpl_vars['post_cpf']->value!='..-') {?><?php echo $_smarty_tpl->tpl_vars['post_cpf']->value;?>
<?php }?><?php } else { ?><?php echo $_smarty_tpl->tpl_vars['conta']->value->CPF;?>
<?php }?>" placeholder="CPF" onkeypress="return formataCPF(event, this);"/>
                                    </p>
                                </div>
                                <div class="tipo-pessoa-cnpj <?php if ($_smarty_tpl->tpl_vars['conta']->value->TIPO_CONTA!="pj") {?> hide <?php }?>">
                                    <h4 style="position: relative">CNPJ:</h4>
                                    <p> 
                                        <label><?php echo $_smarty_tpl->tpl_vars['conta']->value->CNPJ;?>
</label>
                                        <input type="hidden" class="form-control" id="cnpj" id="cnpj" name="cnpj" maxlength="70" value="<?php if (isset($_smarty_tpl->tpl_vars['post_cnpj']->value)) {?><?php if ($_smarty_tpl->tpl_vars['post_cnpj']->value!='..-') {?><?php echo $_smarty_tpl->tpl_vars['post_cnpj']->value;?>
<?php }?><?php } else { ?><?php echo $_smarty_tpl->tpl_vars['conta']->value->CNPJ;?>
<?php }?>" placeholder="CNPJ" onkeypress="return formataCNPJ(event, this);"/>
                                    </p>
                                </div>    

                                <h4>Nome:</h4>
                                <p>
                                    <input type="text" class="form-control" id="nome" name="nome" maxlength="40" value="<?php if (isset($_smarty_tpl->tpl_vars['post_nome']->value)) {?><?php echo $_smarty_tpl->tpl_vars['post_nome']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['conta']->value->NOME_RAZAO_SOCIAL;?>
<?php }?>" placeholder="Nome ou Empresa"/>
                                </p>
                                <h4>Site:</h4>
                                <p>
                                    <input type="text" class="form-control" id="site" name="site" value="<?php if (isset($_smarty_tpl->tpl_vars['post_site']->value)) {?><?php echo $_smarty_tpl->tpl_vars['post_site']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['conta']->value->SITE;?>
<?php }?>" placeholder="http:// ou https://"/>
                                </p>
                                <h4>E-mail:</h4>
                                <p>
                                    <input type="hidden" class="form-control" id="email" name="email" maxlength="70" value="<?php if (isset($_smarty_tpl->tpl_vars['post_email']->value)) {?><?php echo $_smarty_tpl->tpl_vars['post_email']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['conta']->value->EMAIL;?>
<?php }?>" placeholder="E-mail"/>
                                    <?php echo $_smarty_tpl->tpl_vars['conta']->value->EMAIL;?>

                                </p>
                                <h4>Data de nascimento ou fundação:</h4>
                                <p><?php echo $_smarty_tpl->tpl_vars['aniversario']->value;?>
</p>

                                <?php if ($_smarty_tpl->tpl_vars['conta']->value->TIPO_CONTA=="pf") {?>
                                    <div class="tipo-pesso-sexo <?php if (isset($_smarty_tpl->tpl_vars['tipo_pessoa']->value)) {?><?php if ($_smarty_tpl->tpl_vars['tipo_pessoa']->value=="pj") {?> hide <?php }?> <?php }?>">
                                        <h4>Sexo</h4>
                                        <p> 
                                            <select name="sexo" class="form-control">
                                                <option value="M">Masculino</option>
                                                <option value="F">Feminino</option>
                                            </select>
                                        </p>
                                    </div>
                                <?php }?>    

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



                                    <div id="data">

                                        <?php echo smarty_function_counter(array('assign'=>'i','start'=>0,'print'=>false),$_smarty_tpl);?>
 
                                        <?php  $_smarty_tpl->tpl_vars['telefone'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['telefone']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['telefones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['telefone']->key => $_smarty_tpl->tpl_vars['telefone']->value) {
$_smarty_tpl->tpl_vars['telefone']->_loop = true;
?>
                                            <div class="row datagrid">
                                                <div class="col col-sm-2">
                                                    <input type="text" class="form-control" id="ddd_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" name="ddd_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" maxlength="4" value="<?php echo $_smarty_tpl->tpl_vars['telefone']->value->DDD;?>
" placeholder="DDD" onkeypress="return formataNumDV(event, this, 2);"/>
                                                </div>
                                                <div class="col col-sm-3">
                                                    <input type="text" class="form-control" id="tel_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" name="tel_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" maxlength="10" value="<?php echo $_smarty_tpl->tpl_vars['telefone']->value->TELEFONE;?>
" placeholder="Telefone ou celular" onkeypress="return formataNumDV(event, this, 9);"/>
                                                </div>
                                                <div class="col col-sm-7">
                                                    <input type="text" class="form-control" id="ramal_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" name="ramal_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" maxlength="100" value="<?php echo $_smarty_tpl->tpl_vars['telefone']->value->RAMAL;?>
" placeholder="informações adicionais"/>    
                                                </div>
                                            </div>
                                            <?php echo smarty_function_counter(array(),$_smarty_tpl);?>

                                        <?php } ?>   
                                    </div>    


                                <?php } else { ?>
                                    <?php echo $_smarty_tpl->tpl_vars['datagrid']->value;?>
                    
                                <?php }?>
                                <hr/>

                                <h4>Endereço</h4>
                                <h5>CEP</h5>
                                <div class="form-inline">
                                    <input type="text" class="form-control" id="cep" name="cep" maxlength="9" value="<?php if (isset($_smarty_tpl->tpl_vars['post_cep']->value)) {?><?php echo $_smarty_tpl->tpl_vars['post_cep']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['endereco']->value->CEP;?>
<?php }?>" placeholder="CEP" style="margin-right: 15px;" onkeypress="return formataCEP(event, this);"/>
                                    <span class="input-group" style="cursor: pointer; font-size: 15px;" id="pesquisar_endereco"><img src="/web-files/img/search-32.png" alt="Pesquisar" title="Pesquisar" border="0"></span>  
                                    <span class="Loader hide"><img src="/web-files/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0" style="width: 25px"/></span>
                                </div>

                                <h5>Endereço</h5>
                                <div class="row">
                                    <div class="col col-sm-8">
                                        <input type="text" class="form-control" id="logradouro" name="logradouro" maxlength="140" value="<?php if (isset($_smarty_tpl->tpl_vars['post_logradouro']->value)) {?><?php echo $_smarty_tpl->tpl_vars['post_logradouro']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['endereco']->value->LOGRADOURO;?>
<?php }?>" placeholder="Endereço"/>
                                    </div>
                                    <div class="col col-sm-4">
                                        <input type="text" class="form-control" id="numero" name="numero" maxlength="5" value="<?php if (isset($_smarty_tpl->tpl_vars['post_numero']->value)) {?><?php echo $_smarty_tpl->tpl_vars['post_numero']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['endereco']->value->NUMERO;?>
<?php }?>" placeholder="Nº" onkeypress="return formataNumDV(event, this, 6);"/>
                                    </div>
                                </div>

                                <h5>Completemento</h5>
                                <input type="text" class="form-control" id="complemento" name="complemento" maxlength="100" value="<?php if (isset($_smarty_tpl->tpl_vars['post_complemento']->value)) {?><?php echo $_smarty_tpl->tpl_vars['post_complemento']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['endereco']->value->COMPLEMENTO;?>
<?php }?>" placeholder="Complemento"/>

                                <h5>Bairro</h5>
                                <input type="text" class="form-control" id="bairro" name="bairro" maxlength="50" value="<?php if (isset($_smarty_tpl->tpl_vars['post_bairro']->value)) {?><?php echo $_smarty_tpl->tpl_vars['post_bairro']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['endereco']->value->BAIRRO;?>
<?php }?>" placeholder="Bairro"/>

                                <h5>Cidade / Estado</h5>
                                <div class="row">
                                    <div class="col col-sm-8">
                                        <input type="text" class="form-control" id="cidade" name="cidade" maxlength="80" value="<?php if (isset($_smarty_tpl->tpl_vars['post_cidade']->value)) {?><?php echo $_smarty_tpl->tpl_vars['post_cidade']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['endereco']->value->CIDADE;?>
<?php }?>" placeholder="Cidade"/>
                                    </div>
                                    <div class="col col-sm-4">
                                        <input type="text" class="form-control" id="estado" name="estado" maxlength="2" value="<?php if (isset($_smarty_tpl->tpl_vars['post_estado']->value)) {?><?php echo $_smarty_tpl->tpl_vars['post_estado']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['endereco']->value->UF;?>
<?php }?>" placeholder="UF"/>
                                    </div>
                                </div>
                                <br/>    
                                <p><button type="submit" class="btn btn-primary" name="enviar">ENVIAR</button></p>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("tinymce_1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php }} ?>
