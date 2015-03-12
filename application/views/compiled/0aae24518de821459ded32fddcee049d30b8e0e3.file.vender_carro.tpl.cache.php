<?php /* Smarty version Smarty-3.1.19, created on 2014-11-06 12:15:09
         compiled from "/home/dlab34/auto.designlab.com.br/application/views/vender_carro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2117146285545bd6cd7a2ae8-22143624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0aae24518de821459ded32fddcee049d30b8e0e3' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/vender_carro.tpl',
      1 => 1413821087,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2117146285545bd6cd7a2ae8-22143624',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545bd6cd877006_25334268',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545bd6cd877006_25334268')) {function content_545bd6cd877006_25334268($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="container">

    <div class="row">

        <div class="col-sm-12"> 
            <h2><span class="label label-default">Venda seu carro</span></h2>
            <br/>
            <?php echo $_smarty_tpl->tpl_vars['conteudo']->value;?>

            <br/>
        </div>

    </div>

</div>
<div style="clear: both;"></div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
