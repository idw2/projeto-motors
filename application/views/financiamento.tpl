{include file="header.tpl"}

<div class="sidebar">
    {include file="navbar.tpl"}
</div>
<div class="content">
    {*<div class="row">
        <div class="col-md-12">
            <div class="pull-left">
                {include file="logo.tpl"}
            </div>
        </div>
    </div>*}
    <div class="row">
        <div class="col-md-12">

            <form class="navbar-form navbar-left" style="width: 100%" action="/{$language}/html/financiamento" method="post">
                <h2><span class="label label-default">Financie</span></h2>
                <br/>
                <p><textarea class="form-control" rows="25" style="min-width: 100%" id="conteudo" name="conteudo">{$conteudo}</textarea></p>
                <p><div>{include file="btn_send.tpl"}</div></p>

            </form>

        </div>
    </div>
</div>
{include file="tinymce_1.tpl"}
{include file="footer.tpl"}