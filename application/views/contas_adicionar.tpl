{include file="header.tpl"}

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Criar Conta</h1>
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
                                <h4 style="position: relative">Tipo de conta</h4>
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

                                <div class="tipo-pessoa-cpf {if isset($tipo_pessoa)}{if $tipo_pessoa != "pf"} hide {/if} {/if}">
                                    <h4 style="position: relative">CPF:</h4>
                                    <p> 
                                        <input type="text" class="form-control" id="cpf" name="cpf" name="cpf" maxlength="70" value="{if $post_cpf != '..-'}{$post_cpf}{/if}" placeholder="CPF" onkeypress="return formataCPF(event, this);"/>
                                    </p>
                                </div>
                                <div class="tipo-pessoa-cnpj {if isset($tipo_pessoa)}{if $tipo_pessoa != "pj"} hide {/if} {else} hide {/if}">
                                    <h4 style="position: relative">CNPJ:</h4>
                                    <p> 
                                        <input type="text" class="form-control" id="cnpj" id="cnpj" name="cnpj" maxlength="70" value="{if $post_cnpj != '..-'}{$post_cnpj}{/if}" placeholder="CNPJ" onkeypress="return formataCNPJ(event, this);"/>
                                    </p>
                                </div>    

                                <h4>Nome:</h4>
                                <p>
                                    <input type="text" class="form-control" id="nome" name="nome" maxlength="40" value="{$post_nome}" placeholder="Nome ou Empresa"/>
                                </p>
                                <h4>Site:</h4>
                                <p>
                                    <input type="text" class="form-control" id="site" name="site" value="{if $post_site != ""}{$post_site}{else}http://{/if}" placeholder="http:// ou https://"/>
                                </p>
                                <h4>E-mail:</h4>
                                <p>
                                    <input type="text" class="form-control" id="email" name="email" maxlength="70" value="{$post_email}" placeholder="E-mail"/>
                                </p>
                                <h4>Data de nascimento ou fundação:</h4>
                                <p>{$aniversario}</p>
                                <div class="tipo-pesso-sexo {if isset($tipo_pessoa)}{if $tipo_pessoa == "pj"} hide {/if} {/if}">
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

                                {if $datagrid == ""}
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
                                {else}
                                    {$datagrid}                    
                                {/if}
                                <hr/>

                                <h4>Endereço</h4>
                                <h5>CEP</h5>
                                <div class="form-inline">
                                    <input type="text" class="form-control" id="cep" name="cep" maxlength="9" value="{$post_cep}" placeholder="CEP" style="margin-right: 15px;" onkeypress="return formataCEP(event, this);"/>
                                    <span class="input-group" style="cursor: pointer; font-size: 15px;" id="pesquisar_endereco"><img src="/web-files/img/search-32.png" alt="Pesquisar" title="Pesquisar" border="0"></span>  
                                    <span class="Loader hide"><img src="/web-files/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0" style="width: 25px"/></span>
                                </div>

                                <h5>Endereço</h5>
                                <div class="row">
                                    <div class="col col-sm-8">
                                        <input type="text" class="form-control" id="logradouro" name="logradouro" maxlength="140" value="{$post_logradouro}" placeholder="Endereço"/>
                                    </div>
                                    <div class="col col-sm-4">
                                        <input type="text" class="form-control" id="numero" name="numero" maxlength="5" value="{$post_numero}" placeholder="Nº" onkeypress="return formataNumDV(event, this, 6);"/>
                                    </div>
                                </div>

                                <h5>Completemento</h5>
                                <input type="text" class="form-control" id="complemento" name="complemento" maxlength="100" value="{$post_complemento}" placeholder="Complemento"/>

                                <h5>Bairro</h5>
                                <input type="text" class="form-control" id="bairro" name="bairro" maxlength="50" value="{$post_bairro}" placeholder="Bairro"/>

                                <h5>Cidade / Estado</h5>
                                <div class="row">
                                    <div class="col col-sm-8">
                                        <input type="text" class="form-control" id="cidade" name="cidade" maxlength="80" value="{$post_cidade}" placeholder="Cidade"/>
                                    </div>
                                    <div class="col col-sm-4">
                                        <input type="text" class="form-control" id="estado" name="estado" maxlength="2" value="{$post_estado}" placeholder="UF"/>
                                    </div>
                                </div>


                                <hr/>

                                <h4>Permissões:</h4>
                                <input type="checkbox" name="ADMINISTRADOR" id="ADMINISTRADOR" {if $post_administrador == "on"} checked="true" {/if}/> Administrador do Portal<br/>
                                <input type="checkbox" name="CLIENTE" id="CLIENTE" {if $post_cliente == "on"} checked="true" {/if}/> Cliente <br/>
                                {*                <input type="checkbox" name="PUBLICADOR" id="PUBLICADOR" {if $post_publicador == "on"} checked="true" {/if}/> Publicador <br/>*}

                                <hr/>

                                <h4>
                                    <input type="checkbox" name="updatePassword" id="updatePassword" {if $updatePassword eq "on" } checked="true" {/if} /> Desejo cadastrar uma senha.
                                </h4>
                                <hr/>
                                <div class="updatePassword {if isset($updatePassword) } {if isset($updatePassword) != "on" } hide {/if} {else} hide {/if} ">
                                    <p><input type="password" class="form-control" id="passwd" name="passwd" maxlength="50" value="" placeholder="Senha"/></p>
                                    <p><input type="password" class="form-control" id="passwd2" name="passwd2" maxlength="50" value=""  placeholder="Repetir senha"/></p>
                                    <h4>Lembrete de segurança:</h4>
                                    <p><input type="text" class="form-control" id="lembrete" name="lembrete" maxlength="30" value="{$post_lembrete}" placeholder="Lembrete de senha"/></p>
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
