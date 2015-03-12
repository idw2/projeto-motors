<?php /* Smarty version Smarty-3.1.19, created on 2014-08-18 18:47:12
         compiled from "/home/storage/e/be/ce/designlab2/public_html/veiculos/application/views/vender_carro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101571783053f27460c8caf3-55343250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59ddde5a8fc2e4c43b3f25e10620c31cacb3551e' => 
    array (
      0 => '/home/storage/e/be/ce/designlab2/public_html/veiculos/application/views/vender_carro.tpl',
      1 => 1408128877,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101571783053f27460c8caf3-55343250',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53f27460ced8a2_42976959',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f27460ced8a2_42976959')) {function content_53f27460ced8a2_42976959($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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
