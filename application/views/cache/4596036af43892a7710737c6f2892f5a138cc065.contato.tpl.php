<?php /*%%SmartyHeaderCode:210692232753f274618737a7-50104721%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4596036af43892a7710737c6f2892f5a138cc065' => 
    array (
      0 => '/home/storage/e/be/ce/designlab2/public_html/veiculos/application/views/contato.tpl',
      1 => 1408049039,
      2 => 'file',
    ),
    'a1b9636c01ca0d0db985c72ea591e6ab24f5cad0' => 
    array (
      0 => '/home/storage/e/be/ce/designlab2/public_html/veiculos/application/views/header.tpl',
      1 => 1408394175,
      2 => 'file',
    ),
    'acb01a2a147296e4290a5c10339c262c4d0409a0' => 
    array (
      0 => '/home/storage/e/be/ce/designlab2/public_html/veiculos/application/views/navbar.tpl',
      1 => 1408106407,
      2 => 'file',
    ),
    '4f18aabdddd2ced88024019cf7d2ae6abcdacedf' => 
    array (
      0 => '/home/storage/e/be/ce/designlab2/public_html/veiculos/application/views/footer.tpl',
      1 => 1408395147,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210692232753f274618737a7-50104721',
  'variables' => 
  array (
    'erro' => 0,
    'sucesso' => 0,
    'nome' => 0,
    'email' => 0,
    'assunto' => 0,
    'mensagem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53f27461a32671_24245627',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f27461a32671_24245627')) {function content_53f27461a32671_24245627($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

  <head>
    <meta charset="UTF-8">
    <title>Minha Concessionária | Fale conosco</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">


    <link rel="icon" type="image/vnd.microsoft.icon" href="/web-files/img/favicon.ico"/>
    <link rel="shortcut icon" type="image/x-icon" href="/web-files/img/favicon.ico"/>

    <link rel="stylesheet" href="/web-files/font-awesome-4.1.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="/web-files/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="/web-files/bootstrap/css/bootstrap-theme.css"/>		
    <link rel="stylesheet" href="/web-files/css/docs.min.css"/>
    <link rel="stylesheet" href="/web-files/css/style.css?v=2"/>

    <script language="javascript" src="/web-files/js/funcoes.js"></script>
    <script language="javascript" src="/web-files/js/jquery-2.1.1.min.js"></script>
    <script language="javascript" src="/web-files/js/jQuery-Mask-Plugin.js"></script>
    <script language="javascript" src="/web-files/bootstrap/js/bootstrap.js"></script>


  </head>
  <body>

    <div class="container">
      <div class="row" style="padding: 2% 0">
        <div class="col-sm-7 col-md-8">
          <div class="brand auto-img"><a href="/en/"><img src="/web-files/img/logo.png" alt="" border="0" title="" class="img-responsive"/></a></div>
        </div>
        <div class="col-sm-5 col-md-4"> 
          <form class="navbar-form navbar-right" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Pesquisa">
              <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="container">
      <nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">

        <li  class="" ><a href="/en/">Home</a></li>
        <li  class="" ><a href="/en/informacoes/empresa/">Empresa</a></li>            
        <li  class="" ><a href="/en/informacoes/zero_km/">Zero KM</a></li>           
        <li  class="" ><a href="/en/informacoes/seminovos/">Seminovos</a></li>           
        <li  class="" ><a href="/en/informacoes/financiamento/">Financie</a></li>            
        <li  class="" ><a href="/en/informacoes/vender_carro/">Venda seu carro</a></li>            
        <li  class="active" ><a href="/en/informacoes/contato/">Contato</a></li>           

    </ul>
</div>
      </nav>
    </div>


<div class="container">

    <div class="row">
        <div class="col-md-6">

            <div class="jumbotron">
                <div class="container">

                    <!-- h1 e p que já tínhamos -->
                    <h2>Ainda está com problemas?</h2>
                    <br/>
                    <p><strong>E-mail:</strong><br/>
                        <span style='font-size: 20'>contato@torresauto.com.br</span>
                    </p><br/>
                    <br/>
                    <p><strong>Obs:</strong><br/>O prazo de respostas para as solicitações é de até 24h.</p><br/>

                </div>
            </div>
        </div> 

        <div class="col-md-6">
            <form class="navbar-form navbar-left" style="width: 100%" action="/registro/contato" method="post">

                
                    <div class="alert alert-success" role="alert"><strong>Atenção: </strong>Preencher todos os campos!</div>

                
                <h2><span class="label label-default">Fale conosco</span></h2>
                <br/>
                <p><input type="text" class="form-control" style="min-width: 100%" id="nome" name="nome" maxlength="40" value="" placeholder="Nome completo"/></p>
                <p><input type="text" class="form-control" style="max-width: 47%" id="email" name="email" maxlength="70" value="" placeholder="E-mail"/></p>
                <p><input type="text" class="form-control" style="min-width: 100%" id="assunto" name="assunto" maxlength="70" value="" placeholder="Assunto"/></p>
                <p><textarea class="form-control" rows="5" style="min-width: 100%" id="mensagem" name="mensagem"></textarea></p>
                <p><button type="submit" class="btn btn-primary" name="enviar">ENVIAR</button></p>

            </form>
        </div>
    </div>
</div>
<div style="clear: both;"></div>

<div class="bs-docs-featurette x-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-4"> 
                <h3 class="mH3">Categorias</h3>
                <div class="m-footer">
                    <a href="/en/informacoes/zero_km">Novidades</a><br/>
                    <a href="/en/informacoes/seminovos">Seminovos</a><br/>
                    <a href="/en/informacoes/zero_km">Zero km</a><br/>
                    <a href="/en/informacoes/financiamento">Financie</a><br/>
                    <a href="/en/informacoes/vender_carro">Venda seu carro</a><br/>
                </div>
            </div>
            <div class="col-sm-4"> 
                <h3 class="mH3">Informações</h3>
                <div class="m-footer">
                    <a href="/en/informacoes/contato">Fale com a gente</a><br/>
                    <a href="/en/informacoes/empresa">Institucional</a><br/>

                    <h4>
                        <h4 style="color: #395aa4; margin-bottom: 8%;">Siga-nos</h4>
                        <div class="redes-sociais">
                            <a target="_blank" href="http://www.facebook.com/estilocarioca"><i class="facebook fa fa-facebook" style="padding: 4% 5% 4% 7%">&nbsp</i></a>
                            <a target="_blank" href="http://www.facebook.com/estilocarioca"><i class="twitter fa fa-twitter">&nbsp</i></a>
                            <a target="_blank" href="http://www.facebook.com/estilocarioca"><i class="instagran fa fa-instagram">&nbsp</i></a>
                        </div>
                    </h4>
                    <br/>

                </div>
            </div>
            <div class="col-sm-4"> 
                <h3 class="mH3">Informações da Loja</h3>
                <div class="m-footer">
                    <span>Loja do Posto Ipiranga</span><br/>   
                    <span>Av. das Américas, 0000</span><br/>   
                    <h3 class="mH3">
                        <span style="color: #395aa4">
                            21 3333-4444<br/>
                            21 7822-0000<br/>
                            53*87652<br/>
                            <span style="font-size: 13px; color: #5d5d5d; text-transform: none; font-family: Helvetica Neue, Helvetica, Arial, sans-serif;">E-mail: contato@torresauto.com.br</span>
                        </span>
                    </h3>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="direitos">
    <div class="container">
        Desenvolvido por <strong><a href="http://www.designlab.com.br" target="_blank">DesignLab</a></strong>
    </div> 
</div>

</body>
</html><?php }} ?>
