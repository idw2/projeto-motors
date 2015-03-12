<?php /* Smarty version Smarty-3.1.19, created on 2014-12-16 08:19:02
         compiled from "/home/dlab34/auto.designlab.com.br/application/views/admin/cadastrar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185216139354905b76a9c2d3-92784330%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b038c4f5f5fa1a5fdce35d0eaa7ef347e7079070' => 
    array (
      0 => '/home/dlab34/auto.designlab.com.br/application/views/admin/cadastrar.tpl',
      1 => 1413820944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185216139354905b76a9c2d3-92784330',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'erro' => 0,
    'sucesso' => 0,
    'especificacoes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54905b77b84ac6_41271430',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54905b77b84ac6_41271430')) {function content_54905b77b84ac6_41271430($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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
/veiculos/cadastrar" method="post">

                <h2><span class="label label-default">Cadastro de veículos</span></h2>
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
                            <input type="text" class="form-control" id="preco" name="preco" placeholder="Preço" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)"/>
                        </div>	
                        <br/>
                        <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                            <input type="text" class="form-control" id="nome" name="nome" maxlength="40" placeholder="Nome"/>
                        </div>	
                        <h4 class="panel-heading x-label">Descrição</h4>
                        <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                            <input type="text" class="form-control" id="linha_1" name="linha_1" maxlength="40" placeholder="Linha 1"/>
                        </div>	
                        <br/>
                        <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                            <input type="text" class="form-control" id="linha_2" name="linha_2" maxlength="40" placeholder="Linha 2"/>
                        </div>	
                        <br/>
                        <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                            <input type="text" class="form-control" id="linha_3" name="linha_3" maxlength="40" placeholder="Linha 3"/>
                        </div>	
                        <br/>
                        <h4 class="panel-heading x-label">Categoria</h4>
                        <div class="input-group input-group-lg">
                            <select name="categoria" class="form-control">
                                <option value="novidades">Novidades</option>
                                <option value="zero_km">Zero KM</option>
                                <option value="seminovos">Seminovos</option>
                            </select>
                        </div>                     
                        

                    </div>
                   
                    <div class="col-md-4">
                        <h4 class="panel-heading x-label">Propriedades</h4>
                        <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                            <input type="text" class="form-control" id="ano" name="ano" maxlength="9"  placeholder="Ano"/>
                        </div>
                         <br/>
                        <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                            <input type="text" class="form-control" id="quilometragem" name="quilometragem" maxlength="40" placeholder="Quilometragem" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)"/>
                        </div>
                          <br/>
                        <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                            <input type="text" class="form-control" id="cor" name="cor" maxlength="25" placeholder="Cor"/>
                        </div>
                        <br/>
                        <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                            <input type="text" class="form-control" id="combustivel" name="combustivel" maxlength="25" placeholder="Combustivel"/>
                        </div>
                        <br/>
                        <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                            <input type="text" class="form-control" id="portas" name="portas" maxlength="1" placeholder="Nº de Portas" onkeypress="return formataNumDV(event, this, 1);"/>
                        </div>
                         <br/>
                        <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                            <input type="text" class="form-control" id="placa" name="placa" maxlength="4" placeholder="Final da Placa"/>
                        </div>
                         <br/>
                        <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                            <input type="text" class="form-control" id="carroceria" name="carroceria" maxlength="25" placeholder="Carroceria"/>
                        </div>
                    </div>

                    <div class="col-md-4">


                        <div class="auto-img"><img src="/web-files/img/images/croqui.png" alt="" border="0" title="" class="img-responsive"/></div>
                        <div style="height: 110px">   
                            <div class="auto-price">R$ <span class="view-preco">52.900,00</span></div>
                            <div class="auto-title view-nome">HONDA CITY 2012</div>
                            <div class="auto-descricao view-linha_1">Lorem ipsum dolor sit amet, consectetur</div>
                            <div class="auto-descricao view-linha_2">adipiscing elit. Sed mollis metus rhoncus nisi </div>
                            <div class="auto-descricao view-linha_3">vestibulum, sed iaculis leo luctus</div>
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
                            <p><textarea class="form-control" rows="25" style="min-width: 100%" id="especificacoes" name="especificacoes"><?php echo $_smarty_tpl->tpl_vars['especificacoes']->value;?>
</textarea></p>
                            <br/> <br/>
                            <div class="input-group input-group-lg">
                                <button type="submit" class="btn btn-primary btn-lg" role="button">Enviar</button>
                            </div>
                        </div>
                    </div>

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
