<?php /* Smarty version Smarty-3.1.19, created on 2014-11-17 08:30:38
         compiled from "/home/dlab34/auto.designlab.com.br/application/views/seminovos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1121685178546a22aeabfe39-37348422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '973ca9d847853348b1a90114ab3347e97ded169e' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/seminovos.tpl',
      1 => 1413821086,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1121685178546a22aeabfe39-37348422',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conteudo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546a22aeb78648_61923022',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546a22aeb78648_61923022')) {function content_546a22aeb78648_61923022($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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
