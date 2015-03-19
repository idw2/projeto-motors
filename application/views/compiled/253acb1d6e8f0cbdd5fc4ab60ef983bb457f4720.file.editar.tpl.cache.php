<?php /* Smarty version Smarty-3.1.19, created on 2015-03-16 09:17:19
         compiled from "/home/dlab34/motors.designlab.com.br/application/views/editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15637802645507020fcbd2d6-22508954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '253acb1d6e8f0cbdd5fc4ab60ef983bb457f4720' => 
    array (
      0 => '/home/dlab34/motors.designlab.com.br/application/views/editar.tpl',
      1 => 1426270469,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15637802645507020fcbd2d6-22508954',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'erro' => 0,
    'sucesso' => 0,
    'fabricantes' => 0,
    'fabricante' => 0,
    'produto' => 0,
    'anos' => 0,
    'ano' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_550702100a2d18_79389330',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550702100a2d18_79389330')) {function content_550702100a2d18_79389330($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/dlab34/motors.designlab.com.br/libraries/plugins/function.counter.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Editar Veículo</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    
    <div class="row">
        <div class="col-lg-12">

            <form method="post">
                <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/veiculos/veiculos_lista" class="btn btn-default navbar-btn"><i class="fa fa-reply">&nbsp</i> Voltar</a>
                <br/>

                <?php if ($_smarty_tpl->tpl_vars['erro']->value=='') {?>

                    <div class="alert alert-success" role="alert"><strong>Atenção: </strong>Preencher todos os campos!</div>

                <?php } else { ?>

                    <?php if ($_smarty_tpl->tpl_vars['sucesso']->value=="FALSE") {?>
                        <div class="alert alert-danger" role="alert"><strong>Atenção: </strong><?php echo $_smarty_tpl->tpl_vars['erro']->value;?>
</div>
                    <?php } else { ?>
                        <div class="alert alert-success" role="alert"><?php echo $_smarty_tpl->tpl_vars['erro']->value;?>
</div>	
                    <?php }?>

                <?php }?>
                <div class="row">
                    <div class="col col-lg-6 col-md-6">
                        <h4 class="panel-heading x-label">Fabricante</h4>
                        <select name="fabricante" class="form-control">
                            <?php echo smarty_function_counter(array('assign'=>'i','start'=>0,'print'=>false),$_smarty_tpl);?>

                            <?php  $_smarty_tpl->tpl_vars['fabricante'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fabricante']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fabricantes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fabricante']->key => $_smarty_tpl->tpl_vars['fabricante']->value) {
$_smarty_tpl->tpl_vars['fabricante']->_loop = true;
?>
                                <?php if (isset($_smarty_tpl->tpl_vars['fabricante']->value->LETRA)) {?>
                                    <optgroup label="<?php echo $_smarty_tpl->tpl_vars['fabricante']->value->LETRA;?>
">
                                    <?php }?>    
                                    <?php if (!isset($_smarty_tpl->tpl_vars['fabricante']->value->LETRA)) {?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['fabricante']->value->FABRICANTE;?>
" <?php if ($_smarty_tpl->tpl_vars['fabricante']->value->FABRICANTE==$_smarty_tpl->tpl_vars['produto']->value->FABRICANTE) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['fabricante']->value->FABRICANTE;?>
</option>
                                    <?php }?>            
                                    <?php if (isset($_smarty_tpl->tpl_vars['fabricante']->value->LETRA)) {?>
                                    </optgroup>
                                <?php }?>
                                <?php echo smarty_function_counter(array(),$_smarty_tpl);?>

                            <?php } ?>
                        </select> 
                        <br/>
                    </div>
                    <div class="col col-lg-6 col-md-6">
                        <h4 class="panel-heading x-label">Veículo</h4>
                        <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->NOME;?>
" placeholder="Nome" />	
                        <br/>
                    </div>    

                </div>    
                <div class="row">
                    <div class="col col-lg-6 col-md-6">
                        <h4 class="panel-heading x-label">Modelo</h4>
                        <select name="carroceria" class="form-control">
                            <option value="Utilitário comercial" <?php if ($_smarty_tpl->tpl_vars['produto']->value->CARROCERIA=="Utilitário comercial") {?>selected<?php }?>>Utilitário comercial</option>
                            <option value="Esportivo e conversível" <?php if ($_smarty_tpl->tpl_vars['produto']->value->CARROCERIA=="Esportivo e conversível") {?>selected<?php }?>>Esportivo e conversível</option>
                            <option value="Utilitário esportivo (SUV)" <?php if ($_smarty_tpl->tpl_vars['produto']->value->CARROCERIA=="Utilitário esportivo (SUV)") {?>selected<?php }?>>Utilitário esportivo (SUV)</option>
                            <option value="Picape" <?php if ($_smarty_tpl->tpl_vars['produto']->value->CARROCERIA=="Picape") {?>selected<?php }?>>Picape</option>
                            <option value="Perua (station wagon)" <?php if ($_smarty_tpl->tpl_vars['produto']->value->CARROCERIA=="Perua (station wagon)") {?>selected<?php }?>>Perua (station wagon)</option>
                            <option value="Monovolume e minivan" <?php if ($_smarty_tpl->tpl_vars['produto']->value->CARROCERIA=="Monovolume e minivan") {?>selected<?php }?>>Monovolume e minivan</option>
                            <option value="Sedãs grandes" <?php if ($_smarty_tpl->tpl_vars['produto']->value->CARROCERIA=="Sedãs grandes") {?>selected<?php }?>>Sedãs grandes</option>
                            <option value="Sedã médio" <?php if ($_smarty_tpl->tpl_vars['produto']->value->CARROCERIA=="Sedã médio") {?>selected<?php }?>>Sedã médio</option>
                            <option value="Sedã compacto" <?php if ($_smarty_tpl->tpl_vars['produto']->value->CARROCERIA=="Sedã compacto") {?>selected<?php }?>>Sedã compacto</option>
                            <option value="Hatch médio e esportivo" <?php if ($_smarty_tpl->tpl_vars['produto']->value->CARROCERIA=="Hatch médio e esportivo") {?>selected<?php }?>>Hatch médio e esportivo</option>
                            <option value="Hatch compacto" <?php if ($_smarty_tpl->tpl_vars['produto']->value->CARROCERIA=="Hatch compacto") {?>selected<?php }?>>Hatch compacto</option>
                        </select>
                        <br/>
                    </div>    
                    <div class="col col-lg-6 col-md-6">
                        <h4 class="panel-heading x-label">Preço</h4>
                        <input type="text" class="form-control" id="preco" name="preco" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->PRECO;?>
" placeholder="Preço" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)"/>
                        <br/>
                    </div>
                </div>    
                <div class="row">
                    <div class="col col-lg-6 col-md-6">
                        <h4 class="panel-heading x-label">Categoria</h4>
                        <select name="categoria" class="form-control">
                            <option value="Zero KM" <?php if ($_smarty_tpl->tpl_vars['produto']->value->CATEGORIA=="Zero KM") {?>selected<?php }?>>Zero KM</option>
                            <option value="Seminovos" <?php if ($_smarty_tpl->tpl_vars['produto']->value->CATEGORIA=="Seminovos") {?>selected<?php }?>>Seminovo</option>
                            <option value="Usado" <?php if ($_smarty_tpl->tpl_vars['produto']->value->CATEGORIA=="Usado") {?>selected<?php }?>>Usado</option>
                        </select> 
                        <br/>
                    </div>    
                    <div class="col col-lg-6 col-md-6">
                        <h4 class="panel-heading x-label">Ano</h4>
                        <select name="ano" class="form-control">
                            <?php echo smarty_function_counter(array('assign'=>'i','start'=>0,'print'=>false),$_smarty_tpl);?>

                            <?php  $_smarty_tpl->tpl_vars['ano'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ano']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['anos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ano']->key => $_smarty_tpl->tpl_vars['ano']->value) {
$_smarty_tpl->tpl_vars['ano']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['produto']->value->ANO==$_smarty_tpl->tpl_vars['ano']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
</option>
                                <?php echo smarty_function_counter(array(),$_smarty_tpl);?>

                            <?php } ?>
                        </select>
                        <br/>
                    </div>
                </div>    
                <div class="row">
                    <div class="col col-lg-4 col-md-2">
                        <h4 class="panel-heading x-label">Quilometragem</h4>
                        <input type="text" class="form-control" id="quilometragem" name="quilometragem" maxlength="40" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->KM;?>
" placeholder="Quilometragem" onkeypress="return formataNumDV(event, this, 40);"/>
                        <br/>
                    </div>    
                    <div class="col col-lg-4 col-md-3">
                        <h4 class="panel-heading x-label">Cor</h4>
                        <input type="text" class="form-control" id="cor" name="cor" maxlength="25" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->COR;?>
" placeholder="Cor"/>
                        <br/>
                    </div>    
                    <div class="col col-lg-4 col-md-3">
                        <h4 class="panel-heading x-label">Combustível</h4>
                        <input type="text" class="form-control" id="combustivel" name="combustivel" maxlength="25" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->COMBUSTIVEL;?>
"  placeholder="Combustível"/>
                        <br/>
                    </div> 
                     </div>   
        </div>   
        <div class="row">
            <div class="col col-lg-12 col-md-12">        
                <h4 class="panel-heading x-label">Especificações</h4>
                <textarea class="form-control" rows="25" style="min-width: 100%" id="especificacoes" name="especificacoes"><?php echo $_smarty_tpl->tpl_vars['produto']->value->ESPECIFICACOES;?>
</textarea>
                <br/>
            </div>    
        </div> 
        <div class="row">
            <div class="col col-lg-12 col-md-12">  
                <button type="submit" class="btn btn-primary btn-lg" role="button">Enviar</button>
                <br/>
            </div>    
        </div> 
        </form> 

    </div>

</div>

</div>


<?php echo $_smarty_tpl->getSubTemplate ("tinymce_1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<?php }} ?>
