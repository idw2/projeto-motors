<?php /*%%SmartyHeaderCode:986906401545bb60053dd75-34113627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c7ec318710b1e4df7bb15a01fcba3ac37f2cb24' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/admin/mobile.tpl',
      1 => 1415295974,
      2 => 'file',
    ),
    '895c11a510111cf02acda7f5e2474f03ccd17970' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/admin/header.tpl',
      1 => 1413820951,
      2 => 'file',
    ),
    '5d7c8ebc10119b479d6c94f4d1aacfae16187fa2' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/admin/navbar.tpl',
      1 => 1413820955,
      2 => 'file',
    ),
    '65eb07aab22aa86b0b13eba4e2f9f998a9d4f3ed' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/admin/logo.tpl',
      1 => 1413820954,
      2 => 'file',
    ),
    '5d3aa1d25483761f39f45699375103e4dcd9520f' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/admin/search.tpl',
      1 => 1413820956,
      2 => 'file',
    ),
    'a29bf96d5c7e1f92958d242dec199088cca5e172' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/admin/footer.tpl',
      1 => 1413820949,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '986906401545bb60053dd75-34113627',
  'variables' => 
  array (
    'language' => 0,
    'produtos' => 0,
    'produto' => 0,
    'key' => 0,
    'item' => 0,
    'CODPRODUTO' => 0,
    'myDragClass' => 0,
    'DTA' => 0,
    'NOME' => 0,
    'CATEGORIA' => 0,
    'star' => 0,
    'dtq' => 0,
    'URL_AMIGAVEL' => 0,
    'eye' => 0,
    'stt' => 0,
    'url_del' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545bb600a214d2_09914476',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545bb600a214d2_09914476')) {function content_545bb600a214d2_09914476($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Minha Concessionária | Lista de veículos</title>
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    
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
                background: #395aa4;
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
            <li  class="active" ><a href="/pt/veiculos/veiculos_lista">Lista</a></li>              
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
            <form class="navbar-form navbar-right" role="search">
    <div class="form-group">
        <input type="text" class="search-input form-control" placeholder="Pesquisa">
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
    </div>
</form>



        </div>
    </div>
    <div class="row">
        <div class="col-md-12">

            <h2><span class="label label-default">Lista de veículos</span></h2>
            <br/>
            <a href="/pt/veiculos/cadastrar" class="btn btn-default navbar-btn"><i class="fa fa-automobile"></i> Cadastro de veículos</a>


            <div class="panel-default">


                <table class='table' id="table-1" cellspacing="0" cellpadding="2">
                     
                    

                                                         
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                 
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                 
                                
                                
                                
                                
                                  
                                                        
                                
                                
                            
                                    
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                             

                                                                                                     
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                 
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                                                                                                                                                      
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                                                                                                                                                      
                                  
                        
                        <tr id="D0068D3C5F908310A73CE5EF86429520" class="" style="cursor: move;" >

                            <td>27/08/2014 - 12h47</td>
                            <td>Corola 2013</td>
                            <td>Seminovos</td>
                            <td>

                                <span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><a href="/pt/veiculos/destaque/1/corola-2013"><i class="fa fa-star"></i></a></span>
                                <span class="ico-default-eye " data-toggle="tooltip" title="Status"><a href="/pt/veiculos/status/0/corola-2013"><i class="fa fa-eye"></i></a></span>
                                <span class="ico-default-edit" data-toggle="tooltip" title="Editar"><a href="/pt/veiculos/editar/corola-2013"><i class="fa fa-edit"></i></a></span>
                                <span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><a onclick="delete_produto('/pt/veiculos/delete/corola-2013')"><i class="fa fa-trash-o"></i></a></span>
                                <span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><a href="/pt/veiculos/fotos/corola-2013"><i class="fa fa-photo"></i></a></span>

                            </td>

                        </tr>
                        
                    

                                                         
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                 
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                 
                                
                                
                                
                                
                                  
                                                        
                                
                                
                            
                                    
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                             

                                                                                                     
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                 
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                                                                                                                                                      
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                                                                                                                                                      
                                  
                        
                        <tr id="17645C0991F1D9F21EA0FDB4BD993FF4" class="" style="cursor: move;" >

                            <td>27/08/2014 - 12h38</td>
                            <td>Corolla 2014</td>
                            <td>Seminovos</td>
                            <td>

                                <span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><a href="/pt/veiculos/destaque/1/corolla-2014"><i class="fa fa-star"></i></a></span>
                                <span class="ico-default-eye " data-toggle="tooltip" title="Status"><a href="/pt/veiculos/status/0/corolla-2014"><i class="fa fa-eye"></i></a></span>
                                <span class="ico-default-edit" data-toggle="tooltip" title="Editar"><a href="/pt/veiculos/editar/corolla-2014"><i class="fa fa-edit"></i></a></span>
                                <span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><a onclick="delete_produto('/pt/veiculos/delete/corolla-2014')"><i class="fa fa-trash-o"></i></a></span>
                                <span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><a href="/pt/veiculos/fotos/corolla-2014"><i class="fa fa-photo"></i></a></span>

                            </td>

                        </tr>
                        
                    

                                                         
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                 
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                 
                                
                                
                                
                                
                                  
                                                        
                                
                                
                            
                                    
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                             

                                                                                                     
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                 
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                                                                                                                                                      
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                                                                                                                                                      
                                  
                        
                        <tr id="C7D196C4FF0B3901A3105EB0975A2779" class="" style="cursor: move;" >

                            <td>27/08/2014 - 10h44</td>
                            <td>HONDA CITY 2012</td>
                            <td>Novidades</td>
                            <td>

                                <span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><a href="/pt/veiculos/destaque/1/honda-city-2012"><i class="fa fa-star"></i></a></span>
                                <span class="ico-default-eye " data-toggle="tooltip" title="Status"><a href="/pt/veiculos/status/0/honda-city-2012"><i class="fa fa-eye"></i></a></span>
                                <span class="ico-default-edit" data-toggle="tooltip" title="Editar"><a href="/pt/veiculos/editar/honda-city-2012"><i class="fa fa-edit"></i></a></span>
                                <span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><a onclick="delete_produto('/pt/veiculos/delete/honda-city-2012')"><i class="fa fa-trash-o"></i></a></span>
                                <span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><a href="/pt/veiculos/fotos/honda-city-2012"><i class="fa fa-photo"></i></a></span>

                            </td>

                        </tr>
                        
                    

                                                         
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                 
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                 
                                
                                
                                
                                
                                  
                                                        
                                
                                
                            
                                    
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                             

                                                                                                     
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                 
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                                                                                                                                                      
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                  
                                                        
                                
                                
                                
                                
                                
                                
                                                                                                                                                                      
                                  
                        
                        <tr id="526AA56C0C4282C8BCB6311072ACDBD7" class="" style="cursor: move;" >

                            <td>28/08/2014 - 05h14</td>
                            <td>Kia Motors Picanto</td>
                            <td>Seminovos</td>
                            <td>

                                <span class="ico-default-star desative" data-toggle="tooltip" title="Destaque"><a href="/pt/veiculos/destaque/1/kia-motors-picanto"><i class="fa fa-star"></i></a></span>
                                <span class="ico-default-eye " data-toggle="tooltip" title="Status"><a href="/pt/veiculos/status/0/kia-motors-picanto"><i class="fa fa-eye"></i></a></span>
                                <span class="ico-default-edit" data-toggle="tooltip" title="Editar"><a href="/pt/veiculos/editar/kia-motors-picanto"><i class="fa fa-edit"></i></a></span>
                                <span class="ico-default-trash" data-toggle="tooltip" title="Excluir"><a onclick="delete_produto('/pt/veiculos/delete/kia-motors-picanto')"><i class="fa fa-trash-o"></i></a></span>
                                <span class="ico-default-photo" data-toggle="tooltip" title="Imagens"><a href="/pt/veiculos/fotos/kia-motors-picanto"><i class="fa fa-photo"></i></a></span>

                            </td>

                        </tr>
                        
                                        <!--                
                        </ul>
                    -->   
                </table>
            </div>

        </div>
    </div>
</div>
<script>
    function delete_produto(url) {
        if (confirm('ATENÇÃO: Esta ação não poderá ser desfeita!\n Deseja continuar?')) {
            window.location = url;
            return true;
        } else {
            return false;
        }
    }
    
    /*
    var group = $("ul.limited_drop_targets").sortable({
        group: 'limited_drop_targets',
        isValidTarget: function(item, container) {
            if (item.is(".highlight"))
                return true;
            else {
                return item.parent("ul")[0] == container.el[0]
            }
        },
        onDrop: function(item, container, _super) {

            $('#serialize_output').text(group.sortable("serialize").get().join("\n"));
            _super(item, container)
            var keys = null;
            $("ul.limited_drop_targets").find("li").each(function(i) {
                if (jQuery(this).attr("id") != null) {
                    (i == 0) ? keys = jQuery(this).attr("id") + ";" : keys += jQuery(this).attr("id") + ";";
                }
            });

            $.ajax({
                type: 'post',
                data: "keys=" + keys,
                url: '/web-files/server/order_produtos.php',
                success: function(data) {
                    consolo.log(data);
                }
            });

        },
        serialize: function(parent, children, isContainer) {
            return isContainer ? children.join() : parent.text()
        },
        tolerance: 6,
        distance: 10
    });
    */

    $(document).ready(function() {
        $("#table-1").tableDnD({
            onDragClass: "myDragClass active",
            onDrop: function() {
                var keys = null;
                $("#table-1").find("tr").each(function(i) {
                    if (i % 2 == 1) {
                        jQuery(this).addClass('myDragClass');
                    } else {
                        jQuery(this).removeClass('myDragClass');
                    }

                    if (jQuery(this).attr("id") != null) {
                        (i == 0) ? keys = jQuery(this).attr("id") + ";" : keys += jQuery(this).attr("id") + ";";
                    }
                });

                $.ajax({
                    type: 'post',
                    data: "keys=" + keys,
                    url: '/web-files/server/order_produtos.php',
                    success: function(data) {
                        consolo.log(data);
                    }
                });
            }
        });

        $("#table-1").find("tr").each(function(i) {
            if (i % 2 == 1) {
                jQuery(this).addClass('myDragClass');
            }
        });
    });
</script>

<script>
    $(function() {
        $("[data-toggle='tooltip']").tooltip();
    });
</script>
</body>
</html><?php }} ?>
