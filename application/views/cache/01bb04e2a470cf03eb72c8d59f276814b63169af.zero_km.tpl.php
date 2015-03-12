<?php /*%%SmartyHeaderCode:150340256453f2747e83e826-58223047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01bb04e2a470cf03eb72c8d59f276814b63169af' => 
    array (
      0 => '/home/storage/e/be/ce/designlab2/public_html/veiculos/application/views/admin/zero_km.tpl',
      1 => 1408134269,
      2 => 'file',
    ),
    '71b9ba19b7ba381638a98ac68fdf5be84c14099e' => 
    array (
      0 => '/home/storage/e/be/ce/designlab2/public_html/veiculos/application/views/admin/header.tpl',
      1 => 1408395751,
      2 => 'file',
    ),
    'd030a24b43618f9298f1d4d7cf1039419109200a' => 
    array (
      0 => '/home/storage/e/be/ce/designlab2/public_html/veiculos/application/views/admin/navbar.tpl',
      1 => 1408133019,
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
  'nocache_hash' => '150340256453f2747e83e826-58223047',
  'variables' => 
  array (
    'language' => 0,
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53f2747ea5d4a1_83381019',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f2747ea5d4a1_83381019')) {function content_53f2747ea5d4a1_83381019($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Minha Concessionária | Zero KM</title>


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
            
            .ico-default-star, .ico-default-eye, .ico-default-trash, .ico-default-photo{
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
                background: #395aa4;
            }
            
            .ico-default-photo{
                background: #2ac364;
            }
            
            .ico-default-star a, .ico-default-eye a, .ico-default-trash a, .ico-default-photo a{ 
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
            <li  class="" ><a href="/en/admin/welcome">Home</a></li>
            <div class="panel-heading"><h4>Páginas</h4></div>
            <li  class="" ><a href="/en/html/empresa">Empresa</a></li>
            <li  class="active" ><a href="/en/html/zero_km">Zero KM</a></li>
            <li  class="" ><a href="/en/html/seminovos">Seminovos</a></li>              
            <li  class="" ><a href="/en/html/financiamento">Financie</a></li>              
            <li  class="" ><a href="/en/html/vender_carro">Venda seu carro</a></li>              
            <div class="panel-heading"><h4>Veículos</h4></div>
            <li  class="" ><a href="/en/veiculos/veiculos_lista">Lista</a></li>              
            <div class="panel-heading"><h4>Serviços</h4></div>
            <li  class="" ><a href="/en/admin/alterar_senha">Alterar senha</a></li>              
            <li  class="" ><a href="/en/admin/logout">Sair</a></li>              
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
            <form class="navbar-form navbar-left" style="width: 100%" action="/en/html/zero_km" method="post">
                <h2><span class="label label-default">Zero KM</span></h2>
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

</body>
</html><?php }} ?>
