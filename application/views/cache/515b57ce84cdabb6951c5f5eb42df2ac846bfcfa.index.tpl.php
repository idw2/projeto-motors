<?php /*%%SmartyHeaderCode:157464376454a1a75e5e3861-53285779%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '515b57ce84cdabb6951c5f5eb42df2ac846bfcfa' => 
    array (
      0 => '/home/dlab34/motors.designlab.com.br/application/views/admin/index.tpl',
      1 => 1419874182,
      2 => 'file',
    ),
    '8cc17996fa449ffebf304f8116608e3edf98003c' => 
    array (
      0 => '/home/dlab34/motors.designlab.com.br/application/views/admin/header.tpl',
      1 => 1419874180,
      2 => 'file',
    ),
    '7b75e8c1ec494c1da53a98894ec7b650844546f0' => 
    array (
      0 => '/home/dlab34/motors.designlab.com.br/application/views/admin/footer.tpl',
      1 => 1419874176,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157464376454a1a75e5e3861-53285779',
  'variables' => 
  array (
    'erro' => 0,
    'sucesso' => 0,
    'language' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54a1a75e821854_23484601',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a1a75e821854_23484601')) {function content_54a1a75e821854_23484601($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Minha Concessionária | Painel administrativo</title>
        
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

            .ico-default-novidade, .ico-default-star, .ico-default-eye, .ico-default-trash, .ico-default-photo, .ico-default-edit{
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

            .ico-default-novidade a, .ico-default-star a, .ico-default-eye a, .ico-default-trash a, .ico-default-photo a, .ico-default-edit a{ 
                color: #fff;
                text-decoration: none;
            } 

            .ico-default-novidade a:hover, .ico-default-star a:hover, .ico-default-eye a:hover, .ico-default-trash a:hover, .ico-default-photo a:hover{ 
                color: #fff;
                text-decoration: none;
            } 

            .ico-default-novidade.desative, .ico-default-star.desative, .ico-default-eye.desative, .ico-default-trash.desative, .ico-default-photo.desative{
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

<div class="container">
    <div class="row box-login">

        <div class="form-login">

            
                

            
            <img class="area-restrita img-responsive center-block" src="/web-files/img/brand.png" alt="" border="0" title="" width="280" /><br/>
            <form role="form" method="post" action="/pt/admin/login">
                <div class="form-row input-group-2">
                    <span class="input-group-addon"><i class="md-email"></i></span>
                    <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" value=""/>
                </div>
                <div class="form-row input-group-2">
                    <span class="input-group-addon"><i class="md-lock"></i></span>
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha"/>
                </div>
                <div class="form-row">
                    <button type="submit" class="btn btn-primary" role="button">Entrar</button>
                </div>						
            </form>
        </div>

                <div class="login-footer-copy">&copy; <a href="http://designlab.com.br" target="_blank">DesignLab</a></div>

    </div>
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
<script type="text/javascript" src="/web-files/js/default.js"></script>

<script type="text/javascript">
    if (window.hljs) {
        hljs.tabReplace = '    ';
        hljs.initHighlightingOnLoad();
    }
</script>


</body>
</html><?php }} ?>
