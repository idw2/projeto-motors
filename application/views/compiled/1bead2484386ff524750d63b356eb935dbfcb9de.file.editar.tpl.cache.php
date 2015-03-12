<?php /* Smarty version Smarty-3.1.19, created on 2014-12-16 10:06:28
         compiled from "/home/dlab34/auto.designlab.com.br/application/views/admin/editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48114357549074a4a97f87-20544871%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bead2484386ff524750d63b356eb935dbfcb9de' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/admin/editar.tpl',
      1 => 1413820945,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48114357549074a4a97f87-20544871',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'url_amigavel' => 0,
    'erro' => 0,
    'sucesso' => 0,
    'produto' => 0,
    'active_1' => 0,
    'active_2' => 0,
    'active_3' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_549074a4cb5c44_11461315',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549074a4cb5c44_11461315')) {function content_549074a4cb5c44_11461315($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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

            <form class="navbar-form navbar-left" style="width: 100%" action="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/veiculos/editar/<?php echo $_smarty_tpl->tpl_vars['url_amigavel']->value;?>
" method="post">

                <h2><span class="label label-default">Editar veículo</span></h2>
                <br/>
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

                    <div class="col-md-4">

                        <h4 class="panel-heading x-label">Veículo</h4>
                        <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                            <input type="text" class="form-control" id="preco" name="preco" placeholder="Preço" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->PRECO;?>
" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)"/>
                        </div>	
                        <br/>
                        <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                            <input type="text" class="form-control" id="nome" name="nome" maxlength="40" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->NOME;?>
" placeholder="Nome"/>
                        </div>	
                        <h4 class="panel-heading x-label">Descrição</h4>
                        <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                            <input type="text" class="form-control" id="linha_1" name="linha_1" maxlength="40" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->LINHA_1;?>
" placeholder="Linha 1"/>
                        </div>	
                        <br/>
                        <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                            <input type="text" class="form-control" id="linha_2" name="linha_2" maxlength="40" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->LINHA_2;?>
" placeholder="Linha 2"/>
                        </div>	
                        <br/>
                        <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                            <input type="text" class="form-control" id="linha_3" name="linha_3" maxlength="40" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->LINHA_2;?>
" placeholder="Linha 3"/>
                        </div>	
                        <br/>
                        <h4 class="panel-heading x-label">Categoria</h4>
                        <div class="input-group input-group-lg">
                            
                            <?php if ($_smarty_tpl->tpl_vars['produto']->value->CATEGORIA=="novidades") {?>
                                <?php $_smarty_tpl->tpl_vars['active_1'] = new Smarty_variable("selected", null, 0);?>
                            <?php } elseif ($_smarty_tpl->tpl_vars['produto']->value->CATEGORIA=="zero_km") {?>    
                                <?php $_smarty_tpl->tpl_vars['active_2'] = new Smarty_variable("selected", null, 0);?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->tpl_vars['active_3'] = new Smarty_variable("selected", null, 0);?> 
                            <?php }?>    
                                
                            <select name="categoria" class="form-control">
                                <option value="novidades" <?php echo $_smarty_tpl->tpl_vars['active_1']->value;?>
>Novidades</option>
                                <option value="zero_km" <?php echo $_smarty_tpl->tpl_vars['active_2']->value;?>
>Zero KM</option>
                                <option value="seminovos" <?php echo $_smarty_tpl->tpl_vars['active_3']->value;?>
>Seminovos</option>
                            </select>
                        </div>

                    </div>
                            
                    <div class="col-md-4">
                        <h4 class="panel-heading x-label">Propriedades</h4>
                        <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                            <input type="text" class="form-control" id="ano" name="ano" maxlength="9"  value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->ANO;?>
" placeholder="Ano"/>
                        </div>
                         <br/>
                        <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                            <input type="text" class="form-control" id="quilometragem" name="quilometragem" maxlength="40" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->KM;?>
" placeholder="Quilometragem" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)"/>
                        </div>
                          <br/>
                        <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                            <input type="text" class="form-control" id="cor" name="cor" maxlength="25" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->COR;?>
" placeholder="Cor"/>
                        </div>
                        <br/>
                        <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                            <input type="text" class="form-control" id="combustivel" name="combustivel" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->COMBUSTIVEL;?>
" maxlength="25" placeholder="Combustivel"/>
                        </div>
                        <br/>
                        <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                            <input type="text" class="form-control" id="portas" name="portas" maxlength="1" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->PORTAS;?>
" placeholder="Nº de Portas" onkeypress="return formataNumDV(event, this, 1);"/>
                        </div>
                         <br/>
                        <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                            <input type="text" class="form-control" id="placa" name="placa" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->FINAL_PLACA;?>
" maxlength="4" placeholder="Final da Placa"/>
                        </div>
                         <br/>
                        <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                            <input type="text" class="form-control" id="carroceria" name="carroceria" value="<?php echo $_smarty_tpl->tpl_vars['produto']->value->CARROCERIA;?>
" maxlength="25" placeholder="Carroceria"/>
                        </div>
                    </div>        

                    <div class="col-md-4">


                        <div class="auto-img"><img src="/web-files/img/images/croqui.png" alt="" border="0" title="" class="img-responsive"/></div>
                        <div style="height: 110px">   
                            <div class="auto-price">R$ <span class="view-preco"><?php echo $_smarty_tpl->tpl_vars['produto']->value->PRECO;?>
</span></div>
                            <div class="auto-title view-nome"><?php echo $_smarty_tpl->tpl_vars['produto']->value->NOME;?>
</div>
                            <div class="auto-descricao view-linha_1"><?php echo $_smarty_tpl->tpl_vars['produto']->value->LINHA_1;?>
</div>
                            <div class="auto-descricao view-linha_2"><?php echo $_smarty_tpl->tpl_vars['produto']->value->LINHA_2;?>
</div>
                            <div class="auto-descricao view-linha_3"><?php echo $_smarty_tpl->tpl_vars['produto']->value->LINHA_3;?>
</div>
                        </div>
                        <div>
                            <span class="m-ico"><img src="/web-files/img/images/cifrao.png" alt="" border="0" title="" class="img-responsive"/></span>    
                            <span class="m-ico"><img src="/web-files/img/images/document.png" alt="" border="0" title="" class="img-responsive"/></span>    
                            <span class="m-ico"><img src="/web-files/img/images/chat.png" alt="" border="0" title="" class="img-responsive"/></span>    
                            <span class="m-ico"><img src="/web-files/img/images/mail.png" alt="" border="0" title="" class="img-responsive"/></span>    
                            <span class="m-ico"><img src="/web-files/img/images/like.png" alt="" border="0" title="" class="img-responsive"/></span>    
                        </div>

                    </div>
                        
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="panel-heading x-label">Especificações</h4>
                            <p><textarea class="form-control" rows="25" style="min-width: 100%" id="especificacoes" name="especificacoes"><?php echo $_smarty_tpl->tpl_vars['produto']->value->ESPECIFICACOES;?>
</textarea></p>
                            <br/> <br/>
                            <div class="input-group input-group-lg">
                                <button type="submit" class="btn btn-primary btn-lg" role="button">Enviar</button>
                            </div>
                        </div>
                    </div>    
                    <br/> <br/>        
                </div>
                        
                <script>
                    $(document).ready(function() {

                        $("#preco").keyup(function() {
                            $(".view-preco").html($("#preco").val());
                        });

                        $("#nome").keyup(function() {
                            $(".view-nome").html($("#nome").val());
                        });

                        $("#linha_1").keyup(function() {
                            $(".view-linha_1").html($("#linha_1").val());
                        });

                        $("#linha_2").keyup(function() {
                            $(".view-linha_2").html($("#linha_2").val());
                        });

                        $("#linha_3").keyup(function() {
                            $(".view-linha_3").html($("#linha_3").val());
                        });

                    });
                </script>

            </form>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin/tinymce_1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
