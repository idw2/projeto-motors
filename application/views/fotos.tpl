{include file="header.tpl"}

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Lista de Fotos e Preview</h1>
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
                        <div class="col-lg-12">

                            <div>

                                {if $foto_destaque eq ""}
                                    <div class="auto-img"><img src="/web-files/img/images/croqui.png" alt="" border="0" title="" class="img-responsive"/></div>
                                    {else}
                                    <div class="auto-img" style="height: 360px;"><img src="{$foto_destaque}" alt="" border="0" title="" class="img-responsive"/></div>
                                    {/if} 

                                <div style="height: 110px">   
                                    <div class="auto-price">R$ <span class="view-preco">{$produto->PRECO}</span></div>
                                    <div class="auto-title view-nome">{$produto->NOME}</div>
                                    <div class="auto-descricao view-linha_1">{$produto->LINHA_1}</div>
                                    <div class="auto-descricao view-linha_2">{$produto->LINHA_2}</div>
                                    <div class="auto-descricao view-linha_3">{$produto->LINHA_3}</div>
                                </div>
                                {* <div>
                                <span class="m-ico" style="display: inline-block; float: left;"><img src="/web-files/img/images/cifrao.png" alt="" border="0" title="" class="img-responsive"/></span>    
                                <span class="m-ico" style="display: inline-block; float: left;"><img src="/web-files/img/images/document.png" alt="" border="0" title="" class="img-responsive"/></span>    
                                <span class="m-ico" style="display: inline-block; float: left;"><img src="/web-files/img/images/chat.png" alt="" border="0" title="" class="img-responsive"/></span>    
                                <span class="m-ico" style="display: inline-block; float: left;"><img src="/web-files/img/images/mail.png" alt="" border="0" title="" class="img-responsive"/></span>    
                                <span class="m-ico" style="display: inline-block; float: left;"><img src="/web-files/img/images/like.png" alt="" border="0" title="" class="img-responsive"/></span>    
                                <span style="display: inline-block; clear: both;"></span>
                                </div>
                                *}

                            </div>
                            <br/>

                            <a href="/{$language}/veiculos/veiculos-lista" class="btn btn-default navbar-btn"><i class="fa fa-reply">&nbsp</i> Voltar</a>
                            <a id="m-btn" href='#single_2' class="btn btn-default navbar-btn fancybox"><i class="fa fa-photo"></i> Enviar fotos</a>

                            <div id="single_2" style="display: none; width: 530px; height: 500px;">

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div id="mulitplefileuploader">Upload</div>
                                        <input type="hidden" id="url_amigavel" value="{$url_amigavel}"/>
                                    </div>
                                    <div class="panel-body">
                                        <div id="status"></div>
                                    </div>

                                </div>
                                <div>
                                    <p><button type="buttom" class="btn btn-primary btn-primary-maria" onclick="javascript:$('a[title=Close]').click();">FECHAR</button></p>
                                </div>    


                            </div>   

                            <div class="panel panel-default">
                                <div class="panel-heading"><strong>* Lista de Fotos</strong></div>

                                <table class='table' {*id="table-1" *}cellspacing="0" cellpadding="2">
                                    {counter assign=i start=1 print=false} 
                                    {foreach name=outer item=foto from=$fotos}

                                        {foreach key=key item=item from=$foto}
                                            {if $key == "CODFOTO"} {$CODFOTO = $item}{/if}
                                            {if $key == "DTA"} {$DTA = $item}{/if}
                                            {if $key == "ORIGINAL"} {$ORIGINAL = $item}{/if}
                                            {if $key == "NOME"} {$NOME = $item}{/if}
                                            {if $key == "TIPO"} {$TIPO = $item}{/if}
                                            {if $key == "FORMATO"} {$FORMATO = $item}{/if}
                                            {if $key == "DESTAQUE"} {$DESTAQUE = $item}
                                                {if $item == "0"}
                                                    {$star = "desative"}
                                                {else}
                                                    {$star = ""}
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
                                            {if $key == "ORDEM"} {$ORDEM = $item}{/if}
                                        {/foreach}

                                        {*                        {assign var="url_del" value="{$language}/veiculos/delete-foto/url/{$url_amigavel}/codfoto/{$CODFOTO}"}*}

                                        <tr id="{$CODFOTO}" style="border-radius: 0;">
                                            <td>    
                                                <img src="{$ORIGINAL}" alt="{$NOME}" data-toggle="tooltip" title="{$NOME}" border="0" style="width: 150px;"/>
                                            </td>    
                                            <td>

                                                <!--<span style="display: inline-block; margin-right: 10px; margin-left: 10px; cursor: move; float: left;">
                                                <img src="/web-files/img/move.png" alt="Drag" data-toggle="Drag" title="Drag" border="0" style="width: 55px;"/>
                                            </span>-->


                                                <span style="display: inline-block;">
                                                    <strong>Nome: </strong>{$NOME}<br/>
                                                    <strong>Tipo: </strong> {$TIPO}<br/>
                                                    <strong>Formato: </strong>.{$FORMATO}<br/>
                                                    <strong>Abrir imagem em uma nova janela: </strong><a href="{$ORIGINAL}" target="_blank" class="fa fa-camera"></a><br/>
                                                </span>
                                            </td>    

                                            <td>
                                                <span style="display: inline-block; margin-right: 10px">


                                                    <table>

                                                        <tr>
                                                            <td><span class="ico-default-star-{$CODFOTO} ico-default-star {$star}" rel="tooltip" title="Destaque"><a onclick="javascript:fDestaqueUpdate('destaque-{$i}-{$CODFOTO}', '{$language}/veiculos/foto-destaque/url/{$url_amigavel}/codfoto/{$CODFOTO}', '{$CODFOTO}')"><i class="fa fa-star"></i></a></span>&nbsp;</td>
                                                            <td><span class="ico-default-eye-{$CODFOTO} ico-default-eye {$eye}" rel="tooltip" title="Status"><a style="cursor: pointer;" onclick="javascript:fStatusUpdate('status-{$i}-{$CODFOTO}', '{$language}/veiculos/foto-status/status/{$stt}/url/{$url_amigavel}/codfoto/{$CODFOTO}', '{$CODFOTO}')"><i class="fa fa-eye"></i></a></span>&nbsp;</td>
                                                            <td>
                                                                <span class="ico-default-edit" rel="tooltip" title="Crop"><a href="#crop_{$i}" class="fancybox-crop" data-id="{$i}" onclick="javascript:getCrop('crop_{$i}');"><i class="fa fa-crop"></i></a></span>&nbsp;
                                                                <div id="crop_{$i}" style="display: none !important; display: inline-block;">
                                                                    <form method='post' id='FormSendImage_{$i}' onsubmit='return false' enctype='multipart/form-data'>   

                                                                        <input type="hidden" id="crop_{$i}_dataX1_1"/>
                                                                        <input type="hidden" id="crop_{$i}_dataY1_1"/>
                                                                        <input type="hidden" id="crop_{$i}_dataX2_1"/>
                                                                        <input type="hidden" id="crop_{$i}_dataY2_1"/>
                                                                        <input type="hidden" id="crop_{$i}_dataWidth_1" />
                                                                        <input type="hidden" id="crop_{$i}_dataHeight_1"/>

                                                                        <input type="hidden" id="crop_{$i}_dataX1_2"/>
                                                                        <input type="hidden" id="crop_{$i}_dataY1_2"/>
                                                                        <input type="hidden" id="crop_{$i}_dataX2_2"/>
                                                                        <input type="hidden" id="crop_{$i}_dataY2_2"/>
                                                                        <input type="hidden" id="crop_{$i}_dataWidth_2" />
                                                                        <input type="hidden" id="crop_{$i}_dataHeight_2"/>

                                                                        <input type="hidden" id="crop_{$i}_dataX1_3"/>
                                                                        <input type="hidden" id="crop_{$i}_dataY1_3"/>
                                                                        <input type="hidden" id="crop_{$i}_dataX2_3"/>
                                                                        <input type="hidden" id="crop_{$i}_dataY2_3"/>
                                                                        <input type="hidden" id="crop_{$i}_dataWidth_3" />
                                                                        <input type="hidden" id="crop_{$i}_dataHeight_3"/>

                                                                        <div class="panel panel-default show_crop_{$i}_2">  
                                                                            <div class="panel-body pn2_crop_{$i}">
                                                                                <img class='crop_{$i}_preview_2' src='{$ORIGINAL}' alt='Preview' title='Preview' border='0'/>
                                                                            </div>
                                                                            <br/>
                                                                            <div class="panel-footer" style="text-align: right;">
                                                                                <div class="row">
                                                                                    <div class="col-md-6" style="text-align: left;"> <strong>Foto: </strong> Paisagem.  <br/> <br/> 
                                                                                        <div class="myload_crop_{$i}"></div>
                                                                                    </div>
                                                                                    <div class="col-md-6" style="text-align: right;">
                                                                                        <span class="LoaderCrop hide"><img src="/web-files/img/Loader_small.gif" border="0" title="Carregando" alt="Carregando"/></span>
                                                                                        <a id="m-btn" onclick="release_crop('crop_{$i}', 'crop_{$i}_preview_2', '{$CODFOTO}', 2, 'paisagem', 'crop_{$i}')" class="btn btn-default navbar-btn"><i class="fa fa-crop"></i> Crop</a>

                                                                                        {*<ul class="pager">
                                                                                        <li class="next"><a href="#"  onclick="choose_crop('crop_{$i}')">Próximo &rarr;</a></li>
                                                                                        </ul>
                                                                                        *}

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="panel panel-default show_crop_{$i}_1 hidex">
                                                                            <div class="panel-body pn1_crop_{$i}">
                                                                                <img class='crop_{$i}_preview_1' src='{$ORIGINAL}' alt='Preview' title='Preview' border='0'/>
                                                                            </div>
                                                                            <br/>
                                                                            <div class="panel-footer" style="text-align: right;">
                                                                                <div class="row">
                                                                                    <div class="col-md-6" style="text-align: left;"> <strong>Foto: </strong> Retrato. <br/> <br/> 
                                                                                        <div class="myload_crop_{$i}"></div>
                                                                                    </div>
                                                                                    <div class="col-md-6" style="text-align: right;">
                                                                                        <span class="LoaderCrop hide"><img src="/web-files/img/Loader_small.gif" border="0" title="Carregando" alt="Carregando"/></span>
                                                                                        <a id="m-btn" onclick="release_crop('crop_{$i}', 'crop_{$i}_preview_1', '{$CODFOTO}', 1, 'retrato', 'crop_{$i}')" class="btn btn-default navbar-btn"><i class="fa fa-crop"></i> Crop</a>

                                                                                        {*<ul class="pager">
                                                                                        <li class="next"><a href="#"  id="crop_{$i}_click" onclick="choose_crop('crop_{$i}')">Próximo &rarr;</a></li>
                                                                                        </ul>*}

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>   




                                                                    </form>                                    

                                                                </div>  
                                                            </td>
                                                            <td><span class="ico-default-trash" rel="tooltip" title="Excluir"><a onclick="javascript:fDeleteUpdate('delete-{$i}-{$CODFOTO}', '{$language}/veiculos/delete-foto/url/{$url_amigavel}/codfoto/{$CODFOTO}', '{$CODFOTO}')"><i class="fa fa-trash-o"></i></a></span></td>
                                                        </tr>
                                                        <tr>
                                                            <td id="destaque-{$i}-{$CODFOTO}" style="height: 35px"><img src="/web-files/img/Loader_small.gif" border="0" title="Carregando" alt="Carregando" class="hide"/></td>
                                                            <td id="status-{$i}-{$CODFOTO}"><img src="/web-files/img/Loader_small.gif" border="0" title="Carregando" alt="Carregando" class="hide"/></td>
                                                            <td id="crop-{$i}-{$CODFOTO}"><img src="/web-files/img/Loader_small.gif" border="0" title="Carregando" alt="Carregando" class="hide"/></td>
                                                            <td id="delete-{$i}-{$CODFOTO}"><img src="/web-files/img/Loader_small.gif" border="0" title="Carregando" alt="Carregando" class="hide"/></td>
                                                        </tr>
                                                    </table>

                                                </span>    
                                            </td>    
                                        </tr>


                                        {counter}
                                    {/foreach}
                                </table>

                                <pre id="serialize_output" class="hide">Item 1,Item 3,Item 2,Item 5,Item 4,Item 6</pre>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {include file="footer.tpl"}                

    <script>

        function delete_foto(url) {
            if (confirm('ATENÇÃO: Esta ação não poderá ser desfeita!\n Deseja continuar?')) {
                window.location = url;
                return true;
            } else {
                return false;
            }
        }

        $('.fancybox').fancybox({
            "hideOnContentClick": true,
            afterClose: function () {
                window.location.reload();
            }
        });

        $('.fancybox-crop').fancybox({
            "hideOnContentClick": true
        });

        $(document).ready(function () {
            var url_amigavel = $("#url_amigavel").val();
            var settings = {
                url: "/web-files/server/upload.php?url_amigavel=" + url_amigavel, method: "POST",
                allowedTypes: "jpg,png,gif,doc,pdf,zip",
                fileName: "myfile",
                multiple: true,
                onSuccess: function (files, data, xhr)
                {
                    $("#status").html("<font color='green'>Imagens enviadas com sucesso!</font>");

                },
                onError: function (files, status, errMsg)
                {
                    $("#status").html("<font color='red'>Ocorreu um erro ao enviar as imagens!</font>");
                }
            };
            $("#mulitplefileuploader").uploadFile(settings);

        });

        $("#m-btn").click(function (e) {
            e.preventDefault();
            console.log("click");

        });

        function release_crop(key, imagem, codfoto, indice, dimensao, guid) {
            var dataX1 = $("#" + key + "_dataX1_" + indice).val();
            var dataY1 = $("#" + key + "_dataY1_" + indice).val();
            var dataX2 = $("#" + key + "_dataX2_" + indice).val();
            var dataY2 = $("#" + key + "_dataY2_" + indice).val();
            var dataWidth = $("#" + key + "_dataWidth_" + indice).val();
            var dataHeight = $("#" + key + "_dataHeight_" + indice).val();
            var link = '';
            if (dimensao == "retrato") {
                link = getMyFolderRoot() + '/web-files/server/crop.php';
            } else {
                link = getMyFolderRoot() + '/web-files/server/crop_paisagem.php';
            }

            $(".LoaderCrop").removeClass('hide');

            $.ajax({
                type: 'post',
                data: "indice=" + indice + "&x1=" + dataX1 + "&y1=" + dataY1 + "&x2=" + dataX2 + "&y2=" + dataY2 + "&w=" + dataWidth + "&h=" + dataHeight + "&codfoto=" + codfoto + "&imagem=" + imagem,
                url: link,
                success: function (data) {
                    $(".LoaderCrop").addClass('hide');
                    if (dimensao == "retrato") {
                        choose_crop(guid);
                    } else {
                        $("a[title=Close]").click();
                        window.location.reload();
                    }
                }
            });
        }


        function choose_crop(id) {

            if ($(".show_" + id + "_2").hasClass("hidex")) {
                $(".show_" + id + "_1").addClass('hidex');
                $(".show_" + id + "_2").removeClass('hidex');
            } else {
                $(".show_" + id + "_1").removeClass('hidex');
                $(".show_" + id + "_2").addClass('hidex');
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
         url: '/web-files/server/order_fotos.php',
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
        {*function getCrop(id) {

        var $image1 = $("." + id + "_preview_1"),
        $dataX1_1 = $("#" + id + "_dataX1_1"),
        $dataY1_1 = $("#" + id + "_dataY1_1"),
        $dataX2_1 = $("#" + id + "_dataX2_1"),
        $dataY2_1 = $("#" + id + "_dataY2_1"),
        $dataHeight_1 = $("#" + id + "_dataHeight_1"),
        $dataWidth_1 = $("#" + id + "_dataWidth_1");

        $image1.cropper({
        aspectRatio: 1.8,
        done: function(data) {
        console.log(data.x1 + ":" + data.y1 + ":" + data.x2 + ":" + data.y2 + ":" + data.height + ":" + data.width);
        $dataX1_1.val(data.x1);
        $dataY1_1.val(data.y1);
        $dataX2_1.val(data.x2);
        $dataY2_1.val(data.y2);
        $dataHeight_1.val(data.height);
        $dataWidth_1.val(data.width);
        }
        });

        var $image2 = $("." + id + "_preview_2"),
        $dataX1_2 = $("#" + id + "_dataX1_2"),
        $dataY1_2 = $("#" + id + "_dataY1_2"),
        $dataX2_2 = $("#" + id + "_dataX2_2"),
        $dataY2_2 = $("#" + id + "_dataY2_2"),
        $dataHeight_2 = $("#" + id + "_dataHeight_2"),
        $dataWidth_2 = $("#" + id + "_dataWidth_2");

        $image2.cropper({
        aspectRatio: 0.9,
        done: function(data) {
        console.log(data.x1 + ":" + data.y1 + ":" + data.x2 + ":" + data.y2 + ":" + data.height + ":" + data.width);
        $dataX1_2.val(data.x1);
        $dataY1_2.val(data.y1);
        $dataX2_2.val(data.x2);
        $dataY2_2.val(data.y2);
        $dataHeight_2.val(data.height);
        $dataWidth_2.val(data.width);
        }
        });

        }

        function release_crop(key, imagem, codfoto, indice) {

        var dataX1 = $("#" + key + "_dataX1_" + indice).val();
        var dataY1 = $("#" + key + "_dataY1_" + indice).val();
        var dataX2 = $("#" + key + "_dataX2_" + indice).val();
        var dataY2 = $("#" + key + "_dataY2_" + indice).val();
        var dataWidth = $("#" + key + "_dataWidth_" + indice).val();
        var dataHeight = $("#" + key + "_dataHeight_" + indice).val();
        alert($(".myload_crop_" + indice));
        $(".myload_crop_" + indice).html("<img src='/web-files/img/ajax-loader.gif' border='0' alt=''/>");

        $.ajax({
        type: 'post',
        data: "indice=" + indice + "&x1=" + dataX1 + "&y1=" + dataY1 + "&x2=" + dataX2 + "&y2=" + dataY2 + "&w=" + dataWidth + "&h=" + dataHeight + "&codfoto=" + codfoto + "&imagem=" + imagem,
        url: '/web-files/server/crop.php',
        success: function(data) {
        alert(data);
        $(".myload_crop_" + indice).html("<strong style='color: #395aa4'>" + data + "</strong>");
        }
        });
        }


        function choose_crop(id) {

        if ($(".show_" + id + "_2").hasClass("hidex")) {
        $(".show_" + id + "_1").addClass('hidex');
        $(".show_" + id + "_2").removeClass('hidex');
        } else {
        $(".show_" + id + "_1").removeClass('hidex');
        $(".show_" + id + "_2").addClass('hidex');
        }
        }*}

        $(document).ready(function () {
            $("#table-1").tableDnD({
                onDragClass: "myDragClass active",
                onDrop: function () {
                    var keys = null;
                    $("#table-1").find("tr").each(function (i) {
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
                        url: '/web-files/server/order_fotos.php',
                        success: function (data) {
                            consolo.log(data);
                        }
                    });
                }
            });

            $("#table-1").find("tr").each(function (i) {
                if (i % 2 == 1) {
                    jQuery(this).addClass('myDragClass');
                }
            });
        });


    </script>

