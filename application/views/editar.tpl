{include file="header.tpl"}

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Editar Veículo</h1>
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
        <div class="col-lg-12">

            <form method="post">
                <a href="/{$language}/veiculos/veiculos_lista" class="btn btn-default navbar-btn"><i class="fa fa-reply">&nbsp</i> Voltar</a>
                <br/>

                {if $erro eq ""}

                    <div class="alert alert-success" role="alert"><strong>Atenção: </strong>Preencher todos os campos!</div>

                {else}

                    {if $sucesso eq "FALSE"}
                        <div class="alert alert-danger" role="alert"><strong>Atenção: </strong>{$erro}</div>
                    {else}
                        <div class="alert alert-success" role="alert">{$erro}</div>	
                    {/if}

                {/if}
                <div class="row">
                    <div class="col col-lg-6 col-md-6">
                        <h4 class="panel-heading x-label">Veículo</h4>
                        <input type="text" class="form-control" id="nome" name="nome" value="{$produto->NOME}" placeholder="Nome" />	
                        <br/>
                    </div>    
                    <div class="col col-lg-6 col-md-6">
                        <h4 class="panel-heading x-label">Preço</h4>
                        <input type="text" class="form-control" id="preco" name="preco" value="{$produto->PRECO}" placeholder="Preço" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)"/>
                        <br/>
                    </div>
                </div>    
                <div class="row">
                    <div class="col col-lg-6 col-md-6">
                        <h4 class="panel-heading x-label">Modelo</h4>
                        <select name="carroceria" class="form-control">
                            <option value="Utilitário comercial" {if $produto->CARROCERIA == "Utilitário comercial"}selected{/if}>Utilitário comercial</option>
                            <option value="Esportivo e conversível" {if $produto->CARROCERIA == "Esportivo e conversível"}selected{/if}>Esportivo e conversível</option>
                            <option value="Utilitário esportivo (SUV)" {if $produto->CARROCERIA == "Utilitário esportivo (SUV)"}selected{/if}>Utilitário esportivo (SUV)</option>
                            <option value="Picape" {if $produto->CARROCERIA == "Picape"}selected{/if}>Picape</option>
                            <option value="Perua (station wagon)" {if $produto->CARROCERIA == "Perua (station wagon)"}selected{/if}>Perua (station wagon)</option>
                            <option value="Monovolume e minivan" {if $produto->CARROCERIA == "Monovolume e minivan"}selected{/if}>Monovolume e minivan</option>
                            <option value="Sedãs grandes" {if $produto->CARROCERIA == "Sedãs grandes"}selected{/if}>Sedãs grandes</option>
                            <option value="Sedã médio" {if $produto->CARROCERIA == "Sedã médio"}selected{/if}>Sedã médio</option>
                            <option value="Sedã compacto" {if $produto->CARROCERIA == "Sedã compacto"}selected{/if}>Sedã compacto</option>
                            <option value="Hatch médio e esportivo" {if $produto->CARROCERIA == "Hatch médio e esportivo"}selected{/if}>Hatch médio e esportivo</option>
                            <option value="Hatch compacto" {if $produto->CARROCERIA == "Hatch compacto"}selected{/if}>Hatch compacto</option>
                        </select>
                        <br/>
                    </div>    
                    <div class="col col-lg-6 col-md-6">
                        <h4 class="panel-heading x-label">Fabricante</h4>
                        <select name="fabricante" class="form-control">
                            {counter assign=i start=0 print=false}
                            {foreach name=outer item=fabricante from=$fabricantes}
                                {if isset($fabricante->LETRA) }
                                    <optgroup label="{$fabricante->LETRA}">
                                    {/if}    
                                    {if !isset($fabricante->LETRA) }
                                        <option value="{$fabricante->FABRICANTE}" {if $fabricante->FABRICANTE == $produto->FABRICANTE}selected{/if}>{$fabricante->FABRICANTE}</option>
                                    {/if}            
                                    {if isset($fabricante->LETRA) }
                                    </optgroup>
                                {/if}
                                {counter}
                            {/foreach}
                        </select> 
                        <br/>
                    </div>
                </div>    
                <div class="row">
                    <div class="col col-lg-6 col-md-6">
                        <h4 class="panel-heading x-label">Categoria</h4>
                        <select name="categoria" class="form-control">
                            <option value="Zero KM" {if $produto->CATEGORIA == "Zero KM"}selected{/if}>Zero KM</option>
                            <option value="Seminovos" {if $produto->CATEGORIA == "Seminovos"}selected{/if}>Seminovo</option>
                            <option value="Usado" {if $produto->CATEGORIA == "Usado"}selected{/if}>Usado</option>
                        </select> 
                        <br/>
                    </div>    
                    <div class="col col-lg-6 col-md-6">
                        <h4 class="panel-heading x-label">Ano</h4>
                        <select name="ano" class="form-control">
                            {counter assign=i start=0 print=false}
                            {foreach name=outer item=ano from=$anos}
                                <option value="{$ano}" {if $produto->ANO == $ano}selected{/if}>{$ano}</option>
                                {counter}
                            {/foreach}
                        </select>
                        <br/>
                    </div>
                </div>    
                <div class="row">
                    <div class="col col-lg-2 col-md-2">
                        <h4 class="panel-heading x-label">Quilometragem</h4>
                        <input type="text" class="form-control" id="quilometragem" name="quilometragem" maxlength="40" value="{$produto->KM}" placeholder="Quilometragem" onkeypress="return formataNumDV(event, this, 40);"/>
                        <br/>
                    </div>    
                    <div class="col col-lg-3 col-md-3">
                        <h4 class="panel-heading x-label">Cor</h4>
                        <input type="text" class="form-control" id="cor" name="cor" maxlength="25" value="{$produto->COR}" placeholder="Cor"/>
                        <br/>
                    </div>    
                    <div class="col col-lg-3 col-md-3">
                        <h4 class="panel-heading x-label">Combustível</h4>
                        <input type="text" class="form-control" id="combustivel" name="combustivel" maxlength="25" value="{$produto->COMBUSTIVEL}"  placeholder="Combustível"/>
                        <br/>
                    </div> 
                    <div class="col col-lg-2 col-md-2">
                        <h4 class="panel-heading x-label">Número de portas</h4>
                        <input type="text" class="form-control" id="portas" name="portas" maxlength="1" value="{$produto->PORTAS}" placeholder="Nº de Portas" onkeypress="return formataNumDV(event, this, 1);"/>   
                        <br/>
                    </div>    
                  
                    <div class="col col-lg-2 col-md-2">
                        <h4 class="panel-heading x-label">Final da Placa</h4>
                        <input type="text" class="form-control" id="placa" name="placa" maxlength="4" value="{$produto->FINAL_PLACA}" placeholder="Final da Placa"/>
                        <br/>
                    </div> </div>   
                </div>   
                <div class="row">
                    <div class="col col-lg-12 col-md-12">        
                        <h4 class="panel-heading x-label">Especificações</h4>
                        <textarea class="form-control" rows="25" style="min-width: 100%" id="especificacoes" name="especificacoes">{$produto->ESPECIFICACOES}</textarea>
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


{include file="tinymce_1.tpl"}
{include file="footer.tpl"}

