<?php /* Smarty version Smarty-3.1.19, created on 2015-03-13 13:33:51
         compiled from "/home/dlab34/motors.designlab.com.br/application/views/cadastrar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160619815550349afed4935-16345041%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e24205f2f449a1ee74e7e03ed10fd97307f512f1' => 
    array (
      0 => '/home/dlab34/motors.designlab.com.br/application/views/cadastrar.tpl',
      1 => 1426270167,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160619815550349afed4935-16345041',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fabricantes' => 0,
    'fabricante' => 0,
    'anos' => 0,
    'ano' => 0,
    'especificacoes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_550349b01540c2_75715303',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550349b01540c2_75715303')) {function content_550349b01540c2_75715303($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home/dlab34/motors.designlab.com.br/libraries/plugins/function.counter.php';
?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>



<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Novo Veículo</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    
                    <div class="row">
                        <div class="col-lg-12">

                            <form method="post">
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
" <?php if ($_smarty_tpl->tpl_vars['fabricante']->value==$_smarty_tpl->tpl_vars['fabricante']->value->FABRICANTE) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['fabricante']->value->FABRICANTE;?>
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
                                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" maxlength="20" />	
                                        <br/>
                                    </div>    

                                </div>   
                                <div class="row">
                                    <div class="col col-lg-6 col-md-6">
                                        <h4 class="panel-heading x-label">Modelo</h4>
                                        <select name="carroceria" class="form-control">
                                            <option value="Utilitário comercial">Utilitário comercial</option>
                                            <option value="Esportivo e conversível">Esportivo e conversível</option>
                                            <option value="Utilitário esportivo (SUV)">Utilitário esportivo (SUV)</option>
                                            <option value="Picape">Picape</option>
                                            <option value="Perua (station wagon)">Perua (station wagon)</option>
                                            <option value="Monovolume e minivan">Monovolume e minivan</option>
                                            <option value="Sedãs grandes">Sedãs grandes</option>
                                            <option value="Sedã médio">Sedã médio</option>
                                            <option value="Sedã compacto">Sedã compacto</option>
                                            <option value="Hatch médio e esportivo">Hatch médio e esportivo</option>
                                            <option value="Hatch compacto">Hatch compacto</option>
                                        </select>
                                        <br/>
                                    </div>    
                                    <div class="col col-lg-6 col-md-6">
                                        <h4 class="panel-heading x-label">Preço</h4>
                                        <input type="text" class="form-control" id="preco" name="preco" placeholder="Preço" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)"/>
                                        <br/>
                                    </div>
                                </div>    
                                <div class="row">
                                    <div class="col col-lg-6 col-md-6">
                                        <h4 class="panel-heading x-label">Categoria</h4>
                                        <select name="categoria" class="form-control">
                                            <option value="Zero KM">Zero KM</option>
                                            <option value="Seminovos">Seminovos</option>
                                            <option value="Usado">Usado</option>
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
"><?php echo $_smarty_tpl->tpl_vars['ano']->value;?>
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
                                        <input type="text" class="form-control" id="quilometragem" name="quilometragem" maxlength="40" placeholder="Quilometragem" onkeypress="return formataNumDV(event, this, 40);"/>
                                        <br/>
                                    </div>    
                                    <div class="col col-lg-4 col-md-3">
                                        <h4 class="panel-heading x-label">Cor</h4>
                                        <input type="text" class="form-control" id="cor" name="cor" maxlength="25" placeholder="Cor"/>
                                        <br/>
                                    </div>    
                                    <div class="col col-lg-4 col-md-3">
                                        <h4 class="panel-heading x-label">Combustível</h4>
                                        <input type="text" class="form-control" id="combustivel" name="combustivel" maxlength="25" placeholder="Combustível"/>
                                        <br/>
                                    </div> 
                                       
                                </div>   
                                <div class="row">
                                    <div class="col col-lg-12 col-md-12">        
                                        <h4 class="panel-heading x-label">Especificações</h4>
                                        <textarea class="form-control" rows="25" style="min-width: 100%" id="especificacoes" name="especificacoes"><?php echo $_smarty_tpl->tpl_vars['especificacoes']->value;?>
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
            </div>
        </div>
    </div>
</div>
<!-- /#page-wrapper -->
























<?php echo $_smarty_tpl->getSubTemplate ("tinymce_1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<script>
    $("select").css("height", "54px");

    $(document).ready(function () {

        var settings = {
            url: "/pt/veiculos/upload/" + $("#codproduto").val(),
            method: "POST",
            allowedTypes: "jpg,png,gif,bmp",
            fileName: "myfile",
            multiple: true,
            onSuccess: function (files, data, xhr)
            {

                var str = '<div class="panel panel-default myResponse" id="' + data['CODFOTO'] + '">'
                        + '<div class="panel-heading">'
                        + '<div class="row">'
                        + '<div class="col col-sm-6">' + data['DATA'] + '</div>'
                        + '<div class="col col-sm-6" style="text-align: right">'
                        + '<strong>Ações: </strong>'
                        + '<span style="cursor: pointer;" onclick="javascript:trash_arquivo(\'/pt/admin/delete-arquivo/' + data['CODFOTO'] + '\')"><img src="/web-files/img/trash-can-32.png" alt="Excluir Arquivo"  title="Excluir Arquivo" border="0"/></span>'
                        + '</div>'
                        + '</div>'
                        + '</div>'
                        + '<table class="table">'
                        + '<thead>'
                        + '<th>Nome do arquivo</th>'
                        + '<th>download</th>'
                        + '</thead>'
                        + '<tr>'
                        + '<td style="width: 50%">' + data['NOME'] + '</td>'
                        + '<td><a href="' + data['ORIGINAL'] + '" download="' + data['NOME'] + '"><img src="/web-files/img/download.png" alt="Download"  title="Download" border="0"/></a></td>'
                        + '</tr>'
                        + '</table>'
                        + '</div>';

                $("#responseHTML").append(str);
                //$("#responseHTML").prepend(str);
                $(".responseRemove").remove();

                $('#' + data['CODFOTO']).animatescroll();


                $("#status").html("<font color='green'>Upload realizado com sucesso!</font>");

            },
            onError: function (files, status, errMsg)
            {
                $("#status").html("<font color='red'>Falha ao realizar o upload!</font>");
            }
        }
        $("#mulitplefileuploader").uploadFile(settings);
//        $(".fileuploader").each(function() {
//            $(this).uploadFile(settings);
//        });
    });

    function trash_arquivo(url) {
        if (confirm('ATENÇÃO: Esta ação não poderá ser desfeita!\n Deseja continuar?')) {
            $.ajax({
                type: 'post',
                data: null,
                url: url,
                success: function (data) {
                    $("#" + data["CODARQUIVO"]).remove();
                    if (!$(".myResponse").hasClass("myResponse")) {
                        var str = '<div class="panel panel-default responseRemove"><div class="panel-heading">ATENÇÃO</div><table class="table"><thead><th>Nada na lista!</th></thead></table></div>';
                        $("#responseHTML").append(str);
                    }
                }
            });
            return true;
        } else {
            return false;
        }
    }
</script><?php }} ?>
