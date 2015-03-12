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
    '895c11a510111cf02acda7f5e2474f03ccd17970' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/admin/header.tpl',
      1 => 1418406168,
      2 => 'file',
    ),
    '5d7c8ebc10119b479d6c94f4d1aacfae16187fa2' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/admin/navbar.tpl',
      1 => 1418394615,
      2 => 'file',
    ),
    '65eb07aab22aa86b0b13eba4e2f9f998a9d4f3ed' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/admin/logo.tpl',
      1 => 1413820954,
      2 => 'file',
    ),
    '5d3aa1d25483761f39f45699375103e4dcd9520f' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/admin/search.tpl',
      1 => 1413820956,
      2 => 'file',
    ),
    'a29bf96d5c7e1f92958d242dec199088cca5e172' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/admin/footer.tpl',
      1 => 1413820949,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136033387454907409191080-26235526',
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
  'unifunc' => 'content_549074098106e5_47265961',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549074098106e5_47265961')) {function content_549074098106e5_47265961($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Minha Concessionária | Lista de fotos</title>
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    
        <link rel="icon" type="image/vnd.microsoft.icon" href="/web-files/img/favicon.ico"/>
        <link rel="shortcut icon" type="image/x-icon" href="/web-files/img/favicon.ico"/>

        <link rel="stylesheet" href="/web-files/font-awesome-4.1.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="/web-files/css/material-design-iconic-font.min.css"/>
        <link rel="stylesheet" href="/web-files/bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" href="/web-files/bootstrap/css/bootstrap-theme.css"/>		
        <link rel="stylesheet" href="/web-files/css/docs.min.css"/>
        <link rel="stylesheet" href="/web-files/css/style.css"/>
        <link rel="stylesheet" href="/web-files/css/admin.css"/>

        <script language="javascript" src="/web-files/js/funcoes.js"></script>
        <script language="javascript" src="/web-files/js/jquery-2.1.1.min.js"></script>
        <script language="javascript" src="/web-files/js/jQuery-Mask-Plugin.js"></script>
        <script language="javascript" src="/web-files/bootstrap/js/bootstrap.js"></script>
        <script language="javascript" src="/web-files/bootstrap/js/bootstrap-tooltip.js"></script>
        <!-- Add fancyBox -->
        <link rel="stylesheet" href="/web-files/fancyapps-fancyBox-18d1712/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
        <script type="text/javascript" src="/web-files/fancyapps-fancyBox-18d1712/source/jquery.fancybox.pack.js?v=2.1.5"></script>
        <!-- Upload -->
        <script type="text/javascript" src="/web-files/js/jquery.uploadfile.js"></script>
        <link rel="stylesheet" href="/web-files/css/uploadfile.css" type="text/css" media="screen" />
        <!-- JQuery UI -->
        <script type="text/javascript" src="/web-files/jquery-ui-1.11.1.custom/jquery-ui.js"></script>
        <link rel="stylesheet" href="/web-files/jquery-ui-1.11.1.custom/jquery-ui.css"/>
        <link rel="stylesheet" href="/web-files/jquery-ui-1.11.1.custom/jquery-ui.structure.css"/>
        <link rel="stylesheet" href="/web-files/jquery-ui-1.11.1.custom/jquery-ui.theme.css"/>
        <!-- Drag -->
        <script type="text/javascript" src="/web-files/js/jquery-sortable.js"></script>
        <!-- PLUGIN CROP -->
        <link rel="stylesheet" href="/web-files/crop/cropper.css" type="text/css" media="screen" />
        <script type="text/javascript" src="/web-files/crop/cropper.js"></script>
        <script type="text/javascript" src="/web-files/js/highlight.min.js"></script>
        <script type="text/javascript" src="/web-files/js/jquery.tablednd.0.7.js"></script>

        <script type="text/javascript">
            if (window.hljs) {
                hljs.tabReplace = '    ';
                hljs.initHighlightingOnLoad();
            }
        </script>

        <style>
            .box-login{
                margin-top: 25%;
            }



    

            .navbar-form .search-input{
                width: 250px;
            }

            .navbar-default {
                border: none !important; 
            }

            .x-label{
                color: #5d5d5d;
                padding: 1px 0;
            }

            .ico-default-star, .ico-default-eye, .ico-default-trash, .ico-default-photo, .ico-default-edit{
                display: inline-block;
                width: 25px;
                height: 21px;
                border-radius: 27%;
                background: #e9c92e;
                cursor: pointer;
                color: #fff;
                text-align:  center;

            }

            .ico-default-trash{
                background: #961a1d;
            }

            .ico-default-photo{
                background: #2ac364;
            }

            .ico-default-edit{
                background: #18CAEC;
            }

            .ico-default-star a, .ico-default-eye a, .ico-default-trash a, .ico-default-photo a, .ico-default-edit a{ 
                color: #fff;
                text-decoration: none;
            } 

            .ico-default-star a:hover, .ico-default-eye a:hover, .ico-default-trash a:hover, .ico-default-photo a:hover{ 
                color: #fff;
                text-decoration: none;
            } 

            .ico-default-star.desative, .ico-default-eye.desative, .ico-default-trash.desative, .ico-default-photo.desative{
                background: #ad2138;
            }

            .hidex{
                max-height: 0;
                overflow: hidden;
                box-shadow: none;
                opacity: 0;
                margin-bottom: 0;
            }
            
            .myDragClass{
                background-color: #ecf6fc;
            } 
            .myDragClass.active{
                background-color: #333;
            }
        </style>

    </head>
    <body>

