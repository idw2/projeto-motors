<?php /* Smarty version Smarty-3.1.19, created on 2014-08-12 11:32:24
         compiled from "/home/regis147/public_html/application/views/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212095145353ea25788b5694-22650935%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2f42dd0dc819c1dd883d6a041ac5564a0c8a8e4' => 
    array (
      0 => '/home/regis147/public_html/application/views/header.tpl',
      1 => 1407709400,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212095145353ea25788b5694-22650935',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ea25788d7384_69534058',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ea25788d7384_69534058')) {function content_53ea25788d7384_69534058($_smarty_tpl) {?><!DOCTYPE HTML>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	
        
        <link rel="icon" type="image/vnd.microsoft.icon" href="/web-files/img/favicon.ico"/>
        <link rel="shortcut icon" type="image/x-icon" href="/web-files/img/favicon.ico"/>
        
	<link rel="stylesheet" href="/web-files/bootstrap/css/bootstrap.css"/>
	<link rel="stylesheet" href="/web-files/bootstrap/css/bootstrap-theme.css"/>		
	<link rel="stylesheet" href="/web-files/css/docs.min.css"/>
	
	<script language="javascript" src="/web-files/js/funcoes.js"></script>
	<script language="javascript" src="/web-files/js/jquery-2.1.1.min.js"></script>
	<script language="javascript" src="/web-files/js/jQuery-Mask-Plugin.js"></script>
	<script language="javascript" src="/web-files/bootstrap/js/bootstrap.js"></script>
	
	<!--
	<script language="javascript" src="/web-files/js/default.js"></script>
	-->
	
	<script>
		$(document).ready(function(){
		});
	</script>
	
	
	<style>
            
            body{
                background: url(/web-files/img/myback.png) no-repeat;
                background-size: 100% 100%;
                background-color: transparent;
                
            }
		/* min-width */ 
		@media screen and (min-width: 900px) 
		{ 
			.menu-tipo-1 
			{
				line-height: 9;
				position: relative;
				top: 48px;
			}
                        
                        .footer-ico-x img{
                            width: 70px; 
                            display: inline-block; 
                            margin-bottom: 5px;
                        }
		} 
		
		/* min-width & max-width */ 
		@media screen and (min-width: 600px) and (max-width: 900px) 
		{ 
			.menu-tipo-1 
			{
				line-height: 0;
				position: relative;
				top: 0;
			}
		} 
		
		/* max device width */ 
		@media screen and (max-device-width: 480px) 
		{ 
			.menu-tipo-1 
			{
				line-height: 0;
				position: relative;
				top: 0;
			}
                        
                        .footer-ico-x img{
                            min-width: 20%; display: inline-block; margin-bottom: 5px; text-align: center !important;
                        } 
		}
		
		.bs-docs-footer {
			padding-top: 40px;
			padding-bottom: 40px;
			margin-top: 100px;
			color: #777;
			/*text-align: center;
			border-top: 1px solid #e5e5e5;*/
		}
                
                .footer-mod a{
                    color: #fff !important;   
                }
                
                .footer-mod h4{
                    border-bottom: 1px solid #fff !important;   
                }
                
	
	</style>
</head>
<body data-twttr-rendered="true">
	
<div class="container">
	<div class="row">	
		
            <!--
            <div class="page-header">
            -->        
            <div class="container" style="padding: 1.5%;">
                <div class="col-md-12"  style="text-align: center">
                    <img src="/web-files/img/registro_logo.png" alt="Registro de assinaturas" class="img-responsive center-block"/>
                </div>
                <!--
                <div class="col-md-6"  style="text-align: right;">
                    <?php echo $_smarty_tpl->getSubTemplate ("topo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
 
                </div>
                -->
           </div>
                <!--
                menu-tipo-1
                style="text-align: right; min-width: 66.6%; padding: 0;"
                -->
                    
                    <!--
                <div style="clear: both"></div>
                    <div style="clear: both"></div>
                -->
                    
                
            <!--        
            </div>
            -->        
		
		<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php }} ?>
