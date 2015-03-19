<?php /*%%SmartyHeaderCode:17034321745500814c8fa3c3-79379972%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85363a6cfd14a1548ddf669c93b8667f0d548712' => 
    array (
      0 => '/home/dlab34/motors.designlab.com.br/application/views/configuracao.tpl',
      1 => 1426096319,
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
      1 => 1426091209,
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
      1 => 1426096437,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17034321745500814c8fa3c3-79379972',
  'variables' => 
  array (
    'erro' => 0,
    'telefone' => 0,
    'twitter' => 0,
    'user_site' => 0,
    'linkedid' => 0,
    'google_plus' => 0,
    'facebook' => 0,
    'instagram' => 0,
    'email' => 0,
    'obs_faleconosco' => 0,
    'alias' => 0,
    'color' => 0,
    'seg_sex_inicio' => 0,
    'seg_sex_fim' => 0,
    'sabado_inicio' => 0,
    'sabado_fim' => 0,
    'domingo_inicio' => 0,
    'domingo_fim' => 0,
    'feriado_inicio' => 0,
    'feriado_fim' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5500814e396776_76595240',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5500814e396776_76595240')) {function content_5500814e396776_76595240($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>DesignLab - Motors | Configuração</title>

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
                <li><a href="/pt/admin/meus-dados/8ad75cb3cbab9f97652f34423209818f"><i class="fa fa-user fa-fw"></i> Meus Dados</a></li>
                <li><a href="/pt/admin/alterar-senha"><i class="fa fa-key fa-fw"></i> Alterar Senha</a></li>

                <li class="divider"></li>
                <li><a href="/pt/admin/logout"><i class="fa fa-sign-out fa-fw"></i> Sair</a></li>
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
                        <a href="/pt/contas"><i class="fa fa-users fa-fw"></i> Lista de Contas</a>
                    </li>

                
                
                <li >
                    <a href="/pt/veiculos/veiculos-lista"><i class="fa fa-automobile fa-fw"></i> Lista de Veículos</a>
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
    <li  class="" ><a href="/pt/veiculos/veiculos-lista">Lista</a></li>
</ul>
<hr>
<h4 class="heading">Páginas</h4>
<ul class="nav">
    <li  class="" ><a href="/pt/html/empresa">A empresa</a></li>
    <li  class="" ><a href="/pt/html/onde-estamos">Onde estamos</a></li>
    <li  class="active" ><a href="/pt/html/configuracao">Configuração</a></li>


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
            <h1 class="page-header">Configurações</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form method="post">
                                
                                
                                <h4>Nº de Telefone Principal</h4>
                                <p><input class="form-control" style="min-width: 100%" id="telefone" name="telefone" value="+1 (321) 252-2323" placeholder="Nº de Telefone Principal"/></p>

                                <h4>Twitter</h4>
                                <p><input class="form-control" style="min-width: 100%" id="twitter" name="twitter" value="https://twitter.com" placeholder="Twitter"/></p>

                                <h4>Site</h4>
                                <p><input class="form-control" style="min-width: 100%" id="site" name="site" value="auto.designlab.com.br" placeholder="Site" readonly="true"/></p>

                                <h4>Linked Id</h4>
                                <p><input class="form-control" style="min-width: 100%" id="linkedid" name="linkedid" value="https://www.linkedin.com" placeholder="Linked Id"/></p>

                                <h4>Google Plus</h4>
                                <p><input class="form-control" style="min-width: 100%" id="google_plus" name="google_plus" value="https://plus.google.com" placeholder="Google Plus"/></p>

                                <h4>Facebook</h4>
                                <p><input class="form-control" style="min-width: 100%" id="facebook" name="facebook" value="https://www.facebook.com" placeholder="Facebook"/></p>

                                <h4>Instagram</h4>
                                <p><input class="form-control" style="min-width: 100%" id="instagram" name="instagram" value="http://instagram.com/" placeholder="Instagram"/></p>

                                <h4>E-mail fale conosco</h4>
                                <p><input class="form-control" style="min-width: 100%" id="email" name="email" value="paulolyra@me.com" placeholder="E-mail fale conosco"/></p>

                                <h4>Observações fale conosco <span style="font-size: 12px; color: #555">Ex: O prazo de respostas para as solicitações é de até 24h.</span></h4>
                                <p><input class="form-control" style="min-width: 100%" id="obs_faleconosco" name="obs_faleconosco" value="O prazo de respostas para as solicitações é de até 24h." placeholder="Observações fale conosco"/></p>

                                <h4>Aliás fale conosco <span style="font-size: 12px; color: #555">(Ex: "-f", "-r" ou caso não favor não preencher)</span></h4>
                                <p><input class="form-control" style="min-width: 100%" id="alias" name="alias" value="-f" placeholder="Aliás"/></p>

                               

                                
                                <h4>Cor do Site</h4>
                                <p class='input-group colorpicker-component get-color colorpicker-element'>
                                    <input type="text" name='color' id='color' value="#f17241" class="form-control">
                                    <span class='input-group-addon'><i style='background-color: #f17241'></i></span>
                                </p>
                                
                                <h2>Horário de funcionamento</h2>
                                <h4>De segunda à sexta <span style="font-size: 12px; color: #555">(Ex: formato da hora "00:00")</span></h4>
                                <div class="row datagrid">
                                    <div class="col col-sm-3">
                                        <input type="text" class="form-control" id="seg_sex_inicio" name="seg_sex_inicio" maxlength="5" value="08:00" placeholder="Abertura" onkeypress="return formataHora(event, this);"/>
                                    </div>
                                    <div class="col col-sm-3">
                                        <input type="text" class="form-control" id="seg_sex_fim" name="seg_sex_fim" maxlength="10" value="19:00" placeholder="Fechamento" onkeypress="return formataHora(event, this);"/>
                                    </div>
                                    <div class="col col-sm-6"> </div>
                                </div>
                                <h4>Sábados <span style="font-size: 12px; color: #555">(Ex: formato da hora "00:00")</span></h4>
                                <div class="row datagrid">
                                    <div class="col col-sm-3">
                                        <input type="text" class="form-control" id="sabado_inicio" name="sabado_inicio" maxlength="5" value="09:00" placeholder="Abertura" onkeypress="return formataHora(event, this);"/>
                                    </div>
                                    <div class="col col-sm-3">
                                        <input type="text" class="form-control" id="sabado_fim" name="sabado_fim" maxlength="10" value="18:00" placeholder="Fechamento" onkeypress="return formataHora(event, this);"/>
                                    </div>
                                    <div class="col col-sm-6"> </div>
                                </div>
                                <h4>Domingos <span style="font-size: 12px; color: #555">(Ex: formato da hora "00:00")</span></h4>
                                <div class="row datagrid">
                                    <div class="col col-sm-3">
                                        <input type="text" class="form-control" id="domingo_inicio" name="domingo_inicio" maxlength="5" value="09:00" placeholder="Abertura" onkeypress="return formataHora(event, this);"/>
                                    </div>
                                    <div class="col col-sm-3">
                                        <input type="text" class="form-control" id="domingo_fim" name="domingo_fim" maxlength="10" value="13:00" placeholder="Fechamento" onkeypress="return formataHora(event, this);"/>
                                    </div>
                                    <div class="col col-sm-6"> </div>
                                </div>
                                <h4>Feriados <span style="font-size: 12px; color: #555">(Ex: formato da hora "00:00")</span></h4>
                                <div class="row datagrid">
                                    <div class="col col-sm-3">
                                        <input type="text" class="form-control" id="feriado_inicio" name="feriado_inicio" maxlength="5" value="09:00" placeholder="Abertura" onkeypress="return formataHora(event, this);"/>
                                    </div>
                                    <div class="col col-sm-3">
                                        <input type="text" class="form-control" id="feriado_fim" name="feriado_fim" maxlength="10" value="14:00" placeholder="Fechamento" onkeypress="return formataHora(event, this);"/>
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

<script language="javascript" src="/web-files/js/funcoes.js"></script>
<script language="javascript" src="/web-files/js/jquery-2.1.1.min.js"></script>

<script type="text/javascript" src="/web-files/bootstrap-colorpicker-master/src/js/colorpicker-color.js"></script>
<script type="text/javascript" src="/web-files/bootstrap-colorpicker-master/src/js/colorpicker.js"></script>
<script type="text/javascript" src="/web-files/bootstrap-colorpicker-master/src/js/docs.js"></script>

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
    $(document).ready(function() {
        $(function() {
            alert($('.get-color').html());
            $('.get-color').colorpicker();
        });
    });
</script><?php }} ?>
