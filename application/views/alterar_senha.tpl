{include file="header.tpl"}

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Change Password</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    {*<div class="row">
        <div class="col-md-12">
            <div class="pull-left">
                {include file="logo.tpl"}
            </div>
        </div>
    </div>*}
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form class="navbar-form navbar-left" style="width: 100%" action="/{$language}/admin/alterar_senha" method="post">

                                {if $erro eq ""}
                                    <div class="alert alert-success" role="alert"><strong>Heads Up: </strong>Fill in all required fields!</div>
                                {else}
                                    <div class="alert alert-danger" role="alert"><strong>Heads Up: </strong>{$erro}</div>
                                {/if}
                                
                                <br/>
                                <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                                    <input type="password" class="form-control" id="senha_atual" name="senha_atual" placeholder="Current password"/>
                                    <span class="input-group-addon"><i class="fa fa-pencil">&nbsp</i></span>
                                </div>	
                                <br/>
                                <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                                    <input type="password" class="form-control" id="senha_nova" name="senha_nova" placeholder="New password"/>
                                    <span class="input-group-addon"><i class="fa fa-pencil">&nbsp</i></span>
                                </div>	
                                <br/>
                                <div class="input-group input-group-lg" style="margin-bottom: 1%;">
                                    <input type="password" class="form-control" id="senha_repetir" name="senha_repetir" placeholder="Repeat senha"/>
                                    <span class="input-group-addon"><i class="fa fa-pencil">&nbsp</i></span>
                                </div>	
                                <br/>
                                <div class="input-group input-group-lg">
                                    {include file="btn_send.tpl"}
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

{include file="tinymce_1.tpl"}
{include file="footer.tpl"}