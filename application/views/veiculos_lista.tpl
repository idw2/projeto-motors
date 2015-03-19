{include file="header.tpl"}

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Vehicle List</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">

                            <a href="/{$language}/veiculos/cadastrar" class="btn btn-default navbar-btn"><i class="fa fa-automobile"></i> New</a>

                            <table class='table'>

                                <thead>
                                <th>Registration Date</th>
                                <th>Vehicle Name</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Actions</th>
                                </thead>

                                {counter assign=i start=0 print=false} 
                                {foreach name=outer item=produto from=$produtos}

                                    <tr id="veiculo_{$produto->CODPRODUTO}" >

                                        <td>{$produto->DTA}</td>
                                        <td>{$produto->NOME}<br/>{$produto->SITE}</td>
                                        <td>{$produto->CATEGORIA}</td>
                                        <td>R$ {$produto->PRECO}</td>
                                        <td>
                                            <table style="height: 45px;">
                                                <tr>
                                                    <td><a style="cursor: pointer;" onclick="javascript:vDestaqueUpdate('destaque_{$produto->CODPRODUTO}', '{$language}/veiculos/destaque/{if $produto->DESTAQUE == "0"}1{else}0{/if}/{$produto->URL_AMIGAVEL}', '{$produto->CODPRODUTO}');"><span class="ico-default-star-{$produto->CODPRODUTO} ico-default-star {if $produto->DESTAQUE == "0"}desative{/if}" rel="tooltip" title="Featured"><i class="fa fa-star"></i></span></a>&nbsp;</td>
                                                    <td><a style="cursor: pointer;" onclick="javascript:vStatusUpdate('status_{$produto->CODPRODUTO}', '{$language}/veiculos/status/{if $produto->STATUS == "0"}1{else}0{/if}/{$produto->URL_AMIGAVEL}', '{$produto->CODPRODUTO}');"><span class="ico-default-eye-{$produto->CODPRODUTO} ico-default-eye {if $produto->STATUS == "0"}desative{/if}" rel="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>&nbsp;</td>
                                                    <td><a style="cursor: pointer;" onclick="javascript:vNovidadeUpdate('novidade_{$produto->CODPRODUTO}', '{$language}/veiculos/novidade/{if $produto->IS_NOVIDADE == "0"}1{else}0{/if}/{$produto->URL_AMIGAVEL}', '{$produto->CODPRODUTO}');"><span class="ico-default-novidade-{$produto->CODPRODUTO} ico-default-novidade {if $produto->IS_NOVIDADE == "0"}desative{/if}" rel="tooltip" title="Novelty"><i class="fa fa-check-square-o"></i></span></a>&nbsp;</td>
                                                    <td><a href="/{$language}/veiculos/editar/{$produto->URL_AMIGAVEL}"><span class="ico-default-edit" rel="tooltip" title="Edit"><i class="fa fa-edit"></i></span></a>&nbsp;</td>
                                                    <td><a style="cursor: pointer;" onclick="javascript:vDeleteUpdate('{$language}/veiculos/delete/{$produto->URL_AMIGAVEL}', '{$produto->CODPRODUTO}');"><span class="ico-default-trash" rel="tooltip" title="Delete"><i class="fa fa-trash-o"></i></span></a>&nbsp;</td>
                                                    <td><a href="/{$language}/veiculos/fotos/{$produto->URL_AMIGAVEL}"><span class="ico-default-photo" rel="tooltip" title="Imagery"><i class="fa fa-photo"></i></span></a></td>
                                                </tr>
                                                <tr>
                                                    <td id="destaque_{$produto->CODPRODUTO}" style="height: 35px"><img src="/web-files/img/Loader_small.gif" border="0" title="Loading" alt="Loading" class="hide"/></td>
                                                    <td id="status_{$produto->CODPRODUTO}"><img src="/web-files/img/Loader_small.gif" border="0" title="Loading" alt="Loading" class="hide"/></td>
                                                    <td id="novidade_{$produto->CODPRODUTO}"><img src="/web-files/img/Loader_small.gif" border="0" title="Loading" alt="Loading" class="hide"/></td>
                                                    <td id="edit_{$produto->CODPRODUTO}"><img src="/web-files/img/Loader_small.gif" border="0" title="Loading" alt="Loading" class="hide"/></td>
                                                    <td id="delete_{$produto->CODPRODUTO}"><img src="/web-files/img/Loader_small.gif" border="0" title="Loading" alt="Loading" class="hide"/></td>
                                                    <td id="gallery_{$produto->CODPRODUTO}"><img src="/web-files/img/Loader_small.gif" border="0" title="Loading" alt="Loading" class="hide"/></td>
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
