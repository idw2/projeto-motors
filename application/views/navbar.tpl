<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/{$language}/admin/welcome">{if strlen($session_codusuario) == 32}Username: {$session_username}{else}{$session_email}{/if}</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                {if strlen($session_codusuario) != 32}
                    <li><a href="/{$language}/admin/meus-dados/{strtolower($session_codconta)}"><i class="fa fa-user fa-fw"></i> Meus Dados</a></li>
                    {/if}      
                <li><a href="/{$language}/admin/alterar-senha"><i class="fa fa-key fa-fw"></i> Alterar Senha</a></li>
                    {*                <li><a href="/{$language}/html/configuracao"><i class="fa fa-gear fa-fw"></i> Configurações</a></li>*}
                <li class="divider"></li>
                <li><a href="/{$language}/admin/logout"><i class="fa fa-sign-out fa-fw"></i> Sair</a></li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">

                {include file="logo.tpl"}

                {if $page eq "contas"}
                    {include file="search.tpl"}
                {/if}

                {if $session_papel == "ADMINISTRADOR"}
                    <li {if $page eq "contas"} class="active"{/if}>
                        <a href="/{$language}/contas"><i class="fa fa-users fa-fw"></i> Lista de Contas</a>
                    </li>
                {/if}

                {if strlen($session_codusuario) != 32}
                    <li {if $page eq "usuarios_lista"} class="active"{/if}><a href="/{$language}/usuarios"><i class="fa fa-user fa-fw"></i> Lista de Usuários</a></li>
                {/if}
                
                <li {if $page eq "veiculos_lista"} class="active"{/if}>
                    <a href="/{$language}/veiculos/veiculos-lista"><i class="fa fa-automobile fa-fw"></i> Lista de Veículos</a>                    
                </li>

                {*<li {if $page eq "empresa"} class="active"{/if}>
                <a href="/{$language}/html/empresa"><i class="fa fa-wrench fa-fw"></i> A empresa</a>
                </li>


                <li {if $page eq "onde-estamos"} class="active"{/if}>
                <a href="/{$language}/html/onde-estamos"><i class="fa fa-map-marker fa-fw"></i> Onde estamos</a>
                </li>*}
                {*                 
                <li {if $page eq "logomarca"} class="active" {/if}>
                <a href="/{$language}/html/logomarca"><i class="fa fa-picture-o fa-fw"></i> Logomarca</a>
                </li>
                *}
                {*<li>
                <a href="/{$language}/contas"><i class="fa fa-dashboard fa-fw"></i> Lista de Contas</a>
                </li>*}
                {*<li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                <li>
                <a href="flot.html">Flot Charts</a>
                </li>
                <li>
                <a href="morris.html">Morris.js Charts</a>
                </li>
                </ul>
                <!-- /.nav-second-level -->
                </li>
                <li>
                <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                </li>
                <li>
                <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                </li>*}
                {*<li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                <li>
                <a href="panels-wells.html">Panels and Wells</a>
                </li>
                <li>
                <a href="buttons.html">Buttons</a>
                </li>
                <li>
                <a href="notifications.html">Notifications</a>
                </li>
                <li>
                <a href="typography.html">Typography</a>
                </li>
                <li>
                <a href="icons.html"> Icons</a>
                </li>
                <li>
                <a href="grid.html">Grid</a>
                </li>
                </ul>
                <!-- /.nav-second-level -->
                </li>*}
                {*<li>
                <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                <li>
                <a href="#">Second Level Item</a>
                </li>
                <li>
                <a href="#">Second Level Item</a>
                </li>
                <li>
                <a href="#">Third Level <span class="fa arrow"></span></a>
                <ul class="nav nav-third-level">
                <li>
                <a href="#">Third Level Item</a>
                </li>
                <li>
                <a href="#">Third Level Item</a>
                </li>
                <li>
                <a href="#">Third Level Item</a>
                </li>
                <li>
                <a href="#">Third Level Item</a>
                </li>
                </ul>
                <!-- /.nav-third-level -->
                </li>
                </ul>
                <!-- /.nav-second-level -->
                </li>*}
                {*<li>
                <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                <li>
                <a href="blank.html">Blank Page</a>
                </li>
                <li>
                <a href="login.html">Login Page</a>
                </li>
                </ul>
                <!-- /.nav-second-level -->
                </li>*}
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>


<!--
<nav class="sidebar-nav">

    <div style="background: #fff; margin: 0 11px; padding: 32px; height: 98px;"><a href="/{$language}/html/logomarca"><span id="logo_default"><img class="area-restrita img-responsive center-block" src="{if $logomarca == ""}/web-files/logomarcas/logo_default.png{else}{$logomarca}{/if}" alt="" border="0" title="" /></span></a></div>

    <hr>
    <ul class="nav">
        <li {if $page eq "welcome"} class="active" {else} class="" {/if}><a href="/{$language}/admin/welcome">Home</a></li>
    </ul>
    <hr>

{if $session_papel == "ADMINISTRADOR"}
    <h4 class="heading">Contas</h4>
    <ul class="nav">
        <li {if $page eq "contas"} class="active" {else} class="" {/if}><a href="/{$language}/contas">Lista</a></li>
    </ul>
    <hr>
{/if}
<h4 class="heading">Veículos</h4>
<ul class="nav">
    <li {if $page eq "veiculos_lista"} class="active" {else} class="" {/if}><a href="/{$language}/veiculos/veiculos-lista">Lista</a></li>
</ul>
<hr>
<h4 class="heading">Páginas</h4>
<ul class="nav">
    <li {if $page eq "empresa"} class="active" {else} class="" {/if}><a href="/{$language}/html/empresa">A empresa</a></li>
    <li {if $page eq "onde-estamos"} class="active" {else} class="" {/if}><a href="/{$language}/html/onde-estamos">Onde estamos</a></li>
    <li {if $page eq "configuracao"} class="active" {else} class="" {/if}><a href="/{$language}/html/configuracao">Configuração</a></li>
{*        <li {if $page eq "logomarca"} class="active" {else} class="" {/if}><a href="/{$language}/html/logomarca">Logomarca</a></li>*}
{*<li {if $page eq "zero_km"} class="active" {else} class="" {/if}><a href="/{$language}/html/zero_km">Zero KM</a></li>
<li {if $page eq "seminovos"} class="active" {else} class="" {/if}><a href="/{$language}/html/seminovos">Seminovos</a></li>
<li {if $page eq "financiamento"} class="active" {else} class="" {/if}><a href="/{$language}/html/financiamento">Financie</a></li>
<li {if $page eq "vender_carro"} class="active" {else} class="" {/if}><a href="/{$language}/html/vender-carro">Venda seu carro</a></li>*}
</ul>
<hr>
<h4 class="heading">Serviços</h4>
<ul class="nav">
<li {if $page eq "alterar_senha"} class="active" {else} class="" {/if}><a href="/{$language}/admin/alterar-senha">Alterar senha</a></li>
<li {if $page eq "meus-dados"} class="active" {else} class="" {/if}><a href="/{$language}/admin/meus-dados/{strtolower($session_codconta)}">Meus Dados</a></li>
<li {if $page eq "logout"} class="active" {else} class="" {/if}><a href="/{$language}/admin/logout">Sair</a></li>
</ul>

<hr>

<div style="background: #fff; margin: 0 11px; padding: 32px;"><img class="area-restrita img-responsive center-block" src="/web-files/img/brand.png" alt="" border="0" title="" /></div>

<hr>
</nav>

-->