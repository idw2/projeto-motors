<?php /*%%SmartyHeaderCode:48114357549074a4a97f87-20544871%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bead2484386ff524750d63b356eb935dbfcb9de' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/admin/editar.tpl',
      1 => 1413820945,
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
    '5d3aa1d25483761f39f45699375103e4dcd9520f' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/admin/search.tpl',
      1 => 1413820956,
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
  'nocache_hash' => '48114357549074a4a97f87-20544871',
  'variables' => 
  array (
    'language' => 0,
    'url_amigavel' => 0,
    'erro' => 0,
    'sucesso' => 0,
    'produto' => 0,
    'active_1' => 0,
    'active_2' => 0,
    'active_3' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_549074a4e898e1_37263893',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549074a4e898e1_37263893')) {function content_549074a4e898e1_37263893($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Minha Concessionária | Editar veículo</title>
        
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
        <li  class="" ><a href="/pt/html/vender_carro">Venda seu carro</a></li>
    </ul>
    <hr>
    <h4 class="heading">Veículos</h4>
    <ul class="nav">
        <li  class="active" ><a href="/pt/veiculos/veiculos_lista">Lista</a></li>
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

            <form class="navbar-form navbar-left" style="width: 100%" action="/pt/veiculos/editar/" method="post">

                <h2><span class="label label-default">Editar veículo</span></h2>
                <br/>
                <a href="/pt/veiculos/veiculos_lista" class="btn btn-default navbar-btn"><i class="fa fa-reply">&nbsp</i> Voltar</a>
                <br/>

                
                    <div class="alert alert-success" role="alert"><strong>Atenção: </strong>Preencher todos os campos!</div>

                
                <div class="row">

                    <div class="col-md-4">

                        <h4 class="panel-heading x-label">Veículo</h4>
                        <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                            <input type="text" class="form-control" id="preco" name="preco" placeholder="Preço" value="" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)"/>
                        </div>	
                        <br/>
                        <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                            <input type="text" class="form-control" id="nome" name="nome" maxlength="40" value="" placeholder="Nome"/>
                        </div>	
                        <h4 class="panel-heading x-label">Descrição</h4>
                        <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                            <input type="text" class="form-control" id="linha_1" name="linha_1" maxlength="40" value="" placeholder="Linha 1"/>
                        </div>	
                        <br/>
                        <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                            <input type="text" class="form-control" id="linha_2" name="linha_2" maxlength="40" value="" placeholder="Linha 2"/>
                        </div>	
                        <br/>
                        <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                            <input type="text" class="form-control" id="linha_3" name="linha_3" maxlength="40" value="" placeholder="Linha 3"/>
                        </div>	
                        <br/>
                        <h4 class="panel-heading x-label">Categoria</h4>
                        <div class="input-group input-group-lg">
                            
                                                             
                                
                                
                            <select name="categoria" class="form-control">
                                <option value="novidades" >Novidades</option>
                                <option value="zero_km" >Zero KM</option>
                                <option value="seminovos" selected>Seminovos</option>
                            </select>
                        </div>

                    </div>
                            
                    <div class="col-md-4">
                        <h4 class="panel-heading x-label">Propriedades</h4>
                        <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                            <input type="text" class="form-control" id="ano" name="ano" maxlength="9"  value="" placeholder="Ano"/>
                        </div>
                         <br/>
                        <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                            <input type="text" class="form-control" id="quilometragem" name="quilometragem" maxlength="40" value="" placeholder="Quilometragem" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)"/>
                        </div>
                          <br/>
                        <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                            <input type="text" class="form-control" id="cor" name="cor" maxlength="25" value="" placeholder="Cor"/>
                        </div>
                        <br/>
                        <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                            <input type="text" class="form-control" id="combustivel" name="combustivel" value="" maxlength="25" placeholder="Combustivel"/>
                        </div>
                        <br/>
                        <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                            <input type="text" class="form-control" id="portas" name="portas" maxlength="1" value="" placeholder="Nº de Portas" onkeypress="return formataNumDV(event, this, 1);"/>
                        </div>
                         <br/>
                        <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                            <input type="text" class="form-control" id="placa" name="placa" value="" maxlength="4" placeholder="Final da Placa"/>
                        </div>
                         <br/>
                        <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                            <input type="text" class="form-control" id="carroceria" name="carroceria" value="" maxlength="25" placeholder="Carroceria"/>
                        </div>
                    </div>        

                    <div class="col-md-4">


                        <div class="auto-img"><img src="/web-files/img/images/croqui.png" alt="" border="0" title="" class="img-responsive"/></div>
                        <div style="height: 110px">   
                            <div class="auto-price">R$ <span class="view-preco"></span></div>
                            <div class="auto-title view-nome"></div>
                            <div class="auto-descricao view-linha_1"></div>
                            <div class="auto-descricao view-linha_2"></div>
                            <div class="auto-descricao view-linha_3"></div>
                        </div>
                        <div>
                            <span class="m-ico"><img src="/web-files/img/images/cifrao.png" alt="" border="0" title="" class="img-responsive"/></span>    
                            <span class="m-ico"><img src="/web-files/img/images/document.png" alt="" border="0" title="" class="img-responsive"/></span>    
                            <span class="m-ico"><img src="/web-files/img/images/chat.png" alt="" border="0" title="" class="img-responsive"/></span>    
                            <span class="m-ico"><img src="/web-files/img/images/mail.png" alt="" border="0" title="" class="img-responsive"/></span>    
                            <span class="m-ico"><img src="/web-files/img/images/like.png" alt="" border="0" title="" class="img-responsive"/></span>    
                        </div>

                    </div>
                        
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="panel-heading x-label">Especificações</h4>
                            <p><textarea class="form-control" rows="25" style="min-width: 100%" id="especificacoes" name="especificacoes"></textarea></p>
                            <br/> <br/>
                            <div class="input-group input-group-lg">
                                <button type="submit" class="btn btn-primary btn-lg" role="button">Enviar</button>
                            </div>
                        </div>
                    </div>    
                    <br/> <br/>        
                </div>
                        
                <script>
                    $(document).ready(function() {

                        $("#preco").keyup(function() {
                            $(".view-preco").html($("#preco").val());
                        });

                        $("#nome").keyup(function() {
                            $(".view-nome").html($("#nome").val());
                        });

                        $("#linha_1").keyup(function() {
                            $(".view-linha_1").html($("#linha_1").val());
                        });

                        $("#linha_2").keyup(function() {
                            $(".view-linha_2").html($("#linha_2").val());
                        });

                        $("#linha_3").keyup(function() {
                            $(".view-linha_3").html($("#linha_3").val());
                        });

                    });
                </script>

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
