<?php /*%%SmartyHeaderCode:117949598054b6974ac9f7a3-28965210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eba7b2da259dd3a83f12b08f6c4b8c8ee08bffb5' => 
    array (
      0 => '/home/dlab34/motors.designlab.com.br/application/views/vender_carro.tpl',
      1 => 1419880834,
      2 => 'file',
    ),
    'cfff585caac15c6021ec752aed3dc0e6d9bcccd2' => 
    array (
      0 => '/home/dlab34/motors.designlab.com.br/application/views/header.tpl',
      1 => 1420652464,
      2 => 'file',
    ),
    '268b9b5027e6f20822dd9018df4a27668902fb95' => 
    array (
      0 => '/home/dlab34/motors.designlab.com.br/application/views/navbar.tpl',
      1 => 1421246331,
      2 => 'file',
    ),
    'f61d33cad681b2395a1dc124ad3a08f731e2df75' => 
    array (
      0 => '/home/dlab34/motors.designlab.com.br/application/views/logo.tpl',
      1 => 1419881846,
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
      1 => 1419880839,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117949598054b6974ac9f7a3-28965210',
  'variables' => 
  array (
    'language' => 0,
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54b6974b073799_47287763',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b6974b073799_47287763')) {function content_54b6974b073799_47287763($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>DesignLab - Motors | Venda seu carro</title>
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    
        <link rel="icon" type="image/vnd.microsoft.icon" href="/web-files/img/favicon.ico"/>
        <link rel="shortcut icon" type="image/x-icon" href="/web-files/img/favicon.ico"/>
        <link rel="stylesheet" type="text/css" href="/web-files/font-awesome-4.1.0/css/font-awesome.css">
        <link rel="stylesheet" href="/web-files/css/material-design-iconic-font.min.css"/>
        <link rel="stylesheet" href="/web-files/bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" href="/web-files/bootstrap/css/bootstrap-theme.css"/>		
        <link rel="stylesheet" href="/web-files/css/docs.min.css"/>
        <link rel="stylesheet" href="/web-files/css/style.css"/>
        <link rel="stylesheet" href="/web-files/css/admin.css"/>

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
    
    
    <img class="area-restrita img-responsive center-block" src="/web-files/img/brand.png" alt="" border="0" title="" />
    
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
        <li  class="" ><a href="/pt/html/configuracao">Configuração</a></li>
        <li  class="" ><a href="/pt/html/logomarca">Logomarca</a></li>
        
    </ul>
    <hr>
    <h4 class="heading">Serviços</h4>
    <ul class="nav">
        <li  class="" ><a href="/pt/admin/alterar-senha">Alterar senha</a></li>
        <li  class="" ><a href="/pt/admin/meus-dados/8ad75cb3cbab9f97652f34423209818f">Meus Dados</a></li>
        <li  class="" ><a href="/pt/admin/logout">Sair</a></li>
    </ul>
</nav>
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="pull-left">
                
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">

            <form class="navbar-form navbar-left" style="width: 100%" action="/pt/html/vender_carro" method="post">
                <h2><span class="label label-default">Venda seu carro</span></h2>
                <br/>
                <p><textarea class="form-control" rows="25" style="min-width: 100%" id="conteudo" name="conteudo"></textarea></p>
                <p><button type="submit" class="btn btn-primary" name="enviar">ENVIAR</button></p>

            </form>

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
<script type="text/javascript" src="/web-files/js/default.js"></script>

<script type="text/javascript">
    if (window.hljs) {
        hljs.tabReplace = '    ';
        hljs.initHighlightingOnLoad();
    }
</script>


</body>
</html><?php }} ?>
