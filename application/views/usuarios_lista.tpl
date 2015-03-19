{include file="header.tpl"}

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Member List</h1>
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

                            <a href="/{$language}/usuarios/adicionar" class="btn btn-default navbar-btn"><i class="fa fa-user"></i> Criate User</a>

                            <table class='table'>

                                <thead>
                                <th>Registration Date</th>
                                <th>Username</th>
                                <th>Ações</th>
                                </thead>

                                {counter assign=i start=0 print=false} 
                                {foreach name=outer item=usuario from=$usuarios}

                                    <tr id="usuario_{$usuario->CODUSUARIO}" >

                                        <td>{$usuario->DTA}</td>
                                        <td>
                                            {$usuario->USERNAME}
                                            <br>
                                            <span style="font-size: 11px;">{$usuario->SITE}</span>
                                        </td>
                                        <td>
                                            <table>
                                                <tr>       
                                                    <td><a href="/{$language}/usuarios/status/{if $usuario->STATUS == "0"}1{else}0{/if}/{strtolower($usuario->CODUSUARIO)}"><span class="ico-default-eye-{$usuario->CODCONTA} ico-default-eye {if $usuario->STATUS == "0"}desative{/if}" rel="tooltip" title="Status do Cliente"><i class="fa fa-eye"></i></span></a>&nbsp;</td>
                                                    <td><a href="/{$language}/usuarios/editar/{strtolower($usuario->CODUSUARIO)}"><span class="ico-default-edit" rel="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>&nbsp;</td>
                                                    <td><a href="/{$language}/usuarios/delete/{strtolower($usuario->CODUSUARIO)}"><span class="ico-default-trash" rel="tooltip" title="Excluir Cliente"><i class="fa fa-trash-o"></i></span></a>&nbsp;</td>
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
