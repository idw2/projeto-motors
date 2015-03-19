<?php /*%%SmartyHeaderCode:23292988455020927ec5454-19551403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '979c36ae97922cba2add256e6ae9700f138c72bd' => 
    array (
      0 => '/home/dlab34/motors.designlab.com.br/application/views/fotos.tpl',
      1 => 1426173857,
      2 => 'file',
    ),
    'cfff585caac15c6021ec752aed3dc0e6d9bcccd2' => 
    array (
      0 => '/home/dlab34/motors.designlab.com.br/application/views/header.tpl',
      1 => 1426096072,
      2 => 'file',
    ),
    '268b9b5027e6f20822dd9018df4a27668902fb95' => 
    array (
      0 => '/home/dlab34/motors.designlab.com.br/application/views/navbar.tpl',
      1 => 1426173403,
      2 => 'file',
    ),
    'f61d33cad681b2395a1dc124ad3a08f731e2df75' => 
    array (
      0 => '/home/dlab34/motors.designlab.com.br/application/views/logo.tpl',
      1 => 1426090313,
      2 => 'file',
    ),
    'a72f631df4daa325457a5c045fb43a10f84f5728' => 
    array (
      0 => '/home/dlab34/motors.designlab.com.br/application/views/footer.tpl',
      1 => 1426096475,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23292988455020927ec5454-19551403',
  'variables' => 
  array (
    'foto_destaque' => 0,
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
    'i' => 0,
    'eye' => 0,
    'stt' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_550209287b1e60_47773744',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550209287b1e60_47773744')) {function content_550209287b1e60_47773744($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>DesignLab - Motors | Lista de fotos</title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <link rel="icon" type="image/vnd.microsoft.icon" href="/web-files/img/favicon.ico"/>
        <link rel="shortcut icon" type="image/x-icon" href="/web-files/img/favicon.ico"/>
        <link rel="stylesheet" type="text/css" href="/web-files/font-awesome-4.1.0/css/font-awesome.css">
        <link rel="stylesheet" href="/web-files/css/material-design-iconic-font.min.css"/>
        <link rel="stylesheet" href="/web-files/bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" href="/web-files/bootstrap/css/bootstrap-theme.css"/>		
        <link rel="stylesheet" href="/web-files/css/docs.min.css"/>
        
        <link rel="stylesheet" href="/web-files/css/uploadfile.css"/>

        <!-- MetisMenu CSS -->
        <link href="/application/templates/startbootstrap-sb-admin-2-1.0.5/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="/application/templates/startbootstrap-sb-admin-2-1.0.5/dist/css/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="/application/templates/startbootstrap-sb-admin-2-1.0.5/dist/css/sb-admin-2.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="/application/templates/startbootstrap-sb-admin-2-1.0.5/bower_components/morrisjs/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <!-- //COLOR PICKER BOOTSTRAP// -->
        <link href="/web-files/bootstrap-colorpicker-master/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <link href="/web-files/bootstrap-colorpicker-master/src/css/docs.css" rel="stylesheet">
        
        

        <style>
            
            

            



            .ico-default-configuracao, .ico-default-logomarca,  .ico-default-a-empresa, .ico-default-onde-estamos, .ico-default-suspenso, .ico-default-bloqueado, .ico-default-novidade, .ico-default-star, .ico-default-eye, .ico-default-trash, .ico-default-photo, .ico-default-edit{
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

            .ico-default-novidade{
                background: #7AA9B2;
            }

            .ico-default-suspenso{
                background: #6DB1BA;
            }

            .ico-default-bloqueado{
                background: #C89B9B;
            }
            
            .ico-default-configuracao{
                background: #8FB0CD;
            }
            .ico-default-logomarca{
                background: #B68FCD;
            }
            .ico-default-a-empresa{
                background: #8FCD9E;
            }
            .ico-default-onde-estamos{
                background: #1B1D1B;
            }

            .ico-default-suspenso a, .ico-default-bloqueado a, .ico-default-novidade a, .ico-default-star a, .ico-default-eye a, .ico-default-trash a, .ico-default-photo a, .ico-default-edit a{ 
                color: #fff;
                text-decoration: none;
            } 

            .ico-default-suspenso a:hover, .ico-default-bloqueado a:hover, .ico-default-novidade a:hover, .ico-default-star a:hover, .ico-default-eye a:hover, .ico-default-trash a:hover, .ico-default-photo a:hover{ 
                color: #fff;
                text-decoration: none;
            } 

            .ico-default-suspenso.desative, .ico-default-bloqueado.desative, .ico-default-novidade.desative, .ico-default-star.desative, .ico-default-eye.desative, .ico-default-trash.desative, .ico-default-photo.desative{
                background: #ad2138;
            }

            .hidex{
                max-height: 0;
                overflow: hidden;
                box-shadow: none;
                opacity: 0;
                margin-bottom: 0;
            }


        </style>

    </head>
    <body>
        <div id="wrapper">
            <!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/pt/admin/welcome">Username: thiago</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                      
                <li><a href="/pt/admin/alterar-senha"><i class="fa fa-key fa-fw"></i> Change Password</a></li>
                    
                <li class="divider"></li>
                <li><a href="/pt/admin/logout"><i class="fa fa-sign-out fa-fw"></i> Sign Out</a></li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">

                



                
                
                                
                <li  class="active">
                    <a href="/pt/veiculos/veiculos-lista"><i class="fa fa-automobile fa-fw"></i> Vehicle List</a>                    
                </li>

                
                
                
                
                
                
                
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>


<!--
<nav class="sidebar-nav">

    <div style="background: #fff; margin: 0 11px; padding: 32px; height: 98px;"><a href="/pt/html/logomarca"><span id="logo_default"><img class="area-restrita img-responsive center-block" src="/web-files/logomarcas/logo_default.png" alt="" border="0" title="" /></span></a></div>

    <hr>
    <ul class="nav">
        <li  class="" ><a href="/pt/admin/welcome">Home</a></li>
    </ul>
    <hr>

<h4 class="heading">Veículos</h4>
<ul class="nav">
    <li  class="active" ><a href="/pt/veiculos/veiculos-lista">Lista</a></li>
</ul>
<hr>
<h4 class="heading">Páginas</h4>
<ul class="nav">
    <li  class="" ><a href="/pt/html/empresa">A empresa</a></li>
    <li  class="" ><a href="/pt/html/onde-estamos">Onde estamos</a></li>
    <li  class="" ><a href="/pt/html/configuracao">Configuração</a></li>


</ul>
<hr>
<h4 class="heading">Serviços</h4>
<ul class="nav">
<li  class="" ><a href="/pt/admin/alterar-senha">Alterar senha</a></li>
<li  class="" ><a href="/pt/admin/meus-dados/bf343f27a751f42baa982a08b0177864">Meus Dados</a></li>
<li  class="" ><a href="/pt/admin/logout">Sair</a></li>
</ul>

<hr>

<div style="background: #fff; margin: 0 11px; padding: 32px;"><img class="area-restrita img-responsive center-block" src="/web-files/img/brand.png" alt="" border="0" title="" /></div>

<hr>
</nav>

-->

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Lista de Fotos e Preview</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">

                            <div>

                                                                    <div class="auto-img" style="height: 360px;"><img src="/web-files/upload/thumbs/E49C3899368D03226E022ABE378595E9/ED04407E510846E02C891A32E1E73236.jpg" alt="" border="0" title="" class="img-responsive"/></div>
                                     

                                <div style="height: 110px">   
                                    <div class="auto-price">R$ <span class="view-preco">159,00</span></div>
                                    <div class="auto-title view-nome">Uno Mille</div>
                                    <div class="auto-descricao view-linha_1"></div>
                                    <div class="auto-descricao view-linha_2"></div>
                                    <div class="auto-descricao view-linha_3"></div>
                                </div>
                                

                            </div>
                            <br/>

                            <a href="/pt/veiculos/veiculos-lista" class="btn btn-default navbar-btn"><i class="fa fa-reply">&nbsp</i> Voltar</a>
                            <a id="m-btn" href='#single_2' class="btn btn-default navbar-btn fancybox"><i class="fa fa-photo"></i> Enviar fotos</a>

                            <div id="single_2" style="display: none; width: 530px; height: 500px;">

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div id="mulitplefileuploader">Upload</div>
                                        <input type="hidden" id="url_amigavel" value="uno-mille-1"/>
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

                                <table class='table' cellspacing="0" cellpadding="2">
                                     
                                    
                                                                                                                                                                                                                                                                                                                                                                 
                                              
                                                                                                                                                                                                                                                                                                                                                                                                             
                                              
                                                                                                                                                                                                                                                                                                                                                                                                            
                                              
                                                                                                                                                                                                                                                                                                                                                                                                             
                                              
                                                                                                                                                                                                                                                                                                                                                                                                             
                                              
                                                                                                                                                                                                                                                                                                                                                                                                             
                                              
                                                                                                                                                                                                                                                                                                                                                                                                             
                                              
                                                                                                                                                                                                                                                                                                                                                                                                            
                                              
                                                                                                                                                                                                                                                                                                                                                                                                            
                                              
                                                                                                                                                                                                                                                                                                                                                                                                            
                                              
                                                                                                                                                                                                                                                                                                                                                                                                            
                                              
                                                                                                                                                                                                                                                                                                                                                                                                            
                                              
                                                                                                                                                                                                                                                                                                                                                                                                            
                                              
                                                                                                                                                                                                                                                                                                                                                                                                            
                                                                                                                                                                                                                                                      
                                              
                                                                                                                                                                                                                                                                                                                                                                                                            
                                              
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
                                                
                                              
                                                                                    
                                        

                                        <tr id="e68d0c359e5101eef93d138cd746d2fc" style="border-radius: 0;">
                                            <td>    
                                                <img src="/web-files/upload/CCADE87ACD06CFCB66FF9C7874736FC3/34C3CD6DA204FD88B6E04AD97864ACFE.jpg" alt="galeria (2).jpg" data-toggle="tooltip" title="galeria (2).jpg" border="0" style="width: 150px;"/>
                                            </td>    
                                            <td>

                                                <!--<span style="display: inline-block; margin-right: 10px; margin-left: 10px; cursor: move; float: left;">
                                                <img src="/web-files/img/move.png" alt="Drag" data-toggle="Drag" title="Drag" border="0" style="width: 55px;"/>
                                            </span>-->


                                                <span style="display: inline-block;">
                                                    <strong>Nome: </strong>galeria (2).jpg<br/>
                                                    <strong>Tipo: </strong> image/jpeg<br/>
                                                    <strong>Formato: </strong>.jpg<br/>
                                                    <strong>Abrir imagem em uma nova janela: </strong><a href="/web-files/upload/CCADE87ACD06CFCB66FF9C7874736FC3/34C3CD6DA204FD88B6E04AD97864ACFE.jpg" target="_blank" class="fa fa-camera"></a><br/>
                                                </span>
                                            </td>    

                                            <td>
                                                <span style="display: inline-block; margin-right: 10px">


                                                    <table>

                                                        <tr>
                                                            <td><span class="ico-default-star-e68d0c359e5101eef93d138cd746d2fc ico-default-star desative" rel="tooltip" title="Destaque"><a onclick="javascript:fDestaqueUpdate('destaque-1-e68d0c359e5101eef93d138cd746d2fc', 'pt/veiculos/foto-destaque/url/uno-mille-1/codfoto/e68d0c359e5101eef93d138cd746d2fc', 'e68d0c359e5101eef93d138cd746d2fc')"><i class="fa fa-star"></i></a></span>&nbsp;</td>
                                                            <td><span class="ico-default-eye-e68d0c359e5101eef93d138cd746d2fc ico-default-eye " rel="tooltip" title="Status"><a style="cursor: pointer;" onclick="javascript:fStatusUpdate('status-1-e68d0c359e5101eef93d138cd746d2fc', 'pt/veiculos/foto-status/status/0/url/uno-mille-1/codfoto/e68d0c359e5101eef93d138cd746d2fc', 'e68d0c359e5101eef93d138cd746d2fc')"><i class="fa fa-eye"></i></a></span>&nbsp;</td>
                                                            <td>
                                                                <span class="ico-default-edit" rel="tooltip" title="Crop"><a href="#crop_1" class="fancybox-crop" data-id="1" onclick="javascript:getCrop('crop_1');"><i class="fa fa-crop"></i></a></span>&nbsp;
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

                                                                        <div class="panel panel-default show_crop_1_2">  
                                                                            <div class="panel-body pn2_crop_1">
                                                                                <img class='crop_1_preview_2' src='/web-files/upload/CCADE87ACD06CFCB66FF9C7874736FC3/34C3CD6DA204FD88B6E04AD97864ACFE.jpg' alt='Preview' title='Preview' border='0'/>
                                                                            </div>
                                                                            <br/>
                                                                            <div class="panel-footer" style="text-align: right;">
                                                                                <div class="row">
                                                                                    <div class="col-md-6" style="text-align: left;"> <strong>Foto: </strong> Paisagem.  <br/> <br/> 
                                                                                        <div class="myload_crop_1"></div>
                                                                                    </div>
                                                                                    <div class="col-md-6" style="text-align: right;">
                                                                                        <span class="LoaderCrop hide"><img src="/web-files/img/Loader_small.gif" border="0" title="Carregando" alt="Carregando"/></span>
                                                                                        <a id="m-btn" onclick="release_crop('crop_1', 'crop_1_preview_2', 'e68d0c359e5101eef93d138cd746d2fc', 2, 'paisagem', 'crop_1')" class="btn btn-default navbar-btn"><i class="fa fa-crop"></i> Crop</a>

                                                                                        

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="panel panel-default show_crop_1_1 hidex">
                                                                            <div class="panel-body pn1_crop_1">
                                                                                <img class='crop_1_preview_1' src='/web-files/upload/CCADE87ACD06CFCB66FF9C7874736FC3/34C3CD6DA204FD88B6E04AD97864ACFE.jpg' alt='Preview' title='Preview' border='0'/>
                                                                            </div>
                                                                            <br/>
                                                                            <div class="panel-footer" style="text-align: right;">
                                                                                <div class="row">
                                                                                    <div class="col-md-6" style="text-align: left;"> <strong>Foto: </strong> Retrato. <br/> <br/> 
                                                                                        <div class="myload_crop_1"></div>
                                                                                    </div>
                                                                                    <div class="col-md-6" style="text-align: right;">
                                                                                        <span class="LoaderCrop hide"><img src="/web-files/img/Loader_small.gif" border="0" title="Carregando" alt="Carregando"/></span>
                                                                                        <a id="m-btn" onclick="release_crop('crop_1', 'crop_1_preview_1', 'e68d0c359e5101eef93d138cd746d2fc', 1, 'retrato', 'crop_1')" class="btn btn-default navbar-btn"><i class="fa fa-crop"></i> Crop</a>

                                                                                        

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>   




                                                                    </form>                                    

                                                                </div>  
                                                            </td>
                                                            <td><span class="ico-default-trash" rel="tooltip" title="Excluir"><a onclick="javascript:fDeleteUpdate('delete-1-e68d0c359e5101eef93d138cd746d2fc', 'pt/veiculos/delete-foto/url/uno-mille-1/codfoto/e68d0c359e5101eef93d138cd746d2fc', 'e68d0c359e5101eef93d138cd746d2fc')"><i class="fa fa-trash-o"></i></a></span></td>
                                                        </tr>
                                                        <tr>
                                                            <td id="destaque-1-e68d0c359e5101eef93d138cd746d2fc" style="height: 35px"><img src="/web-files/img/Loader_small.gif" border="0" title="Carregando" alt="Carregando" class="hide"/></td>
                                                            <td id="status-1-e68d0c359e5101eef93d138cd746d2fc"><img src="/web-files/img/Loader_small.gif" border="0" title="Carregando" alt="Carregando" class="hide"/></td>
                                                            <td id="crop-1-e68d0c359e5101eef93d138cd746d2fc"><img src="/web-files/img/Loader_small.gif" border="0" title="Carregando" alt="Carregando" class="hide"/></td>
                                                            <td id="delete-1-e68d0c359e5101eef93d138cd746d2fc"><img src="/web-files/img/Loader_small.gif" border="0" title="Carregando" alt="Carregando" class="hide"/></td>
                                                        </tr>
                                                    </table>

                                                </span>    
                                            </td>    
                                        </tr>


                                        
                                    
                                                                                                                                                                                                                                                                                                                                                                 
                                              
                                                                                                                                                                                                                                                                                                                                                                                                             
                                              
                                                                                                                                                                                                                                                                                                                                                                                                            
                                              
                                                                                                                                                                                                                                                                                                                                                                                                             
                                              
                                                                                                                                                                                                                                                                                                                                                                                                             
                                              
                                                                                                                                                                                                                                                                                                                                                                                                             
                                              
                                                                                                                                                                                                                                                                                                                                                                                                             
                                              
                                                                                                                                                                                                                                                                                                                                                                                                            
                                              
                                                                                                                                                                                                                                                                                                                                                                                                            
                                              
                                                                                                                                                                                                                                                                                                                                                                                                            
                                              
                                                                                                                                                                                                                                                                                                                                                                                                            
                                              
                                                                                                                                                                                                                                                                                                                                                                                                            
                                              
                                                                                                                                                                                                                                                                                                                                                                                                            
                                              
                                                                                                                                                                                                                                                                                                                                                                                                            
                                                                                                                                                                                                                                                      
                                              
                                                                                                                                                                                                                                                                                                                                                                                                            
                                              
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
                                                
                                              
                                                                                    
                                        

                                        <tr id="ecec281519957e31328443d0794ce68f" style="border-radius: 0;">
                                            <td>    
                                                <img src="/web-files/upload/133991507CD3FF6D58BFC61F9D9C8068/0AB07C3E5B697BD643D794604B08779E.jpg" alt="galeria.jpg" data-toggle="tooltip" title="galeria.jpg" border="0" style="width: 150px;"/>
                                            </td>    
                                            <td>

                                                <!--<span style="display: inline-block; margin-right: 10px; margin-left: 10px; cursor: move; float: left;">
                                                <img src="/web-files/img/move.png" alt="Drag" data-toggle="Drag" title="Drag" border="0" style="width: 55px;"/>
                                            </span>-->


                                                <span style="display: inline-block;">
                                                    <strong>Nome: </strong>galeria.jpg<br/>
                                                    <strong>Tipo: </strong> image/jpeg<br/>
                                                    <strong>Formato: </strong>.jpg<br/>
                                                    <strong>Abrir imagem em uma nova janela: </strong><a href="/web-files/upload/133991507CD3FF6D58BFC61F9D9C8068/0AB07C3E5B697BD643D794604B08779E.jpg" target="_blank" class="fa fa-camera"></a><br/>
                                                </span>
                                            </td>    

                                            <td>
                                                <span style="display: inline-block; margin-right: 10px">


                                                    <table>

                                                        <tr>
                                                            <td><span class="ico-default-star-ecec281519957e31328443d0794ce68f ico-default-star " rel="tooltip" title="Destaque"><a onclick="javascript:fDestaqueUpdate('destaque-2-ecec281519957e31328443d0794ce68f', 'pt/veiculos/foto-destaque/url/uno-mille-1/codfoto/ecec281519957e31328443d0794ce68f', 'ecec281519957e31328443d0794ce68f')"><i class="fa fa-star"></i></a></span>&nbsp;</td>
                                                            <td><span class="ico-default-eye-ecec281519957e31328443d0794ce68f ico-default-eye " rel="tooltip" title="Status"><a style="cursor: pointer;" onclick="javascript:fStatusUpdate('status-2-ecec281519957e31328443d0794ce68f', 'pt/veiculos/foto-status/status/0/url/uno-mille-1/codfoto/ecec281519957e31328443d0794ce68f', 'ecec281519957e31328443d0794ce68f')"><i class="fa fa-eye"></i></a></span>&nbsp;</td>
                                                            <td>
                                                                <span class="ico-default-edit" rel="tooltip" title="Crop"><a href="#crop_2" class="fancybox-crop" data-id="2" onclick="javascript:getCrop('crop_2');"><i class="fa fa-crop"></i></a></span>&nbsp;
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

                                                                        <div class="panel panel-default show_crop_2_2">  
                                                                            <div class="panel-body pn2_crop_2">
                                                                                <img class='crop_2_preview_2' src='/web-files/upload/133991507CD3FF6D58BFC61F9D9C8068/0AB07C3E5B697BD643D794604B08779E.jpg' alt='Preview' title='Preview' border='0'/>
                                                                            </div>
                                                                            <br/>
                                                                            <div class="panel-footer" style="text-align: right;">
                                                                                <div class="row">
                                                                                    <div class="col-md-6" style="text-align: left;"> <strong>Foto: </strong> Paisagem.  <br/> <br/> 
                                                                                        <div class="myload_crop_2"></div>
                                                                                    </div>
                                                                                    <div class="col-md-6" style="text-align: right;">
                                                                                        <span class="LoaderCrop hide"><img src="/web-files/img/Loader_small.gif" border="0" title="Carregando" alt="Carregando"/></span>
                                                                                        <a id="m-btn" onclick="release_crop('crop_2', 'crop_2_preview_2', 'ecec281519957e31328443d0794ce68f', 2, 'paisagem', 'crop_2')" class="btn btn-default navbar-btn"><i class="fa fa-crop"></i> Crop</a>

                                                                                        

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="panel panel-default show_crop_2_1 hidex">
                                                                            <div class="panel-body pn1_crop_2">
                                                                                <img class='crop_2_preview_1' src='/web-files/upload/133991507CD3FF6D58BFC61F9D9C8068/0AB07C3E5B697BD643D794604B08779E.jpg' alt='Preview' title='Preview' border='0'/>
                                                                            </div>
                                                                            <br/>
                                                                            <div class="panel-footer" style="text-align: right;">
                                                                                <div class="row">
                                                                                    <div class="col-md-6" style="text-align: left;"> <strong>Foto: </strong> Retrato. <br/> <br/> 
                                                                                        <div class="myload_crop_2"></div>
                                                                                    </div>
                                                                                    <div class="col-md-6" style="text-align: right;">
                                                                                        <span class="LoaderCrop hide"><img src="/web-files/img/Loader_small.gif" border="0" title="Carregando" alt="Carregando"/></span>
                                                                                        <a id="m-btn" onclick="release_crop('crop_2', 'crop_2_preview_1', 'ecec281519957e31328443d0794ce68f', 1, 'retrato', 'crop_2')" class="btn btn-default navbar-btn"><i class="fa fa-crop"></i> Crop</a>

                                                                                        

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>   




                                                                    </form>                                    

                                                                </div>  
                                                            </td>
                                                            <td><span class="ico-default-trash" rel="tooltip" title="Excluir"><a onclick="javascript:fDeleteUpdate('delete-2-ecec281519957e31328443d0794ce68f', 'pt/veiculos/delete-foto/url/uno-mille-1/codfoto/ecec281519957e31328443d0794ce68f', 'ecec281519957e31328443d0794ce68f')"><i class="fa fa-trash-o"></i></a></span></td>
                                                        </tr>
                                                        <tr>
                                                            <td id="destaque-2-ecec281519957e31328443d0794ce68f" style="height: 35px"><img src="/web-files/img/Loader_small.gif" border="0" title="Carregando" alt="Carregando" class="hide"/></td>
                                                            <td id="status-2-ecec281519957e31328443d0794ce68f"><img src="/web-files/img/Loader_small.gif" border="0" title="Carregando" alt="Carregando" class="hide"/></td>
                                                            <td id="crop-2-ecec281519957e31328443d0794ce68f"><img src="/web-files/img/Loader_small.gif" border="0" title="Carregando" alt="Carregando" class="hide"/></td>
                                                            <td id="delete-2-ecec281519957e31328443d0794ce68f"><img src="/web-files/img/Loader_small.gif" border="0" title="Carregando" alt="Carregando" class="hide"/></td>
                                                        </tr>
                                                    </table>

                                                </span>    
                                            </td>    
                                        </tr>


                                        
                                    
                                                                                                                                                                                                                                                                                                                                                                 
                                              
                                                                                                                                                                                                                                                                                                                                                                                                             
                                              
                                                                                                                                                                                                                                                                                                                                                                                                            
                                              
                                                                                                                                                                                                                                                                                                                                                                                                             
                                              
                                                                                                                                                                                                                                                                                                                                                                                                             
                                              
                                                                                                                                                                                                                                                                                                                                                                                                             
                                              
                                                                                                                                                                                                                                                                                                                                                                                                             
                                              
                                                                                                                                                                                                                                                                                                                                                                                                            
                                              
                                                                                                                                                                                                                                                                                                                                                                                                            
                                              
                                                                                                                                                                                                                                                                                                                                                                                                            
                                              
                                                                                                                                                                                                                                                                                                                                                                                                            
                                              
                                                                                                                                                                                                                                                                                                                                                                                                            
                                              
                                                                                                                                                                                                                                                                                                                                                                                                            
                                              
                                                                                                                                                                                                                                                                                                                                                                                                            
                                                                                                                                                                                                                                                      
                                              
                                                                                                                                                                                                                                                                                                                                                                                                            
                                              
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
                                                
                                              
                                                                                    
                                        

                                        <tr id="fd7f04f063e01ac8134ea2bbf7648099" style="border-radius: 0;">
                                            <td>    
                                                <img src="/web-files/upload/8BB01C2D8B9B18138BD24D246695FD3D/44507B5D84F81876E8A1794FF67C9499.jpg" alt="galeria (1).jpg" data-toggle="tooltip" title="galeria (1).jpg" border="0" style="width: 150px;"/>
                                            </td>    
                                            <td>

                                                <!--<span style="display: inline-block; margin-right: 10px; margin-left: 10px; cursor: move; float: left;">
                                                <img src="/web-files/img/move.png" alt="Drag" data-toggle="Drag" title="Drag" border="0" style="width: 55px;"/>
                                            </span>-->


                                                <span style="display: inline-block;">
                                                    <strong>Nome: </strong>galeria (1).jpg<br/>
                                                    <strong>Tipo: </strong> image/jpeg<br/>
                                                    <strong>Formato: </strong>.jpg<br/>
                                                    <strong>Abrir imagem em uma nova janela: </strong><a href="/web-files/upload/8BB01C2D8B9B18138BD24D246695FD3D/44507B5D84F81876E8A1794FF67C9499.jpg" target="_blank" class="fa fa-camera"></a><br/>
                                                </span>
                                            </td>    

                                            <td>
                                                <span style="display: inline-block; margin-right: 10px">


                                                    <table>

                                                        <tr>
                                                            <td><span class="ico-default-star-fd7f04f063e01ac8134ea2bbf7648099 ico-default-star desative" rel="tooltip" title="Destaque"><a onclick="javascript:fDestaqueUpdate('destaque-3-fd7f04f063e01ac8134ea2bbf7648099', 'pt/veiculos/foto-destaque/url/uno-mille-1/codfoto/fd7f04f063e01ac8134ea2bbf7648099', 'fd7f04f063e01ac8134ea2bbf7648099')"><i class="fa fa-star"></i></a></span>&nbsp;</td>
                                                            <td><span class="ico-default-eye-fd7f04f063e01ac8134ea2bbf7648099 ico-default-eye " rel="tooltip" title="Status"><a style="cursor: pointer;" onclick="javascript:fStatusUpdate('status-3-fd7f04f063e01ac8134ea2bbf7648099', 'pt/veiculos/foto-status/status/0/url/uno-mille-1/codfoto/fd7f04f063e01ac8134ea2bbf7648099', 'fd7f04f063e01ac8134ea2bbf7648099')"><i class="fa fa-eye"></i></a></span>&nbsp;</td>
                                                            <td>
                                                                <span class="ico-default-edit" rel="tooltip" title="Crop"><a href="#crop_3" class="fancybox-crop" data-id="3" onclick="javascript:getCrop('crop_3');"><i class="fa fa-crop"></i></a></span>&nbsp;
                                                                <div id="crop_3" style="display: none !important; display: inline-block;">
                                                                    <form method='post' id='FormSendImage_3' onsubmit='return false' enctype='multipart/form-data'>   

                                                                        <input type="hidden" id="crop_3_dataX1_1"/>
                                                                        <input type="hidden" id="crop_3_dataY1_1"/>
                                                                        <input type="hidden" id="crop_3_dataX2_1"/>
                                                                        <input type="hidden" id="crop_3_dataY2_1"/>
                                                                        <input type="hidden" id="crop_3_dataWidth_1" />
                                                                        <input type="hidden" id="crop_3_dataHeight_1"/>

                                                                        <input type="hidden" id="crop_3_dataX1_2"/>
                                                                        <input type="hidden" id="crop_3_dataY1_2"/>
                                                                        <input type="hidden" id="crop_3_dataX2_2"/>
                                                                        <input type="hidden" id="crop_3_dataY2_2"/>
                                                                        <input type="hidden" id="crop_3_dataWidth_2" />
                                                                        <input type="hidden" id="crop_3_dataHeight_2"/>

                                                                        <input type="hidden" id="crop_3_dataX1_3"/>
                                                                        <input type="hidden" id="crop_3_dataY1_3"/>
                                                                        <input type="hidden" id="crop_3_dataX2_3"/>
                                                                        <input type="hidden" id="crop_3_dataY2_3"/>
                                                                        <input type="hidden" id="crop_3_dataWidth_3" />
                                                                        <input type="hidden" id="crop_3_dataHeight_3"/>

                                                                        <div class="panel panel-default show_crop_3_2">  
                                                                            <div class="panel-body pn2_crop_3">
                                                                                <img class='crop_3_preview_2' src='/web-files/upload/8BB01C2D8B9B18138BD24D246695FD3D/44507B5D84F81876E8A1794FF67C9499.jpg' alt='Preview' title='Preview' border='0'/>
                                                                            </div>
                                                                            <br/>
                                                                            <div class="panel-footer" style="text-align: right;">
                                                                                <div class="row">
                                                                                    <div class="col-md-6" style="text-align: left;"> <strong>Foto: </strong> Paisagem.  <br/> <br/> 
                                                                                        <div class="myload_crop_3"></div>
                                                                                    </div>
                                                                                    <div class="col-md-6" style="text-align: right;">
                                                                                        <span class="LoaderCrop hide"><img src="/web-files/img/Loader_small.gif" border="0" title="Carregando" alt="Carregando"/></span>
                                                                                        <a id="m-btn" onclick="release_crop('crop_3', 'crop_3_preview_2', 'fd7f04f063e01ac8134ea2bbf7648099', 2, 'paisagem', 'crop_3')" class="btn btn-default navbar-btn"><i class="fa fa-crop"></i> Crop</a>

                                                                                        

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="panel panel-default show_crop_3_1 hidex">
                                                                            <div class="panel-body pn1_crop_3">
                                                                                <img class='crop_3_preview_1' src='/web-files/upload/8BB01C2D8B9B18138BD24D246695FD3D/44507B5D84F81876E8A1794FF67C9499.jpg' alt='Preview' title='Preview' border='0'/>
                                                                            </div>
                                                                            <br/>
                                                                            <div class="panel-footer" style="text-align: right;">
                                                                                <div class="row">
                                                                                    <div class="col-md-6" style="text-align: left;"> <strong>Foto: </strong> Retrato. <br/> <br/> 
                                                                                        <div class="myload_crop_3"></div>
                                                                                    </div>
                                                                                    <div class="col-md-6" style="text-align: right;">
                                                                                        <span class="LoaderCrop hide"><img src="/web-files/img/Loader_small.gif" border="0" title="Carregando" alt="Carregando"/></span>
                                                                                        <a id="m-btn" onclick="release_crop('crop_3', 'crop_3_preview_1', 'fd7f04f063e01ac8134ea2bbf7648099', 1, 'retrato', 'crop_3')" class="btn btn-default navbar-btn"><i class="fa fa-crop"></i> Crop</a>

                                                                                        

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>   




                                                                    </form>                                    

                                                                </div>  
                                                            </td>
                                                            <td><span class="ico-default-trash" rel="tooltip" title="Excluir"><a onclick="javascript:fDeleteUpdate('delete-3-fd7f04f063e01ac8134ea2bbf7648099', 'pt/veiculos/delete-foto/url/uno-mille-1/codfoto/fd7f04f063e01ac8134ea2bbf7648099', 'fd7f04f063e01ac8134ea2bbf7648099')"><i class="fa fa-trash-o"></i></a></span></td>
                                                        </tr>
                                                        <tr>
                                                            <td id="destaque-3-fd7f04f063e01ac8134ea2bbf7648099" style="height: 35px"><img src="/web-files/img/Loader_small.gif" border="0" title="Carregando" alt="Carregando" class="hide"/></td>
                                                            <td id="status-3-fd7f04f063e01ac8134ea2bbf7648099"><img src="/web-files/img/Loader_small.gif" border="0" title="Carregando" alt="Carregando" class="hide"/></td>
                                                            <td id="crop-3-fd7f04f063e01ac8134ea2bbf7648099"><img src="/web-files/img/Loader_small.gif" border="0" title="Carregando" alt="Carregando" class="hide"/></td>
                                                            <td id="delete-3-fd7f04f063e01ac8134ea2bbf7648099"><img src="/web-files/img/Loader_small.gif" border="0" title="Carregando" alt="Carregando" class="hide"/></td>
                                                        </tr>
                                                    </table>

                                                </span>    
                                            </td>    
                                        </tr>


                                        
                                                                    </table>

                                <pre id="serialize_output" class="hide">Item 1,Item 3,Item 2,Item 5,Item 4,Item 6</pre>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script language="javascript" src="/web-files/js/funcoes.js"></script>
<script language="javascript" src="/web-files/js/jquery-2.1.1.min.js"></script>

<script type="text/javascript" src="/web-files/bootstrap-colorpicker-master/src/js/colorpicker-color.js"></script>
<script type="text/javascript" src="/web-files/bootstrap-colorpicker-master/src/js/colorpicker.js"></script>


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
<script type="text/javascript" src="/web-files/animatescroll.js-master/animatescroll.js"></script>
<script type="text/javascript" src="/web-files/js/default.js"></script>


<script type="text/javascript">
    if (window.hljs) {
        hljs.tabReplace = '    ';
        hljs.initHighlightingOnLoad();
    }
</script>


</body>
</html>                

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

<?php }} ?>
