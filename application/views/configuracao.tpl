{include file="header.tpl"}

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Configurações</h1>
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
                                
                                {if $erro != ""}
                                     <div class="alert alert-success" role="alert">{$erro}</div>	
                                {/if}

                                <h4>Nº de Telefone Principal</h4>
                                <p><input class="form-control" style="min-width: 100%" id="telefone" name="telefone" value="{$telefone}" placeholder="Nº de Telefone Principal"/></p>

                                <h4>Twitter</h4>
                                <p><input class="form-control" style="min-width: 100%" id="twitter" name="twitter" value="{$twitter}" placeholder="Twitter"/></p>

                                <h4>Site</h4>
                                <p><input class="form-control" style="min-width: 100%" id="site" name="site" value="{$user_site}" placeholder="Site" readonly="true"/></p>

                                <h4>Linked Id</h4>
                                <p><input class="form-control" style="min-width: 100%" id="linkedid" name="linkedid" value="{$linkedid}" placeholder="Linked Id"/></p>

                                <h4>Google Plus</h4>
                                <p><input class="form-control" style="min-width: 100%" id="google_plus" name="google_plus" value="{$google_plus}" placeholder="Google Plus"/></p>

                                <h4>Facebook</h4>
                                <p><input class="form-control" style="min-width: 100%" id="facebook" name="facebook" value="{$facebook}" placeholder="Facebook"/></p>

                                <h4>Instagram</h4>
                                <p><input class="form-control" style="min-width: 100%" id="instagram" name="instagram" value="{$instagram}" placeholder="Instagram"/></p>

                                <h4>E-mail fale conosco</h4>
                                <p><input class="form-control" style="min-width: 100%" id="email" name="email" value="{$email}" placeholder="E-mail fale conosco"/></p>

                                <h4>Observações fale conosco <span style="font-size: 12px; color: #555">Ex: O prazo de respostas para as solicitações é de até 24h.</span></h4>
                                <p><input class="form-control" style="min-width: 100%" id="obs_faleconosco" name="obs_faleconosco" value="{$obs_faleconosco}" placeholder="Observações fale conosco"/></p>

                                <h4>Aliás fale conosco <span style="font-size: 12px; color: #555">(Ex: "-f", "-r" ou caso não favor não preencher)</span></h4>
                                <p><input class="form-control" style="min-width: 100%" id="alias" name="alias" value="{$alias}" placeholder="Aliás"/></p>

                               {* <h4>Definir cores</h4>
                                <p>
                                    <span style="background-color: #F56729; display: inline-block; height: 10px; width: 10px"></span> <input type="radio" name="color" value="#F56729" {if $color == "#F56729"}checked="true"{/if}> Laranja <br>
                                    <span style="background-color: #FFD600; display: inline-block; height: 10px; width: 10px"></span> <input type="radio" name="color" value="#FFD600" {if $color == "#FFD600"}checked="true"{/if}> Amarelo <br>
                                    <span style="background-color: #9D881D; display: inline-block; height: 10px; width: 10px"></span> <input type="radio" name="color" value="#9D881D" {if $color == "#9D881D"}checked="true"{/if}> Ouro <br>
                                    <span style="background-color: #65BB41; display: inline-block; height: 10px; width: 10px"></span> <input type="radio" name="color" value="#65BB41" {if $color == "#65BB41"}checked="true"{/if}> Verde <br>
                                    <span style="background-color: #00A9FF; display: inline-block; height: 10px; width: 10px"></span> <input type="radio" name="color" value="#00A9FF" {if $color == "#00A9FF"}checked="true"{/if}> Azul <br>
                                    <span style="background-color: #f17241; display: inline-block; height: 10px; width: 10px"></span> <input type="radio" name="color" value="#f17241" {if $color == "#f17241"}checked="true"{/if}> Laranja Lunixx <br>
                                </p>*}

                                
                                <h4>Cor do Site</h4>
                                <p class='input-group colorpicker-component get-color colorpicker-element'>
                                    <input type="text" name='color' id='color' value="{if $color eq ''}#000000{else}{$color}{/if}" class="form-control">
                                    <span class='input-group-addon'><i style='background-color: {if $color eq ''}#000000{else}{$color}{/if}'></i></span>
                                </p>
                                
                                <h2>Horário de funcionamento</h2>
                                <h4>De segunda à sexta <span style="font-size: 12px; color: #555">(Ex: formato da hora "00:00")</span></h4>
                                <div class="row datagrid">
                                    <div class="col col-sm-3">
                                        <input type="text" class="form-control" id="seg_sex_inicio" name="seg_sex_inicio" maxlength="5" value="{$seg_sex_inicio}" placeholder="Abertura" onkeypress="return formataHora(event, this);"/>
                                    </div>
                                    <div class="col col-sm-3">
                                        <input type="text" class="form-control" id="seg_sex_fim" name="seg_sex_fim" maxlength="10" value="{$seg_sex_fim}" placeholder="Fechamento" onkeypress="return formataHora(event, this);"/>
                                    </div>
                                    <div class="col col-sm-6"> </div>
                                </div>
                                <h4>Sábados <span style="font-size: 12px; color: #555">(Ex: formato da hora "00:00")</span></h4>
                                <div class="row datagrid">
                                    <div class="col col-sm-3">
                                        <input type="text" class="form-control" id="sabado_inicio" name="sabado_inicio" maxlength="5" value="{$sabado_inicio}" placeholder="Abertura" onkeypress="return formataHora(event, this);"/>
                                    </div>
                                    <div class="col col-sm-3">
                                        <input type="text" class="form-control" id="sabado_fim" name="sabado_fim" maxlength="10" value="{$sabado_fim}" placeholder="Fechamento" onkeypress="return formataHora(event, this);"/>
                                    </div>
                                    <div class="col col-sm-6"> </div>
                                </div>
                                <h4>Domingos <span style="font-size: 12px; color: #555">(Ex: formato da hora "00:00")</span></h4>
                                <div class="row datagrid">
                                    <div class="col col-sm-3">
                                        <input type="text" class="form-control" id="domingo_inicio" name="domingo_inicio" maxlength="5" value="{$domingo_inicio}" placeholder="Abertura" onkeypress="return formataHora(event, this);"/>
                                    </div>
                                    <div class="col col-sm-3">
                                        <input type="text" class="form-control" id="domingo_fim" name="domingo_fim" maxlength="10" value="{$domingo_fim}" placeholder="Fechamento" onkeypress="return formataHora(event, this);"/>
                                    </div>
                                    <div class="col col-sm-6"> </div>
                                </div>
                                <h4>Feriados <span style="font-size: 12px; color: #555">(Ex: formato da hora "00:00")</span></h4>
                                <div class="row datagrid">
                                    <div class="col col-sm-3">
                                        <input type="text" class="form-control" id="feriado_inicio" name="feriado_inicio" maxlength="5" value="{$feriado_inicio}" placeholder="Abertura" onkeypress="return formataHora(event, this);"/>
                                    </div>
                                    <div class="col col-sm-3">
                                        <input type="text" class="form-control" id="feriado_fim" name="feriado_fim" maxlength="10" value="{$feriado_fim}" placeholder="Fechamento" onkeypress="return formataHora(event, this);"/>
                                    </div>
                                    <div class="col col-sm-6"> </div>
                                </div>
                                <br>
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
<script>
    $(document).ready(function() {
        $(function() {
            alert($('.get-color').html());
            $('.get-color').colorpicker();
        });
    });
</script>