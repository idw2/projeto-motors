<?php /* Smarty version Smarty-3.1.19, created on 2015-03-11 10:17:49
         compiled from "/home/dlab34/motors.designlab.com.br/application/views/logomarca.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1086250138550078bd192e70-88435031%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f12b5cea6430a79b9778c5831331fddaf9dfbc27' => 
    array (
      0 => '/home/dlab34/motors.designlab.com.br/application/views/logomarca.tpl',
      1 => 1426090348,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1086250138550078bd192e70-88435031',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'logomarca' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_550078bd26c9a2_51262529',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550078bd26c9a2_51262529')) {function content_550078bd26c9a2_51262529($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Logomarca</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form id="formulario" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <br/>
                                        <h4><span style="font-size: 12px; color: #555">O tamanho da "Logo" deve ser de 212 pixels de "Largura" por 75 pixels de "Altura" exatos!</span></h4>
                                        <h4><span style="font-size: 12px; color: #555">Extensões premitidas: ".jpg", ".jpeg", ".gif", ".png", ".bmp"</span></h4>
                                        <p><input type="file" class="form-control" id="logomarca" name="logomarca" placeholder="Logomarca"/></p>
                                    </div>
                                </div>
                                <p id="visualizar"></p>
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <div style="background: #fff; margin: 0 11px; padding: 32px; height: 98px;">
                                <a href="/<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
/html/logomarca">
                                    <span id="logo_default">
                                        <img class="area-restrita img-responsive center-block" src="<?php if ($_smarty_tpl->tpl_vars['logomarca']->value=='') {?>/web-files/logomarcas/logo_default.png<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['logomarca']->value;?>
<?php }?>" alt="" border="0" title="" />
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<script>
    $(document).ready(function() {
        $("#logomarca").change(function() {
            $('#visualizar').html('<img src="/web-files/img/Loader.GIF" alt="Enviando..." style="width: 32px;"/> Enviando...');
            //{ target:'#visualizar' }
            $('#formulario').ajaxForm(function(data) {
                $('#visualizar').html(data['erro']);
                if (data['logo'] != "") {
                    $("#logo_default").html('<img class="area-restrita img-responsive center-block" src="' + data['logo'] + '" alt="" border="0" title="">');
                }
            }).submit();
        });
    });
</script><?php }} ?>
