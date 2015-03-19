<?php /* Smarty version Smarty-3.1.19, created on 2015-03-12 14:03:56
         compiled from "/home/dlab34/motors.designlab.com.br/application/views/contas_lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17765122975501ff3cc4b9b0-43022122%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e4bffbf1797c4daeaca622b85a448cdd1b0daea' => 
    array (
      0 => '/home/dlab34/motors.designlab.com.br/application/views/contas_lista.tpl',
      1 => 1426094262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17765122975501ff3cc4b9b0-43022122',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'contas' => 0,
    'conta' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5501ff3d5185b6_48902180',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5501ff3d5185b6_48902180')) {function content_5501ff3d5185b6_48902180($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/dlab34/motors.designlab.com.br/libraries/plugins/function.counter.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Lista de Contas</h1>
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
/contas/adicionar" class="btn btn-default navbar-btn"><i class="fa fa-user"></i> Criar Conta</a>

                            <table class='table'>

                                <thead>
                                <th>Data de Cadastro</th>
                                <th>Nome / Site</th>
                                <th>ID</th>
                                <th>E-mail</th>
                                <th>CPF / CNPJ</th>
                                <th>Ações</th>
                                </thead>

                                <?php echo smarty_function_counter(array('assign'=>'i','start'=>0,'print'=>false),$_smarty_tpl);?>
 
                                <?php  $_smarty_tpl->tpl_vars['conta'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['conta']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['conta']->key => $_smarty_tpl->tpl_vars['conta']->value) {
$_smarty_tpl->tpl_vars['conta']->_loop = true;
?>

                                    <tr id="conta_<?php echo $_smarty_tpl->tpl_vars['conta']->value->CODCONTA;?>
" >

                                        <td><?php echo $_smarty_tpl->tpl_vars['conta']->value->DTA;?>
</td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['conta']->value->NOME_RAZAO_SOCIAL;?>

                                            <br>
                                            <span style="font-size: 11px;"><?php echo $_smarty_tpl->tpl_vars['conta']->value->SITE;?>
</span>
                                        </td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['conta']->value->ID;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['conta']->value->EMAIL;?>
</td>
                                        <td>
                                            <?php if ($_smarty_tpl->tpl_vars['conta']->value->TIPO_CONTA!='') {?>
                                                <?php if ($_smarty_tpl->tpl_vars['conta']->value->TIPO_CONTA=="pf") {?>
                                                    <?php echo $_smarty_tpl->tpl_vars['conta']->value->CPF;?>

                                                <?php } else { ?>
                                                    <?php echo $_smarty_tpl->tpl_vars['conta']->value->CNPJ;?>

                                                <?php }?>
                                            <?php }?>
                                        </td>
                                        <td>
                                            <table>
                                                <tr>       
                                                    <?php if ($_smarty_tpl->tpl_vars['conta']->value->EMAIL!="designlab@designlab.com.br") {?>
                                                        <td><a style="cursor: pointer;" onclick="javascript:cStatusUpdate('status_<?php echo $_smarty_tpl->tpl_vars['conta']->value->CODCONTA;?>
', '<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/contas/status/<?php if ($_smarty_tpl->tpl_vars['conta']->value->STATUS=="0") {?>1<?php } else { ?>0<?php }?>/<?php echo $_smarty_tpl->tpl_vars['conta']->value->CODCONTA;?>
', '<?php echo $_smarty_tpl->tpl_vars['conta']->value->CODCONTA;?>
');"><span class="ico-default-eye-<?php echo $_smarty_tpl->tpl_vars['conta']->value->CODCONTA;?>
 ico-default-eye <?php if ($_smarty_tpl->tpl_vars['conta']->value->STATUS=="0") {?>desative<?php }?>" rel="tooltip" title="Status do Cliente"><i class="fa fa-eye"></i></span></a>&nbsp;</td>
                                                        <td><a style="cursor: pointer;" onclick="javascript:cSuspensoUpdate('suspenso_<?php echo $_smarty_tpl->tpl_vars['conta']->value->CODCONTA;?>
', '<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/contas/suspender/<?php if ($_smarty_tpl->tpl_vars['conta']->value->SUSPENSO=="0") {?>1<?php } else { ?>0<?php }?>/<?php echo $_smarty_tpl->tpl_vars['conta']->value->CODCONTA;?>
', '<?php echo $_smarty_tpl->tpl_vars['conta']->value->CODCONTA;?>
');"><span class="ico-default-suspenso-<?php echo $_smarty_tpl->tpl_vars['conta']->value->CODCONTA;?>
 ico-default-suspenso <?php if ($_smarty_tpl->tpl_vars['conta']->value->SUSPENSO=="0") {?>desative<?php }?>" rel="tooltip" title="Suspender Cliente"><i class="fa fa-pause"></i></span></a>&nbsp;</td>
                                                        <td><a style="cursor: pointer;" onclick="javascript:cBloqueadoUpdate('bloqueado_<?php echo $_smarty_tpl->tpl_vars['conta']->value->CODCONTA;?>
', '<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/contas/bloquear/<?php if ($_smarty_tpl->tpl_vars['conta']->value->BLOQUEADO=="0") {?>1<?php } else { ?>0<?php }?>/<?php echo $_smarty_tpl->tpl_vars['conta']->value->CODCONTA;?>
', '<?php echo $_smarty_tpl->tpl_vars['conta']->value->CODCONTA;?>
');"><span class="ico-default-bloqueado-<?php echo $_smarty_tpl->tpl_vars['conta']->value->CODCONTA;?>
 ico-default-bloqueado <?php if ($_smarty_tpl->tpl_vars['conta']->value->BLOQUEADO=="0") {?>desative<?php }?>" rel="tooltip" title="Bloquear Cliente"><i class="fa fa-ban"></i></span></a>&nbsp;</td>
                                                                <?php }?>

                                                    <td><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/contas/editar/<?php echo strtolower($_smarty_tpl->tpl_vars['conta']->value->CODCONTA);?>
"><span class="ico-default-edit" rel="tooltip" title="Editar"><i class="fa fa-edit"></i></span></a>&nbsp;</td>
                                                    <td><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/html/configuracao/<?php echo strtolower($_smarty_tpl->tpl_vars['conta']->value->SITE);?>
"><span class="ico-default-configuracao" rel="tooltip" title="Configuração"><i class="fa fa-gear"></i></span></a>&nbsp;</td>
                                                    <td><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/html/logomarca/<?php echo strtolower($_smarty_tpl->tpl_vars['conta']->value->SITE);?>
"><span class="ico-default-logomarca" rel="tooltip" title="Logomarca"><i class="fa fa-picture-o"></i></span></a>&nbsp;</td>
                                                    <td><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/html/a-empresa/<?php echo strtolower($_smarty_tpl->tpl_vars['conta']->value->SITE);?>
"><span class="ico-default-a-empresa" rel="tooltip" title="A empresa"><i class="fa fa-wrench"></i></span></a>&nbsp;</td>
                                                    <td><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/html/onde-estamos/<?php echo strtolower($_smarty_tpl->tpl_vars['conta']->value->SITE);?>
"><span class="ico-default-onde-estamos" rel="tooltip" title="Onde estamos"><i class="fa fa-map-marker"></i></span></a>&nbsp;</td>

                                                    
                                                    <?php if ($_smarty_tpl->tpl_vars['conta']->value->EMAIL!="designlab@designlab.com.br") {?>
                                                        <td><a style="cursor: pointer;" onclick="javascript:cDeleteUpdate('delete_<?php echo $_smarty_tpl->tpl_vars['conta']->value->CODCONTA;?>
', '<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/contas/delete/<?php echo $_smarty_tpl->tpl_vars['conta']->value->CODCONTA;?>
', '<?php echo $_smarty_tpl->tpl_vars['conta']->value->CODCONTA;?>
');"><span class="ico-default-trash" rel="tooltip" title="Excluir Cliente"><i class="fa fa-trash-o"></i></span></a>&nbsp;</td>    
                                                                <?php }?>

                                                </tr>
                                                <tr>
                                                    <td id="status_<?php echo $_smarty_tpl->tpl_vars['conta']->value->CODCONTA;?>
" style="height: 35px"></td>
                                                    <td id="suspenso_<?php echo $_smarty_tpl->tpl_vars['conta']->value->CODCONTA;?>
"></td>
                                                    <td id="bloqueado_<?php echo $_smarty_tpl->tpl_vars['conta']->value->CODCONTA;?>
"></td>
                                                    <td></td>
                                                    <td id="delete_<?php echo $_smarty_tpl->tpl_vars['conta']->value->CODCONTA;?>
"></td>
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
