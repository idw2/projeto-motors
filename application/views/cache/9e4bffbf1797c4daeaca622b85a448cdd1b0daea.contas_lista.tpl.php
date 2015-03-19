<?php /*%%SmartyHeaderCode:17765122975501ff3cc4b9b0-43022122%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e4bffbf1797c4daeaca622b85a448cdd1b0daea' => 
    array (
      0 => '/home/dlab34/motors.designlab.com.br/application/views/contas_lista.tpl',
      1 => 1426094262,
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
    '3d5fe7ee2b2154d82f61d907bd1a0e4042f5564a' => 
    array (
      0 => '/home/dlab34/motors.designlab.com.br/application/views/search.tpl',
      1 => 1426173092,
      2 => 'file',
    ),
    'a72f631df4daa325457a5c045fb43a10f84f5728' => 
    array (
      0 => '/home/dlab34/motors.designlab.com.br/application/views/footer.tpl',
      1 => 1426096475,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17765122975501ff3cc4b9b0-43022122',
  'variables' => 
  array (
    'language' => 0,
    'contas' => 0,
    'conta' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5501ff3e77c491_21255409',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5501ff3e77c491_21255409')) {function content_5501ff3e77c491_21255409($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>DesignLab - Motors | Lista de Contas e Usuários</title>

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
        <a class="navbar-brand" href="/pt/admin/welcome">designlab@designlab.com.br</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                                    <li><a href="/pt/admin/meus-dados/8ad75cb3cbab9f97652f34423209818f"><i class="fa fa-user fa-fw"></i> My Data</a></li>
                          
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

                



                                    <li class="sidebar-search">
    <form method="post" name="PesquisaBar">
        <div class="input-group custom-search-form">
            <input type="text" class="form-control" placeholder="Search">
            <span class="input-group-btn">
                <button class="btn btn-default" type="submit">
                    <i class="fa fa-search"></i>
                </button>
            </span>
        </div>
    </form>
    <!-- /input-group -->
</li>
                
                                    <li  class="active">
                        <a href="/pt/contas"><i class="fa fa-users fa-fw"></i> Account List</a>
                    </li>
                
                                    <li ><a href="/pt/usuarios"><i class="fa fa-user fa-fw"></i> Member List</a></li>
                                
                <li >
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

    <h4 class="heading">Contas</h4>
    <ul class="nav">
        <li  class="active" ><a href="/pt/contas">Lista</a></li>
    </ul>
    <hr>
<h4 class="heading">Veículos</h4>
<ul class="nav">
    <li  class="" ><a href="/pt/veiculos/veiculos-lista">Lista</a></li>
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
<li  class="" ><a href="/pt/admin/meus-dados/8ad75cb3cbab9f97652f34423209818f">Meus Dados</a></li>
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
            <h1 class="page-header">Lista de Contas</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">

                            <a href="/pt/contas/adicionar" class="btn btn-default navbar-btn"><i class="fa fa-user"></i> Criar Conta</a>

                            <table class='table'>

                                <thead>
                                <th>Data de Cadastro</th>
                                <th>Nome / Site</th>
                                <th>ID</th>
                                <th>E-mail</th>
                                <th>CPF / CNPJ</th>
                                <th>Ações</th>
                                </thead>

                                 
                                
                                    <tr id="conta_BF343F27A751F42BAA982A08B0177864" >

                                        <td>07/03/2015 - 10h56</td>
                                        <td>
                                            Lunixx Auto Sales
                                            <br>
                                            <span style="font-size: 11px;">http://auto.designlab.com.br</span>
                                        </td>
                                        <td>PL1</td>
                                        <td>paulolyra@me.com</td>
                                        <td>
                                                                                                                                                120.401.119-21
                                                                                                                                    </td>
                                        <td>
                                            <table>
                                                <tr>       
                                                                                                            <td><a style="cursor: pointer;" onclick="javascript:cStatusUpdate('status_BF343F27A751F42BAA982A08B0177864', 'pt/contas/status/0/BF343F27A751F42BAA982A08B0177864', 'BF343F27A751F42BAA982A08B0177864');"><span class="ico-default-eye-BF343F27A751F42BAA982A08B0177864 ico-default-eye " rel="tooltip" title="Status do Cliente"><i class="fa fa-eye"></i></span></a>&nbsp;</td>
                                                        <td><a style="cursor: pointer;" onclick="javascript:cSuspensoUpdate('suspenso_BF343F27A751F42BAA982A08B0177864', 'pt/contas/suspender/1/BF343F27A751F42BAA982A08B0177864', 'BF343F27A751F42BAA982A08B0177864');"><span class="ico-default-suspenso-BF343F27A751F42BAA982A08B0177864 ico-default-suspenso desative" rel="tooltip" title="Suspender Cliente"><i class="fa fa-pause"></i></span></a>&nbsp;</td>
                                                        <td><a style="cursor: pointer;" onclick="javascript:cBloqueadoUpdate('bloqueado_BF343F27A751F42BAA982A08B0177864', 'pt/contas/bloquear/1/BF343F27A751F42BAA982A08B0177864', 'BF343F27A751F42BAA982A08B0177864');"><span class="ico-default-bloqueado-BF343F27A751F42BAA982A08B0177864 ico-default-bloqueado desative" rel="tooltip" title="Bloquear Cliente"><i class="fa fa-ban"></i></span></a>&nbsp;</td>
                                                                
                                                    <td><a href="/pt/contas/editar/bf343f27a751f42baa982a08b0177864"><span class="ico-default-edit" rel="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>&nbsp;</td>
                                                    <td><a href="/pt/html/configuracao/http://auto.designlab.com.br"><span class="ico-default-configuracao" rel="tooltip" title="Configuração"><i class="fa fa-gear"></i></span></a>&nbsp;</td>
                                                    <td><a href="/pt/html/logomarca/http://auto.designlab.com.br"><span class="ico-default-logomarca" rel="tooltip" title="Logomarca"><i class="fa fa-picture-o"></i></span></a>&nbsp;</td>
                                                    <td><a href="/pt/html/a-empresa/http://auto.designlab.com.br"><span class="ico-default-a-empresa" rel="tooltip" title="A empresa"><i class="fa fa-wrench"></i></span></a>&nbsp;</td>
                                                    <td><a href="/pt/html/onde-estamos/http://auto.designlab.com.br"><span class="ico-default-onde-estamos" rel="tooltip" title="Onde estamos"><i class="fa fa-map-marker"></i></span></a>&nbsp;</td>

                                                    
                                                                                                            <td><a style="cursor: pointer;" onclick="javascript:cDeleteUpdate('delete_BF343F27A751F42BAA982A08B0177864', 'pt/contas/delete/BF343F27A751F42BAA982A08B0177864', 'BF343F27A751F42BAA982A08B0177864');"><span class="ico-default-trash" rel="tooltip" title="Excluir Cliente"><i class="fa fa-trash-o"></i></span></a>&nbsp;</td>    
                                                                
                                                </tr>
                                                <tr>
                                                    <td id="status_BF343F27A751F42BAA982A08B0177864" style="height: 35px"></td>
                                                    <td id="suspenso_BF343F27A751F42BAA982A08B0177864"></td>
                                                    <td id="bloqueado_BF343F27A751F42BAA982A08B0177864"></td>
                                                    <td></td>
                                                    <td id="delete_BF343F27A751F42BAA982A08B0177864"></td>
                                                </tr>
                                            </table>
                                        </td>

                                    </tr>
                                    
                                
                                    <tr id="conta_8AD75CB3CBAB9F97652F34423209818F" >

                                        <td>06/01/2015 - 11h32</td>
                                        <td>
                                            Designlab
                                            <br>
                                            <span style="font-size: 11px;">http://www.designlab.com.br</span>
                                        </td>
                                        <td>D1</td>
                                        <td>designlab@designlab.com.br</td>
                                        <td>
                                                                                                                                                13.799.207/0001-10
                                                                                                                                    </td>
                                        <td>
                                            <table>
                                                <tr>       
                                                    
                                                    <td><a href="/pt/contas/editar/8ad75cb3cbab9f97652f34423209818f"><span class="ico-default-edit" rel="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>&nbsp;</td>
                                                    <td><a href="/pt/html/configuracao/http://www.designlab.com.br"><span class="ico-default-configuracao" rel="tooltip" title="Configuração"><i class="fa fa-gear"></i></span></a>&nbsp;</td>
                                                    <td><a href="/pt/html/logomarca/http://www.designlab.com.br"><span class="ico-default-logomarca" rel="tooltip" title="Logomarca"><i class="fa fa-picture-o"></i></span></a>&nbsp;</td>
                                                    <td><a href="/pt/html/a-empresa/http://www.designlab.com.br"><span class="ico-default-a-empresa" rel="tooltip" title="A empresa"><i class="fa fa-wrench"></i></span></a>&nbsp;</td>
                                                    <td><a href="/pt/html/onde-estamos/http://www.designlab.com.br"><span class="ico-default-onde-estamos" rel="tooltip" title="Onde estamos"><i class="fa fa-map-marker"></i></span></a>&nbsp;</td>

                                                    
                                                    
                                                </tr>
                                                <tr>
                                                    <td id="status_8AD75CB3CBAB9F97652F34423209818F" style="height: 35px"></td>
                                                    <td id="suspenso_8AD75CB3CBAB9F97652F34423209818F"></td>
                                                    <td id="bloqueado_8AD75CB3CBAB9F97652F34423209818F"></td>
                                                    <td></td>
                                                    <td id="delete_8AD75CB3CBAB9F97652F34423209818F"></td>
                                                </tr>
                                            </table>
                                        </td>

                                    </tr>
                                    
                                
                            </table>

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
<?php }} ?>