<div class="sidebar">
    <nav class="sidebar-nav">
    <ul class="nav">
        <li  class="" ><a href="/pt/admin/welcome">Home</a></li>
    </ul>
    <hr>
    <h4 class="heading">Páginas</h4>
    <ul class="nav">
        <li  class="" ><a href="/pt/html/empresa">Empresa</a></li>
        <li  class="" ><a href="/pt/html/zero_km">Zero KM</a></li>
        <li  class="" ><a href="/pt/html/seminovos">Seminovos</a></li>
        <li  class="" ><a href="/pt/html/financiamento">Financie</a></li>
        <li  class="" ><a href="/pt/html/vender_carro">Venda seu carro</a></li>
    </ul>
    <hr>
    <h4 class="heading">Veículos</h4>
    <ul class="nav">
        <li  class="active" ><a href="/pt/veiculos/veiculos_lista">Lista</a></li>
    </ul>
    <hr>
    <h4 class="heading">Serviços</h4>
    <ul class="nav">
        <li  class="" ><a href="/pt/admin/alterar_senha">Alterar senha</a></li>
        <li  class="" ><a href="/pt/admin/logout">Sair</a></li>
    </ul>
</nav>
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="pull-left">
                <img class="area-restrita img-responsive center-block" src="/web-files/img/logo.png" alt="" border="0" title="" />
            </div>
            <!--
            <form class="navbar-form navbar-right" role="search">
    <div class="form-group">
        <input type="text" class="search-input form-control" placeholder="Pesquisa">
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
    </div>
