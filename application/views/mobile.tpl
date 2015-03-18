{include file="header.tpl"}

<div class="sidebar">
    {include file="navbar.tpl"}
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="pull-left">
                {include file="logo.tpl"}
            </div>
            {include file="search.tpl"}
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">

            <h2><span class="label label-default">Lista de veículos</span></h2>
            <br/>
            <a href="/{$language}/veiculos/cadastrar" class="btn btn-default navbar-btn"><i class="fa fa-automobile"></i> Cadastro de veículos</a>


            <div class="panel-default">


                <table class='table' id="table-1" cellspacing="0" cellpadding="2">
                    {counter assign=i start=0 print=false} 
                    {foreach name=outer item=produto from=$produtos}


                        {foreach key=key item=item from=$produto}
                            {if $key == "CODPRODUTO"} {$CODPRODUTO = $item}{/if}    
                            {if $key == "DTA"} {$DTA = $item}{/if}    
                            {if $key == "NOME"} {$NOME = $item}{/if}    
                            {if $key == "URL_AMIGAVEL"}

                                {$URL_AMIGAVEL = $item}    
                                {$url_del = "/{$language}/veiculos/delete/{$item}"}

                            {/if}    
                            {if $key == "CATEGORIA"} 

                                {if $item == "novidades"}
                                    {$CATEGORIA = "Novidades"}
                                {elseif $item == "zero_km"}
                                    {$CATEGORIA = "Zero KM"}
                                {else}
                                    {$CATEGORIA = "Seminovos"}
                                {/if} 
                            {/if}    
                            {if $key == "PRECO"} {$PRECO = $item}{/if}    
                            {if $key == "DESTAQUE"} {$DESTAQUE = $item}
                                {if $item == "0"}
                                    {$star = "desative"}
                                    {$dtq = "1"}
                                {else}
                                    {$star = ""}
                                    {$dtq = "0"}
                                {/if} 
                            {/if}    
                            {if $key == "STATUS"} {$STATUS = $item}
                                {if $item == "0"}
                                    {$eye = "desative"}
                                    {$stt = "1"}
                                {else}
                                    {$eye = ""}
                                    {$stt = "0"}
                                {/if} 
                            {/if}      
                        {/foreach}

                        <tr id="{$CODPRODUTO}" class="{$myDragClass}" style="cursor: move;" >

                            <td>{$DTA}</td>
                            <td>{$NOME}</td>
                            <td>{$CATEGORIA}</td>
                            <td>

                                <span class="ico-default-star {$star}" data-toggle="tooltip" title="Destaque"><a href="/{$language}/veiculos/destaque/{$dtq}/{$URL_AMIGAVEL}"><i class="fa fa-star"></i></a></span>
                                <span class="ico-default-eye {$eye}" data-toggle="tooltip" title="Status"><a href="/{$language}/veiculos/status/{$stt}/{$URL_AMIGAVEL}"><i class="fa fa-eye"></i></a></span>
                                <span class="ico-default-edit" data-toggle="tooltip" title="Editar"><a href="/{$language}/veiculos/editar/{$URL_AMIGAVEL}"><i class="fa fa-edit"></i></a></span>
                                <span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><a onclick="delete_produto('{$url_del}')"><i class="fa fa-trash-o"></i></a></span>
                                <span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><a href="/{$language}/veiculos/fotos/{$URL_AMIGAVEL}"><i class="fa fa-photo"></i></a></span>

                            </td>

                        </tr>
                        {counter}
                    {/foreach}
                    <!--                
                        </ul>
                    -->   
                </table>
            </div>

        </div>
    </div>
</div>
<script>
    function delete_produto(url) {
        if (confirm('ATENÇÃO: Esta ação não poderá ser desfeita!\n Deseja continuar?')) {
            window.location = url;
            return true;
        } else {
            return false;
        }
    }
    
    /*
    var group = $("ul.limited_drop_targets").sortable({
        group: 'limited_drop_targets',
        isValidTarget: function(item, container) {
            if (item.is(".highlight"))
                return true;
            else {
                return item.parent("ul")[0] == container.el[0]
            }
        },
        onDrop: function(item, container, _super) {

            $('#serialize_output').text(group.sortable("serialize").get().join("\n"));
            _super(item, container)
            var keys = null;
            $("ul.limited_drop_targets").find("li").each(function(i) {
                if (jQuery(this).attr("id") != null) {
                    (i == 0) ? keys = jQuery(this).attr("id") + ";" : keys += jQuery(this).attr("id") + ";";
                }
            });

            $.ajax({
                type: 'post',
                data: "keys=" + keys,
                url: '/web-files/server/order_produtos.php',
                success: function(data) {
                    consolo.log(data);
                }
            });

        },
        serialize: function(parent, children, isContainer) {
            return isContainer ? children.join() : parent.text()
        },
        tolerance: 6,
        distance: 10
    });
    */

    $(document).ready(function() {
        $("#table-1").tableDnD({
            onDragClass: "myDragClass active",
            onDrop: function() {
                var keys = null;
                $("#table-1").find("tr").each(function(i) {
                    if (i % 2 == 1) {
                        jQuery(this).addClass('myDragClass');
                    } else {
                        jQuery(this).removeClass('myDragClass');
                    }

                    if (jQuery(this).attr("id") != null) {
                        (i == 0) ? keys = jQuery(this).attr("id") + ";" : keys += jQuery(this).attr("id") + ";";
                    }
                });

                $.ajax({
                    type: 'post',
                    data: "keys=" + keys,
                    url: '/web-files/server/order_produtos.php',
                    success: function(data) {
                        consolo.log(data);
                    }
                });
            }
        });

        $("#table-1").find("tr").each(function(i) {
            if (i % 2 == 1) {
                jQuery(this).addClass('myDragClass');
            }
        });
    });
</script>

{include file="footer.tpl"}