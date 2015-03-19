{include file="header.tpl"}


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Novo Veículo</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
   {* <div class="row">
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
                            {if $erro eq ""}
                                <div class="alert alert-success" role="alert"><strong>Atenção: </strong>Preencher todos os campos!</div>
                            {else}
                                {if $sucesso eq "FALSE"}
                                    <div class="alert alert-danger" role="alert"><strong>Atenção: </strong>{$erro}</div>
                                {else}
                                    <div class="alert alert-success" role="alert">{$erro}</div>	
                                {/if}

                            {/if}
                        </div>
                        <div class="col-lg-6">
                            <a href="/{$language}/veiculos/veiculos-lista" class="btn btn-default navbar-btn"><i class="fa fa-reply">&nbsp</i> Voltar</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <h4>Selecione os documentos</h4>  
                            <b>Extensões permitidas:</b> .jpg, .png, .gif, .bmp<br>  
                            <div id="mulitplefileuploader" class="fileuploader">Upload</div>
                            <div id="status"></div>
                            <input type="hidden" name="codproduto" id="codproduto" value="{$codproduto}"/>
                        </div>
                        <div class="col-lg-6">
                            <div id="responseHTML" style="margin-top: 16px;">
                                <div class="panel panel-default responseRemove">
                                    <div class="panel-heading">
                                        ATENÇÃO
                                    </div>
                                    <table class="table">
                                        <thead>
                                        <th>Nada na lista!</th>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">

                            <form method="post">
                                <div class="row">
                                    <div class="col col-lg-6 col-md-6">
                                        <h4 class="panel-heading x-label">Veículo</h4>
                                        <input type="text" class="form-control" id="preco" name="preco" placeholder="Preço" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)"/>	
                                        <br/>
                                    </div>    
                                    <div class="col col-lg-6 col-md-6">
                                        <h4 class="panel-heading x-label">Marca</h4>
                                        <input type="text" class="form-control" id="nome" name="nome" maxlength="40" placeholder="Marca"/>
                                        <br/>
                                    </div>
                                </div>    
                                <div class="row">
                                    <div class="col col-lg-6 col-md-6">
                                        <h4 class="panel-heading x-label">Modelo</h4>
                                        <select name="carroceria" class="form-control">
                                            <option value="Utilitário comercial">Utilitário comercial</option>
                                            <option value="Esportivo e conversível">Esportivo e conversível</option>
                                            <option value="Utilitário esportivo (SUV)">Utilitário esportivo (SUV)</option>
                                            <option value="Picape">Picape</option>
                                            <option value="Perua (station wagon)">Perua (station wagon)</option>
                                            <option value="Monovolume e minivan">Monovolume e minivan</option>
                                            <option value="Sedãs grandes">Sedãs grandes</option>
                                            <option value="Sedã médio">Sedã médio</option>
                                            <option value="Sedã compacto">Sedã compacto</option>
                                            <option value="Hatch médio e esportivo">Hatch médio e esportivo</option>
                                            <option value="Hatch compacto">Hatch compacto</option>
                                        </select>
                                        <br/>
                                    </div>    
                                    <div class="col col-lg-6 col-md-6">
                                        <h4 class="panel-heading x-label">Fabricante</h4>
                                        <select name="fabricante" class="form-control">
                                            {counter assign=i start=0 print=false}
                                            {foreach name=outer item=fabricante from=$fabricantes}
                                                {if isset($fabricante->LETRA) }
                                                    <optgroup label="{$fabricante->LETRA}">
                                                    {/if}    
                                                    {if !isset($fabricante->LETRA) }
                                                        <option value="{$fabricante->FABRICANTE}" {if $fabricante == $fabricante->FABRICANTE}selected{/if}>{$fabricante->FABRICANTE}</option>
                                                    {/if}            
                                                    {if isset($fabricante->LETRA) }
                                                    </optgroup>
                                                {/if}
                                                {counter}
                                            {/foreach}
                                        </select> 
                                        <br/>
                                    </div>
                                </div>    
                                <div class="row">
                                    <div class="col col-lg-6 col-md-6">
                                        <h4 class="panel-heading x-label">Categoria</h4>
                                        <select name="categoria" class="form-control">
                                            <option value="Zero KM">Zero KM</option>
                                            <option value="Seminovos">Seminovos</option>
                                            <option value="Usado">Usado</option>
                                        </select> 
                                        <br/>
                                    </div>    
                                    <div class="col col-lg-6 col-md-6">
                                        <h4 class="panel-heading x-label">Ano</h4>
                                        <select name="ano" class="form-control">
                                            {counter assign=i start=0 print=false}
                                            {foreach name=outer item=ano from=$anos}
                                                <option value="{$ano}">{$ano}</option>
                                                {counter}
                                            {/foreach}
                                        </select>
                                        <br/>
                                    </div>
                                </div>    
                                <div class="row">
                                    <div class="col col-lg-3 col-md-3">
                                        <h4 class="panel-heading x-label">Quilometragem</h4>
                                        <input type="text" class="form-control" id="quilometragem" name="quilometragem" maxlength="40" placeholder="Quilometragem" onkeypress="return formataNumDV(event, this, 40);"/>
                                        <br/>
                                    </div>    
                                    <div class="col col-lg-3 col-md-3">
                                        <h4 class="panel-heading x-label">Cor</h4>
                                        <input type="text" class="form-control" id="cor" name="cor" maxlength="25" placeholder="Cor"/>
                                        <br/>
                                    </div>    
                                    <div class="col col-lg-3 col-md-3">
                                        <h4 class="panel-heading x-label">Combustível</h4>
                                        <input type="text" class="form-control" id="combustivel" name="combustivel" maxlength="25" placeholder="Combustível"/>
                                        <br/>
                                    </div>    
                                    <div class="col col-lg-3 col-md-3">
                                        <h4 class="panel-heading x-label">Final da Placa</h4>
                                        <input type="text" class="form-control" id="placa" name="placa" maxlength="4" placeholder="Final da Placa"/>
                                        <br/>
                                    </div>    
                                </div>   
                                <div class="row">
                                    <div class="col col-lg-12 col-md-12">        
                                        <h4 class="panel-heading x-label">Especificações</h4>
                                        <textarea class="form-control" rows="25" style="min-width: 100%" id="especificacoes" name="especificacoes">{$especificacoes}</textarea>
                                        <br/>
                                    </div>    
                                </div> 
                                <div class="row">
                                    <div class="col col-lg-12 col-md-12">  
                                        <button type="submit" class="btn btn-primary btn-lg" role="button">Enviar</button>
                                        <br/>
                                    </div>    
                                </div> 
                            </form> 

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /#page-wrapper -->
{*

<div class="sidebar">
    {include file="navbar.tpl"}
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="pull-left">
                {include file="logo.tpl"}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="row">
                <div class="col col-lg-12 col-md-12">
                    <h2><span class="label label-default">Cadastro de veículos</span></h2>
                </div>
            </div>
            <div class="row">

                <div class="col col-lg-12 col-md-12">
                    {if $erro eq ""}
                        <div class="alert alert-success" role="alert"><strong>Atenção: </strong>Preencher todos os campos!</div>
                    {else}
                        {if $sucesso eq "FALSE"}
                            <div class="alert alert-danger" role="alert"><strong>Atenção: </strong>{$erro}</div>
                        {else}
                            <div class="alert alert-success" role="alert">{$erro}</div>	
                        {/if}

                    {/if}
                </div>

            </div>
            <div class="row">

                <div class="col col-lg-12 col-md-12">
                    <a href="/{$language}/veiculos/veiculos-lista" class="btn btn-default navbar-btn"><i class="fa fa-reply">&nbsp</i> Voltar</a>
                </div>

            </div>
        </div>
        <br/>
        <div class="col-lg-12 col-md-12">

            <h4>Selecione os documentos</h4>  
            <b>Extensões permitidas:</b> .jpg, .png, .gif, .bmp<br>  
            <div id="mulitplefileuploader" class="fileuploader">Upload</div>
            <div id="status"></div>
            <input type="hidden" name="codproduto" id="codproduto" value="{$codproduto}"/>

        </div>
        <br/>                
        <div class="col-lg-12 col-md-12">

            <div id="responseHTML" style="margin-top: 16px;">
                <div class="panel panel-default responseRemove">
                    <div class="panel-heading">
                        ATENÇÃO
                    </div>
                    <table class="table">
                        <thead>
                        <th>Nada na lista!</th>
                        </thead>
                    </table>
                </div>
            </div>

        </div>
        <hr>      
        <div class="col-lg-12 col-md-12">


        </div>
    </div>
</div>
*}
{*<h4 class="panel-heading x-label">Descrição</h4>
<div class="input-group input-group-lg" style="margin-bottom: 1%;">
<input type="text" class="form-control" id="linha_1" name="linha_1" maxlength="40" placeholder="Linha 1"/>
</div>	
<br/>
<div class="input-group input-group-lg" style="margin-bottom: 1%;">
<input type="text" class="form-control" id="linha_2" name="linha_2" maxlength="40" placeholder="Linha 2"/>
</div>	
<br/>
<div class="input-group input-group-lg" style="margin-bottom: 1%;">
<input type="text" class="form-control" id="linha_3" name="linha_3" maxlength="40" placeholder="Linha 3"/>
</div>*}

