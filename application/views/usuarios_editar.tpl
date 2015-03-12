{include file="header.tpl"}

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit User</h1>
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
                            <form method="post">

                                <a href="/{$language}/usuarios" class="btn btn-default navbar-btn"><i class="fa fa-reply">&nbsp</i> Back</a>
                                <br/>

                                {if $erro eq ""}
                                    <div class="alert alert-success" role="alert"><strong>Heads Up: </strong>Fill in all required fields!</div>
                                {else}
                                    <div class="alert alert-danger" role="alert"><strong>Heads Up: </strong>{$erro}</div>
                                {/if}

                                <br/>    

                                <h4>Username:</h4>
                                <p><input type="text" class="form-control" id="nome" name="nome" maxlength="15" value="{if $post_nome eq ''}{$usuario->USERNAME}{else}{$post_nome}{/if}" placeholder="Username"/></p>

                                <h4>
                                    <input type="checkbox" name="updatePassword" id="updatePassword" {if $updatePassword eq "on" } checked="true" {/if} /> I wish to register a new password.
                                </h4>
                                <hr/>
                                <div class="updatePassword {if isset($updatePassword) } {if isset($updatePassword) != "on" } hide {/if} {else} hide {/if} ">
                                    <p><input type="password" class="form-control" id="passwd" name="passwd" maxlength="50" value="" placeholder="Password"/></p>
                                    <p><input type="password" class="form-control" id="passwd2" name="passwd2" maxlength="50" value=""  placeholder="Repeat password"/></p>
                                    <h4>Safety Reminder:</h4>
                                    <p><input type="text" class="form-control" id="lembrete" name="lembrete" maxlength="30" value="{if $post_lembrete eq ''}{$usuario->LEMBRETE}{else}{$post_lembrete}{/if}" placeholder="Password reminder"/></p>
                                    <hr/>
                                </div>
                                <p><button type="submit" class="btn btn-primary" name="enviar">SEND</button></p>

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
