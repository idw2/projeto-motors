<?php /* Smarty version Smarty-3.1.19, created on 2014-12-16 10:03:53
         compiled from "/home/dlab34/auto.designlab.com.br/application/views/admin/fotos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136033387454907409191080-26235526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1f70c43f413b1058cb42ba9ced5a005aff5d6f5' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/admin/fotos.tpl',
      1 => 1413820950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136033387454907409191080-26235526',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'produto' => 0,
    'language' => 0,
    'url_amigavel' => 0,
    'fotos' => 0,
    'foto' => 0,
    'key' => 0,
    'item' => 0,
    'CODFOTO' => 0,
    'ORIGINAL' => 0,
    'NOME' => 0,
    'TIPO' => 0,
    'FORMATO' => 0,
    'star' => 0,
    'eye' => 0,
    'stt' => 0,
    'i' => 0,
    'url_del' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54907409637c40_23177780',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54907409637c40_23177780')) {function content_54907409637c40_23177780($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/dlab34/auto.designlab.com.br/libraries/plugins/function.counter.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="sidebar">
    <?php echo $_smarty_tpl->getSubTemplate ("admin/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="pull-left">
                <?php echo $_smarty_tpl->getSubTemplate ("admin/logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

            </div>
            <!--
            <?php echo $_smarty_tpl->getSubTemplate ("admin/search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

            -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-12"  style="text-align: left;">
            <h2><span class="label label-default">Lista de fotos</span></h2>
            <br/>

            <div class="container" style="text-align: left; margin-left: 0; padding-left: 0;">


                <div class="auto-img"><img src="/web-files/img/images/croqui.png" alt="" border="0" title="" class="img-responsive"/></div>
                <div style="height: 110px">   
                    <div class="auto-price">R$ <span class="view-preco"><?php echo $_smarty_tpl->tpl_vars['produto']->value->PRECO;?>
</span></div>
                    <div class="auto-title view-nome"><?php echo $_smarty_tpl->tpl_vars['produto']->value->NOME;?>
</div>
                    <div class="auto-descricao view-linha_1"><?php echo $_smarty_tpl->tpl_vars['produto']->value->LINHA_1;?>
</div>
                    <div class="auto-descricao view-linha_2"><?php echo $_smarty_tpl->tpl_vars['produto']->value->LINHA_2;?>
</div>
                    <div class="auto-descricao view-linha_3"><?php echo $_smarty_tpl->tpl_vars['produto']->value->LINHA_3;?>
</div>
                </div>
                <div>
                    <span class="m-ico"><img src="/web-files/img/images/cifrao.png" alt="" border="0" title="" class="img-responsive"/></span>    
                    <span class="m-ico"><img src="/web-files/img/images/document.png" alt="" border="0" title="" class="img-responsive"/></span>    
                    <span class="m-ico"><img src="/web-files/img/images/chat.png" alt="" border="0" title="" class="img-responsive"/></span>    
                    <span class="m-ico"><img src="/web-files/img/images/mail.png" alt="" border="0" title="" class="img-responsive"/></span>    
                    <span class="m-ico"><img src="/web-files/img/images/like.png" alt="" border="0" title="" class="img-responsive"/></span>    
                </div>

            </div>
            <br/>

            <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/veiculos/veiculos_lista" class="btn btn-default navbar-btn"><i class="fa fa-reply">&nbsp</i> Voltar</a>
            <a id="m-btn" href='#single_2' class="btn btn-default navbar-btn fancybox"><i class="fa fa-photo"></i> Enviar fotos</a>
            <div id="single_2" style="display: none; width: 530px; height: 500px;">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div id="mulitplefileuploader">Upload</div>
                        <input type="hidden" id="url_amigavel" value="<?php echo $_smarty_tpl->tpl_vars['url_amigavel']->value;?>
"/>
                    </div>
                    <div class="panel-body">
                        <div id="status"></div>
                    </div>
                </div>



            </div>

            <div class="panel-default">

                <table class='table' id="table-1" cellspacing="0" cellpadding="2">
                    <?php echo smarty_function_counter(array('assign'=>'i','start'=>1,'print'=>false),$_smarty_tpl);?>
 
                    <?php  $_smarty_tpl->tpl_vars['foto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foto']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fotos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foto']->key => $_smarty_tpl->tpl_vars['foto']->value) {
$_smarty_tpl->tpl_vars['foto']->_loop = true;
?>

                        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['foto']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                            <?php if ($_smarty_tpl->tpl_vars['key']->value=="CODFOTO") {?> <?php $_smarty_tpl->tpl_vars['CODFOTO'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value, null, 0);?><?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['key']->value=="DTA") {?> <?php $_smarty_tpl->tpl_vars['DTA'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value, null, 0);?><?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['key']->value=="ORIGINAL") {?> <?php $_smarty_tpl->tpl_vars['ORIGINAL'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value, null, 0);?><?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['key']->value=="NOME") {?> <?php $_smarty_tpl->tpl_vars['NOME'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value, null, 0);?><?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['key']->value=="TIPO") {?> <?php $_smarty_tpl->tpl_vars['TIPO'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value, null, 0);?><?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['key']->value=="FORMATO") {?> <?php $_smarty_tpl->tpl_vars['FORMATO'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value, null, 0);?><?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['key']->value=="DESTAQUE") {?> <?php $_smarty_tpl->tpl_vars['DESTAQUE'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value, null, 0);?>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value=="0") {?>
                                    <?php $_smarty_tpl->tpl_vars['star'] = new Smarty_variable("desative", null, 0);?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->tpl_vars['star'] = new Smarty_variable('', null, 0);?>
                                <?php }?> 
                            <?php }?>    
                            <?php if ($_smarty_tpl->tpl_vars['key']->value=="STATUS") {?> <?php $_smarty_tpl->tpl_vars['STATUS'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value, null, 0);?>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value=="0") {?>
                                    <?php $_smarty_tpl->tpl_vars['eye'] = new Smarty_variable("desative", null, 0);?>
                                    <?php $_smarty_tpl->tpl_vars['stt'] = new Smarty_variable("1", null, 0);?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->tpl_vars['eye'] = new Smarty_variable('', null, 0);?>
                                    <?php $_smarty_tpl->tpl_vars['stt'] = new Smarty_variable("0", null, 0);?>
                                <?php }?> 
                            <?php }?>  
                            <?php if ($_smarty_tpl->tpl_vars['key']->value=="ORDEM") {?> <?php $_smarty_tpl->tpl_vars['ORDEM'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value, null, 0);?><?php }?>
                        <?php } ?>

                        <?php $_smarty_tpl->tpl_vars["url_del"] = new Smarty_variable("/".((string)$_smarty_tpl->tpl_vars['language']->value)."/veiculos/delete_foto/url/".((string)$_smarty_tpl->tpl_vars['url_amigavel']->value)."/codfoto/".((string)$_smarty_tpl->tpl_vars['CODFOTO']->value), null, 0);?>

                        <tr id="<?php echo $_smarty_tpl->tpl_vars['CODFOTO']->value;?>
" style="border-radius: 0;">
                            <td>    
                                <img src="<?php echo $_smarty_tpl->tpl_vars['ORIGINAL']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['NOME']->value;?>
" data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['NOME']->value;?>
" border="0" style="width: 150px;"/>
                            </td>    
                            <td>

                                <!--<span style="display: inline-block; margin-right: 10px; margin-left: 10px; cursor: move; float: left;">
                                <img src="/web-files/img/move.png" alt="Drag" data-toggle="Drag" title="Drag" border="0" style="width: 55px;"/>
                            </span>-->


                                <span style="display: inline-block;">
                                    <strong>Nome: </strong><?php echo $_smarty_tpl->tpl_vars['NOME']->value;?>
<br/>
                                    <strong>Tipo: </strong> <?php echo $_smarty_tpl->tpl_vars['TIPO']->value;?>
<br/>
                                    <strong>Formato: </strong>.<?php echo $_smarty_tpl->tpl_vars['FORMATO']->value;?>
<br/>
                                    <strong>Abrir imagem em uma nova janela: </strong><a href="<?php echo $_smarty_tpl->tpl_vars['ORIGINAL']->value;?>
" target="_blank" class="fa fa-camera"></a><br/>
                                </span>
                            </td>    
                            
                            <td>
                                <span style="display: inline-block; margin-right: 10px">
                                    
                                    <span class="ico-default-star <?php echo $_smarty_tpl->tpl_vars['star']->value;?>
" data-toggle="tooltip" title="Destaque"><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/veiculos/foto_destaque/url/<?php echo $_smarty_tpl->tpl_vars['url_amigavel']->value;?>
/codfoto/<?php echo $_smarty_tpl->tpl_vars['CODFOTO']->value;?>
"><i class="fa fa-star"></i></a></span>
                                    <span class="ico-default-eye <?php echo $_smarty_tpl->tpl_vars['eye']->value;?>
" data-toggle="tooltip" title="Status"><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/veiculos/foto_status/status/<?php echo $_smarty_tpl->tpl_vars['stt']->value;?>
/url/<?php echo $_smarty_tpl->tpl_vars['url_amigavel']->value;?>
/codfoto/<?php echo $_smarty_tpl->tpl_vars['CODFOTO']->value;?>
"><i class="fa fa-eye"></i></a></span>
                                    <span class="ico-default-edit" data-toggle="tooltip" title="Crop"><a href="#crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" class="fancybox-crop" data-id="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" onclick="javascript:getCrop('crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
');"><i class="fa fa-crop"></i></a></span>
                                    <div id="crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" style="display: none !important; display: inline-block;">
                                        <form method='post' id='FormSendImage_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
' onsubmit='return false' enctype='multipart/form-data'>   

                                            <input type="hidden" id="crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_dataX1_1"/>
                                            <input type="hidden" id="crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_dataY1_1"/>
                                            <input type="hidden" id="crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_dataX2_1"/>
                                            <input type="hidden" id="crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_dataY2_1"/>
                                            <input type="hidden" id="crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_dataWidth_1" />
                                            <input type="hidden" id="crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_dataHeight_1"/>

                                            <input type="hidden" id="crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_dataX1_2"/>
                                            <input type="hidden" id="crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_dataY1_2"/>
                                            <input type="hidden" id="crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_dataX2_2"/>
                                            <input type="hidden" id="crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_dataY2_2"/>
                                            <input type="hidden" id="crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_dataWidth_2" />
                                            <input type="hidden" id="crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_dataHeight_2"/>

                                            <input type="hidden" id="crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_dataX1_3"/>
                                            <input type="hidden" id="crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_dataY1_3"/>
                                            <input type="hidden" id="crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_dataX2_3"/>
                                            <input type="hidden" id="crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_dataY2_3"/>
                                            <input type="hidden" id="crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_dataWidth_3" />
                                            <input type="hidden" id="crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_dataHeight_3"/>


                                            <div class="panel panel-default show_crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_1">
                                                <div class="panel-body pn1_crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                                                    <img class='crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_preview_1' src='<?php echo $_smarty_tpl->tpl_vars['ORIGINAL']->value;?>
' alt='Preview' title='Preview' border='0'/>
                                                </div>
                                                <br/>
                                                <div class="panel-footer" style="text-align: right;">
                                                    <div class="row">
                                                        <div class="col-md-6" style="text-align: left;"> <strong>Foto: </strong> Destaque. <br/> <br/> 
                                                            <div class="myload_crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"></div>
                                                        </div>
                                                        <div class="col-md-6" style="text-align: right;">
                                                            <a id="m-btn" onclick="release_crop('crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
', 'crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_preview_1', '<?php echo $_smarty_tpl->tpl_vars['CODFOTO']->value;?>
', 1)" class="btn btn-default navbar-btn"><i class="fa fa-crop"></i> Crop</a>
                                                            <ul class="pager">
                                                                <li class="next"><a href="#"  id="crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_click" onclick="choose_crop('crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
')">Próximo &rarr;</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>   


                                            <div class="panel panel-default show_crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_2 hidex">  
                                                <div class="panel-body pn2_crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                                                    <img class='crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_preview_2' src='<?php echo $_smarty_tpl->tpl_vars['ORIGINAL']->value;?>
' alt='Preview' title='Preview' border='0'/>
                                                </div>
                                                <br/>
                                                <div class="panel-footer" style="text-align: right;">
                                                    <div class="row">
                                                        <div class="col-md-6" style="text-align: left;"> <strong>Foto: </strong> Avatar.  <br/> <br/> 
                                                            <div class="myload_crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"></div>
                                                        </div>
                                                        <div class="col-md-6" style="text-align: right;">
                                                            <a id="m-btn" onclick="release_crop('crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
', 'crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_preview_2', '<?php echo $_smarty_tpl->tpl_vars['CODFOTO']->value;?>
', 2)" class="btn btn-default navbar-btn"><i class="fa fa-crop"></i> Crop</a>
                                                            <ul class="pager">
                                                                <li class="next"><a href="#"  onclick="choose_crop('crop_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
')">Próximo &rarr;</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>                                    

                                    </div>                 
                                    <span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><a onclick="delete_foto('<?php echo $_smarty_tpl->tpl_vars['url_del']->value;?>
')"><i class="fa fa-trash-o"></i></a></span>                                

                                </span>    
                            </td>    
                        </tr>


                        <?php echo smarty_function_counter(array(),$_smarty_tpl);?>

                    <?php } ?>
                </table>

                <pre id="serialize_output" style="display: none;">Item 1,Item 3,Item 2,Item 5,Item 4,Item 6</pre>
            </div>

        </div>
    </div>
</div>
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
        afterClose: function() {
            window.location.reload();
        }
    });

    $('.fancybox-crop').fancybox({
        "hideOnContentClick": true
    });

    $(document).ready(function() {
        var url_amigavel = $("#url_amigavel").val();
        var settings = {
            url: "/web-files/server/upload.php?url_amigavel=" + url_amigavel,
            method: "POST",
            allowedTypes: "jpg,png,gif,doc,pdf,zip",
            fileName: "myfile",
            multiple: true,
            onSuccess: function(files, data, xhr)
            {
                $("#status").html("<font color='green'>Imagens enviadas com sucesso!</font>");

            },
            onError: function(files, status, errMsg)
            {
                $("#status").html("<font color='red'>Ocorreu um erro ao enviar as imagens!</font>");
            }
        };
        $("#mulitplefileuploader").uploadFile(settings);

    });

    $("#m-btn").click(function(e) {
        e.preventDefault();
        console.log("click");

    });
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
    function getCrop(id) {

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
    }

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
                    url: '/web-files/server/order_fotos.php',
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

<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
