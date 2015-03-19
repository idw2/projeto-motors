<?php /* Smarty version Smarty-3.1.19, created on 2015-03-16 09:16:57
         compiled from "/home/dlab34/motors.designlab.com.br/application/views/veiculos_lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1414961801550701f9cd5c33-77568706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd210b3b8dd17e0559c4aca339bcd607d90d161cd' => 
    array (
      0 => '/home/dlab34/motors.designlab.com.br/application/views/veiculos_lista.tpl',
      1 => 1426173729,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1414961801550701f9cd5c33-77568706',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'produtos' => 0,
    'produto' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_550701fa5e3051_13104994',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550701fa5e3051_13104994')) {function content_550701fa5e3051_13104994($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/dlab34/motors.designlab.com.br/libraries/plugins/function.counter.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Vehicle List</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">

                            <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/veiculos/cadastrar" class="btn btn-default navbar-btn"><i class="fa fa-automobile"></i> New</a>

                            <table class='table'>

                                <thead>
                                <th>Registration Date</th>
                                <th>Vehicle Name</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Actions</th>
                                </thead>

                                <?php echo smarty_function_counter(array('assign'=>'i','start'=>0,'print'=>false),$_smarty_tpl);?>
 
                                <?php  $_smarty_tpl->tpl_vars['produto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['produto']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['produtos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['produto']->key => $_smarty_tpl->tpl_vars['produto']->value) {
$_smarty_tpl->tpl_vars['produto']->_loop = true;
?>

                                    <tr id="veiculo_<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
" >

                                        <td><?php echo $_smarty_tpl->tpl_vars['produto']->value->DTA;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['produto']->value->NOME;?>
<br/><?php echo $_smarty_tpl->tpl_vars['produto']->value->SITE;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['produto']->value->CATEGORIA;?>
</td>
                                        <td>R$ <?php echo $_smarty_tpl->tpl_vars['produto']->value->PRECO;?>
</td>
                                        <td>
                                            <table style="height: 45px;">
                                                <tr>
                                                    <td><a style="cursor: pointer;" onclick="javascript:vDestaqueUpdate('destaque_<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
', '<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/veiculos/destaque/<?php if ($_smarty_tpl->tpl_vars['produto']->value->DESTAQUE=="0") {?>1<?php } else { ?>0<?php }?>/<?php echo $_smarty_tpl->tpl_vars['produto']->value->URL_AMIGAVEL;?>
', '<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
');"><span class="ico-default-star-<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
 ico-default-star <?php if ($_smarty_tpl->tpl_vars['produto']->value->DESTAQUE=="0") {?>desative<?php }?>" rel="tooltip" title="Featured"><i class="fa fa-star"></i></span></a>&nbsp;</td>
                                                    <td><a style="cursor: pointer;" onclick="javascript:vStatusUpdate('status_<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
', '<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/veiculos/status/<?php if ($_smarty_tpl->tpl_vars['produto']->value->STATUS=="0") {?>1<?php } else { ?>0<?php }?>/<?php echo $_smarty_tpl->tpl_vars['produto']->value->URL_AMIGAVEL;?>
', '<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
');"><span class="ico-default-eye-<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
 ico-default-eye <?php if ($_smarty_tpl->tpl_vars['produto']->value->STATUS=="0") {?>desative<?php }?>" rel="tooltip" title="Status"><i class="fa fa-eye"></i></span></a>&nbsp;</td>
                                                    <td><a style="cursor: pointer;" onclick="javascript:vNovidadeUpdate('novidade_<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
', '<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/veiculos/novidade/<?php if ($_smarty_tpl->tpl_vars['produto']->value->IS_NOVIDADE=="0") {?>1<?php } else { ?>0<?php }?>/<?php echo $_smarty_tpl->tpl_vars['produto']->value->URL_AMIGAVEL;?>
', '<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
');"><span class="ico-default-novidade-<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
 ico-default-novidade <?php if ($_smarty_tpl->tpl_vars['produto']->value->IS_NOVIDADE=="0") {?>desative<?php }?>" rel="tooltip" title="Novelty"><i class="fa fa-check-square-o"></i></span></a>&nbsp;</td>
                                                    <td><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/veiculos/editar/<?php echo $_smarty_tpl->tpl_vars['produto']->value->URL_AMIGAVEL;?>
"><span class="ico-default-edit" rel="tooltip" title="Edit"><i class="fa fa-edit"></i></span></a>&nbsp;</td>
                                                    <td><a style="cursor: pointer;" onclick="javascript:vDeleteUpdate('<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/veiculos/delete/<?php echo $_smarty_tpl->tpl_vars['produto']->value->URL_AMIGAVEL;?>
', '<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
');"><span class="ico-default-trash" rel="tooltip" title="Delete"><i class="fa fa-trash-o"></i></span></a>&nbsp;</td>
                                                    <td><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/veiculos/fotos/<?php echo $_smarty_tpl->tpl_vars['produto']->value->URL_AMIGAVEL;?>
"><span class="ico-default-photo" rel="tooltip" title="Imagery"><i class="fa fa-photo"></i></span></a></td>
                                                </tr>
                                                <tr>
                                                    <td id="destaque_<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
" style="height: 35px"><img src="/web-files/img/Loader_small.gif" border="0" title="Loading" alt="Loading" class="hide"/></td>
                                                    <td id="status_<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
"><img src="/web-files/img/Loader_small.gif" border="0" title="Loading" alt="Loading" class="hide"/></td>
                                                    <td id="novidade_<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
"><img src="/web-files/img/Loader_small.gif" border="0" title="Loading" alt="Loading" class="hide"/></td>
                                                    <td id="edit_<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
"><img src="/web-files/img/Loader_small.gif" border="0" title="Loading" alt="Loading" class="hide"/></td>
                                                    <td id="delete_<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
"><img src="/web-files/img/Loader_small.gif" border="0" title="Loading" alt="Loading" class="hide"/></td>
                                                    <td id="gallery_<?php echo $_smarty_tpl->tpl_vars['produto']->value->CODPRODUTO;?>
"><img src="/web-files/img/Loader_small.gif" border="0" title="Loading" alt="Loading" class="hide"/></td>
                                                </tr>
                                            </table>
                                        </td>

                                    </tr>
                                    <?php echo smarty_function_counter(array(),$_smarty_tpl);?>

                                <?php } ?>

                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php }} ?>
