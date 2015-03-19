<?php /* Smarty version Smarty-3.1.19, created on 2015-03-11 10:54:20
         compiled from "/home/dlab34/motors.designlab.com.br/application/views/configuracao.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17034321745500814c8fa3c3-79379972%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85363a6cfd14a1548ddf669c93b8667f0d548712' => 
    array (
      0 => '/home/dlab34/motors.designlab.com.br/application/views/configuracao.tpl',
      1 => 1426096319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17034321745500814c8fa3c3-79379972',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'erro' => 0,
    'telefone' => 0,
    'twitter' => 0,
    'user_site' => 0,
    'linkedid' => 0,
    'google_plus' => 0,
    'facebook' => 0,
    'instagram' => 0,
    'email' => 0,
    'obs_faleconosco' => 0,
    'alias' => 0,
    'color' => 0,
    'seg_sex_inicio' => 0,
    'seg_sex_fim' => 0,
    'sabado_inicio' => 0,
    'sabado_fim' => 0,
    'domingo_inicio' => 0,
    'domingo_fim' => 0,
    'feriado_inicio' => 0,
    'feriado_fim' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5500814ca832c8_44403131',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5500814ca832c8_44403131')) {function content_5500814ca832c8_44403131($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Configurações</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form method="post">
                                
                                <?php if ($_smarty_tpl->tpl_vars['erro']->value!='') {?>
                                     <div class="alert alert-success" role="alert"><?php echo $_smarty_tpl->tpl_vars['erro']->value;?>
</div>	
                                <?php }?>

                                <h4>Nº de Telefone Principal</h4>
                                <p><input class="form-control" style="min-width: 100%" id="telefone" name="telefone" value="<?php echo $_smarty_tpl->tpl_vars['telefone']->value;?>
" placeholder="Nº de Telefone Principal"/></p>

                                <h4>Twitter</h4>
                                <p><input class="form-control" style="min-width: 100%" id="twitter" name="twitter" value="<?php echo $_smarty_tpl->tpl_vars['twitter']->value;?>
" placeholder="Twitter"/></p>

                                <h4>Site</h4>
                                <p><input class="form-control" style="min-width: 100%" id="site" name="site" value="<?php echo $_smarty_tpl->tpl_vars['user_site']->value;?>
" placeholder="Site" readonly="true"/></p>

                                <h4>Linked Id</h4>
                                <p><input class="form-control" style="min-width: 100%" id="linkedid" name="linkedid" value="<?php echo $_smarty_tpl->tpl_vars['linkedid']->value;?>
" placeholder="Linked Id"/></p>

                                <h4>Google Plus</h4>
                                <p><input class="form-control" style="min-width: 100%" id="google_plus" name="google_plus" value="<?php echo $_smarty_tpl->tpl_vars['google_plus']->value;?>
" placeholder="Google Plus"/></p>

                                <h4>Facebook</h4>
                                <p><input class="form-control" style="min-width: 100%" id="facebook" name="facebook" value="<?php echo $_smarty_tpl->tpl_vars['facebook']->value;?>
" placeholder="Facebook"/></p>

                                <h4>Instagram</h4>
                                <p><input class="form-control" style="min-width: 100%" id="instagram" name="instagram" value="<?php echo $_smarty_tpl->tpl_vars['instagram']->value;?>
" placeholder="Instagram"/></p>

                                <h4>E-mail fale conosco</h4>
                                <p><input class="form-control" style="min-width: 100%" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" placeholder="E-mail fale conosco"/></p>

                                <h4>Observações fale conosco <span style="font-size: 12px; color: #555">Ex: O prazo de respostas para as solicitações é de até 24h.</span></h4>
                                <p><input class="form-control" style="min-width: 100%" id="obs_faleconosco" name="obs_faleconosco" value="<?php echo $_smarty_tpl->tpl_vars['obs_faleconosco']->value;?>
" placeholder="Observações fale conosco"/></p>

                                <h4>Aliás fale conosco <span style="font-size: 12px; color: #555">(Ex: "-f", "-r" ou caso não favor não preencher)</span></h4>
                                <p><input class="form-control" style="min-width: 100%" id="alias" name="alias" value="<?php echo $_smarty_tpl->tpl_vars['alias']->value;?>
" placeholder="Aliás"/></p>

                               

                                
                                <h4>Cor do Site</h4>
                                <p class='input-group colorpicker-component get-color colorpicker-element'>
                                    <input type="text" name='color' id='color' value="<?php if ($_smarty_tpl->tpl_vars['color']->value=='') {?>#000000<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['color']->value;?>
<?php }?>" class="form-control">
                                    <span class='input-group-addon'><i style='background-color: <?php if ($_smarty_tpl->tpl_vars['color']->value=='') {?>#000000<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['color']->value;?>
<?php }?>'></i></span>
                                </p>
                                
                                <h2>Horário de funcionamento</h2>
                                <h4>De segunda à sexta <span style="font-size: 12px; color: #555">(Ex: formato da hora "00:00")</span></h4>
                                <div class="row datagrid">
                                    <div class="col col-sm-3">
                                        <input type="text" class="form-control" id="seg_sex_inicio" name="seg_sex_inicio" maxlength="5" value="<?php echo $_smarty_tpl->tpl_vars['seg_sex_inicio']->value;?>
" placeholder="Abertura" onkeypress="return formataHora(event, this);"/>
                                    </div>
                                    <div class="col col-sm-3">
                                        <input type="text" class="form-control" id="seg_sex_fim" name="seg_sex_fim" maxlength="10" value="<?php echo $_smarty_tpl->tpl_vars['seg_sex_fim']->value;?>
" placeholder="Fechamento" onkeypress="return formataHora(event, this);"/>
                                    </div>
                                    <div class="col col-sm-6"> </div>
                                </div>
                                <h4>Sábados <span style="font-size: 12px; color: #555">(Ex: formato da hora "00:00")</span></h4>
                                <div class="row datagrid">
                                    <div class="col col-sm-3">
                                        <input type="text" class="form-control" id="sabado_inicio" name="sabado_inicio" maxlength="5" value="<?php echo $_smarty_tpl->tpl_vars['sabado_inicio']->value;?>
" placeholder="Abertura" onkeypress="return formataHora(event, this);"/>
                                    </div>
                                    <div class="col col-sm-3">
                                        <input type="text" class="form-control" id="sabado_fim" name="sabado_fim" maxlength="10" value="<?php echo $_smarty_tpl->tpl_vars['sabado_fim']->value;?>
" placeholder="Fechamento" onkeypress="return formataHora(event, this);"/>
                                    </div>
                                    <div class="col col-sm-6"> </div>
                                </div>
                                <h4>Domingos <span style="font-size: 12px; color: #555">(Ex: formato da hora "00:00")</span></h4>
                                <div class="row datagrid">
                                    <div class="col col-sm-3">
                                        <input type="text" class="form-control" id="domingo_inicio" name="domingo_inicio" maxlength="5" value="<?php echo $_smarty_tpl->tpl_vars['domingo_inicio']->value;?>
" placeholder="Abertura" onkeypress="return formataHora(event, this);"/>
                                    </div>
                                    <div class="col col-sm-3">
                                        <input type="text" class="form-control" id="domingo_fim" name="domingo_fim" maxlength="10" value="<?php echo $_smarty_tpl->tpl_vars['domingo_fim']->value;?>
" placeholder="Fechamento" onkeypress="return formataHora(event, this);"/>
                                    </div>
                                    <div class="col col-sm-6"> </div>
                                </div>
                                <h4>Feriados <span style="font-size: 12px; color: #555">(Ex: formato da hora "00:00")</span></h4>
                                <div class="row datagrid">
                                    <div class="col col-sm-3">
                                        <input type="text" class="form-control" id="feriado_inicio" name="feriado_inicio" maxlength="5" value="<?php echo $_smarty_tpl->tpl_vars['feriado_inicio']->value;?>
" placeholder="Abertura" onkeypress="return formataHora(event, this);"/>
                                    </div>
                                    <div class="col col-sm-3">
                                        <input type="text" class="form-control" id="feriado_fim" name="feriado_fim" maxlength="10" value="<?php echo $_smarty_tpl->tpl_vars['feriado_fim']->value;?>
" placeholder="Fechamento" onkeypress="return formataHora(event, this);"/>
                                    </div>
                                    <div class="col col-sm-6"> </div>
                                </div>
                                <br>
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

<script>
    $(document).ready(function() {
        $(function() {
            alert($('.get-color').html());
            $('.get-color').colorpicker();
        });
    });
</script><?php }} ?>
