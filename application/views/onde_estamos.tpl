{include file="header.tpl"}



<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Onde Estamos</h1>
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

    {if $conteudo != ""}

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="map-frame" style="margin-bottom: 18px;">
                        <iframe src="https://maps.google.com/maps?q={$conteudo}&output=embed" width="600" height="450" frameborder="0" style="border:0;width: 100%;"></iframe>
                    </div>
                    <p><strong>Endereço:</strong><br />
                        {$endereco->LOGRADOURO}, {$endereco->NUMERO}{if $endereco->COMPLEMENTO != ""} - {$endereco->COMPLEMENTO} - {/if}<br>{$endereco->BAIRRO}<br>{$endereco->CIDADE}/{$endereco->UF}<br>{$endereco->CEP}<br></p>        
                </div>
            </div>
        </div>

    {/if}         

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form method="post">
                                <h4>link iframe google maps</h4>
                                <p><input class="form-control" style="min-width: 100%" id="conteudo" name="conteudo" value="{$conteudo}" placeholder="link iframe google maps"/></p>
                                <p><button type="submit" class="btn btn-primary" name="enviar">ENVIAR</button></p>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{include file="footer.tpl"}