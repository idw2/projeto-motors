<?php /* Smarty version Smarty-3.1.19, created on 2015-03-11 10:22:22
         compiled from "/home/dlab34/motors.designlab.com.br/application/views/onde_estamos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1662825441550079ce94dc94-45612903%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '354c2ba6ea2e52dcabedc6ce5a36024a6b2eea69' => 
    array (
      0 => '/home/dlab34/motors.designlab.com.br/application/views/onde_estamos.tpl',
      1 => 1426094535,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1662825441550079ce94dc94-45612903',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'conteudo' => 0,
    'endereco' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_550079cea8d5e9_04544531',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550079cea8d5e9_04544531')) {function content_550079cea8d5e9_04544531($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>




<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Onde Estamos</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    

    <?php if ($_smarty_tpl->tpl_vars['conteudo']->value!='') {?>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="map-frame" style="margin-bottom: 18px;">
                        <iframe src="https://maps.google.com/maps?q=<?php echo $_smarty_tpl->tpl_vars['conteudo']->value;?>
&output=embed" width="600" height="450" frameborder="0" style="border:0;width: 100%;"></iframe>
                    </div>
                    <p><strong>Endereço:</strong><br />
                        <?php echo $_smarty_tpl->tpl_vars['endereco']->value->LOGRADOURO;?>
, <?php echo $_smarty_tpl->tpl_vars['endereco']->value->NUMERO;?>
<?php if ($_smarty_tpl->tpl_vars['endereco']->value->COMPLEMENTO!='') {?> - <?php echo $_smarty_tpl->tpl_vars['endereco']->value->COMPLEMENTO;?>
 - <?php }?><br><?php echo $_smarty_tpl->tpl_vars['endereco']->value->BAIRRO;?>
<br><?php echo $_smarty_tpl->tpl_vars['endereco']->value->CIDADE;?>
/<?php echo $_smarty_tpl->tpl_vars['endereco']->value->UF;?>
<br><?php echo $_smarty_tpl->tpl_vars['endereco']->value->CEP;?>
<br></p>        
                </div>
            </div>
        </div>

    <?php }?>         

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form method="post">
                                <h4>link iframe google maps</h4>
                                <p><input class="form-control" style="min-width: 100%" id="conteudo" name="conteudo" value="<?php echo $_smarty_tpl->tpl_vars['conteudo']->value;?>
" placeholder="link iframe google maps"/></p>
                                <p><button type="submit" class="btn btn-primary" name="enviar">ENVIAR</button></p>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
