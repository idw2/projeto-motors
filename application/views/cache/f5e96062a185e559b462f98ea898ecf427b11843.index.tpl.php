<?php /*%%SmartyHeaderCode:48751846253f274686a34f0-83560279%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5e96062a185e559b462f98ea898ecf427b11843' => 
    array (
      0 => '/home/storage/e/be/ce/designlab2/public_html/veiculos/application/views/admin/index.tpl',
      1 => 1408109253,
      2 => 'file',
    ),
    '71b9ba19b7ba381638a98ac68fdf5be84c14099e' => 
    array (
      0 => '/home/storage/e/be/ce/designlab2/public_html/veiculos/application/views/admin/header.tpl',
      1 => 1408395751,
      2 => 'file',
    ),
    '004797ff37e28bf242d1fe266a69d059889deb38' => 
    array (
      0 => '/home/storage/e/be/ce/designlab2/public_html/veiculos/application/views/admin/footer.tpl',
      1 => 1408039793,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48751846253f274686a34f0-83560279',
  'variables' => 
  array (
    'erro' => 0,
    'sucesso' => 0,
    'language' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53f274687ca912_58229451',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f274687ca912_58229451')) {function content_53f274687ca912_58229451($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Minha Concessionária | Painel administrativo</title>


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

<div class="container">
    <div class="row box-login">

        <div class="col-sm-4"> </div>
        <div class="col-sm-4">

            
                <div class="alert alert-success" role="alert"><strong>Atenção: </strong>Preencher todos os campos!</div>

            
            <img class="area-restrita img-responsive center-block" src="/web-files/img/logo.png" alt="" border="0" title="" /><br/>
            <form class="form-horizontal" role="form" method="post" action="/en/admin/login">
                <div class="input-group input-group-lg">
                    <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" value=""/>
                    <span class="input-group-addon"><i class="fa fa-reply-all">&nbsp</i></span>
                </div>
                <br/>
                <div class="input-group input-group-lg">
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha"/>
                    <span class="input-group-addon"><i class="fa fa-pencil">&nbsp</i></span>
                </div>	
                <br/>
                <div class="input-group input-group-lg">
                    <button type="submit" class="btn btn-primary btn-lg" role="button">Entrar</button>
                </div>						
            </form>
        </div>
        <div class="col-sm-4">  </div>

    </div>
</div>


</body>
</html><?php }} ?>
