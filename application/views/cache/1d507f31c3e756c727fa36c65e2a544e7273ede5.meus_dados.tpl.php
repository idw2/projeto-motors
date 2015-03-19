<?php /*%%SmartyHeaderCode:197465486454fb6e2faaf6e2-98833263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d507f31c3e756c727fa36c65e2a544e7273ede5' => 
    array (
      0 => '/home/dlab34/motors.designlab.com.br/application/views/meus_dados.tpl',
      1 => 1425760951,
      2 => 'file',
    ),
    'cfff585caac15c6021ec752aed3dc0e6d9bcccd2' => 
    array (
      0 => '/home/dlab34/motors.designlab.com.br/application/views/header.tpl',
      1 => 1425758231,
      2 => 'file',
    ),
    '268b9b5027e6f20822dd9018df4a27668902fb95' => 
    array (
      0 => '/home/dlab34/motors.designlab.com.br/application/views/navbar.tpl',
      1 => 1425762746,
      2 => 'file',
    ),
    'f61d33cad681b2395a1dc124ad3a08f731e2df75' => 
    array (
      0 => '/home/dlab34/motors.designlab.com.br/application/views/logo.tpl',
      1 => 1425761936,
      2 => 'file',
    ),
    'defa140fc47def8c7665252edf3bd63811d1851c' => 
    array (
      0 => '/home/dlab34/motors.designlab.com.br/application/views/tinymce_1.tpl',
      1 => 1419880851,
      2 => 'file',
    ),
    'a72f631df4daa325457a5c045fb43a10f84f5728' => 
    array (
      0 => '/home/dlab34/motors.designlab.com.br/application/views/footer.tpl',
      1 => 1425757293,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197465486454fb6e2faaf6e2-98833263',
  'variables' => 
  array (
    'error' => 0,
    'conta' => 0,
    'post_cpf' => 0,
    'post_cnpj' => 0,
    'post_nome' => 0,
    'post_site' => 0,
    'post_email' => 0,
    'aniversario' => 0,
    'tipo_pessoa' => 0,
    'datagrid' => 0,
    'telefones' => 0,
    'i' => 0,
    'telefone' => 0,
    'post_cep' => 0,
    'endereco' => 0,
    'post_logradouro' => 0,
    'post_numero' => 0,
    'post_complemento' => 0,
    'post_bairro' => 0,
    'post_cidade' => 0,
    'post_estado' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54fb6e301ac438_58891800',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54fb6e301ac438_58891800')) {function content_54fb6e301ac438_58891800($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>DesignLab - Motors | Meus dados</title>

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

        <style>
            
            

            

            .ico-default-suspenso, .ico-default-bloqueado, .ico-default-novidade, .ico-default-star, .ico-default-eye, .ico-default-trash, .ico-default-photo, .ico-default-edit{
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
        <a class="navbar-brand" href="/en/admin/welcome">paulolyra@me.com</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="/en/admin/meus-dados/bf343f27a751f42baa982a08b0177864"><i class="fa fa-user fa-fw"></i> Meus Dados</a></li>
                <li><a href="/en/admin/alterar-senha"><i class="fa fa-key fa-fw"></i> Alterar Senha</a></li>

                <li class="divider"></li>
                <li><a href="/en/admin/logout"><i class="fa fa-sign-out fa-fw"></i> Sair</a></li>
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
                    <a href="/en/veiculos/veiculos-lista"><i class="fa fa-automobile fa-fw"></i> Lista de Veículos</a>
                </li>
                
                <li >
                    <a href="/en/html/empresa"><i class="fa fa-wrench fa-fw"></i> A empresa</a>
                </li>


                <li >
                    <a href="/en/html/onde-estamos"><i class="fa fa-map-marker fa-fw"></i> Onde estamos</a>
                </li>
               
                
                
                
                
                
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>


<!--
<nav class="sidebar-nav">

    <div style="background: #fff; margin: 0 11px; padding: 32px; height: 98px;"><a href="/en/html/logomarca"><span id="logo_default"><img class="area-restrita img-responsive center-block" src="http://motors.designlab.com.br/web-files/logomarcas/6FCD3B9535C665B254D0C694E13E4300.png" alt="" border="0" title="" /></span></a></div>

    <hr>
    <ul class="nav">
        <li  class="" ><a href="/en/admin/welcome">Home</a></li>
    </ul>
    <hr>

<h4 class="heading">Veículos</h4>
<ul class="nav">
    <li  class="" ><a href="/en/veiculos/veiculos-lista">Lista</a></li>
</ul>
<hr>
<h4 class="heading">Páginas</h4>
<ul class="nav">
    <li  class="" ><a href="/en/html/empresa">A empresa</a></li>
    <li  class="" ><a href="/en/html/onde-estamos">Onde estamos</a></li>
    <li  class="" ><a href="/en/html/configuracao">Configuração</a></li>


</ul>
<hr>
<h4 class="heading">Serviços</h4>
<ul class="nav">
<li  class="" ><a href="/en/admin/alterar-senha">Alterar senha</a></li>
<li  class="active" ><a href="/en/admin/meus-dados/bf343f27a751f42baa982a08b0177864">Meus Dados</a></li>
<li  class="" ><a href="/en/admin/logout">Sair</a></li>
</ul>

<hr>

<div style="background: #fff; margin: 0 11px; padding: 32px;"><img class="area-restrita img-responsive center-block" src="/web-files/img/brand.png" alt="" border="0" title="" /></div>

<hr>
</nav>

-->

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Meus Dados</h1>
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

                                                                    <div class="alert alert-success" role="alert"><strong>Atenção: </strong>Preencher todos os campos!</div>
                                
                                <br/>    
                                
                                <div class="tipo-pessoa-cpf ">
                                    <h4 style="position: relative">CPF:</h4>
                                    <p> 
                                        <label>120.401.119-21</label>
                                        <input type="hidden" class="form-control" id="cpf" name="cpf" name="cpf" maxlength="70" value="120.401.119-21" placeholder="CPF" onkeypress="return formataCPF(event, this);"/>
                                    </p>
                                </div>
                                <div class="tipo-pessoa-cnpj  hide ">
                                    <h4 style="position: relative">CNPJ:</h4>
                                    <p> 
                                        <label></label>
                                        <input type="hidden" class="form-control" id="cnpj" id="cnpj" name="cnpj" maxlength="70" value="" placeholder="CNPJ" onkeypress="return formataCNPJ(event, this);"/>
                                    </p>
                                </div>    

                                <h4>Nome:</h4>
                                <p>
                                    <input type="text" class="form-control" id="nome" name="nome" maxlength="40" value="Lunixx Auto Sales" placeholder="Nome ou Empresa"/>
                                </p>
                                <h4>Site:</h4>
                                <p>
                                    <input type="text" class="form-control" id="site" name="site" value="http://auto.designlab.com.br" placeholder="http:// ou https://"/>
                                </p>
                                <h4>E-mail:</h4>
                                <p>
                                    <input type="hidden" class="form-control" id="email" name="email" maxlength="70" value="paulolyra@me.com" placeholder="E-mail"/>
                                    paulolyra@me.com
                                </p>
                                <h4>Data de nascimento ou fundação:</h4>
                                <p><div class='row'><div class='col col-sm-4'><select name='dia' class='form-control' style='height: 51px;'><optgroup label='Dia'><option value='01'>01</option><option value='02'>02</option><option value='03'>03</option><option value='04'>04</option><option value='05'>05</option><option value='06'>06</option><option value='07'>07</option><option value='08'>08</option><option value='09'>09</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option><option value='21'>21</option><option value='22'>22</option><option value='23' selected>23</option><option value='24'>24</option><option value='25'>25</option><option value='26'>26</option><option value='27'>27</option><option value='28'>28</option><option value='29'>29</option><option value='30'>30</option><option value='31'>31</option></optgroup></select></div><div class='col col-sm-4'><select name='mes' class='form-control' style='height: 51px;'><optgroup label='Mês'><option value='01' selected>01</option><option value='02'>02</option><option value='03'>03</option><option value='04'>04</option><option value='05'>05</option><option value='06'>06</option><option value='07'>07</option><option value='08'>08</option><option value='09'>09</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option></optgroup></select></div><div class='col col-sm-4'><select name='ano' class='form-control' style='height: 51px;'><optgroup label='Ano'><option value='2015'>2015</option><option value='2014'>2014</option><option value='2013'>2013</option><option value='2012'>2012</option><option value='2011'>2011</option><option value='2010'>2010</option><option value='2009'>2009</option><option value='2008'>2008</option><option value='2007'>2007</option><option value='2006'>2006</option><option value='2005'>2005</option><option value='2004'>2004</option><option value='2003'>2003</option><option value='2002'>2002</option><option value='2001'>2001</option><option value='2000'>2000</option><option value='1999'>1999</option><option value='1998'>1998</option><option value='1997'>1997</option><option value='1996'>1996</option><option value='1995'>1995</option><option value='1994'>1994</option><option value='1993'>1993</option><option value='1992'>1992</option><option value='1991'>1991</option><option value='1990'>1990</option><option value='1989'>1989</option><option value='1988'>1988</option><option value='1987'>1987</option><option value='1986'>1986</option><option value='1985'>1985</option><option value='1984'>1984</option><option value='1983'>1983</option><option value='1982'>1982</option><option value='1981'>1981</option><option value='1980'>1980</option><option value='1979' selected>1979</option><option value='1978'>1978</option><option value='1977'>1977</option><option value='1976'>1976</option><option value='1975'>1975</option><option value='1974'>1974</option><option value='1973'>1973</option><option value='1972'>1972</option><option value='1971'>1971</option><option value='1970'>1970</option><option value='1969'>1969</option><option value='1968'>1968</option><option value='1967'>1967</option><option value='1966'>1966</option><option value='1965'>1965</option><option value='1964'>1964</option><option value='1963'>1963</option><option value='1962'>1962</option><option value='1961'>1961</option><option value='1960'>1960</option><option value='1959'>1959</option><option value='1958'>1958</option><option value='1957'>1957</option><option value='1956'>1956</option><option value='1955'>1955</option><option value='1954'>1954</option><option value='1953'>1953</option><option value='1952'>1952</option><option value='1951'>1951</option><option value='1950'>1950</option><option value='1949'>1949</option><option value='1948'>1948</option><option value='1947'>1947</option><option value='1946'>1946</option><option value='1945'>1945</option><option value='1944'>1944</option><option value='1943'>1943</option><option value='1942'>1942</option><option value='1941'>1941</option><option value='1940'>1940</option><option value='1939'>1939</option><option value='1938'>1938</option><option value='1937'>1937</option><option value='1936'>1936</option><option value='1935'>1935</option><option value='1934'>1934</option><option value='1933'>1933</option><option value='1932'>1932</option><option value='1931'>1931</option><option value='1930'>1930</option><option value='1929'>1929</option><option value='1928'>1928</option><option value='1927'>1927</option><option value='1926'>1926</option><option value='1925'>1925</option><option value='1924'>1924</option><option value='1923'>1923</option><option value='1922'>1922</option><option value='1921'>1921</option><option value='1920'>1920</option><option value='1919'>1919</option><option value='1918'>1918</option><option value='1917'>1917</option><option value='1916'>1916</option><option value='1915'>1915</option><option value='1914'>1914</option><option value='1913'>1913</option><option value='1912'>1912</option><option value='1911'>1911</option><option value='1910'>1910</option><option value='1909'>1909</option><option value='1908'>1908</option><option value='1907'>1907</option><option value='1906'>1906</option><option value='1905'>1905</option><option value='1904'>1904</option><option value='1903'>1903</option><option value='1902'>1902</option><option value='1901'>1901</option><option value='1900'>1900</option></optgroup></select></div></div></p>

                                                                    <div class="tipo-pesso-sexo ">
                                        <h4>Sexo</h4>
                                        <p> 
                                            <select name="sexo" class="form-control">
                                                <option value="M">Masculino</option>
                                                <option value="F">Feminino</option>
                                            </select>
                                        </p>
                                    </div>
                                    

                                <hr/>

                                <label>
                                    <h4>
                                        Telefones:
                                        <img src="/web-files/img/less.png" class="datagrid datagrid-less" onclick="javascript: datagrid_less()" style="cursor: pointer" alt="Tirar telefone" title="Tirar telefone" border="0"/>
                                        <img src="/web-files/img/plus.png" class="datagrid datagrid-plus" onclick="javascript: datagrid_plus()" style="cursor: pointer" alt="Adicionar telefone" title="Adicionar telefone" border="0"/>
                                    </h4>

                                </label>

                                <br/>

                                


                                    <div id="data">

                                         
                                                                                    <div class="row datagrid">
                                                <div class="col col-sm-2">
                                                    <input type="text" class="form-control" id="ddd_0" name="ddd_0" maxlength="4" value="11" placeholder="DDD" onkeypress="return formataNumDV(event, this, 2);"/>
                                                </div>
                                                <div class="col col-sm-3">
                                                    <input type="text" class="form-control" id="tel_0" name="tel_0" maxlength="10" value="111111111" placeholder="Telefone ou celular" onkeypress="return formataNumDV(event, this, 9);"/>
                                                </div>
                                                <div class="col col-sm-7">
                                                    <input type="text" class="form-control" id="ramal_0" name="ramal_0" maxlength="100" value="" placeholder="informações adicionais"/>    
                                                </div>
                                            </div>
                                            
                                           
                                    </div>    


                                                                <hr/>

                                <h4>Endereço</h4>
                                <h5>CEP</h5>
                                <div class="form-inline">
                                    <input type="text" class="form-control" id="cep" name="cep" maxlength="9" value="25215-283" placeholder="CEP" style="margin-right: 15px;" onkeypress="return formataCEP(event, this);"/>
                                    <span class="input-group" style="cursor: pointer; font-size: 15px;" id="pesquisar_endereco"><img src="/web-files/img/search-32.png" alt="Pesquisar" title="Pesquisar" border="0"></span>  
                                    <span class="Loader hide"><img src="/web-files/img/Loader.GIF" alt="Carregando..." title="Carregando..." border="0" style="width: 25px"/></span>
                                </div>

                                <h5>Endereço</h5>
                                <div class="row">
                                    <div class="col col-sm-8">
                                        <input type="text" class="form-control" id="logradouro" name="logradouro" maxlength="140" value="Estrada São Mateus" placeholder="Endereço"/>
                                    </div>
                                    <div class="col col-sm-4">
                                        <input type="text" class="form-control" id="numero" name="numero" maxlength="5" value="111" placeholder="Nº" onkeypress="return formataNumDV(event, this, 6);"/>
                                    </div>
                                </div>

                                <h5>Completemento</h5>
                                <input type="text" class="form-control" id="complemento" name="complemento" maxlength="100" value="" placeholder="Complemento"/>

                                <h5>Bairro</h5>
                                <input type="text" class="form-control" id="bairro" name="bairro" maxlength="50" value="Jardim Primavera" placeholder="Bairro"/>

                                <h5>Cidade / Estado</h5>
                                <div class="row">
                                    <div class="col col-sm-8">
                                        <input type="text" class="form-control" id="cidade" name="cidade" maxlength="80" value="Duque de Caxias" placeholder="Cidade"/>
                                    </div>
                                    <div class="col col-sm-4">
                                        <input type="text" class="form-control" id="estado" name="estado" maxlength="2" value="RJ" placeholder="UF"/>
                                    </div>
                                </div>
                                <br/>    
                                <p><button type="submit" class="btn btn-primary" name="enviar">ENVIAR</button></p>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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

</div>

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
<script type="text/javascript" src="/web-files/animatescroll.js-master/animatescroll.js"></script>
<script type="text/javascript" src="/web-files/js/default.js"></script>


<!-- Metis Menu Plugin JavaScript -->
<script src="/application/templates/startbootstrap-sb-admin-2-1.0.5/bower_components/metisMenu/dist/metisMenu.min.js"></script>



<!-- Custom Theme JavaScript -->
<script src="/application/templates/startbootstrap-sb-admin-2-1.0.5/dist/js/sb-admin-2.js"></script>

<script type="text/javascript">
    if (window.hljs) {
        hljs.tabReplace = '    ';
        hljs.initHighlightingOnLoad();
    }
</script>


</body>
</html>
<?php }} ?>
