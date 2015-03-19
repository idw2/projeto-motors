<?php /*%%SmartyHeaderCode:1414961801550701f9cd5c33-77568706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd210b3b8dd17e0559c4aca339bcd607d90d161cd' => 
    array (
      0 => '/home/dlab34/motors.designlab.com.br/application/views/veiculos_lista.tpl',
      1 => 1426173729,
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
  'nocache_hash' => '1414961801550701f9cd5c33-77568706',
  'variables' => 
  array (
    'language' => 0,
    'produtos' => 0,
    'produto' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_550701fa897616_65884837',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550701fa897616_65884837')) {function content_550701fa897616_65884837($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>DesignLab - Motors | Lista de veículos</title>

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
            <h1 class="page-header">Vehicle List</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">

                            <a href="/pt/veiculos/cadastrar" class="btn btn-default navbar-btn"><i class="fa fa-automobile"></i> New</a>

                            <table class='table'>

                                <thead>
                                <th>Registration Date</th>
                                <th>Vehicle Name</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Actions</th>
                                </thead>

                                 
                                
                                    <tr id="veiculo_3874C93B791D2A271264AC1ACF6745AF" >

                                        <td>07/03/2015 - 14h02</td>
                                        <td>Uno Mille<br/>http://auto.designlab.com.br</td>
                                        <td>Seminovos</td>
                                        <td>R$ 159,00</td>
                                        <td>
                                            <table style="height: 45px;">
                                                <tr>
                                                    <td><a style="cursor: pointer;" onclick="javascript:vDestaqueUpdate('destaque_3874C93B791D2A271264AC1ACF6745AF', 'pt/veiculos/destaque/1/uno-mille-1', '3874C93B791D2A271264AC1ACF6745AF');"><span class="ico-default-star-3874C93B791D2A271264AC1ACF6745AF ico-default-star desative" rel="tooltip" title="Featured"><i class="fa fa-star"></i></span></a>&nbsp;</td>
                                                    <td><a style="cursor: pointer;" onclick="javascript:vStatusUpdate('status_3874C93B791D2A271264AC1ACF6745AF', 'pt/veiculos/status/0/uno-mille-1', '3874C93B791D2A271264AC1ACF6745AF');"><span class="ico-default-eye-3874C93B791D2A271264AC1ACF6745AF ico-default-eye " rel="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>&nbsp;</td>
                                                    <td><a style="cursor: pointer;" onclick="javascript:vNovidadeUpdate('novidade_3874C93B791D2A271264AC1ACF6745AF', 'pt/veiculos/novidade/0/uno-mille-1', '3874C93B791D2A271264AC1ACF6745AF');"><span class="ico-default-novidade-3874C93B791D2A271264AC1ACF6745AF ico-default-novidade " rel="tooltip" title="Novelty"><i class="fa fa-check-square-o"></i></span></a>&nbsp;</td>
                                                    <td><a href="/pt/veiculos/editar/uno-mille-1"><span class="ico-default-edit" rel="tooltip" title="Edit"><i class="fa fa-edit"></i></span></a>&nbsp;</td>
                                                    <td><a style="cursor: pointer;" onclick="javascript:vDeleteUpdate('pt/veiculos/delete/uno-mille-1', '3874C93B791D2A271264AC1ACF6745AF');"><span class="ico-default-trash" rel="tooltip" title="Delete"><i class="fa fa-trash-o"></i></span></a>&nbsp;</td>
                                                    <td><a href="/pt/veiculos/fotos/uno-mille-1"><span class="ico-default-photo" rel="tooltip" title="Imagery"><i class="fa fa-photo"></i></span></a></td>
                                                </tr>
                                                <tr>
                                                    <td id="destaque_3874C93B791D2A271264AC1ACF6745AF" style="height: 35px"><img src="/web-files/img/Loader_small.gif" border="0" title="Loading" alt="Loading" class="hide"/></td>
                                                    <td id="status_3874C93B791D2A271264AC1ACF6745AF"><img src="/web-files/img/Loader_small.gif" border="0" title="Loading" alt="Loading" class="hide"/></td>
                                                    <td id="novidade_3874C93B791D2A271264AC1ACF6745AF"><img src="/web-files/img/Loader_small.gif" border="0" title="Loading" alt="Loading" class="hide"/></td>
                                                    <td id="edit_3874C93B791D2A271264AC1ACF6745AF"><img src="/web-files/img/Loader_small.gif" border="0" title="Loading" alt="Loading" class="hide"/></td>
                                                    <td id="delete_3874C93B791D2A271264AC1ACF6745AF"><img src="/web-files/img/Loader_small.gif" border="0" title="Loading" alt="Loading" class="hide"/></td>
                                                    <td id="gallery_3874C93B791D2A271264AC1ACF6745AF"><img src="/web-files/img/Loader_small.gif" border="0" title="Loading" alt="Loading" class="hide"/></td>
                                                </tr>
                                            </table>
                                        </td>

                                    </tr>
                                    
                                
                                    <tr id="veiculo_0729DE44C546808E34E70DAC97B715A0" >

                                        <td>07/03/2015 - 13h43</td>
                                        <td>Toyota Corolla Sedan <br/>http://auto.designlab.com.br</td>
                                        <td>Zero KM</td>
                                        <td>R$ 18.900,00</td>
                                        <td>
                                            <table style="height: 45px;">
                                                <tr>
                                                    <td><a style="cursor: pointer;" onclick="javascript:vDestaqueUpdate('destaque_0729DE44C546808E34E70DAC97B715A0', 'pt/veiculos/destaque/1/toyota-corolla-sedan', '0729DE44C546808E34E70DAC97B715A0');"><span class="ico-default-star-0729DE44C546808E34E70DAC97B715A0 ico-default-star desative" rel="tooltip" title="Featured"><i class="fa fa-star"></i></span></a>&nbsp;</td>
                                                    <td><a style="cursor: pointer;" onclick="javascript:vStatusUpdate('status_0729DE44C546808E34E70DAC97B715A0', 'pt/veiculos/status/0/toyota-corolla-sedan', '0729DE44C546808E34E70DAC97B715A0');"><span class="ico-default-eye-0729DE44C546808E34E70DAC97B715A0 ico-default-eye " rel="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>&nbsp;</td>
                                                    <td><a style="cursor: pointer;" onclick="javascript:vNovidadeUpdate('novidade_0729DE44C546808E34E70DAC97B715A0', 'pt/veiculos/novidade/0/toyota-corolla-sedan', '0729DE44C546808E34E70DAC97B715A0');"><span class="ico-default-novidade-0729DE44C546808E34E70DAC97B715A0 ico-default-novidade " rel="tooltip" title="Novelty"><i class="fa fa-check-square-o"></i></span></a>&nbsp;</td>
                                                    <td><a href="/pt/veiculos/editar/toyota-corolla-sedan"><span class="ico-default-edit" rel="tooltip" title="Edit"><i class="fa fa-edit"></i></span></a>&nbsp;</td>
                                                    <td><a style="cursor: pointer;" onclick="javascript:vDeleteUpdate('pt/veiculos/delete/toyota-corolla-sedan', '0729DE44C546808E34E70DAC97B715A0');"><span class="ico-default-trash" rel="tooltip" title="Delete"><i class="fa fa-trash-o"></i></span></a>&nbsp;</td>
                                                    <td><a href="/pt/veiculos/fotos/toyota-corolla-sedan"><span class="ico-default-photo" rel="tooltip" title="Imagery"><i class="fa fa-photo"></i></span></a></td>
                                                </tr>
                                                <tr>
                                                    <td id="destaque_0729DE44C546808E34E70DAC97B715A0" style="height: 35px"><img src="/web-files/img/Loader_small.gif" border="0" title="Loading" alt="Loading" class="hide"/></td>
                                                    <td id="status_0729DE44C546808E34E70DAC97B715A0"><img src="/web-files/img/Loader_small.gif" border="0" title="Loading" alt="Loading" class="hide"/></td>
                                                    <td id="novidade_0729DE44C546808E34E70DAC97B715A0"><img src="/web-files/img/Loader_small.gif" border="0" title="Loading" alt="Loading" class="hide"/></td>
                                                    <td id="edit_0729DE44C546808E34E70DAC97B715A0"><img src="/web-files/img/Loader_small.gif" border="0" title="Loading" alt="Loading" class="hide"/></td>
                                                    <td id="delete_0729DE44C546808E34E70DAC97B715A0"><img src="/web-files/img/Loader_small.gif" border="0" title="Loading" alt="Loading" class="hide"/></td>
                                                    <td id="gallery_0729DE44C546808E34E70DAC97B715A0"><img src="/web-files/img/Loader_small.gif" border="0" title="Loading" alt="Loading" class="hide"/></td>
                                                </tr>
                                            </table>
                                        </td>

                                    </tr>
                                    
                                
                                    <tr id="veiculo_10008AEBC2F35AA32B90F9BCC8DBF37E" >

                                        <td>07/03/2015 - 13h42</td>
                                        <td>New Siena<br/>http://auto.designlab.com.br</td>
                                        <td>Usado</td>
                                        <td>R$ 54.000,00</td>
                                        <td>
                                            <table style="height: 45px;">
                                                <tr>
                                                    <td><a style="cursor: pointer;" onclick="javascript:vDestaqueUpdate('destaque_10008AEBC2F35AA32B90F9BCC8DBF37E', 'pt/veiculos/destaque/1/new-siena', '10008AEBC2F35AA32B90F9BCC8DBF37E');"><span class="ico-default-star-10008AEBC2F35AA32B90F9BCC8DBF37E ico-default-star desative" rel="tooltip" title="Featured"><i class="fa fa-star"></i></span></a>&nbsp;</td>
                                                    <td><a style="cursor: pointer;" onclick="javascript:vStatusUpdate('status_10008AEBC2F35AA32B90F9BCC8DBF37E', 'pt/veiculos/status/0/new-siena', '10008AEBC2F35AA32B90F9BCC8DBF37E');"><span class="ico-default-eye-10008AEBC2F35AA32B90F9BCC8DBF37E ico-default-eye " rel="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>&nbsp;</td>
                                                    <td><a style="cursor: pointer;" onclick="javascript:vNovidadeUpdate('novidade_10008AEBC2F35AA32B90F9BCC8DBF37E', 'pt/veiculos/novidade/0/new-siena', '10008AEBC2F35AA32B90F9BCC8DBF37E');"><span class="ico-default-novidade-10008AEBC2F35AA32B90F9BCC8DBF37E ico-default-novidade " rel="tooltip" title="Novelty"><i class="fa fa-check-square-o"></i></span></a>&nbsp;</td>
                                                    <td><a href="/pt/veiculos/editar/new-siena"><span class="ico-default-edit" rel="tooltip" title="Edit"><i class="fa fa-edit"></i></span></a>&nbsp;</td>
                                                    <td><a style="cursor: pointer;" onclick="javascript:vDeleteUpdate('pt/veiculos/delete/new-siena', '10008AEBC2F35AA32B90F9BCC8DBF37E');"><span class="ico-default-trash" rel="tooltip" title="Delete"><i class="fa fa-trash-o"></i></span></a>&nbsp;</td>
                                                    <td><a href="/pt/veiculos/fotos/new-siena"><span class="ico-default-photo" rel="tooltip" title="Imagery"><i class="fa fa-photo"></i></span></a></td>
                                                </tr>
                                                <tr>
                                                    <td id="destaque_10008AEBC2F35AA32B90F9BCC8DBF37E" style="height: 35px"><img src="/web-files/img/Loader_small.gif" border="0" title="Loading" alt="Loading" class="hide"/></td>
                                                    <td id="status_10008AEBC2F35AA32B90F9BCC8DBF37E"><img src="/web-files/img/Loader_small.gif" border="0" title="Loading" alt="Loading" class="hide"/></td>
                                                    <td id="novidade_10008AEBC2F35AA32B90F9BCC8DBF37E"><img src="/web-files/img/Loader_small.gif" border="0" title="Loading" alt="Loading" class="hide"/></td>
                                                    <td id="edit_10008AEBC2F35AA32B90F9BCC8DBF37E"><img src="/web-files/img/Loader_small.gif" border="0" title="Loading" alt="Loading" class="hide"/></td>
                                                    <td id="delete_10008AEBC2F35AA32B90F9BCC8DBF37E"><img src="/web-files/img/Loader_small.gif" border="0" title="Loading" alt="Loading" class="hide"/></td>
                                                    <td id="gallery_10008AEBC2F35AA32B90F9BCC8DBF37E"><img src="/web-files/img/Loader_small.gif" border="0" title="Loading" alt="Loading" class="hide"/></td>
                                                </tr>
                                            </table>
                                        </td>

                                    </tr>
                                    
                                
                                    <tr id="veiculo_E7D5DA42CBAD85055C5DABF7EAD30DD7" >

                                        <td>07/03/2015 - 13h37</td>
                                        <td>BMW Série 3<br/>http://auto.designlab.com.br</td>
                                        <td>Zero KM</td>
                                        <td>R$ 18.900,00</td>
                                        <td>
                                            <table style="height: 45px;">
                                                <tr>
                                                    <td><a style="cursor: pointer;" onclick="javascript:vDestaqueUpdate('destaque_E7D5DA42CBAD85055C5DABF7EAD30DD7', 'pt/veiculos/destaque/1/bmw-serie-3', 'E7D5DA42CBAD85055C5DABF7EAD30DD7');"><span class="ico-default-star-E7D5DA42CBAD85055C5DABF7EAD30DD7 ico-default-star desative" rel="tooltip" title="Featured"><i class="fa fa-star"></i></span></a>&nbsp;</td>
                                                    <td><a style="cursor: pointer;" onclick="javascript:vStatusUpdate('status_E7D5DA42CBAD85055C5DABF7EAD30DD7', 'pt/veiculos/status/0/bmw-serie-3', 'E7D5DA42CBAD85055C5DABF7EAD30DD7');"><span class="ico-default-eye-E7D5DA42CBAD85055C5DABF7EAD30DD7 ico-default-eye " rel="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>&nbsp;</td>
                                                    <td><a style="cursor: pointer;" onclick="javascript:vNovidadeUpdate('novidade_E7D5DA42CBAD85055C5DABF7EAD30DD7', 'pt/veiculos/novidade/0/bmw-serie-3', 'E7D5DA42CBAD85055C5DABF7EAD30DD7');"><span class="ico-default-novidade-E7D5DA42CBAD85055C5DABF7EAD30DD7 ico-default-novidade " rel="tooltip" title="Novelty"><i class="fa fa-check-square-o"></i></span></a>&nbsp;</td>
                                                    <td><a href="/pt/veiculos/editar/bmw-serie-3"><span class="ico-default-edit" rel="tooltip" title="Edit"><i class="fa fa-edit"></i></span></a>&nbsp;</td>
                                                    <td><a style="cursor: pointer;" onclick="javascript:vDeleteUpdate('pt/veiculos/delete/bmw-serie-3', 'E7D5DA42CBAD85055C5DABF7EAD30DD7');"><span class="ico-default-trash" rel="tooltip" title="Delete"><i class="fa fa-trash-o"></i></span></a>&nbsp;</td>
                                                    <td><a href="/pt/veiculos/fotos/bmw-serie-3"><span class="ico-default-photo" rel="tooltip" title="Imagery"><i class="fa fa-photo"></i></span></a></td>
                                                </tr>
                                                <tr>
                                                    <td id="destaque_E7D5DA42CBAD85055C5DABF7EAD30DD7" style="height: 35px"><img src="/web-files/img/Loader_small.gif" border="0" title="Loading" alt="Loading" class="hide"/></td>
                                                    <td id="status_E7D5DA42CBAD85055C5DABF7EAD30DD7"><img src="/web-files/img/Loader_small.gif" border="0" title="Loading" alt="Loading" class="hide"/></td>
                                                    <td id="novidade_E7D5DA42CBAD85055C5DABF7EAD30DD7"><img src="/web-files/img/Loader_small.gif" border="0" title="Loading" alt="Loading" class="hide"/></td>
                                                    <td id="edit_E7D5DA42CBAD85055C5DABF7EAD30DD7"><img src="/web-files/img/Loader_small.gif" border="0" title="Loading" alt="Loading" class="hide"/></td>
                                                    <td id="delete_E7D5DA42CBAD85055C5DABF7EAD30DD7"><img src="/web-files/img/Loader_small.gif" border="0" title="Loading" alt="Loading" class="hide"/></td>
                                                    <td id="gallery_E7D5DA42CBAD85055C5DABF7EAD30DD7"><img src="/web-files/img/Loader_small.gif" border="0" title="Loading" alt="Loading" class="hide"/></td>
                                                </tr>
                                            </table>
                                        </td>

                                    </tr>
                                    
                                
                                    <tr id="veiculo_CAC2E01F3E84D107C870B9BF11B773D7" >

                                        <td>07/03/2015 - 13h21</td>
                                        <td>Pálio Fire<br/>http://auto.designlab.com.br</td>
                                        <td>Zero KM</td>
                                        <td>R$ 235.000,00</td>
                                        <td>
                                            <table style="height: 45px;">
                                                <tr>
                                                    <td><a style="cursor: pointer;" onclick="javascript:vDestaqueUpdate('destaque_CAC2E01F3E84D107C870B9BF11B773D7', 'pt/veiculos/destaque/1/palio-fire-1', 'CAC2E01F3E84D107C870B9BF11B773D7');"><span class="ico-default-star-CAC2E01F3E84D107C870B9BF11B773D7 ico-default-star desative" rel="tooltip" title="Featured"><i class="fa fa-star"></i></span></a>&nbsp;</td>
                                                    <td><a style="cursor: pointer;" onclick="javascript:vStatusUpdate('status_CAC2E01F3E84D107C870B9BF11B773D7', 'pt/veiculos/status/0/palio-fire-1', 'CAC2E01F3E84D107C870B9BF11B773D7');"><span class="ico-default-eye-CAC2E01F3E84D107C870B9BF11B773D7 ico-default-eye " rel="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>&nbsp;</td>
                                                    <td><a style="cursor: pointer;" onclick="javascript:vNovidadeUpdate('novidade_CAC2E01F3E84D107C870B9BF11B773D7', 'pt/veiculos/novidade/0/palio-fire-1', 'CAC2E01F3E84D107C870B9BF11B773D7');"><span class="ico-default-novidade-CAC2E01F3E84D107C870B9BF11B773D7 ico-default-novidade " rel="tooltip" title="Novelty"><i class="fa fa-check-square-o"></i></span></a>&nbsp;</td>
                                                    <td><a href="/pt/veiculos/editar/palio-fire-1"><span class="ico-default-edit" rel="tooltip" title="Edit"><i class="fa fa-edit"></i></span></a>&nbsp;</td>
                                                    <td><a style="cursor: pointer;" onclick="javascript:vDeleteUpdate('pt/veiculos/delete/palio-fire-1', 'CAC2E01F3E84D107C870B9BF11B773D7');"><span class="ico-default-trash" rel="tooltip" title="Delete"><i class="fa fa-trash-o"></i></span></a>&nbsp;</td>
                                                    <td><a href="/pt/veiculos/fotos/palio-fire-1"><span class="ico-default-photo" rel="tooltip" title="Imagery"><i class="fa fa-photo"></i></span></a></td>
                                                </tr>
                                                <tr>
                                                    <td id="destaque_CAC2E01F3E84D107C870B9BF11B773D7" style="height: 35px"><img src="/web-files/img/Loader_small.gif" border="0" title="Loading" alt="Loading" class="hide"/></td>
                                                    <td id="status_CAC2E01F3E84D107C870B9BF11B773D7"><img src="/web-files/img/Loader_small.gif" border="0" title="Loading" alt="Loading" class="hide"/></td>
                                                    <td id="novidade_CAC2E01F3E84D107C870B9BF11B773D7"><img src="/web-files/img/Loader_small.gif" border="0" title="Loading" alt="Loading" class="hide"/></td>
                                                    <td id="edit_CAC2E01F3E84D107C870B9BF11B773D7"><img src="/web-files/img/Loader_small.gif" border="0" title="Loading" alt="Loading" class="hide"/></td>
                                                    <td id="delete_CAC2E01F3E84D107C870B9BF11B773D7"><img src="/web-files/img/Loader_small.gif" border="0" title="Loading" alt="Loading" class="hide"/></td>
                                                    <td id="gallery_CAC2E01F3E84D107C870B9BF11B773D7"><img src="/web-files/img/Loader_small.gif" border="0" title="Loading" alt="Loading" class="hide"/></td>
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
