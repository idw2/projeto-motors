<?php /* Smarty version Smarty-3.1.19, created on 2014-08-19 09:47:30
         compiled from "/home/storage/e/be/ce/designlab2/public_html/veiculos/application/views/admin/veiculos_lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151812795753f34762dcb3c9-39331640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26751f939f11de27dd1d7a90206a8157fa913324' => 
    array (
      0 => '/home/storage/e/be/ce/designlab2/public_html/veiculos/application/views/admin/veiculos_lista.tpl',
      1 => 1408452151,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151812795753f34762dcb3c9-39331640',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'produtos' => 0,
    'produto' => 0,
    'key' => 0,
    'item' => 0,
    'DTA' => 0,
    'NOME' => 0,
    'CATEGORIA' => 0,
    'star' => 0,
    'URL_AMIGAVEL' => 0,
    'eye' => 0,
    'stt' => 0,
    'url_del' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53f34763025c44_28903018',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f34763025c44_28903018')) {function content_53f34763025c44_28903018($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="sidebar">
    <?php echo $_smarty_tpl->getSubTemplate ("admin/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="pull-left">
                <?php echo $_smarty_tpl->getSubTemplate ("admin/logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

            </div>
            <?php echo $_smarty_tpl->getSubTemplate ("admin/search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h2><span class="label label-default">Lista de veículos</span></h2>
            <br/>
            <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/veiculos/cadastrar" class="btn btn-default navbar-btn"><i class="fa fa-automobile"></i> Cadastro de veículos</a>
            <div class="panel panel-default">
                <table class="table">
                    <tr>
                        <th>Data</th>
                        <th>Nome</th>
                        <th>Categoria</th>
                        <th>Ações</th>
                    </tr>

                    <?php  $_smarty_tpl->tpl_vars['produto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['produto']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['produtos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['produto']->key => $_smarty_tpl->tpl_vars['produto']->value) {
$_smarty_tpl->tpl_vars['produto']->_loop = true;
?>
                        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['produto']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                            <?php if ($_smarty_tpl->tpl_vars['key']->value=="CODPRODUTO") {?> <?php $_smarty_tpl->tpl_vars['CODPRODUTO'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value, null, 0);?><?php }?>    
                            <?php if ($_smarty_tpl->tpl_vars['key']->value=="DTA") {?> <?php $_smarty_tpl->tpl_vars['DTA'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value, null, 0);?><?php }?>    
                            <?php if ($_smarty_tpl->tpl_vars['key']->value=="NOME") {?> <?php $_smarty_tpl->tpl_vars['NOME'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value, null, 0);?><?php }?>    
                            <?php if ($_smarty_tpl->tpl_vars['key']->value=="URL_AMIGAVEL") {?>
                                
                                <?php $_smarty_tpl->tpl_vars['URL_AMIGAVEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value, null, 0);?>    
                                <?php $_smarty_tpl->tpl_vars['url_del'] = new Smarty_variable("/".((string)$_smarty_tpl->tpl_vars['language']->value)."/veiculos/delete/".((string)$_smarty_tpl->tpl_vars['item']->value), null, 0);?>

                            <?php }?>    
                            <?php if ($_smarty_tpl->tpl_vars['key']->value=="CATEGORIA") {?> 

                                <?php if ($_smarty_tpl->tpl_vars['item']->value=="novidades") {?>
                                    <?php $_smarty_tpl->tpl_vars['CATEGORIA'] = new Smarty_variable("Novidades", null, 0);?>
                                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value=="zero_km") {?>
                                    <?php $_smarty_tpl->tpl_vars['CATEGORIA'] = new Smarty_variable("Zero KM", null, 0);?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->tpl_vars['CATEGORIA'] = new Smarty_variable("Seminovos", null, 0);?>
                                <?php }?> 
                            <?php }?>    
                            <?php if ($_smarty_tpl->tpl_vars['key']->value=="PRECO") {?> <?php $_smarty_tpl->tpl_vars['PRECO'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value, null, 0);?><?php }?>    
                            <?php if ($_smarty_tpl->tpl_vars['key']->value=="DESTAQUE") {?> <?php $_smarty_tpl->tpl_vars['DESTAQUE'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value, null, 0);?>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value=="0") {?>
                                    <?php $_smarty_tpl->tpl_vars['star'] = new Smarty_variable("desative", null, 0);?>
                                <?php }?> 
                            <?php }?>    
                            <?php if ($_smarty_tpl->tpl_vars['key']->value=="STATUS") {?> <?php $_smarty_tpl->tpl_vars['STATUS'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value, null, 0);?>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value=="0") {?>
                                    <?php $_smarty_tpl->tpl_vars['eye'] = new Smarty_variable("desative", null, 0);?>
                                    <?php $_smarty_tpl->tpl_vars['stt'] = new Smarty_variable("1", null, 0);?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->tpl_vars['eye'] = new Smarty_variable('', null, 0);?>
                                    <?php $_smarty_tpl->tpl_vars['stt'] = new Smarty_variable("0", null, 0);?>
                                <?php }?> 
                            <?php }?>      
                        <?php } ?>


                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['DTA']->value;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['NOME']->value;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['CATEGORIA']->value;?>
</td>
                            <td>
                                <span class="ico-default-star <?php echo $_smarty_tpl->tpl_vars['star']->value;?>
" title="Destaque"><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/veiculos/destaque/<?php echo $_smarty_tpl->tpl_vars['URL_AMIGAVEL']->value;?>
"><i class="fa fa-star"></i></a></span>
                                <span class="ico-default-eye <?php echo $_smarty_tpl->tpl_vars['eye']->value;?>
" title="Status"><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/veiculos/status/<?php echo $_smarty_tpl->tpl_vars['stt']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['URL_AMIGAVEL']->value;?>
"><i class="fa fa-eye"></i></a></span>
                                <span class="ico-default-eye <?php echo $_smarty_tpl->tpl_vars['eye']->value;?>
" title="Editar"><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/veiculos/editar/<?php echo $_smarty_tpl->tpl_vars['URL_AMIGAVEL']->value;?>
"><i class="fa fa-edit"></i></a></span>
                                <span class="ico-default-trash" title="Excluir"><a onclick="delete_produto('<?php echo $_smarty_tpl->tpl_vars['url_del']->value;?>
')"><i class="fa fa-trash-o"></i></a></span>
                                <span class="ico-default-photo" title="Imagens"><a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/veiculos/fotos/<?php echo $_smarty_tpl->tpl_vars['URL_AMIGAVEL']->value;?>
"><i class="fa fa fa-photo"></i></a></span>

                            </td>
                        </tr>

                    <?php } ?>
                </table>

            </div>

        </div>
    </div>
</div>
<script>
    function delete_produto(url) {
        if (confirm('ATENÇÃO: Esta ação não poderá ser desfeita!\n Deseja continuar?')) {
            window.location = url;
            return true;
        } else {
            return false;
        }
    }
</script>

<!--{}-->
<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
