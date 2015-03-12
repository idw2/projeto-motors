<?php /* Smarty version Smarty-3.1.19, created on 2014-08-18 18:47:07
         compiled from "/home/storage/e/be/ce/designlab2/public_html/veiculos/application/views/empresa.tpl" */ ?>
<?php /*%%SmartyHeaderCode:94737493953f2745bd653d0-42452199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce6eb237ff2681c0c18dcfe64ff20c9af0cf9a04' => 
    array (
      0 => '/home/storage/e/be/ce/designlab2/public_html/veiculos/application/views/empresa.tpl',
      1 => 1408128886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '94737493953f2745bd653d0-42452199',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53f2745bdd3fd8_47838927',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f2745bdd3fd8_47838927')) {function content_53f2745bdd3fd8_47838927($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="container">

    <div class="row">

        <div class="col-sm-12"> 
            <h2><span class="label label-default">Nossa empresa</span></h2>
            <br/>
            <?php echo $_smarty_tpl->tpl_vars['conteudo']->value;?>

            <br/>
        </div>

    </div>

</div>
<div style="clear: both;"></div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