</form>



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
                    <div class="auto-price">R$ <span class="view-preco">52.900,00</span></div>
                    <div class="auto-title view-nome">HONDA CITY 2012</div>
                    <div class="auto-descricao view-linha_1">Lorem ipsum dolor sit amet, consectetur</div>
                    <div class="auto-descricao view-linha_2">Lorem ipsum dolor sit amet, consectetur</div>
                    <div class="auto-descricao view-linha_3">Lorem ipsum dolor sit amet, consectetur</div>
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

            <a href="/pt/veiculos/veiculos_lista" class="btn btn-default navbar-btn"><i class="fa fa-reply">&nbsp</i> Voltar</a>
            <a id="m-btn" href='#single_2' class="btn btn-default navbar-btn fancybox"><i class="fa fa-photo"></i> Enviar fotos</a>
            <div id="single_2" style="display: none; width: 530px; height: 500px;">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div id="mulitplefileuploader">Upload</div>
                        <input type="hidden" id="url_amigavel" value="honda-city-2012"/>
                    </div>
                    <div class="panel-body">
                        <div id="status"></div>
                    </div>
                </div>



            </div>

            <div class="panel-default">

                <table class='table' id="table-1" cellspacing="0" cellpadding="2">
                     
                    
                                                                                                                                                                                                                                 
                              
                                                                                                                                                                                                                                                             
                              
                                                                                                                                                                                                                                                            
                              
                                                                                                                                                                                                                                                             
                              
                                                                                                                                                                                                                                                             
                              
                                                                                                                                                                                                                                                             
                              
                                                                                                                                                                                                                                                             
                              
                                                                                                                                                                                                                                                            
                              
                                                                                                                                                                                                                                                            
                              
                                                                                                                                                                                                                                                            
                              
                                                                                                                                                                                                                                                            
                                                                                                                                                                      
                              
                                                                                                                                                                                                                                                            
                              
                                                                                                                                                                                                                                                                                                                                                               
                                
                              
                                                    
                        
                        <tr id="6727b82fe735718e4c7684a7dac4aaa2" style="border-radius: 0;">
                            <td>    
                                <img src="/web-files/upload/B7ED1B796A0C12651A9CFE47FB0F31FF/871CF84B7296622A07797CBAEDA742B0.jpg" alt="8814385726.jpg" data-toggle="tooltip" title="8814385726.jpg" border="0" style="width: 150px;"/>
                            </td>    
                            <td>

                                <!--<span style="display: inline-block; margin-right: 10px; margin-left: 10px; cursor: move; float: left;">
                                <img src="/web-files/img/move.png" alt="Drag" data-toggle="Drag" title="Drag" border="0" style="width: 55px;"/>
                            </span>-->


                                <span style="display: inline-block;">
                                    <strong>Nome: </strong>8814385726.jpg<br/>
                                    <strong>Tipo: </strong> image/jpeg<br/>
                                    <strong>Formato: </strong>.jpg<br/>
                                    <strong>Abrir imagem em uma nova janela: </strong><a href="/web-files/upload/B7ED1B796A0C12651A9CFE47FB0F31FF/871CF84B7296622A07797CBAEDA742B0.jpg" target="_blank" class="fa fa-camera"></a><br/>
                                </span>
                            </td>    
                            
                            <td>
                                <span style="display: inline-block; margin-right: 10px">
                                    
                                    <span class="ico-default-star " data-toggle="tooltip" title="Destaque"><a href="/pt/veiculos/foto_destaque/url/honda-city-2012/codfoto/6727b82fe735718e4c7684a7dac4aaa2"><i class="fa fa-star"></i></a></span>
                                    <span class="ico-default-eye " data-toggle="tooltip" title="Status"><a href="/pt/veiculos/foto_status/status/0/url/honda-city-2012/codfoto/6727b82fe735718e4c7684a7dac4aaa2"><i class="fa fa-eye"></i></a></span>
                                    <span class="ico-default-edit" data-toggle="tooltip" title="Crop"><a href="#crop_1" class="fancybox-crop" data-id="1" onclick="javascript:getCrop('crop_1');"><i class="fa fa-crop"></i></a></span>
                                    <div id="crop_1" style="display: none !important; display: inline-block;">
                                        <form method='post' id='FormSendImage_1' onsubmit='return false' enctype='multipart/form-data'>   

                                            <input type="hidden" id="crop_1_dataX1_1"/>
                                            <input type="hidden" id="crop_1_dataY1_1"/>
                                            <input type="hidden" id="crop_1_dataX2_1"/>
                                            <input type="hidden" id="crop_1_dataY2_1"/>
                                            <input type="hidden" id="crop_1_dataWidth_1" />
                                            <input type="hidden" id="crop_1_dataHeight_1"/>

                                            <input type="hidden" id="crop_1_dataX1_2"/>
                                            <input type="hidden" id="crop_1_dataY1_2"/>
                                            <input type="hidden" id="crop_1_dataX2_2"/>
                                            <input type="hidden" id="crop_1_dataY2_2"/>
                                            <input type="hidden" id="crop_1_dataWidth_2" />
                                            <input type="hidden" id="crop_1_dataHeight_2"/>

                                            <input type="hidden" id="crop_1_dataX1_3"/>
                                            <input type="hidden" id="crop_1_dataY1_3"/>
                                            <input type="hidden" id="crop_1_dataX2_3"/>
                                            <input type="hidden" id="crop_1_dataY2_3"/>
                                            <input type="hidden" id="crop_1_dataWidth_3" />
                                            <input type="hidden" id="crop_1_dataHeight_3"/>


                                            <div class="panel panel-default show_crop_1_1">
                                                <div class="panel-body pn1_crop_1">
                                                    <img class='crop_1_preview_1' src='/web-files/upload/B7ED1B796A0C12651A9CFE47FB0F31FF/871CF84B7296622A07797CBAEDA742B0.jpg' alt='Preview' title='Preview' border='0'/>
                                                </div>
                                                <br/>
                                                <div class="panel-footer" style="text-align: right;">
                                                    <div class="row">
                                                        <div class="col-md-6" style="text-align: left;"> <strong>Foto: </strong> Destaque. <br/> <br/> 
                                                            <div class="myload_crop_1"></div>
                                                        </div>
                                                        <div class="col-md-6" style="text-align: right;">
                                                            <a id="m-btn" onclick="release_crop('crop_1', 'crop_1_preview_1', '6727b82fe735718e4c7684a7dac4aaa2', 1)" class="btn btn-default navbar-btn"><i class="fa fa-crop"></i> Crop</a>
                                                            <ul class="pager">
                                                                <li class="next"><a href="#"  id="crop_1_click" onclick="choose_crop('crop_1')">Próximo &rarr;</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>   


                                            <div class="panel panel-default show_crop_1_2 hidex">  
                                                <div class="panel-body pn2_crop_1">
                                                    <img class='crop_1_preview_2' src='/web-files/upload/B7ED1B796A0C12651A9CFE47FB0F31FF/871CF84B7296622A07797CBAEDA742B0.jpg' alt='Preview' title='Preview' border='0'/>
                                                </div>
                                                <br/>
                                                <div class="panel-footer" style="text-align: right;">
                                                    <div class="row">
                                                        <div class="col-md-6" style="text-align: left;"> <strong>Foto: </strong> Avatar.  <br/> <br/> 
                                                            <div class="myload_crop_1"></div>
                                                        </div>
                                                        <div class="col-md-6" style="text-align: right;">
                                                            <a id="m-btn" onclick="release_crop('crop_1', 'crop_1_preview_2', '6727b82fe735718e4c7684a7dac4aaa2', 2)" class="btn btn-default navbar-btn"><i class="fa fa-crop"></i> Crop</a>
                                                            <ul class="pager">
                                                                <li class="next"><a href="#"  onclick="choose_crop('crop_1')">Próximo &rarr;</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>                                    

                                    </div>                 
                                    <span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><a onclick="delete_foto('/pt/veiculos/delete_foto/url/honda-city-2012/codfoto/6727b82fe735718e4c7684a7dac4aaa2')"><i class="fa fa-trash-o"></i></a></span>                                

                                </span>    
                            </td>    
                        </tr>


                        
                    
                                                                                                                                                                                                                                 
                              
                                                                                                                                                                                                                                                             
                              
                                                                                                                                                                                                                                                            
                              
                                                                                                                                                                                                                                                             
                              
                                                                                                                                                                                                                                                             
                              
                                                                                                                                                                                                                                                             
                              
                                                                                                                                                                                                                                                             
                              
                                                                                                                                                                                                                                                            
                              
                                                                                                                                                                                                                                                            
                              
                                                                                                                                                                                                                                                            
                              
                                                                                                                                                                                                                                                            
                                                                                                                                                                      
                              
                                                                                                                                                                                                                                                            
                              
                                                                                                                                                                                                                                                                                                                                                               
                                
                              
                                                    
                        
                        <tr id="8b19dff40aaee9764cedc1554c082589" style="border-radius: 0;">
                            <td>    
                                <img src="/web-files/upload/6D095EBF9DCFF21E484A05F83EDCBF9E/5800F2943CE0970A88C88AAF5FF3D483.jpg" alt="toyota-corola-xei-2010_MLB-F-3869504920_022013.jpg" data-toggle="tooltip" title="toyota-corola-xei-2010_MLB-F-3869504920_022013.jpg" border="0" style="width: 150px;"/>
                            </td>    
                            <td>

                                <!--<span style="display: inline-block; margin-right: 10px; margin-left: 10px; cursor: move; float: left;">
                                <img src="/web-files/img/move.png" alt="Drag" data-toggle="Drag" title="Drag" border="0" style="width: 55px;"/>
                            </span>-->


                                <span style="display: inline-block;">
                                    <strong>Nome: </strong>toyota-corola-xei-2010_MLB-F-3869504920_022013.jpg<br/>
                                    <strong>Tipo: </strong> image/jpeg<br/>
                                    <strong>Formato: </strong>.jpg<br/>
                                    <strong>Abrir imagem em uma nova janela: </strong><a href="/web-files/upload/6D095EBF9DCFF21E484A05F83EDCBF9E/5800F2943CE0970A88C88AAF5FF3D483.jpg" target="_blank" class="fa fa-camera"></a><br/>
                                </span>
                            </td>    
                            
                            <td>
                                <span style="display: inline-block; margin-right: 10px">
                                    
                                    <span class="ico-default-star " data-toggle="tooltip" title="Destaque"><a href="/pt/veiculos/foto_destaque/url/honda-city-2012/codfoto/8b19dff40aaee9764cedc1554c082589"><i class="fa fa-star"></i></a></span>
                                    <span class="ico-default-eye " data-toggle="tooltip" title="Status"><a href="/pt/veiculos/foto_status/status/0/url/honda-city-2012/codfoto/8b19dff40aaee9764cedc1554c082589"><i class="fa fa-eye"></i></a></span>
                                    <span class="ico-default-edit" data-toggle="tooltip" title="Crop"><a href="#crop_2" class="fancybox-crop" data-id="2" onclick="javascript:getCrop('crop_2');"><i class="fa fa-crop"></i></a></span>
                                    <div id="crop_2" style="display: none !important; display: inline-block;">
                                        <form method='post' id='FormSendImage_2' onsubmit='return false' enctype='multipart/form-data'>   

                                            <input type="hidden" id="crop_2_dataX1_1"/>
                                            <input type="hidden" id="crop_2_dataY1_1"/>
                                            <input type="hidden" id="crop_2_dataX2_1"/>
                                            <input type="hidden" id="crop_2_dataY2_1"/>
                                            <input type="hidden" id="crop_2_dataWidth_1" />
                                            <input type="hidden" id="crop_2_dataHeight_1"/>

                                            <input type="hidden" id="crop_2_dataX1_2"/>
                                            <input type="hidden" id="crop_2_dataY1_2"/>
                                            <input type="hidden" id="crop_2_dataX2_2"/>
                                            <input type="hidden" id="crop_2_dataY2_2"/>
                                            <input type="hidden" id="crop_2_dataWidth_2" />
                                            <input type="hidden" id="crop_2_dataHeight_2"/>

                                            <input type="hidden" id="crop_2_dataX1_3"/>
                                            <input type="hidden" id="crop_2_dataY1_3"/>
                                            <input type="hidden" id="crop_2_dataX2_3"/>
                                            <input type="hidden" id="crop_2_dataY2_3"/>
                                            <input type="hidden" id="crop_2_dataWidth_3" />
                                            <input type="hidden" id="crop_2_dataHeight_3"/>


                                            <div class="panel panel-default show_crop_2_1">
                                                <div class="panel-body pn1_crop_2">
                                                    <img class='crop_2_preview_1' src='/web-files/upload/6D095EBF9DCFF21E484A05F83EDCBF9E/5800F2943CE0970A88C88AAF5FF3D483.jpg' alt='Preview' title='Preview' border='0'/>
                                                </div>
                                                <br/>
                                                <div class="panel-footer" style="text-align: right;">
                                                    <div class="row">
                                                        <div class="col-md-6" style="text-align: left;"> <strong>Foto: </strong> Destaque. <br/> <br/> 
                                                            <div class="myload_crop_2"></div>
                                                        </div>
                                                        <div class="col-md-6" style="text-align: right;">
                                                            <a id="m-btn" onclick="release_crop('crop_2', 'crop_2_preview_1', '8b19dff40aaee9764cedc1554c082589', 1)" class="btn btn-default navbar-btn"><i class="fa fa-crop"></i> Crop</a>
                                                            <ul class="pager">
                                                                <li class="next"><a href="#"  id="crop_2_click" onclick="choose_crop('crop_2')">Próximo &rarr;</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>   


                                            <div class="panel panel-default show_crop_2_2 hidex">  
                                                <div class="panel-body pn2_crop_2">
                                                    <img class='crop_2_preview_2' src='/web-files/upload/6D095EBF9DCFF21E484A05F83EDCBF9E/5800F2943CE0970A88C88AAF5FF3D483.jpg' alt='Preview' title='Preview' border='0'/>
                                                </div>
                                                <br/>
                                                <div class="panel-footer" style="text-align: right;">
                                                    <div class="row">
                                                        <div class="col-md-6" style="text-align: left;"> <strong>Foto: </strong> Avatar.  <br/> <br/> 
                                                            <div class="myload_crop_2"></div>
                                                        </div>
                                                        <div class="col-md-6" style="text-align: right;">
                                                            <a id="m-btn" onclick="release_crop('crop_2', 'crop_2_preview_2', '8b19dff40aaee9764cedc1554c082589', 2)" class="btn btn-default navbar-btn"><i class="fa fa-crop"></i> Crop</a>
                                                            <ul class="pager">
                                                                <li class="next"><a href="#"  onclick="choose_crop('crop_2')">Próximo &rarr;</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>                                    

                                    </div>                 
                                    <span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><a onclick="delete_foto('/pt/veiculos/delete_foto/url/honda-city-2012/codfoto/8b19dff40aaee9764cedc1554c082589')"><i class="fa fa-trash-o"></i></a></span>                                

                                </span>    
                            </td>    
                        </tr>


                        
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

<script>
    $(function() {
        $("[data-toggle='tooltip']").tooltip();
    });
</script>
</body>
</html><?php }} ?>
