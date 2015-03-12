{include file="header.tpl"}




<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">A Empresa</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="pull-left">
                {if $erro != ""}
                    <div class="alert alert-success" role="alert">{$erro}</div>	
                {/if}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-lg-6">
                        <form method="post">
                            <p><textarea class="form-control" rows="25" style="min-width: 100%" id="conteudo" name="conteudo">{$conteudo}</textarea></p>
                            <p><button type="submit" class="btn btn-primary" name="enviar">ENVIAR</button></p>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



{include file="tinymce_1.tpl"}
{include file="footer.tpl"}