{*</div>

<div class="col-md-4">*}


{*<div class="input-group input-group-lg" style="margin-bottom: 1%;">
    
</div>
<br/>
<div class="input-group input-group-lg" style="margin-bottom: 1%;">
<input type="text" class="form-control" id="portas" name="portas" maxlength="1" placeholder="Nº de Portas" onkeypress="return formataNumDV(event, this, 1);"/>
</div>
<br/>
<div class="input-group input-group-lg" style="margin-bottom: 1%;">
    
</div>*}
{*<br/>
<div class="input-group input-group-lg" style="margin-bottom: 1%;">
<input type="text" class="form-control" id="carroceria" name="carroceria" maxlength="25" placeholder="Carroceria"/>
</div>*}
{* </div>

<div class="col-md-4">*}


{*<div class="auto-img"><img src="/web-files/img/images/croqui.png" alt="" border="0" title="" class="img-responsive"/></div>
<div style="height: 110px">   
<div class="auto-price">R$ <span class="view-preco">52.900,00</span></div>
<div class="auto-title view-nome">HONDA CITY 2012</div>
<div class="auto-descricao view-linha_1">Lorem ipsum dolor sit amet, consectetur</div>
<div class="auto-descricao view-linha_2">adipiscing elit. Sed mollis metus rhoncus nisi </div>
<div class="auto-descricao view-linha_3">vestibulum, sed iaculis leo luctus</div>
</div>*}
{* <div>
<span class="m-ico" style="display: inline-block; float: left;"><img src="/web-files/img/images/cifrao.png" alt="" border="0" title="" class="img-responsive"/></span>    
<span class="m-ico" style="display: inline-block; float: left;"><img src="/web-files/img/images/document.png" alt="" border="0" title="" class="img-responsive"/></span>    
<span class="m-ico" style="display: inline-block; float: left;"><img src="/web-files/img/images/chat.png" alt="" border="0" title="" class="img-responsive"/></span>    
<span class="m-ico" style="display: inline-block; float: left;"><img src="/web-files/img/images/mail.png" alt="" border="0" title="" class="img-responsive"/></span>    
<span class="m-ico" style="display: inline-block; float: left;"><img src="/web-files/img/images/like.png" alt="" border="0" title="" class="img-responsive"/></span>    
<span style="display: inline-block; clear: both;"></span>
</div>*}


