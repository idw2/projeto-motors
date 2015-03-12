{include file="header.tpl"}

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Lista de Contas</h1>
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
                        <div class="col-lg-12">

                            <a href="/{$language}/contas/adicionar" class="btn btn-default navbar-btn"><i class="fa fa-user"></i> Criar Conta</a>

                            <table class='table'>

                                <thead>
                                <th>Data de Cadastro</th>
                                <th>Nome / Site</th>
                                <th>ID</th>
                                <th>E-mail</th>
                                <th>CPF / CNPJ</th>
                                <th>Ações</th>
                                </thead>

                                {counter assign=i start=0 print=false} 
                                {foreach name=outer item=conta from=$contas}

                                    <tr id="conta_{$conta->CODCONTA}" >

                                        <td>{$conta->DTA}</td>
                                        <td>
                                            {$conta->NOME_RAZAO_SOCIAL}
                                            <br>
                                            <span style="font-size: 11px;">{$conta->SITE}</span>
                                        </td>
                                        <td>{$conta->ID}</td>
                                        <td>{$conta->EMAIL}</td>
                                        <td>
                                            {if $conta->TIPO_CONTA != ""}
                                                {if $conta->TIPO_CONTA == "pf"}
                                                    {$conta->CPF}
                                                {else}
                                                    {$conta->CNPJ}
                                                {/if}
                                            {/if}
                                        </td>
                                        <td>
                                            <table>
                                                <tr>       
                                                    {if $conta->EMAIL != "designlab@designlab.com.br"}
                                                        <td><a style="cursor: pointer;" onclick="javascript:cStatusUpdate('status_{$conta->CODCONTA}', '{$language}/contas/status/{if $conta->STATUS == "0"}1{else}0{/if}/{$conta->CODCONTA}', '{$conta->CODCONTA}');"><span class="ico-default-eye-{$conta->CODCONTA} ico-default-eye {if $conta->STATUS == "0"}desative{/if}" rel="tooltip" title="Status do Cliente"><i class="fa fa-eye"></i></span></a>&nbsp;</td>
                                                        <td><a style="cursor: pointer;" onclick="javascript:cSuspensoUpdate('suspenso_{$conta->CODCONTA}', '{$language}/contas/suspender/{if $conta->SUSPENSO == "0"}1{else}0{/if}/{$conta->CODCONTA}', '{$conta->CODCONTA}');"><span class="ico-default-suspenso-{$conta->CODCONTA} ico-default-suspenso {if $conta->SUSPENSO == "0"}desative{/if}" rel="tooltip" title="Suspender Cliente"><i class="fa fa-pause"></i></span></a>&nbsp;</td>
                                                        <td><a style="cursor: pointer;" onclick="javascript:cBloqueadoUpdate('bloqueado_{$conta->CODCONTA}', '{$language}/contas/bloquear/{if $conta->BLOQUEADO == "0"}1{else}0{/if}/{$conta->CODCONTA}', '{$conta->CODCONTA}');"><span class="ico-default-bloqueado-{$conta->CODCONTA} ico-default-bloqueado {if $conta->BLOQUEADO == "0"}desative{/if}" rel="tooltip" title="Bloquear Cliente"><i class="fa fa-ban"></i></span></a>&nbsp;</td>
                                                                {/if}

                                                    <td><a href="/{$language}/contas/editar/{strtolower($conta->CODCONTA)}"><span class="ico-default-edit" rel="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>&nbsp;</td>
                                                    <td><a href="/{$language}/html/configuracao/{strtolower($conta->SITE)}"><span class="ico-default-configuracao" rel="tooltip" title="Configuração"><i class="fa fa-gear"></i></span></a>&nbsp;</td>
                                                    <td><a href="/{$language}/html/logomarca/{strtolower($conta->SITE)}"><span class="ico-default-logomarca" rel="tooltip" title="Logomarca"><i class="fa fa-picture-o"></i></span></a>&nbsp;</td>
                                                    <td><a href="/{$language}/html/a-empresa/{strtolower($conta->SITE)}"><span class="ico-default-a-empresa" rel="tooltip" title="A empresa"><i class="fa fa-wrench"></i></span></a>&nbsp;</td>
                                                    <td><a href="/{$language}/html/onde-estamos/{strtolower($conta->SITE)}"><span class="ico-default-onde-estamos" rel="tooltip" title="Onde estamos"><i class="fa fa-map-marker"></i></span></a>&nbsp;</td>

                                                    
                                                    {if $conta->EMAIL != "designlab@designlab.com.br"}
                                                        <td><a style="cursor: pointer;" onclick="javascript:cDeleteUpdate('delete_{$conta->CODCONTA}', '{$language}/contas/delete/{$conta->CODCONTA}', '{$conta->CODCONTA}');"><span class="ico-default-trash" rel="tooltip" title="Excluir Cliente"><i class="fa fa-trash-o"></i></span></a>&nbsp;</td>    
                                                                {/if}

                                                </tr>
                                                <tr>
                                                    <td id="status_{$conta->CODCONTA}" style="height: 35px"></td>
                                                    <td id="suspenso_{$conta->CODCONTA}"></td>
                                                    <td id="bloqueado_{$conta->CODCONTA}"></td>
                                                    <td></td>
                                                    <td id="delete_{$conta->CODCONTA}"></td>
                                                </tr>
                                            </table>
                                        </td>

                                    </tr>
                                    {counter}
                                {/foreach}

                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




{include file="footer.tpl"}
