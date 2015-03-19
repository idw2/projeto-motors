{include file="header.tpl"}

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Create User</h1>
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
                                    <div class="alert alert-success" role="alert"><strong>Heads Up: </strong>Username required!</div>
                                {else}
                                    <div class="alert alert-danger" role="alert"><strong>Heads Up: </strong>{$erro}</div>
                                {/if}

                                <br/> 





                                <h4>Username:</h4>
                                <div><input type="text" class="form-control" id="nome" name="nome" maxlength="15" value="{$post_nome}" placeholder="Username"/></div>


                                <h4>
                                    <input type="checkbox" name="updatePassword" id="updatePassword" {if $updatePassword eq "on" } checked="true" {/if} /> I wish to register a new password.
                                </h4>
                                
                                <div class="updatePassword {if isset($updatePassword) } {if isset($updatePassword) != "on" } hide {/if} {else} hide {/if} ">
                                    <hr/>
                                    <div><input type="password" class="form-control" id="passwd" name="passwd" maxlength="50" value="" placeholder="Password"/></div>
                                    <br>
                                    <div><input type="password" class="form-control" id="passwd2" name="passwd2" maxlength="50" value=""  placeholder="Repeat passwor"/></div>
                                    <h4>Safety Reminder:</h4>
                                    <div><input type="text" class="form-control" id="lembrete" name="lembrete" maxlength="30" value="{$post_lembrete}" placeholder="Password reminder"/></div>
                                    <hr/>
                                </div>
                                <div>{include file="btn_send.tpl"}</div>
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