{*
<div class="col-md-12">

<p></p>
<br/> <br/>
<div class="input-group input-group-lg">
    
</div>
</div>*}





{*        </div>*}


{include file="tinymce_1.tpl"}
{include file="footer.tpl"}

<script>
    $("select").css("height", "54px");

    $(document).ready(function() {

        var settings = {
            url: "/pt/veiculos/upload/" + $("#codproduto").val(),
            method: "POST",
            allowedTypes: "jpg,png,gif,bmp",
            fileName: "myfile",
            multiple: true,
            onSuccess: function(files, data, xhr)
            {

                var str = '<div class="panel panel-default myResponse" id="' + data['CODFOTO'] + '">'
                        + '<div class="panel-heading">'
                        + '<div class="row">'
                        + '<div class="col col-sm-6">' + data['DATA'] + '</div>'
                        + '<div class="col col-sm-6" style="text-align: right">'
                        + '<strong>Ações: </strong>'
                        + '<span style="cursor: pointer;" onclick="javascript:trash_arquivo(\'/pt/admin/delete-arquivo/' + data['CODFOTO'] + '\')"><img src="/web-files/img/trash-can-32.png" alt="Excluir Arquivo"  title="Excluir Arquivo" border="0"/></span>'
                        + '</div>'
                        + '</div>'
                        + '</div>'
                        + '<table class="table">'
                        + '<thead>'
                        + '<th>Nome do arquivo</th>'
                        + '<th>download</th>'
                        + '</thead>'
                        + '<tr>'
                        + '<td style="width: 50%">' + data['NOME'] + '</td>'
                        + '<td><a href="' + data['ORIGINAL'] + '" download="' + data['NOME'] + '"><img src="/web-files/img/download.png" alt="Download"  title="Download" border="0"/></a></td>'
                        + '</tr>'
                        + '</table>'
                        + '</div>';

                $("#responseHTML").append(str);
                //$("#responseHTML").prepend(str);
                $(".responseRemove").remove();

                $('#' + data['CODFOTO']).animatescroll();


                $("#status").html("<font color='green'>Upload realizado com sucesso!</font>");

            },
            onError: function(files, status, errMsg)
            {
                $("#status").html("<font color='red'>Falha ao realizar o upload!</font>");
            }
        }
        $("#mulitplefileuploader").uploadFile(settings);
//        $(".fileuploader").each(function() {
//            $(this).uploadFile(settings);
//        });
    });

    function trash_arquivo(url) {
        if (confirm('ATENÇÃO: Esta ação não poderá ser desfeita!\n Deseja continuar?')) {
            $.ajax({
                type: 'post',
                data: null,
                url: url,
                success: function(data) {
                    $("#" + data["CODARQUIVO"]).remove();
                    if (!$(".myResponse").hasClass("myResponse")) {
                        var str = '<div class="panel panel-default responseRemove"><div class="panel-heading">ATENÇÃO</div><table class="table"><thead><th>Nada na lista!</th></thead></table></div>';
                        $("#responseHTML").append(str);
                    }
                }
            });
            return true;
        } else {
            return false;
        }
    }
</script>