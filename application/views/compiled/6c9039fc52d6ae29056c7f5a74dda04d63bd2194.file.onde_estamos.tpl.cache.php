<?php /* Smarty version Smarty-3.1.19, created on 2014-11-17 08:45:19
         compiled from "/home/dlab34/auto.designlab.com.br/application/views/onde_estamos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1159214715546a261ff1bae3-44749664%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c9039fc52d6ae29056c7f5a74dda04d63bd2194' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/onde_estamos.tpl',
      1 => 1416240724,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1159214715546a261ff1bae3-44749664',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_546a262008adf4_65583182',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546a262008adf4_65583182')) {function content_546a262008adf4_65583182($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="container">

    <div class="row pagetitle">
        <div class="col-xs-12">
            <h2>Onde estamos</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="map-frame" style="margin-bottom: 18px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.6483771495173!2d-43.34415719999997!3d-22.9999541!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9bda1479204d73%3A0x34fcf27752ef5f0!2sAv.+das+Am%C3%A9ricas%2C+36+-+Barra+da+Tijuca%2C+Rio+de+Janeiro+-+RJ!5e0!3m2!1spt-BR!2sbr!4v1416240697986" width="600" height="450" frameborder="0" style="border:0;width: 100%;"></iframe>
            </div>
            <p><strong>Endereço:</strong><br />
            Av. das Américas, 2000</p>
        </div>
    </div>

</div>
<div style="clear: both;"></div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
