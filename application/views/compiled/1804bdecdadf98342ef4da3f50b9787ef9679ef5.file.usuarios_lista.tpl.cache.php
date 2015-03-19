<?php /* Smarty version Smarty-3.1.19, created on 2015-03-12 15:39:21
         compiled from "/home/dlab34/motors.designlab.com.br/application/views/usuarios_lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127477367455021599a8ecc6-81977356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1804bdecdadf98342ef4da3f50b9787ef9679ef5' => 
    array (
      0 => '/home/dlab34/motors.designlab.com.br/application/views/usuarios_lista.tpl',
      1 => 1426108876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127477367455021599a8ecc6-81977356',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'usuarios' => 0,
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55021599c0c059_93932626',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55021599c0c059_93932626')) {function content_55021599c0c059_93932626($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/dlab34/motors.designlab.com.br/libraries/plugins/function.counter.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Member List</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">

                            <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/usuarios/adicionar" class="btn btn-default navbar-btn"><i class="fa fa-user"></i> Criate User</a>

                            <table class='table'>

                                <thead>
                                <th>Registration Date</th>
                                <th>Username</th>
                                <th>Ações</th>
                                </thead>

                                <?php echo smarty_function_counter(array('assign'=>'i','start'=>0,'print'=>false),$_smarty_tpl);?>
 
                                <?php  $_smarty_tpl->tpl_vars['usuario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['usuario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->key => $_smarty_tpl->tpl_vars['usuario']->value) {
$_smarty_tpl->tpl_vars['usuario']->_loop = true;
?>

                                    <tr id="usuario_<?php echo $_smarty_tpl->tpl_vars['usuario']->value->CODUSUARIO;?>
" >

                                        <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value->DTA;?>
</td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['usuario']->value->USERNAME;?>

                                            <br>
                                            <span style="font-size: 11px;"><?php echo $_smarty_tpl->tpl_vars['usuario']->value->SITE;?>
</span>
                                        </td>
                                        <td>
                                            <table>
                                                <tr>       
                                                    <td><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/usuarios/status/<?php if ($_smarty_tpl->tpl_vars['usuario']->value->STATUS=="0") {?>1<?php } else { ?>0<?php }?>/<?php echo strtolower($_smarty_tpl->tpl_vars['usuario']->value->CODUSUARIO);?>
"><span class="ico-default-eye-<?php echo $_smarty_tpl->tpl_vars['usuario']->value->CODCONTA;?>
 ico-default-eye <?php if ($_smarty_tpl->tpl_vars['usuario']->value->STATUS=="0") {?>desative<?php }?>" rel="tooltip" title="Status do Cliente"><i class="fa fa-eye"></i></span></a>&nbsp;</td>
                                                    <td><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/usuarios/editar/<?php echo strtolower($_smarty_tpl->tpl_vars['usuario']->value->CODUSUARIO);?>
"><span class="ico-default-edit" rel="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>&nbsp;</td>
                                                    <td><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/usuarios/delete/<?php echo strtolower($_smarty_tpl->tpl_vars['usuario']->value->CODUSUARIO);?>
"><span class="ico-default-trash" rel="tooltip" title="Excluir Cliente"><i class="fa fa-trash-o"></i></span></a>&nbsp;</td>
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
