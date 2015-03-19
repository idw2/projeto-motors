<?php /* Smarty version Smarty-3.1.19, created on 2015-03-16 09:16:52
         compiled from "/home/dlab34/motors.designlab.com.br/application/views/welcome.tpl" */ ?>
<?php /*%%SmartyHeaderCode:407242996550701f403b718-30140959%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2109ce2e6ffa7e67ade227ff1f296c4e49bcfb19' => 
    array (
      0 => '/home/dlab34/motors.designlab.com.br/application/views/welcome.tpl',
      1 => 1426090310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '407242996550701f403b718-30140959',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'session_nome_razao_social' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_550701f4397cc1_59982089',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550701f4397cc1_59982089')) {function content_550701f4397cc1_59982089($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Você está na área Restrita</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1>Bem-vindo, <?php echo $_smarty_tpl->tpl_vars['session_nome_razao_social']->value;?>
!</h1>
            </div>    
        </div>
    </div>
</div>
<!-- /#page-wrapper -->

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
