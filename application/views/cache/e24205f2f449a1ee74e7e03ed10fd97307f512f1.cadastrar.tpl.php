<?php /*%%SmartyHeaderCode:160619815550349afed4935-16345041%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e24205f2f449a1ee74e7e03ed10fd97307f512f1' => 
    array (
      0 => '/home/dlab34/motors.designlab.com.br/application/views/cadastrar.tpl',
      1 => 1426270167,
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
    'defa140fc47def8c7665252edf3bd63811d1851c' => 
    array (
      0 => '/home/dlab34/motors.designlab.com.br/application/views/tinymce_1.tpl',
      1 => 1426090344,
      2 => 'file',
    ),
    'a72f631df4daa325457a5c045fb43a10f84f5728' => 
    array (
      0 => '/home/dlab34/motors.designlab.com.br/application/views/footer.tpl',
      1 => 1426096475,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160619815550349afed4935-16345041',
  'variables' => 
  array (
    'fabricantes' => 0,
    'fabricante' => 0,
    'anos' => 0,
    'ano' => 0,
    'especificacoes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_550349b08daa26_60279131',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550349b08daa26_60279131')) {function content_550349b08daa26_60279131($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>DesignLab - Motors | Cadastro de veículos</title>

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

                



                
                                    <li >
                        <a href="/pt/contas"><i class="fa fa-users fa-fw"></i> Account List</a>
                    </li>
                
                                    <li ><a href="/pt/usuarios"><i class="fa fa-user fa-fw"></i> Member List</a></li>
                                
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

    <h4 class="heading">Contas</h4>
    <ul class="nav">
        <li  class="" ><a href="/pt/contas">Lista</a></li>
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
            <h1 class="page-header">Novo Veículo</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    
                    <div class="row">
                        <div class="col-lg-12">

                            <form method="post">
                                <div class="row">
                                    <div class="col col-lg-6 col-md-6">
                                        <h4 class="panel-heading x-label">Fabricante</h4>
                                        <select name="fabricante" class="form-control">
                                            
                                                                                                                                                <optgroup label="A">
                                                        
                                                                
                                                                                                        </optgroup>
                                                                                                
                                                                                                
                                                                                                            <option value="AAV Arab American Vehicles" >AAV Arab American Vehicles</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="AB Motorfabriken i Göteborg (AMG)" >AB Motorfabriken i Göteborg (AMG)</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Abadal" >Abadal</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Abarth" >Abarth</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Abbey Auto Engineering Co. Ltd" >Abbey Auto Engineering Co. Ltd</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Abbott Motor Company" >Abbott Motor Company</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="ABC" >ABC</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Abingdon" >Abingdon</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Abra" >Abra</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="AC" >AC</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="AC Propulsion" >AC Propulsion</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="AC Sportcar" >AC Sportcar</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Accles-Turrell" >Accles-Turrell</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Acura" >Acura</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Adam" >Adam</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Adams" >Adams</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Adler" >Adler</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Adrenaline" >Adrenaline</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Advance" >Advance</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Aeon Sports Car" >Aeon Sports Car</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Aero" >Aero</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Aerocarene" >Aerocarene</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Aerts" >Aerts</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="AGA" >AGA</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="AGB" >AGB</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="AGM" >AGM</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="AGR" >AGR</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Agrale" >Agrale</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Aichi Machine" >Aichi Machine</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Ailloud" >Ailloud</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Aixam" >Aixam</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="AJS" >AJS</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Alba" >Alba</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Albar" >Albar</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Albion" >Albion</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Alco" >Alco</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Aldino" >Aldino</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Alesia" >Alesia</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Alexander" >Alexander</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Alfa Romeo" >Alfa Romeo</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Allard" >Allard</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Alldays & Onions" >Alldays & Onions</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="ALM A.C.M.A.T" >ALM A.C.M.A.T</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Almac" >Almac</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Alpha Sports" >Alpha Sports</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Alphax" >Alphax</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Alpine" >Alpine</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Alta" >Alta</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Altia" >Altia</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Alvis" >Alvis</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="AM Sportscars" >AM Sportscars</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Ambassador" >Ambassador</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="American Austin" >American Austin</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="American Bantam" >American Bantam</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="American LaFrance" >American LaFrance</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="American Motors Corporation" >American Motors Corporation</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="American Underslung" >American Underslung</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="AMG" >AMG</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="AMI" >AMI</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Amilcar" >Amilcar</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Amphicar" >Amphicar</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Amuse" >Amuse</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Amuza" >Amuza</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="AMV" >AMV</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Anadol" >Anadol</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Anasagasti" >Anasagasti</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Anderson" >Anderson</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Andino" >Andino</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Angela Auto Cars Geska" >Angela Auto Cars Geska</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Angus Sanderson" >Angus Sanderson</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Anidón" >Anidón</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Annova" >Annova</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Ansaldo" >Ansaldo</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Anteros" >Anteros</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Apal" >Apal</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Apollo" >Apollo</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Apperson" >Apperson</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Aptera Motors" >Aptera Motors</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Aquila" >Aquila</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Aquila Sports Cars" >Aquila Sports Cars</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="ARA" >ARA</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Arab" >Arab</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Aranhiço" >Aranhiço</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Arash" >Arash</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Arden" >Arden</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Argyll" >Argyll</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Ariel" >Ariel</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Aries" >Aries</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Arista" >Arista</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Armstrong Siddeley" >Armstrong Siddeley</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Arnault" >Arnault</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Arnolt Bristol" >Arnolt Bristol</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="ARO" >ARO</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Arrol-Johnston" >Arrol-Johnston</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Artega" >Artega</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="ASA" >ASA</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="ASA-Aluminium Body" >ASA-Aluminium Body</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Asarco" >Asarco</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Ascari" >Ascari</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Ascort" >Ascort</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Ashok Leyland" >Ashok Leyland</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Asia Motors" >Asia Motors</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="ASL" >ASL</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="ASM" >ASM</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Asquith" >Asquith</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Aston Martin" >Aston Martin</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Astra" >Astra</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="ATA" >ATA</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Ataka" >Ataka</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Atalanta" >Atalanta</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="ATS" >ATS</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="ATT" >ATT</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Auburn" >Auburn</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Audi" >Audi</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Austin" >Austin</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Austin-Healey" >Austin-Healey</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Austin-Morris" >Austin-Morris</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Australian Kit Car" >Australian Kit Car</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Australian Six" >Australian Six</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Australis" >Australis</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Austro-Daimler" >Austro-Daimler</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Auto EV" >Auto EV</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Auto Speciali" >Auto Speciali</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Auto Union" >Auto Union</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Autoar" >Autoar</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Autobacs" >Autobacs</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Autobianchi" >Autobianchi</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Autobleu" >Autobleu</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Autocar" >Autocar</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Automobilbau Saier" >Automobilbau Saier</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Autozodiaco" >Autozodiaco</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Auverland" >Auverland</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="AV Monocar" >AV Monocar</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Avanti" >Avanti</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Avia" >Avia</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Avion" >Avion</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Avions Voisin" >Avions Voisin</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Avtodesign" >Avtodesign</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="AWE" >AWE</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="AWZ" >AWZ</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="AXR" >AXR</option>
                                                                
                                                                                                    
                                                                                                                                                <optgroup label="B">
                                                        
                                                                
                                                                                                        </optgroup>
                                                                                                
                                                                                                
                                                                                                            <option value="B Engineering" >B Engineering</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="B.A.D" >B.A.D</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Babcock" >Babcock</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Baby" >Baby</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Baby Buggy" >Baby Buggy</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Bajaj-Tempo" >Bajaj-Tempo</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Baker Electronics" >Baker Electronics</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Balaton" >Balaton</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Ballot" >Ballot</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Bandini" >Bandini</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Baoding Dadi" >Baoding Dadi</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Baolong" >Baolong</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Barkas" >Barkas</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Baur" >Baur</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Bavariacars" >Bavariacars</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Bayliss-Thomas" >Bayliss-Thomas</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="BAZ" >BAZ</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Bean" >Bean</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Bebi" >Bebi</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Bedelia" >Bedelia</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Bedford" >Bedford</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Beijing Automobile Works" >Beijing Automobile Works</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Beiqi Foton" >Beiqi Foton</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="BelAZ" >BelAZ</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Bell Aurens" >Bell Aurens</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Bell Motor Car" >Bell Motor Car</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Bellier" >Bellier</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Belsize Motors" >Belsize Motors</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Bentall" >Bentall</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Bentley" >Bentley</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Benz" >Benz</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Berkeley" >Berkeley</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Berliet" >Berliet</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Berrien Buggy" >Berrien Buggy</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Bertone" >Bertone</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Beuk" >Beuk</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Beutler" >Beutler</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Bianchi" >Bianchi</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Bianchini" >Bianchini</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Biddle" >Biddle</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Bignan" >Bignan</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Birchfield Motor Company" >Birchfield Motor Company</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Birkin" >Birkin</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Biscayne" >Biscayne</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Biscuter" >Biscuter</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Bitter" >Bitter</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Bizzarrini" >Bizzarrini</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Blackjack" >Blackjack</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Blitz" >Blitz</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Blitzworld" >Blitzworld</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Blixt" >Blixt</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="BMC" >BMC</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="BMC" >BMC</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="BMW" >BMW</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="BNC" >BNC</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Boitel" >Boitel</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Bond Cars Ltd" >Bond Cars Ltd</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Bonetti" >Bonetti</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Borgward" >Borgward</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Bossaert" >Bossaert</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Bradley" >Bradley</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Brammo" >Brammo</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Brasier" >Brasier</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Brennabor" >Brennabor</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Brewster & Co." >Brewster & Co.</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Bricklin" >Bricklin</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Briggs & Stratton" >Briggs & Stratton</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Brilliance China Auto" >Brilliance China Auto</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Bristol Cars Ltd." >Bristol Cars Ltd.</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="British Leyland" >British Leyland</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="British Salmson" >British Salmson</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="BRM" >BRM</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Broc" >Broc</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Brooke" >Brooke</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Brooke Cars" >Brooke Cars</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Brush" >Brush</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Brutsch" >Brutsch</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="BSA Scout" >BSA Scout</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="BSH" >BSH</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Bub" >Bub</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Buchanan" >Buchanan</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Buckler" >Buckler</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Budd" >Budd</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Bufori" >Bufori</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Bugatti" >Bugatti</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Buick" >Buick</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Bulgar Renault" >Bulgar Renault</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Bungartz" >Bungartz</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Burney" >Burney</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Burton" >Burton</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="BYD Auto" >BYD Auto</option>
                                                                
                                                                                                    
                                                                                                                                                <optgroup label="C">
                                                        
                                                                
                                                                                                        </optgroup>
                                                                                                
                                                                                                
                                                                                                            <option value="C.A.C." >C.A.C.</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Cadillac" >Cadillac</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Calcott" >Calcott</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Caldwell Vale" >Caldwell Vale</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Callaway" >Callaway</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Callista" >Callista</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Caparo" >Caparo</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Carbon Motors" >Carbon Motors</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Cardi" >Cardi</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Carrozzeria Touring" >Carrozzeria Touring</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Casalini" >Casalini</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Castagna" >Castagna</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Caterham" >Caterham</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="CBT" >CBT</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="CCV" >CCV</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="CD" >CD</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Ceirano" >Ceirano</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Cemsa" >Cemsa</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="CG" >CG</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Chamonix" >Chamonix</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Champion" >Champion</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Chana Motors" >Chana Motors</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Chandler" >Chandler</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Chang'An Motors" >Chang'An Motors</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Changhe" >Changhe</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Chaparral" >Chaparral</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Chapron" >Chapron</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Charron" >Charron</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Charron-Laycock" >Charron-Laycock</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Chatenet" >Chatenet</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Checker" >Checker</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Cheetah" >Cheetah</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Chenard & Walcker" >Chenard & Walcker</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Chery" >Chery</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Chevrolet" >Chevrolet</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Chevron" >Chevron</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Chiribiri" >Chiribiri</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Chrysler" >Chrysler</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Chrysler do Brasil" >Chrysler do Brasil</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Chrysler Plymouth" >Chrysler Plymouth</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Cisitalia" >Cisitalia</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Citroën, por André Citroën" >Citroën, por André Citroën</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Cizeta-Moroder" >Cizeta-Moroder</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Clan" >Clan</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Claveau" >Claveau</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Clement-Bayard" >Clement-Bayard</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Clenet" >Clenet</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Cleveland" >Cleveland</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Clever" >Clever</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Cluley" >Cluley</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Clyno" >Clyno</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Coda" >Coda</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Coggiola" >Coggiola</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Colani" >Colani</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Cole" >Cole</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Columbia" >Columbia</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Comarth" >Comarth</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Commer" >Commer</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Companhia Industrial Santa Matilde" >Companhia Industrial Santa Matilde</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Connaught" >Connaught</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Continental Automobiles" >Continental Automobiles</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Continental Motors" >Continental Motors</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Cooper" >Cooper</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Corbin" >Corbin</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Cord" >Cord</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Corre-La Licorne" >Corre-La Licorne</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Coste" >Coste</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Costin" >Costin</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Cottin & Desgouttes" >Cottin & Desgouttes</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Coventry Climax" >Coventry Climax</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Covini" >Covini</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="CQ" >CQ</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Crane Simplex" >Crane Simplex</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Cree" >Cree</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Crosley" >Crosley</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Crosslander" >Crosslander</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Crossley" >Crossley</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Crow Elkhart" >Crow Elkhart</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Cunningham" >Cunningham</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="CWS" >CWS</option>
                                                                
                                                                                                    
                                                                                                                                                <optgroup label="D">
                                                        
                                                                
                                                                                                        </optgroup>
                                                                                                
                                                                                                
                                                                                                            <option value="Dacia" >Dacia</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Dadi (Chengdu)" >Dadi (Chengdu)</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Dadi Auto" >Dadi Auto</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Daewoo" >Daewoo</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="DAF" >DAF</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Daihatsu" >Daihatsu</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="DaimlerChrysler" >DaimlerChrysler</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Dare" >Dare</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Darl Mat" >Darl Mat</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Darracq" >Darracq</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Datsun" >Datsun</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Dauer" >Dauer</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Davis" >Davis</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Davrian" >Davrian</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="DAX" >DAX</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Daytona" >Daytona</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="DB Automobiles" >DB Automobiles</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="De Bruyne" >De Bruyne</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="De Dion-Bouton" >De Dion-Bouton</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="De La Chapelle" >De La Chapelle</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="De Lorean (DMC)" >De Lorean (DMC)</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="De Tomaso" >De Tomaso</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="De Vaux" >De Vaux</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Decauville" >Decauville</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Deco Rides" >Deco Rides</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Delage" >Delage</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Delahaye" >Delahaye</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Delaunay-Belleville" >Delaunay-Belleville</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Delfino" >Delfino</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Dellow" >Dellow</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Denzel" >Denzel</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Derways" >Derways</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="DeSoto" >DeSoto</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="DeSoto" >DeSoto</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Detroit Electric" >Detroit Electric</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Deutz" >Deutz</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Devin" >Devin</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Devon Motor Works" >Devon Motor Works</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Diamond T" >Diamond T</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Diana" >Diana</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Diatto" >Diatto</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Dimora" >Dimora</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Dioss" >Dioss</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="DKW" >DKW</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="DKW-Vemag, ver Vemag" >DKW-Vemag, ver Vemag</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Doble" >Doble</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Dodge" >Dodge</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Dome" >Dome</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Don Foster" >Don Foster</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Dongfeng" >Dongfeng</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Donkervoort" >Donkervoort</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Donnet-Zedel" >Donnet-Zedel</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Doon" >Doon</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Dora" >Dora</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Doretti" >Doretti</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Dort" >Dort</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Downs Engineering" >Downs Engineering</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Dragon Motor Car" >Dragon Motor Car</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Dragon Motor Company" >Dragon Motor Company</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="DRB Sports Cars" >DRB Sports Cars</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="DS Malterre" >DS Malterre</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Duesen Bayern" >Duesen Bayern</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Duesenberg" >Duesenberg</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Durant" >Durant</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Duriez" >Duriez</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Durkopp" >Durkopp</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Dutton" >Dutton</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Dynasty" >Dynasty</option>
                                                                
                                                                                                    
                                                                                                                                                <optgroup label="E">
                                                        
                                                                
                                                                                                        </optgroup>
                                                                                                
                                                                                                
                                                                                                            <option value="E-Wolf" >E-Wolf</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Eagle" >Eagle</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="EarthRoamer" >EarthRoamer</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Edag" >Edag</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Edford" >Edford</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Edge" >Edge</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Edwards America" >Edwards America</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="EFFA Motors" >EFFA Motors</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Eicher" >Eicher</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Eisenacher" >Eisenacher</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Elfin" >Elfin</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Elisar" >Elisar</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Elkhart Carriage Company" >Elkhart Carriage Company</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Elmore" >Elmore</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Elva Sports Cars" >Elva Sports Cars</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="EMF" >EMF</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Emme" >Emme</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="EMPI" >EMPI</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Empire" >Empire</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="EMW" >EMW</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Enduro" >Enduro</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Energine" >Energine</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Enger" >Enger</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Engesa" >Engesa</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Enzmann" >Enzmann</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="ERA" >ERA</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="ErAZ Formada na antiga  União Soviética." >ErAZ Formada na antiga  União Soviética.</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Eskine" >Eskine</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Eslovénia IMV" >Eslovénia IMV</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Essex" >Essex</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Etnerap" >Etnerap</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Eureka" >Eureka</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Evante" >Evante</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Everett-Morrison" >Everett-Morrison</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Excalibur" >Excalibur</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Excelsior Motor Company" >Excelsior Motor Company</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Eysink" >Eysink</option>
                                                                
                                                                                                    
                                                                                                                                                <optgroup label="F">
                                                        
                                                                
                                                                                                        </optgroup>
                                                                                                
                                                                                                
                                                                                                            <option value="F.B. Stearns Company" >F.B. Stearns Company</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Fabral" >Fabral</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Facel-Vega" >Facel-Vega</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Fafnir" >Fafnir</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Fairthorpe" >Fairthorpe</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Fal" >Fal</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Faralli & Mazzanti" >Faralli & Mazzanti</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Farbio" >Farbio</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Farboud" >Farboud</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Farus" >Farus</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Fast" >Fast</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Faun" >Faun</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="FAW" >FAW</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Felber" >Felber</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Fend" >Fend</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Ferrari" >Ferrari</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Fiat" >Fiat</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Fioravanti" >Fioravanti</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Fisher" >Fisher</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Fisker" >Fisker</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Fissore" >Fissore</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Flint" >Flint</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="FN" >FN</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="FNM" >FNM</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Foden" >Foden</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Force" >Force</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Ford" >Ford</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Foster vehicles of England" >Foster vehicles of England</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="FPR" >FPR</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="FPV" >FPV</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Framo" >Framo</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Franay" >Franay</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Franklin" >Franklin</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Frazer-Nash" >Frazer-Nash</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Freestream" >Freestream</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Freze" >Freze</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Frisky" >Frisky</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Frua" >Frua</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="FSM" >FSM</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="FSO" >FSO</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Fudi" >Fudi</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Fulda Mobil" >Fulda Mobil</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Fuso" >Fuso</option>
                                                                
                                                                                                    
                                                                                                                                                <optgroup label="G">
                                                        
                                                                
                                                                                                        </optgroup>
                                                                                                
                                                                                                
                                                                                                            <option value="Galy" >Galy</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="GAP" >GAP</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Garelli" >Garelli</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Gatso" >Gatso</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Gatter" >Gatter</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="GAZ" >GAZ</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="GDT" >GDT</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Geely" >Geely</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Geep" >Geep</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="GEM" >GEM</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Gemballa" >Gemballa</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="General Motors" >General Motors</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Geo" >Geo</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Georges Irat" >Georges Irat</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Ghia" >Ghia</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Giannini" >Giannini</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Gibbs" >Gibbs</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Gilbern" >Gilbern</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Gillet" >Gillet</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Ginetta" >Ginetta</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Giom" >Giom</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Glas" >Glas</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Glasspar" >Glasspar</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="GMC" >GMC</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="GN" >GN</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Gobron-Brilli" >Gobron-Brilli</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Goliath" >Goliath</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="GomSelMash" >GomSelMash</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="GoNow" >GoNow</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Gordini" >Gordini</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Gordon" >Gordon</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Gordon Keeble" >Gordon Keeble</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="GP" >GP</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="GP Speed Shop" >GP Speed Shop</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Graf Wien Stift" >Graf Wien Stift</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Graham-Paige" >Graham-Paige</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Gray-Dort Chatham" >Gray-Dort Chatham</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Great Wall" >Great Wall</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Gregoire" >Gregoire</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Grinnall" >Grinnall</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="GSM" >GSM</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="GT Mouldings" >GT Mouldings</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="GTM" >GTM</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Gumpert" >Gumpert</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Gurgel" >Gurgel</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Gutbrod" >Gutbrod</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Guy Motors" >Guy Motors</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="GWK" >GWK</option>
                                                                
                                                                                                    
                                                                                                                                                <optgroup label="H">
                                                        
                                                                
                                                                                                        </optgroup>
                                                                                                
                                                                                                
                                                                                                            <option value="Hafei" >Hafei</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Hakar" >Hakar</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Hanomag" >Hanomag</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Hansa" >Hansa</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Hataz" >Hataz</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Hawk" >Hawk</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Hebei Zhongxing" >Hebei Zhongxing</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Heinkel" >Heinkel</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Henry Meadows Limited" >Henry Meadows Limited</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Heuliez" >Heuliez</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Hillman" >Hillman</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Hindustan Motors" >Hindustan Motors</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Hino" >Hino</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Hispano-Suiza" >Hispano-Suiza</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="HKS" >HKS</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="HMC" >HMC</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="HMV" >HMV</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Hofstetter" >Hofstetter</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Holden" >Holden</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Hommell" >Hommell</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Honda" >Honda</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Hongqi" >Hongqi</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Honker" >Honker</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Horch" >Horch</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Hot Rod" >Hot Rod</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Hotchkiss" >Hotchkiss</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="HPA" >HPA</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="HRG" >HRG</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="HSV" >HSV</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Hudson" >Hudson</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Humber" >Humber</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Hummer" >Hummer</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Hupmobile" >Hupmobile</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Hurtan" >Hurtan</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Hurtu" >Hurtu</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Hvezda" >Hvezda</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Hyundai" >Hyundai</option>
                                                                
                                                                                                    
                                                                                                                                                <optgroup label="I">
                                                        
                                                                
                                                                                                        </optgroup>
                                                                                                
                                                                                                
                                                                                                            <option value="IAD" >IAD</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Icon" >Icon</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Iconic Motors" >Iconic Motors</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Ideal" >Ideal</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="IFA" >IFA</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="IFR Automotive" >IFR Automotive</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="IKA" >IKA</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Ikarus" >Ikarus</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Ilinga" >Ilinga</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Image Sports Cars Limited" >Image Sports Cars Limited</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="IME" >IME</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Imperia" >Imperia</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Imperial Automobile Company" >Imperial Automobile Company</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="IndyCycle" >IndyCycle</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Infiniti" >Infiniti</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Innocenti" >Innocenti</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Inovo" >Inovo</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Intermeccanica" >Intermeccanica</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="International Harvester" >International Harvester</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Interstate Automobile Company" >Interstate Automobile Company</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Intrall" >Intrall</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Invicta" >Invicta</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="IPA" >IPA</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Iran Khodro" >Iran Khodro</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Irmscher" >Irmscher</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Isdera" >Isdera</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Isetta Velam" >Isetta Velam</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Iso" >Iso</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Isotta-Fraschini" >Isotta-Fraschini</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Israel Autocars" >Israel Autocars</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Israel Sabra" >Israel Sabra</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Isuzu" >Isuzu</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Itala" >Itala</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Iveco" >Iveco</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Izh" >Izh</option>
                                                                
                                                                                                    
                                                                                                                                                <optgroup label="J">
                                                        
                                                                
                                                                                                        </optgroup>
                                                                                                
                                                                                                
                                                                                                            <option value="JAC" >JAC</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Jackson Auto Company" >Jackson Auto Company</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Jaguar" >Jaguar</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="James N. Leitch Company" >James N. Leitch Company</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Javan Sports Cars Ltd" >Javan Sports Cars Ltd</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Jawa" >Jawa</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="JDM" >JDM</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Jeep" >Jeep</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Jensen" >Jensen</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Jetcar" >Jetcar</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Jiangling Motors Corporation Limited" >Jiangling Motors Corporation Limited</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Jiangnan" >Jiangnan</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Jide" >Jide</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Jimenez" >Jimenez</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Jinbei" >Jinbei</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="JK" >JK</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Jomar" >Jomar</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Jordan" >Jordan</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Jordan Motor Car Company" >Jordan Motor Car Company</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Joss" >Joss</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Josse" >Josse</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Jowett" >Jowett</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="JPX" >JPX</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Judkins Company" >Judkins Company</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="JVA" >JVA</option>
                                                                
                                                                                                    
                                                                                                                                                <optgroup label="K">
                                                        
                                                                
                                                                                                        </optgroup>
                                                                                                
                                                                                                
                                                                                                            <option value="Kaipan" >Kaipan</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Kaiser-Frazer - Kaiser Automobile" >Kaiser-Frazer - Kaiser Automobile</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Karmann" >Karmann</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Karsan" >Karsan</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Kasinski" >Kasinski</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Kawasaki" >Kawasaki</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Keinath" >Keinath</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Kellison" >Kellison</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Kelmark" >Kelmark</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Kepler Motors" >Kepler Motors</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Kewet" >Kewet</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="KIA" >KIA</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Kieft" >Kieft</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="King - KMCC King Motor Car Company." >King - KMCC King Motor Car Company.</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="King Long" >King Long</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Kirkham Motorsports" >Kirkham Motorsports</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Kish Khodro" >Kish Khodro</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Kissel" >Kissel</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Kleinschnittger" >Kleinschnittger</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Knox Company" >Knox Company</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Koenigsegg" >Koenigsegg</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Kougar Cars Ltd." >Kougar Cars Ltd.</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Krit Motor Car Company" >Krit Motor Car Company</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Kroboth" >Kroboth</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="KTM-Sportmotorcycle AG" >KTM-Sportmotorcycle AG</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Kuozui Motors" >Kuozui Motors</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Kurek" >Kurek</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Kurtis Kraft" >Kurtis Kraft</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Kurtis Sports Car" >Kurtis Sports Car</option>
                                                                
                                                                                                    
                                                                                                                                                <optgroup label="L">
                                                        
                                                                
                                                                                                        </optgroup>
                                                                                                
                                                                                                
                                                                                                            <option value="La Minerve" >La Minerve</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="La Salle" >La Salle</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Lada" >Lada</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="LaFayette Motors" >LaFayette Motors</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Laforza" >Laforza</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Lagonda" >Lagonda</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="LAM" >LAM</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Lambert" >Lambert</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Lamborghini" >Lamborghini</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Lanchester" >Lanchester</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Lancia" >Lancia</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Land Rover" >Land Rover</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Laraki" >Laraki</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Laurel" >Laurel</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Laurin & Klement" >Laurin & Klement</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Lauth-Juergens" >Lauth-Juergens</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Laz" >Laz</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="LC" >LC</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="LDV" >LDV</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Le Gui" >Le Gui</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Le Patron" >Le Patron</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Le Zebre" >Le Zebre</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Lea-Francis" >Lea-Francis</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Leblanc Cars" >Leblanc Cars</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Lewis" >Lewis</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Lexington" >Lexington</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Lexus" >Lexus</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Leyland" >Leyland</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Li Nian" >Li Nian</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Liaoning Shuguang" >Liaoning Shuguang</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Liechtenstein Jehle" >Liechtenstein Jehle</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Lifan" >Lifan</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Lightburn" >Lightburn</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Lightning" >Lightning</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Lightning Hybrids" >Lightning Hybrids</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Ligier" >Ligier</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Lincoln" >Lincoln</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Linser" >Linser</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Lister" >Lister</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Liuzhou Wuling" >Liuzhou Wuling</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Lizard" >Lizard</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Lloyd Cars Ltd." >Lloyd Cars Ltd.</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Lloyd Motoren-Werke GmbH" >Lloyd Motoren-Werke GmbH</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="LM Sovra" >LM Sovra</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="LMX" >LMX</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Lobini" >Lobini</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Local Motors" >Local Motors</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Locomobile" >Locomobile</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Locus Cars" >Locus Cars</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Lola Racing Cars" >Lola Racing Cars</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Lomax" >Lomax</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Lorraine Dietrich" >Lorraine Dietrich</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Lotec" >Lotec</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Lotus Cars" >Lotus Cars</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="LTI" >LTI</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Luaz" >Luaz</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Lucien Rosengart" >Lucien Rosengart</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Lusito" >Lusito</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Lutzmann" >Lutzmann</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Lzum Group" >Lzum Group</option>
                                                                
                                                                                                    
                                                                                                                                                <optgroup label="M">
                                                        
                                                                
                                                                                                        </optgroup>
                                                                                                
                                                                                                
                                                                                                            <option value="M.A.Julien" >M.A.Julien</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="MAF" >MAF</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Magda" >Magda</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Magna Steyr" >Magna Steyr</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Mahindra" >Mahindra</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Maico" >Maico</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Make Mine Electric, LLC" >Make Mine Electric, LLC</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Mallock Sports" >Mallock Sports</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Marathon" >Marathon</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Marathon Motor Cars" >Marathon Motor Cars</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Marauder" >Marauder</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Marcos" >Marcos</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Marha Motorsports do Brasil" >Marha Motorsports do Brasil</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Mariotto Auto Vehicles" >Mariotto Auto Vehicles</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Marlei" >Marlei</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Marmon" >Marmon</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Marotti" >Marotti</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Martin-Walter Ltd." >Martin-Walter Ltd.</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Maruti" >Maruti</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Maserati" >Maserati</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Mastretta" >Mastretta</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Matford" >Matford</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Matherson" >Matherson</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Mathis" >Mathis</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Matra" >Matra</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Maxwell" >Maxwell</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Maybach" >Maybach</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Maytag Mason Motor Company" >Maytag Mason Motor Company</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Mazda" >Mazda</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Mazdaspeed" >Mazdaspeed</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Mazel" >Mazel</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="MCA" >MCA</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="McCabe-Powers Company" >McCabe-Powers Company</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="McFarlan Motor Car Company" >McFarlan Motor Car Company</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Mclaren" >Mclaren</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="McLaughlin Motor Car Co." >McLaughlin Motor Car Co.</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Melling" >Melling</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Mendes automóveís" >Mendes automóveís</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Mercedes-Benz" >Mercedes-Benz</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Mercury" >Mercury</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="MG" >MG</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Mine's" >Mine's</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="MINI" >MINI</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Mitsubishi" >Mitsubishi</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Miura" >Miura</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="MKO RMS" >MKO RMS</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Morris Motor Company" >Morris Motor Company</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="MP Lafer" >MP Lafer</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Mugen Power" >Mugen Power</option>
                                                                
                                                                                                    
                                                                                                                                                <optgroup label="N">
                                                        
                                                                
                                                                                                        </optgroup>
                                                                                                
                                                                                                
                                                                                                            <option value="NAG" >NAG</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Nagant" >Nagant</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Nanjing" >Nanjing</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Napier" >Napier</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Nardi" >Nardi</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Nash" >Nash</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Nasr" >Nasr</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="National Motor Vehicle Co." >National Motor Vehicle Co.</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Nazzaro" >Nazzaro</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Neckar" >Neckar</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="NISMO" >NISMO</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Nissan" >Nissan</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Noble" >Noble</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Nota Sports Cars" >Nota Sports Cars</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Nova" >Nova</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="NSU" >NSU</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="NW" >NW</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Nysa" >Nysa</option>
                                                                
                                                                                                    
                                                                                                                                                <optgroup label="O">
                                                        
                                                                
                                                                                                        </optgroup>
                                                                                                
                                                                                                
                                                                                                            <option value="Oakland" >Oakland</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Obvio" >Obvio</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Ocelot" >Ocelot</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Oettinger" >Oettinger</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Ogle" >Ogle</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="OhiO Motor Car Co." >OhiO Motor Car Co.</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Ohta" >Ohta</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Oka Auto USA" >Oka Auto USA</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="OLDA" >OLDA</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Oldsmobile" >Oldsmobile</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Oliver Motor Car Co." >Oliver Motor Car Co.</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Oltcit" >Oltcit</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="OM" >OM</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Omega Six" >Omega Six</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Omnicar" >Omnicar</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Opel" >Opel</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Open" >Open</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Opera Performance" >Opera Performance</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Opperman" >Opperman</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Orca" >Orca</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Orient" >Orient</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Oriental Trabant" >Oriental Trabant</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Oriental Wartburg" >Oriental Wartburg</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Osca" >Osca</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Osella Corse" >Osella Corse</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="OSI" >OSI</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Otosan empresa de Joint venture com a Ford na Turquia." >Otosan empresa de Joint venture com a Ford na Turquia.</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Overland ver Willys Overland." >Overland ver Willys Overland.</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Owen Motor Car co." >Owen Motor Car co.</option>
                                                                
                                                                                                    
                                                                                                                                                <optgroup label="P">
                                                        
                                                                
                                                                                                        </optgroup>
                                                                                                
                                                                                                
                                                                                                            <option value="Packard" >Packard</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Pagani Automobili" >Pagani Automobili</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Paige" >Paige</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="PAL" >PAL</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Panhard-Levassor" >Panhard-Levassor</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Panoz" >Panoz</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Panther Westwinds" >Panther Westwinds</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Paramount Cars" >Paramount Cars</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Peerless Motor Company" >Peerless Motor Company</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Pegaso" >Pegaso</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Perodua" >Perodua</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Pescarolo Sport" >Pescarolo Sport</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Peugeot" >Peugeot</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="PGO" >PGO</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Phanomen" >Phanomen</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Pierce Arrow" >Pierce Arrow</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Pininfarina" >Pininfarina</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Playboy Motor Car Corporation" >Playboy Motor Car Corporation</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Plymouth" >Plymouth</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Polski Fiat" >Polski Fiat</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Pontiac" >Pontiac</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Porsche" >Porsche</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Portaro" >Portaro</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Praga" >Praga</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Prince Motor Company" >Prince Motor Company</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Princess" >Princess</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Proteus Cars Limited" >Proteus Cars Limited</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Proto Motors" >Proto Motors</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Proton" >Proton</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Prozé" >Prozé</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="PSA Bronto" >PSA Bronto</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Puch" >Puch</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Puma" >Puma</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Purvis" >Purvis</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="PZin?" >PZin?</option>
                                                                
                                                                                                    
                                                                                                                                                <optgroup label="Q">
                                                        
                                                                
                                                                                                        </optgroup>
                                                                                                
                                                                                                
                                                                                                            <option value="Qoros" >Qoros</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Quaife" >Quaife</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Quantum" >Quantum</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Queen" >Queen</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Qvale" >Qvale</option>
                                                                
                                                                                                    
                                                                                                                                                <optgroup label="R">
                                                        
                                                                
                                                                                                        </optgroup>
                                                                                                
                                                                                                
                                                                                                            <option value="RAF" >RAF</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="RAF" >RAF</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Railton" >Railton</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Ralliart" >Ralliart</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Rambler" >Rambler</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Ramses" >Ramses</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Ranger" >Ranger</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Raphael's Motors of Brasil-England" >Raphael's Motors of Brasil-England</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Réac" >Réac</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="RE Amemiya" >RE Amemiya</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Reliant" >Reliant</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Renault" >Renault</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Reo" >Reo</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Reva" >Reva</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Rex-Simplex" >Rex-Simplex</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Reynard" >Reynard</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Rickenbacker Motor Company" >Rickenbacker Motor Company</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Riley" >Riley</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Rinspeed" >Rinspeed</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Ritter" >Ritter</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Roadrazer" >Roadrazer</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Robin Hood" >Robin Hood</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Rocar" >Rocar</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Rochet-Schneider" >Rochet-Schneider</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Rolland-Pilain" >Rolland-Pilain</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Rolls-Royce" >Rolls-Royce</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Romi" >Romi</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Ronart" >Ronart</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Rootes" >Rootes</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Rosengart" >Rosengart</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Rothwell - Eclipse Machine Co." >Rothwell - Eclipse Machine Co.</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Rover" >Rover</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Rovin" >Rovin</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="RUF Automobile" >RUF Automobile</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Rumi" >Rumi</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Rumpler" >Rumpler</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Ruska" >Ruska</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Russo Baltique" >Russo Baltique</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Ruston-Hornsby" >Ruston-Hornsby</option>
                                                                
                                                                                                    
                                                                                                                                                <optgroup label="S">
                                                        
                                                                
                                                                                                        </optgroup>
                                                                                                
                                                                                                
                                                                                                            <option value="Saab" >Saab</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Sado" >Sado</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Saipa" >Saipa</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Saleen" >Saleen</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Salmson" >Salmson</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="San" >San</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Santana Motor" >Santana Motor</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Saturn" >Saturn</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Sauber" >Sauber</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Sbarro" >Sbarro</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Scania" >Scania</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Scion" >Scion</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Scioneri" >Scioneri</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Sears" >Sears</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="SEAT" >SEAT</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="SeAZ" >SeAZ</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Secma" >Secma</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Shanghai" >Shanghai</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Shelby" >Shelby</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Shelsley" >Shelsley</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Siam Di Tella" >Siam Di Tella</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Siata" >Siata</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Siddeley-Deasy" >Siddeley-Deasy</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Simca" >Simca</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Simpson Design" >Simpson Design</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Singer" >Singer</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Sivax" >Sivax</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Sizaire-Naudin" >Sizaire-Naudin</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Skoda" >Skoda</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Slaby Beringer" >Slaby Beringer</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Smart" >Smart</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Sodomka" >Sodomka</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Somaca" >Somaca</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="SPA" >SPA</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Spartan" >Spartan</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Spartan Classic" >Spartan Classic</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Spectre" >Spectre</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Speedster" >Speedster</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Spoon Sports" >Spoon Sports</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Springuel" >Springuel</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Spyker" >Spyker</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Spyker Cars" >Spyker Cars</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="SsangYong" >SsangYong</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="SSC" >SSC</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Standard Cars" >Standard Cars</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Standard Fahrzeugfabrik" >Standard Fahrzeugfabrik</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Standard Swallow" >Standard Swallow</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Stanga" >Stanga</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Stanguellini" >Stanguellini</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Stanley" >Stanley</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Star, veja Durant" >Star, veja Durant</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Steyr" >Steyr</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="STi" >STi</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Stoddard-Dayton" >Stoddard-Dayton</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Stoewer" >Stoewer</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Stola" >Stola</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Storero" >Storero</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Studebaker" >Studebaker</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Stutz" >Stutz</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Sub" >Sub</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Subaru" >Subaru</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Suminoe" >Suminoe</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Sunbeam" >Sunbeam</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Suzuki" >Suzuki</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Swift" >Swift</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Sylva" >Sylva</option>
                                                                
                                                                                                    
                                                                                                                                                <optgroup label="T">
                                                        
                                                                
                                                                                                        </optgroup>
                                                                                                
                                                                                                
                                                                                                            <option value="TAC" >TAC</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Talbot" >Talbot</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Tata Motors" >Tata Motors</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Tatra" >Tatra</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="TAZ" >TAZ</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Tempo" >Tempo</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Terraplane" >Terraplane</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Tesla Motors" >Tesla Motors</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Th!nk" >Th!nk</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Thulin" >Thulin</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Thunderbolt" >Thunderbolt</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Tigr" >Tigr</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Timmis" >Timmis</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="TMC" >TMC</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Tom's" >Tom's</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Tommykaira" >Tommykaira</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Toniks" >Toniks</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Tornado" >Tornado</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Tornax" >Tornax</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Touring Superleggera" >Touring Superleggera</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Toyota" >Toyota</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Tracta" >Tracta</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Tramontana" >Tramontana</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="TRD" >TRD</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Trekka" >Trekka</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Treser" >Treser</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Trial" >Trial</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Tricars" >Tricars</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Trident Cars Ltd." >Trident Cars Ltd.</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Triumph" >Triumph</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Trojan" >Trojan</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Troller" >Troller</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="True Concept Cars" >True Concept Cars</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Tucker" >Tucker</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Turchetti" >Turchetti</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Turner" >Turner</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="TVR" >TVR</option>
                                                                
                                                                                                    
                                                                                                                                                <optgroup label="U">
                                                        
                                                                
                                                                                                        </optgroup>
                                                                                                
                                                                                                
                                                                                                            <option value="U.S. Long Distance" >U.S. Long Distance</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="UAS Mitteweida" >UAS Mitteweida</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="UAZ" >UAZ</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Ulf" >Ulf</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Ultima" >Ultima</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="UMM" >UMM</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Unic" >Unic</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Unipower" >Unipower</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="URI" >URI</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="URO" >URO</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="UVMV" >UVMV</option>
                                                                
                                                                                                    
                                                                                                                                                <optgroup label="V">
                                                        
                                                                
                                                                                                        </optgroup>
                                                                                                
                                                                                                
                                                                                                            <option value="Vabis" >Vabis</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Vaclav Smejkal" >Vaclav Smejkal</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Vaillante" >Vaillante</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Vale" >Vale</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Valiant" >Valiant</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Valmet" >Valmet</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Van Den Plas" >Van Den Plas</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="VanClee" >VanClee</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Vanden Plas" >Vanden Plas</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Vandenbrink" >Vandenbrink</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Vauxhall" >Vauxhall</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="VDL Bova" >VDL Bova</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Vector" >Vector</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Velie" >Velie</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Velorex" >Velorex</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Velox" >Velox</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Vemac" >Vemac</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Vemag" >Vemag</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Venturi" >Venturi</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Veritas" >Veritas</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Vermorel" >Vermorel</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Vespa, montadora de veículos da França" >Vespa, montadora de veículos da França</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="VF" >VF</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Vignale" >Vignale</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Vinci GT" >Vinci GT</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Viotti - Carrozzeria Vittorio Viotti Itália." >Viotti - Carrozzeria Vittorio Viotti Itália.</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Virago" >Virago</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Vision" >Vision</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Volksrod" >Volksrod</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Volkswagen" >Volkswagen</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Volvo" >Volvo</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Vues" >Vues</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Vuillet" >Vuillet</option>
                                                                
                                                                                                    
                                                                                                                                                <optgroup label="W">
                                                        
                                                                
                                                                                                        </optgroup>
                                                                                                
                                                                                                
                                                                                                            <option value="Waaijenberg" >Waaijenberg</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Walter" >Walter</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Wanderer" >Wanderer</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Way" >Way</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Wendax" >Wendax</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Westcott" >Westcott</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Westfield" >Westfield</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="White" >White</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Whitlock" >Whitlock</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Wiesmann" >Wiesmann</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Wikov" >Wikov</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Willys Overland" >Willys Overland</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Wolseley" >Wolseley</option>
                                                                
                                                                                                    
                                                                                                                                                <optgroup label="X">
                                                        
                                                                
                                                                                                        </optgroup>
                                                                                                
                                                                                                
                                                                                                            <option value="Xiali" >Xiali</option>
                                                                
                                                                                                    
                                                                                                                                                <optgroup label="Y">
                                                        
                                                                
                                                                                                        </optgroup>
                                                                                                
                                                                                                
                                                                                                            <option value="Yamaha" >Yamaha</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Ycaco" >Ycaco</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Yes" >Yes</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="YLN" >YLN</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Yugo" >Yugo</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Yulon" >Yulon</option>
                                                                
                                                                                                    
                                                                                                                                                <optgroup label="Z">
                                                        
                                                                
                                                                                                        </optgroup>
                                                                                                
                                                                                                
                                                                                                            <option value="Z" >Z</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Zagato" >Zagato</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="ZAP" >ZAP</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Zastava" >Zastava</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Zaz" >Zaz</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Zündapp" >Zündapp</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Zebra" >Zebra</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Zedel" >Zedel</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Zender" >Zender</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Zenvo" >Zenvo</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Zhejiang" >Zhejiang</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Zhonghuacar" >Zhonghuacar</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Zil" >Zil</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Zimmer" >Zimmer</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="ZIS" >ZIS</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Zuk" >Zuk</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="Zust" >Zust</option>
                                                                
                                                                                                    
                                                                                                
                                                                                                            <option value="ZX Auto" >ZX Auto</option>
                                                                
                                                                                                    
                                                                                    </select> 
                                        <br/>
                                    </div>
                                    <div class="col col-lg-6 col-md-6">
                                        <h4 class="panel-heading x-label">Veículo</h4>
                                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" maxlength="20" />	
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
                                        <h4 class="panel-heading x-label">Preço</h4>
                                        <input type="text" class="form-control" id="preco" name="preco" placeholder="Preço" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)"/>
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
                                            
                                                                                            <option value="2015">2015</option>
                                                
                                                                                            <option value="2015/2014">2015/2014</option>
                                                
                                                                                            <option value="2014">2014</option>
                                                
                                                                                            <option value="2014/2013">2014/2013</option>
                                                
                                                                                            <option value="2013">2013</option>
                                                
                                                                                            <option value="2013/2012">2013/2012</option>
                                                
                                                                                            <option value="2012">2012</option>
                                                
                                                                                            <option value="2012/2011">2012/2011</option>
                                                
                                                                                            <option value="2011">2011</option>
                                                
                                                                                            <option value="2011/2010">2011/2010</option>
                                                
                                                                                            <option value="2010">2010</option>
                                                
                                                                                            <option value="2010/2009">2010/2009</option>
                                                
                                                                                            <option value="2009">2009</option>
                                                
                                                                                            <option value="2009/2008">2009/2008</option>
                                                
                                                                                            <option value="2008">2008</option>
                                                
                                                                                            <option value="2008/2007">2008/2007</option>
                                                
                                                                                            <option value="2007">2007</option>
                                                
                                                                                            <option value="2007/2006">2007/2006</option>
                                                
                                                                                            <option value="2006">2006</option>
                                                
                                                                                            <option value="2006/2005">2006/2005</option>
                                                
                                                                                            <option value="2005">2005</option>
                                                
                                                                                            <option value="2005/2004">2005/2004</option>
                                                
                                                                                            <option value="2004">2004</option>
                                                
                                                                                            <option value="2004/2003">2004/2003</option>
                                                
                                                                                            <option value="2003">2003</option>
                                                
                                                                                            <option value="2003/2002">2003/2002</option>
                                                
                                                                                            <option value="2002">2002</option>
                                                
                                                                                            <option value="2002/2001">2002/2001</option>
                                                
                                                                                            <option value="2001">2001</option>
                                                
                                                                                            <option value="2001/2000">2001/2000</option>
                                                
                                                                                            <option value="2000">2000</option>
                                                
                                                                                            <option value="2000/1999">2000/1999</option>
                                                
                                                                                            <option value="1999">1999</option>
                                                
                                                                                            <option value="1999/1998">1999/1998</option>
                                                
                                                                                            <option value="1998">1998</option>
                                                
                                                                                            <option value="1998/1997">1998/1997</option>
                                                
                                                                                            <option value="1997">1997</option>
                                                
                                                                                            <option value="1997/1996">1997/1996</option>
                                                
                                                                                            <option value="1996">1996</option>
                                                
                                                                                            <option value="1996/1995">1996/1995</option>
                                                
                                                                                            <option value="1995">1995</option>
                                                
                                                                                            <option value="1995/1994">1995/1994</option>
                                                
                                                                                            <option value="1994">1994</option>
                                                
                                                                                            <option value="1994/1993">1994/1993</option>
                                                
                                                                                            <option value="1993">1993</option>
                                                
                                                                                            <option value="1993/1992">1993/1992</option>
                                                
                                                                                            <option value="1992">1992</option>
                                                
                                                                                            <option value="1992/1991">1992/1991</option>
                                                
                                                                                            <option value="1991">1991</option>
                                                
                                                                                            <option value="1991/1990">1991/1990</option>
                                                
                                                                                            <option value="1990">1990</option>
                                                
                                                                                            <option value="1990/1989">1990/1989</option>
                                                
                                                                                            <option value="1989">1989</option>
                                                
                                                                                            <option value="1989/1988">1989/1988</option>
                                                
                                                                                            <option value="1988">1988</option>
                                                
                                                                                            <option value="1988/1987">1988/1987</option>
                                                
                                                                                            <option value="1987">1987</option>
                                                
                                                                                            <option value="1987/1986">1987/1986</option>
                                                
                                                                                            <option value="1986">1986</option>
                                                
                                                                                            <option value="1986/1985">1986/1985</option>
                                                
                                                                                            <option value="1985">1985</option>
                                                
                                                                                            <option value="1985/1984">1985/1984</option>
                                                
                                                                                            <option value="1984">1984</option>
                                                
                                                                                            <option value="1984/1983">1984/1983</option>
                                                
                                                                                            <option value="1983">1983</option>
                                                
                                                                                            <option value="1983/1982">1983/1982</option>
                                                
                                                                                            <option value="1982">1982</option>
                                                
                                                                                            <option value="1982/1981">1982/1981</option>
                                                
                                                                                            <option value="1981">1981</option>
                                                
                                                                                            <option value="1981/1980">1981/1980</option>
                                                
                                                                                            <option value="1980">1980</option>
                                                
                                                                                            <option value="1980/1979">1980/1979</option>
                                                
                                                                                            <option value="1979">1979</option>
                                                
                                                                                            <option value="1979/1978">1979/1978</option>
                                                
                                                                                            <option value="1978">1978</option>
                                                
                                                                                            <option value="1978/1977">1978/1977</option>
                                                
                                                                                            <option value="1977">1977</option>
                                                
                                                                                            <option value="1977/1976">1977/1976</option>
                                                
                                                                                            <option value="1976">1976</option>
                                                
                                                                                            <option value="1976/1975">1976/1975</option>
                                                
                                                                                            <option value="1975">1975</option>
                                                
                                                                                            <option value="1975/1974">1975/1974</option>
                                                
                                                                                            <option value="1974">1974</option>
                                                
                                                                                            <option value="1974/1973">1974/1973</option>
                                                
                                                                                            <option value="1973">1973</option>
                                                
                                                                                            <option value="1973/1972">1973/1972</option>
                                                
                                                                                            <option value="1972">1972</option>
                                                
                                                                                            <option value="1972/1971">1972/1971</option>
                                                
                                                                                            <option value="1971">1971</option>
                                                
                                                                                            <option value="1971/1970">1971/1970</option>
                                                
                                                                                            <option value="1970">1970</option>
                                                
                                                                                            <option value="1970/1969">1970/1969</option>
                                                
                                                                                            <option value="1969">1969</option>
                                                
                                                                                            <option value="1969/1968">1969/1968</option>
                                                
                                                                                            <option value="1968">1968</option>
                                                
                                                                                            <option value="1968/1967">1968/1967</option>
                                                
                                                                                            <option value="1967">1967</option>
                                                
                                                                                            <option value="1967/1966">1967/1966</option>
                                                
                                                                                            <option value="1966">1966</option>
                                                
                                                                                            <option value="1966/1965">1966/1965</option>
                                                
                                                                                            <option value="1965">1965</option>
                                                
                                                                                            <option value="1965/1964">1965/1964</option>
                                                
                                                                                            <option value="1964">1964</option>
                                                
                                                                                            <option value="1964/1963">1964/1963</option>
                                                
                                                                                            <option value="1963">1963</option>
                                                
                                                                                            <option value="1963/1962">1963/1962</option>
                                                
                                                                                            <option value="1962">1962</option>
                                                
                                                                                            <option value="1962/1961">1962/1961</option>
                                                
                                                                                            <option value="1961">1961</option>
                                                
                                                                                            <option value="1961/1960">1961/1960</option>
                                                
                                                                                            <option value="1960">1960</option>
                                                
                                                                                            <option value="1960/1959">1960/1959</option>
                                                
                                                                                            <option value="1959">1959</option>
                                                
                                                                                            <option value="1959/1958">1959/1958</option>
                                                
                                                                                            <option value="1958">1958</option>
                                                
                                                                                            <option value="1958/1957">1958/1957</option>
                                                
                                                                                            <option value="1957">1957</option>
                                                
                                                                                            <option value="1957/1956">1957/1956</option>
                                                
                                                                                            <option value="1956">1956</option>
                                                
                                                                                            <option value="1956/1955">1956/1955</option>
                                                
                                                                                            <option value="1955">1955</option>
                                                
                                                                                            <option value="1955/1954">1955/1954</option>
                                                
                                                                                            <option value="1954">1954</option>
                                                
                                                                                            <option value="1954/1953">1954/1953</option>
                                                
                                                                                            <option value="1953">1953</option>
                                                
                                                                                            <option value="1953/1952">1953/1952</option>
                                                
                                                                                            <option value="1952">1952</option>
                                                
                                                                                            <option value="1952/1951">1952/1951</option>
                                                
                                                                                            <option value="1951">1951</option>
                                                
                                                                                            <option value="1951/1950">1951/1950</option>
                                                
                                                                                            <option value="1950">1950</option>
                                                
                                                                                            <option value="1950/1949">1950/1949</option>
                                                
                                                                                            <option value="1949">1949</option>
                                                
                                                                                            <option value="1949/1948">1949/1948</option>
                                                
                                                                                            <option value="1948">1948</option>
                                                
                                                                                            <option value="1948/1947">1948/1947</option>
                                                
                                                                                            <option value="1947">1947</option>
                                                
                                                                                            <option value="1947/1946">1947/1946</option>
                                                
                                                                                            <option value="1946">1946</option>
                                                
                                                                                            <option value="1946/1945">1946/1945</option>
                                                
                                                                                            <option value="1945">1945</option>
                                                
                                                                                            <option value="1945/1944">1945/1944</option>
                                                
                                                                                            <option value="1944">1944</option>
                                                
                                                                                            <option value="1944/1943">1944/1943</option>
                                                
                                                                                            <option value="1943">1943</option>
                                                
                                                                                            <option value="1943/1942">1943/1942</option>
                                                
                                                                                            <option value="1942">1942</option>
                                                
                                                                                            <option value="1942/1941">1942/1941</option>
                                                
                                                                                            <option value="1941">1941</option>
                                                
                                                                                            <option value="1941/1940">1941/1940</option>
                                                
                                                                                            <option value="1940">1940</option>
                                                
                                                                                            <option value="1940/1939">1940/1939</option>
                                                
                                                                                            <option value="1939">1939</option>
                                                
                                                                                            <option value="1939/1938">1939/1938</option>
                                                
                                                                                            <option value="1938">1938</option>
                                                
                                                                                            <option value="1938/1937">1938/1937</option>
                                                
                                                                                            <option value="1937">1937</option>
                                                
                                                                                            <option value="1937/1936">1937/1936</option>
                                                
                                                                                            <option value="1936">1936</option>
                                                
                                                                                            <option value="1936/1935">1936/1935</option>
                                                
                                                                                            <option value="1935">1935</option>
                                                
                                                                                            <option value="1935/1934">1935/1934</option>
                                                
                                                                                            <option value="1934">1934</option>
                                                
                                                                                            <option value="1934/1933">1934/1933</option>
                                                
                                                                                            <option value="1933">1933</option>
                                                
                                                                                            <option value="1933/1932">1933/1932</option>
                                                
                                                                                            <option value="1932">1932</option>
                                                
                                                                                            <option value="1932/1931">1932/1931</option>
                                                
                                                                                            <option value="1931">1931</option>
                                                
                                                                                            <option value="1931/1930">1931/1930</option>
                                                
                                                                                            <option value="1930">1930</option>
                                                
                                                                                    </select>
                                        <br/>
                                    </div>
                                </div>    
                                <div class="row">
                                    <div class="col col-lg-4 col-md-2">
                                        <h4 class="panel-heading x-label">Quilometragem</h4>
                                        <input type="text" class="form-control" id="quilometragem" name="quilometragem" maxlength="40" placeholder="Quilometragem" onkeypress="return formataNumDV(event, this, 40);"/>
                                        <br/>
                                    </div>    
                                    <div class="col col-lg-4 col-md-3">
                                        <h4 class="panel-heading x-label">Cor</h4>
                                        <input type="text" class="form-control" id="cor" name="cor" maxlength="25" placeholder="Cor"/>
                                        <br/>
                                    </div>    
                                    <div class="col col-lg-4 col-md-3">
                                        <h4 class="panel-heading x-label">Combustível</h4>
                                        <input type="text" class="form-control" id="combustivel" name="combustivel" maxlength="25" placeholder="Combustível"/>
                                        <br/>
                                    </div> 
                                       
                                </div>   
                                <div class="row">
                                    <div class="col col-lg-12 col-md-12">        
                                        <h4 class="panel-heading x-label">Especificações</h4>
                                        <textarea class="form-control" rows="25" style="min-width: 100%" id="especificacoes" name="especificacoes"></textarea>
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
























<script type="text/javascript" src="/web-files/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>

<script type="text/javascript">

    tinyMCE.init({
        // General options

        mode: "textareas",
        theme: "advanced",
        plugins: "autolink,lists,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",
        // Theme options

        theme_advanced_buttons1: "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
        theme_advanced_buttons2: "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
        theme_advanced_buttons3: "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
        theme_advanced_buttons4: "insertlayer,moveforward,movebackward,absolute,|,styleprops,spellchecker,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,blockquote,pagebreak,|,insertfile,insertimage",
        theme_advanced_toolbar_location: "top",
        theme_advanced_toolbar_align: "left",
        theme_advanced_statusbar_location: "bottom",
        theme_advanced_resizing: true,
        // Skin options

        skin: "o2k7",
        skin_variant: "silver",
        // Example content CSS (should be your site CSS)

        content_css: "css/example.css",
        // Drop lists for link/image/media/template dialogs

        template_external_list_url: "js/template_list.js",
        external_link_list_url: "js/link_list.js",
        external_image_list_url: "js/image_list.js",
        media_external_list_url: "js/media_list.js",
        // Replace values for the template plugin

        template_replace_values: {
            username: "Some User",
            staffid: "991234"

        }

    });

</script>

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
    $("select").css("height", "54px");

    $(document).ready(function () {

        var settings = {
            url: "/pt/veiculos/upload/" + $("#codproduto").val(),
            method: "POST",
            allowedTypes: "jpg,png,gif,bmp",
            fileName: "myfile",
            multiple: true,
            onSuccess: function (files, data, xhr)
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
            onError: function (files, status, errMsg)
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
                success: function (data) {
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
</script><?php }} ?>
