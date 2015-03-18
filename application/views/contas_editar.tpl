{include file="header.tpl"}

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Editar Conta</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    {*<div class="row">
        <div class="col-md-12">
            <div class="pull-left">
                {include file="logo.tpl"}
            </div>
        </div>
    </div>*}
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form method="post">

                                <a href="/{$language}/contas" class="btn btn-default navbar-btn"><i class="fa fa-reply">&nbsp</i> Voltar</a>
                                <br/>

                                {if $error eq ""}
                                    <div class="alert alert-success" role="alert"><strong>Atenção: </strong>Preencher todos os campos!</div>
                                {else}
                                    <div class="alert alert-danger" role="alert"><strong>Atenção: </strong>{$error}</div>
                                {/if}

                                <br/>    
                                {* <h4 style="position: relative">Tipo de conta</h4>
                                <p> 
                                <div class="input-group">
                                <span class="input-group-2">
                                <input type="radio" name="tipo_pessoa" value="pf" onclick="javascript:show_Tipopessoa('cpf')" {if isset($tipo_pessoa)}{if $tipo_pessoa == "pf"} checked="true"{/if} {else} checked="true"  {/if}/> Pessoa Física 
                                </span>
                                <span class="input-group-2">
                                <input type="radio" name="tipo_pessoa" value="pj" onclick="javascript:show_Tipopessoa('cnpj')" {if $tipo_pessoa == "pj"} checked="true"{/if}/> Pessoa Jurídica
                                </span>
                                </div>
                                </p>
                                *}
                                <div class="tipo-pessoa-cpf {if $conta->TIPO_CONTA != "pf"} hide {/if}">
                                    <h4 style="position: relative">CPF:</h4>
                                    <p> 
                                        <label>{$conta->CPF}</label>
                                        <input type="hidden" class="form-control" id="cpf" name="cpf" name="cpf" maxlength="70" value="{if isset($post_cpf)}{if $post_cpf != '..-'}{$post_cpf}{/if}{else}{$conta->CPF}{/if}" placeholder="CPF" onkeypress="return formataCPF(event, this);"/>
                                    </p>
                                </div>
                                <div class="tipo-pessoa-cnpj {if $conta->TIPO_CONTA != "pj"} hide {/if}">
                                    <h4 style="position: relative">CNPJ:</h4>
                                    <p> 
                                        <label>{$conta->CNPJ}</label>
                                        <input type="hidden" class="form-control" id="cnpj" id="cnpj" name="cnpj" maxlength="70" value="{if isset($post_cnpj)}{if $post_cnpj != '..-'}{$post_cnpj}{/if}{else}{$conta->CNPJ}{/if}" placeholder="CNPJ" onkeypress="return formataCNPJ(event, this);"/>
                                    </p>
                                </div>    

                                <h4>Nome:</h4>
                                <p>
                                    <input type="text" class="form-control" id="nome" name="nome" maxlength="40" value="{if isset($post_nome)}{$post_nome}{else}{$conta->NOME_RAZAO_SOCIAL}{/if}" placeholder="Nome ou Empresa"/>
                                </p>
                                <h4>Site:</h4>
                                <p>
                                    <input type="text" class="form-control" id="site" name="site" value="{if isset($post_site)}{$post_site}{else}{$conta->SITE}{/if}" placeholder="http:// ou https://"/>
                                </p>
                                <h4>E-mail:</h4>
                                <p>
                                    <input type="text" class="form-control" id="email" name="email" maxlength="70" value="{if isset($post_email)}{$post_email}{else}{$conta->EMAIL}{/if}" placeholder="E-mail"/>
                                </p>
                                <h4>Data de nascimento ou fundação:</h4>
                                <p>{$aniversario}</p>

                                {if $conta->TIPO_CONTA == "pf"}
                                    <div class="tipo-pesso-sexo {if isset($tipo_pessoa)}{if $tipo_pessoa == "pj"} hide {/if} {/if}">
                                        <h4>Sexo</h4>
                                        <p> 
                                            <select name="sexo" class="form-control">
                                                <option value="M">Masculino</option>
                                                <option value="F">Feminino</option>
                                            </select>
                                        </p>
                                    </div>
                                {/if}    

                                <hr/>

                                <label>
                                    <h4>
                                        Telefones:
                                        <img src="/web-files/img/less.png" class="datagrid datagrid-less" onclick="javascript: datagrid_less()" style="cursor: pointer" alt="Tirar telefone" title="Tirar telefone" border="0"/>
                                        <img src="/web-files/img/plus.png" class="datagrid datagrid-plus" onclick="javascript: datagrid_plus()" style="cursor: pointer" alt="Adicionar telefone" title="Adicionar telefone" border="0"/>
                                    </h4>

                                </label>

                                <br/>

                                {if $datagrid == ""}



                                    <div id="data">

                                        {counter assign=i start=0 print=false} 
                                        {foreach name=outer item=telefone from=$telefones}
                                            <div class="row datagrid">
                                                <div class="col col-sm-2">
                                                    <input type="text" class="form-control" id="ddd_{$i}" name="ddd_{$i}" maxlength="4" value="{$telefone->DDD}" placeholder="DDD" onkeypress="return formataNumDV(event, this, 2);"/>
                                                </div>
                                                <div class="col col-sm-3">
                                                    <input type="text" class="form-control" id="tel_{$i}" name="tel_{$i}" maxlength="10" value="{$telefone->TELEFONE}" placeholder="Telefone ou celular" onkeypress="return formataNumDV(event, this, 9);"/>
                                                </div>
                                                <div class="col col-sm-7">
                                                    <input type="text" class="form-control" id="ramal_{$i}" name="ramal_{$i}" maxlength="100" value="{$telefone->RAMAL}" placeholder="informações adicionais"/>    
                                                </div>
                                            </div>
                                            {counter}
                                        {/foreach}   
                                    </div>    


                                {else}
                                    {$datagrid}                    
                                {/if}
                                <hr/>

                                <h4>Endereço</h4>
                                <h5>CEP</h5>
                                <div class="form-inline">
                                    <input type="text" class="form-control" id="cep" name="cep" maxlength="9" value="{if isset($post_cep)}{$post_cep}{else}{$endereco->CEP}{/if}" placeholder="CEP" style="margin-right: 15px;" onkeypress="return formataCEP(event, this);"/>
                                    <span class="input-group" style="cursor: pointer; font-size: 15px;" id="pesquisar_endereco"><img src="/web-files/img/search-32.png" alt="Pesquisar" title="Pesquisar" border="0"></span>  
                                    <span class="Loader hide"><img src="/web-files/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0" style="width: 25px"/></span>
                                </div>

                                <h5>Endereço</h5>
                                <div class="row">
                                    <div class="col col-sm-8">
                                        <input type="text" class="form-control" id="logradouro" name="logradouro" maxlength="140" value="{if isset($post_logradouro)}{$post_logradouro}{else}{$endereco->LOGRADOURO}{/if}" placeholder="Endereço"/>
                                    </div>
                                    <div class="col col-sm-4">
                                        <input type="text" class="form-control" id="numero" name="numero" maxlength="5" value="{if isset($post_numero)}{$post_numero}{else}{$endereco->NUMERO}{/if}" placeholder="Nº" onkeypress="return formataNumDV(event, this, 6);"/>
                                    </div>
                                </div>

                                <h5>Completemento</h5>
                                <input type="text" class="form-control" id="complemento" name="complemento" maxlength="100" value="{if isset($post_complemento)}{$post_complemento}{else}{$endereco->COMPLEMENTO}{/if}" placeholder="Complemento"/>

                                <h5>Bairro</h5>
                                <input type="text" class="form-control" id="bairro" name="bairro" maxlength="50" value="{if isset($post_bairro)}{$post_bairro}{else}{$endereco->BAIRRO}{/if}" placeholder="Bairro"/>

                                <h5>Cidade / Estado</h5>
                                <div class="row">
                                    <div class="col col-sm-8">
                                        <input type="text" class="form-control" id="cidade" name="cidade" maxlength="80" value="{if isset($post_cidade)}{$post_cidade}{else}{$endereco->CIDADE}{/if}" placeholder="Cidade"/>
                                    </div>
                                    <div class="col col-sm-4">
                                        <input type="text" class="form-control" id="estado" name="estado" maxlength="2" value="{if isset($post_estado)}{$post_estado}{else}{$endereco->UF}{/if}" placeholder="UF"/>
                                    </div>
                                </div>

                                <hr/>

                                <h4>Permissões:</h4>
                                <input type="checkbox" name="ADMINISTRADOR" id="ADMINISTRADOR" {if isset($post_administrador)}{if $post_administrador == "on"} checked="true" {/if}{else}{if isset($administrador)} checked="true" {/if}{/if}/> Administrador do Portal<br/>
                                <input type="checkbox" name="CLIENTE" id="CLIENTE" {if isset($post_cliente)}{if $post_cliente == "on"} checked="true" {/if}{else}{if isset($cliente)} checked="true" {/if}{/if}/> Cliente <br/>
                                {*                <input type="checkbox" name="PUBLICADOR" id="PUBLICADOR" {if isset($post_publicador)}{if $post_publicador == "on"} checked="true" {/if}{else}{if isset($publicador)} checked="true" {/if}{/if}/> Publicador <br/>*}

                                <hr/>

                                <h4>
                                    <input type="checkbox" name="updatePassword" id="updatePassword" {if $updatePassword eq "on" } checked="true" {/if} /> Desejo cadastrar uma senha.
                                </h4>
                                <hr/>
                                <div class="updatePassword {if isset($updatePassword) } {if isset($updatePassword) != "on" } hide {/if} {else} hide {/if} ">
                                    <p><input type="password" class="form-control" id="passwd" name="passwd" maxlength="50" value="" placeholder="Senha"/></p>
                                    <p><input type="password" class="form-control" id="passwd2" name="passwd2" maxlength="50" value=""  placeholder="Repetir senha"/></p>
                                    <h4>Lembrete de segurança:</h4>
                                    <p><input type="text" class="form-control" id="lembrete" name="lembrete" maxlength="30" value="{if isset($post_estado)}{$post_lembrete}{else}{$conta->LEMBRETE}{/if}" placeholder="Lembrete de senha"/></p>
                                    <hr/>
                                </div>
                                <p><div>{include file="btn_send.tpl"}</div></p>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /#page-wrapper -->

{include file="tinymce_1.tpl"}
{include file="footer.tpl"}
