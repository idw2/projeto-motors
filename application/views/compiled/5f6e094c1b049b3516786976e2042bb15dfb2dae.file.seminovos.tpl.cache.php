<?php /* Smarty version Smarty-3.1.19, created on 2014-08-18 18:47:11
         compiled from "/home/storage/e/be/ce/designlab2/public_html/veiculos/application/views/seminovos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150138193353f2745f2fb782-98991767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f6e094c1b049b3516786976e2042bb15dfb2dae' => 
    array (
      0 => '/home/storage/e/be/ce/designlab2/public_html/veiculos/application/views/seminovos.tpl',
      1 => 1408128922,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150138193353f2745f2fb782-98991767',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53f2745f373798_82835966',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f2745f373798_82835966')) {function content_53f2745f373798_82835966($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="container">

    <div class="row">

        <div class="col-sm-12"> 
            <h2><span class="label label-default">Seminovos</span></h2>
            <br/>
            <?php echo $_smarty_tpl->tpl_vars['conteudo']->value;?>

            <br/>
        </div>

    </div>

</div>
<div style="clear: both;"></div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
