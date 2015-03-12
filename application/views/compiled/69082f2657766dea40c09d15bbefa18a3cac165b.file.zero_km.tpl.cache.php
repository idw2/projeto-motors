<?php /* Smarty version Smarty-3.1.19, created on 2014-08-18 18:47:09
         compiled from "/home/storage/e/be/ce/designlab2/public_html/veiculos/application/views/zero_km.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180372647653f2745de538f0-89769507%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69082f2657766dea40c09d15bbefa18a3cac165b' => 
    array (
      0 => '/home/storage/e/be/ce/designlab2/public_html/veiculos/application/views/zero_km.tpl',
      1 => 1408389810,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180372647653f2745de538f0-89769507',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53f2745ded6217_66731369',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f2745ded6217_66731369')) {function content_53f2745ded6217_66731369($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="container">

    <div class="row">

        <div class="col-sm-12"> 
            <h2><span class="label label-default">Zero KM</span></h2>
            <br/>
            <?php echo $_smarty_tpl->tpl_vars['conteudo']->value;?>

            <br/>
        </div>

    </div>

</div>
<div style="clear: both;"></div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
