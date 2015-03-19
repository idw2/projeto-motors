<?php /*%%SmartyHeaderCode:1357689385490894a7365b8-93408726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f533fde14221f0e0339ca8db278ce59bedb11c5' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/admin/vender_carro.tpl',
      1 => 1413820964,
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
    'd49f3fafbdac7d616bb903f1ecf7ac4a27e811be' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/admin/tinymce_1.tpl',
      1 => 1413820958,
      2 => 'file',
    ),
    'a29bf96d5c7e1f92958d242dec199088cca5e172' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/admin/footer.tpl',
      1 => 1413820949,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1357689385490894a7365b8-93408726',
  'variables' => 
  array (
    'language' => 0,
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5490894aad1e39_00916773',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5490894aad1e39_00916773')) {function content_5490894aad1e39_00916773($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Minha Concessionária | Venda seu carro</title>
        
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
        <li  class="active" ><a href="/pt/html/vender_carro">Venda seu carro</a></li>
    </ul>
    <hr>
    <h4 class="heading">Veículos</h4>
    <ul class="nav">
        <li  class="" ><a href="/pt/veiculos/veiculos_lista">Lista</a></li>
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
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">

            <form class="navbar-form navbar-left" style="width: 100%" action="/pt/html/vender_carro" method="post">
                <h2><span class="label label-default">Venda seu carro</span></h2>
                <br/>
                <p><textarea class="form-control" rows="25" style="min-width: 100%" id="conteudo" name="conteudo"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce venenatis fringilla pharetra. Integer viverra, massa non blandit tempus, erat lacus lobortis diam, a varius ante metus pellentesque leo. Sed a sodales nunc. Donec et posuere sem, a faucibus arcu. Phasellus nec justo in nibh pretium sollicitudin id ac quam. Nam pharetra mauris eget commodo hendrerit. Fusce pellentesque ac lectus sed dapibus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis quis turpis sit amet nulla mattis facilisis eu ut diam. Pellentesque ut adipiscing dui. Quisque ultrices mollis lectus ut feugiat. Vestibulum vitae ipsum nisi.</p>
<p>Fusce scelerisque augue sit amet metus feugiat, eu euismod quam tristique. Mauris aliquet elit lectus, ac posuere turpis venenatis et. Cras commodo quis nibh nec dignissim. Nunc porta libero at lorem auctor feugiat. Vestibulum accumsan commodo tortor sit amet ullamcorper. Ut eu ultricies augue. Nam nec justo magna. Sed interdum lacus nec quam faucibus, in luctus odio vulputate. Duis sed mattis diam. In euismod non turpis non imperdiet.</p>
<p>Donec nec eros facilisis, vulputate sem in, scelerisque diam. Vestibulum convallis porta mauris et ornare. Ut sit amet porta nunc. Proin rutrum mattis purus auctor volutpat. Nunc facilisis commodo odio, at lobortis neque dictum ut. Vivamus ac pulvinar metus. Nulla non faucibus nisl, vitae laoreet lorem. Morbi et nisi ipsum. Duis ac felis ut ante feugiat gravida. Integer malesuada vitae justo sollicitudin vestibulum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent malesuada dignissim arcu vitae consequat. Maecenas ut turpis felis. Donec vel enim et leo porttitor sollicitudin. Integer pharetra risus dolor, sit amet consectetur massa ultrices quis. Suspendisse potenti.</p>
<p>Sed semper dignissim pellentesque. Nullam mattis lobortis mauris, ac ullamcorper dui dapibus et. Suspendisse volutpat bibendum orci, non dapibus sapien rhoncus eget. Aenean nec feugiat nisl. Morbi pretium lacus ac diam sodales, in semper enim rhoncus. Phasellus imperdiet ipsum eget aliquam lobortis. Etiam cursus, turpis aliquet tempor elementum, dolor libero eleifend velit, non congue sapien felis id magna. Vestibulum iaculis dui velit, eget dapibus eros ultrices et. Donec nec libero ac sem convallis faucibus.</p>
<p>Nulla eu lacinia dui. Nam porttitor convallis libero, ac tincidunt urna accumsan ut. Cras sit amet imperdiet est. Pellentesque porttitor malesuada leo vitae egestas. Sed eget magna vel mauris consequat imperdiet et ut est. Quisque adipiscing varius odio, vel sodales justo varius sit amet. Integer vitae adipiscing purus. In eu magna at justo hendrerit lacinia. Nulla consequat mi placerat ante mattis pulvinar. Duis bibendum, libero sit amet sollicitudin iaculis, ante eros dapibus nisi, in fringilla ante leo id neque. Donec vitae urna at quam commodo vestibulum. Proin ac sagittis massa. Aenean adipiscing lacus scelerisque porttitor vulputate.</p></textarea></p>
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

<script>
    $(function() {
        $("[data-toggle='tooltip']").tooltip();
    });
</script>
</body>
</html><?php }} ?>
