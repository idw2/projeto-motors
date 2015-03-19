{include file="header.tpl"}

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Logomarca</h1>
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
                            <form id="formulario" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <br/>
                                        <h4><span style="font-size: 12px; color: #555">O tamanho da "Logo" deve ser de 212 pixels de "Largura" por 75 pixels de "Altura" exatos!</span></h4>
                                        <h4><span style="font-size: 12px; color: #555">Extensões premitidas: ".jpg", ".jpeg", ".gif", ".png", ".bmp"</span></h4>
                                        <p><input type="file" class="form-control" id="logomarca" name="logomarca" placeholder="Logomarca"/></p>
                                    </div>
                                </div>
                                <p id="visualizar"></p>
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <div style="background: #fff; margin: 0 11px; padding: 32px; height: 98px;">
                                <a href="/{$language}/html/logomarca">
                                    <span id="logo_default">
                                        <img class="area-restrita img-responsive center-block" src="{if $logomarca == ""}/web-files/logomarcas/logo_default.png{else}{$logomarca}{/if}" alt="" border="0" title="" />
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






{include file="footer.tpl"}
<script>
    $(document).ready(function() {
        $("#logomarca").change(function() {
            $('#visualizar').html('<img src="/web-files/img/Loader.GIF" alt="Enviando..." style="width: 32px;"/> Enviando...');
            //{ target:'#visualizar' }
            $('#formulario').ajaxForm(function(data) {
                $('#visualizar').html(data['erro']);
                if (data['logo'] != "") {
                    $("#logo_default").html('<img class="area-restrita img-responsive center-block" src="' + data['logo'] + '" alt="" border="0" title="">');
                }
            }).submit();
        });
    });
</script>