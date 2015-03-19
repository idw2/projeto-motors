<?php /*%%SmartyHeaderCode:130078027953f2511c42a295-53201087%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31e60d49b1004e362d763dc0f1cb76cb0f26c01a' => 
    array (
      0 => '/home/storage/e/be/ce/designlab2/public_html/veiculos/application/views/admin/alterar_senha.tpl',
      1 => 1408134364,
      2 => 'file',
    ),
    '71b9ba19b7ba381638a98ac68fdf5be84c14099e' => 
    array (
      0 => '/home/storage/e/be/ce/designlab2/public_html/veiculos/application/views/admin/header.tpl',
      1 => 1408135278,
      2 => 'file',
    ),
    'd030a24b43618f9298f1d4d7cf1039419109200a' => 
    array (
      0 => '/home/storage/e/be/ce/designlab2/public_html/veiculos/application/views/admin/navbar.tpl',
      1 => 1408133019,
      2 => 'file',
    ),
    '7a0d90734db8dd177babe39169b29f1877d718fc' => 
    array (
      0 => '/home/storage/e/be/ce/designlab2/public_html/veiculos/application/views/admin/logo.tpl',
      1 => 1408126315,
      2 => 'file',
    ),
    'c25b18df076758828e34a2efbd3f6e0c3b439fcd' => 
    array (
      0 => '/home/storage/e/be/ce/designlab2/public_html/veiculos/application/views/admin/tinymce_1.tpl',
      1 => 1408125865,
      2 => 'file',
    ),
    '004797ff37e28bf242d1fe266a69d059889deb38' => 
    array (
      0 => '/home/storage/e/be/ce/designlab2/public_html/veiculos/application/views/admin/footer.tpl',
      1 => 1408039793,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130078027953f2511c42a295-53201087',
  'variables' => 
  array (
    'language' => 0,
    'erro' => 0,
    'sucesso' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53f2511c6d51a6_07177269',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f2511c6d51a6_07177269')) {function content_53f2511c6d51a6_07177269($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Minha Concessionária | Alterar senha</title>


        <link rel="icon" type="image/vnd.microsoft.icon" href="/web-files/img/favicon.ico"/>
        <link rel="shortcut icon" type="image/x-icon" href="/web-files/img/favicon.ico"/>

        <link rel="stylesheet" href="/web-files/font-awesome-4.1.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="/web-files/bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" href="/web-files/bootstrap/css/bootstrap-theme.css"/>		
        <link rel="stylesheet" href="/web-files/css/docs.min.css"/>
        <link rel="stylesheet" href="/web-files/css/style.css"/>

        <script language="javascript" src="/web-files/js/funcoes.js"></script>
        <script language="javascript" src="/web-files/js/jquery-2.1.1.min.js"></script>
        <script language="javascript" src="/web-files/js/jQuery-Mask-Plugin.js"></script>
        <script language="javascript" src="/web-files/bootstrap/js/bootstrap.js"></script>

        <style>
            html,body{
                height: 100%;
            }

            .box-login{
                margin-top: 25%
            }
            .area-restrita{
                    margin-bottom: 4%; 
                    display: inline-block;
            }
            
            .panel-heading{
                    color: #e9c92e; 
                    font-family: "Arial Black", Gadget, sans-serif;
            }
            
            .nav > li > a:hover, .nav > li > a:focus {
                text-decoration: none;
                background-color: #e9c92e; 
                color: #395aa4;
            }
            
            .nav > li > a {
                position: relative; 
                display: block; 
                padding: 10px 15px; 
                color: #fff; 
                text-transform: uppercase; 
            }
            
            .nav > li.active > a{ 
                color: #395aa4; 
                background: #e9c92e; 
                text-transform: uppercase
            }

            .sidebar{
                position: absolute;
                top:0;
                bottom:0;
                left:0;
                width: 250px;
                background: #395aa4;
            }
            .content{
                position: absolute;
                top:0;
                bottom:0;
                left:250px;
                right: 0;
                background: #fff;
                padding: 0 15px;
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
        </style>

    </head>
    <body>

<div class="sidebar">
    <nav class="navbar navbar-default" role="navigation">

    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>

    <div class="collapse navbar-collapse" style="padding-bottom: 3%">
        <div class="panel-heading"><h4>Painel Administrativo</h4></div>
        <ul class="nav nav-stacked">
            <li  class="" ><a href="/pt/admin/welcome">Home</a></li>
            <div class="panel-heading"><h4>Páginas</h4></div>
            <li  class="" ><a href="/pt/html/empresa">Empresa</a></li>
            <li  class="" ><a href="/pt/html/zero_km">Zero KM</a></li>
            <li  class="" ><a href="/pt/html/seminovos">Seminovos</a></li>              
            <li  class="" ><a href="/pt/html/financiamento">Financie</a></li>              
            <li  class="" ><a href="/pt/html/vender_carro">Venda seu carro</a></li>              
            <div class="panel-heading"><h4>Veículos</h4></div>
            <li  class="" ><a href="/pt/veiculos/veiculos_lista">Lista</a></li>              
            <div class="panel-heading"><h4>Serviços</h4></div>
            <li  class="" ><a href="/pt/admin/alterar_senha">Alterar senha</a></li>              
            <li  class="" ><a href="/pt/admin/logout">Sair</a></li>              
        </ul>           

    </div><!-- /.navbar-collapse -->
</nav>
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="pull-left">
                <img class="area-restrita img-responsive center-block" src="/web-files/img/logo.png" alt="" border="0" title="" />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">

            <form class="navbar-form navbar-left" style="width: 100%" action="/pt/admin/alterar_senha" method="post">
                <h2><span class="label label-default">Alterar senha</span></h2>
                <br/>
                
                    <div class="alert alert-success" role="alert"><strong>Atenção: </strong>Preencher todos os campos!</div>

                
                <br/>
                <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                    <input type="password" class="form-control" id="senha_atual" name="senha_atual" placeholder="Senha atual"/>
                    <span class="input-group-addon"><i class="fa fa-pencil">&nbsp</i></span>
                </div>	
                <br/>
                <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                    <input type="password" class="form-control" id="senha_nova" name="senha_nova" placeholder="Nova senha"/>
                    <span class="input-group-addon"><i class="fa fa-pencil">&nbsp</i></span>
                </div>	
                <br/>
                <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                    <input type="password" class="form-control" id="senha_repetir" name="senha_repetir" placeholder="Repetir senha"/>
                    <span class="input-group-addon"><i class="fa fa-pencil">&nbsp</i></span>
                </div>	
                <br/>
                <div class="input-group input-group-lg">
                    <button type="submit" class="btn btn-primary btn-lg" role="button">Entrar</button>
                </div>

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

</body>
</html><?php }} ?>
