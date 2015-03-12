{include file="header.tpl"}

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Vehicle</h1>
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

                                {assign var="link_btn_voltar" value="/{$language}/veiculos/veiculos-lista"}
                                {include file="btn_back.tpl"} 
                                <br/>
                                {if $erro eq ""}
                                    <div class="alert alert-success" role="alert"><strong>Heads Up: </strong>Fill in all required fields!</div>
                                {else}
                                    <div class="alert alert-danger" role="alert"><strong>Heads Up: </strong>{$erro}</div>
                                {/if}

                                <div class="row">
                                    <div class="col col-lg-6 col-md-6">
                                        <h4 class="panel-heading x-label">Vehicle</h4>
                                        <input type="text" class="form-control" id="nome" name="nome" value="{$produto->NOME}" placeholder="Name" />	
                                        <br/>
                                    </div>    
                                    <div class="col col-lg-6 col-md-6">
                                        <h4 class="panel-heading x-label">Price</h4>
                                        <input type="text" class="form-control" id="preco" name="preco" value="{$produto->PRECO}" placeholder="Price" onkeypress="formataValor(event, this, 12);" onkeydown="backspaceFormataValor(event, this)"/>
                                        <br/>
                                    </div>
                                </div>    
                                <div class="row">
                                    <div class="col col-lg-6 col-md-6">
                                        <h4 class="panel-heading x-label">Model</h4>
                                        <select name="carroceria" class="form-control">
                                            <optgroup label="In English">
                                                <option value="Sedans" {if $produto->CARROCERIA == "Sedans"}selected{/if}>Sedans</option>
                                                <option value="Coupes" {if $produto->CARROCERIA == "Coupes"}selected{/if}>Coupes</option>
                                                <option value="SUVs" {if $produto->CARROCERIA == "SUVs"}selected{/if}>SUVs</option>
                                                <option value="Crossovers" {if $produto->CARROCERIA == "Crossovers"}selected{/if}>Crossovers</option>
                                                <option value="Wagons/Hatchbacks" {if $produto->CARROCERIA == "Wagons/Hatchbacks"}selected{/if}>Wagons/Hatchbacks</option>
                                                <option value="Green Cars/Hybrids" {if $produto->CARROCERIA == "Green Cars/Hybrids"}selected{/if}>Green Cars/Hybrids</option>
                                                <option value="Convertibles" {if $produto->CARROCERIA == "Convertibles"}selected{/if}>Convertibles</option>
                                                <option value="Sports Cars" {if $produto->CARROCERIA == "Sports Cars"}selected{/if}>Sports Cars</option>
                                                <option value="Pickup Trucks" {if $produto->CARROCERIA == "Pickup Trucks"}selected{/if}>Pickup Trucks</option>
                                                <option value="All Minivans/Vans" {if $produto->CARROCERIA == "All Minivans/Vans"}selected{/if}>All Minivans/Vans</option>
                                                <option value="Luxury Cars" {if $produto->CARROCERIA == "Luxury Cars"}selected{/if}>Luxury Cars</option>
                                            </optgroup>
                                            <optgroup label="Em Protuguês">
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
                                            </optgroup>
                                        </select>
                                        <br/>
                                    </div>    
                                    <div class="col col-lg-6 col-md-6">
                                        <h4 class="panel-heading x-label">Manufacturer</h4>
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
                                        <h4 class="panel-heading x-label">Category</h4>
                                        <select name="categoria" class="form-control">
                                            <optgroup label="In English">
                                                <option value="New" {if $produto->CATEGORIA == "New"}selected{/if}>New</option>
                                                <option value="Used" {if $produto->CATEGORIA == "Used"}selected{/if}>Used</option>
                                            </optgroup>
                                            <optgroup label="Em Protuguês">
                                                <option value="Zero KM" {if $produto->CATEGORIA == "Zero KM"}selected{/if}>Zero KM</option>
                                                <option value="Seminovos" {if $produto->CATEGORIA == "Seminovos"}selected{/if}>Seminovo</option>
                                                <option value="Usado" {if $produto->CATEGORIA == "Usado"}selected{/if}>Usado</option>
                                            </optgroup>

                                        </select> 
                                        <br/>
                                    </div>    
                                    <div class="col col-lg-6 col-md-6">
                                        <h4 class="panel-heading x-label">Year</h4>
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
                                        <h4 class="panel-heading x-label">Mileage</h4>
                                        <input type="text" class="form-control" id="quilometragem" name="quilometragem" maxlength="40" value="{$produto->KM}" placeholder="Mileage" onkeypress="return formataNumDV(event, this, 40);"/>
                                        <br/>
                                    </div>    
                                    <div class="col col-lg-3 col-md-3">
                                        <h4 class="panel-heading x-label">Color</h4>
                                        <input type="text" class="form-control" id="cor" name="cor" maxlength="25" value="{$produto->COR}" placeholder="Color"/>
                                        <br/>
                                    </div>    
                                    <div class="col col-lg-3 col-md-3">
                                        <h4 class="panel-heading x-label">Fuel</h4>
                                        <input type="text" class="form-control" id="combustivel" name="combustivel" maxlength="25" value="{$produto->COMBUSTIVEL}"  placeholder="Fuel"/>
                                        <br/>
                                    </div> 
                                    <div class="col col-lg-2 col-md-2">
                                        <h4 class="panel-heading x-label">Number of Ports</h4>
                                        <input type="text" class="form-control" id="portas" name="portas" maxlength="1" value="{$produto->PORTAS}" placeholder="Number of Ports" onkeypress="return formataNumDV(event, this, 1);"/>   
                                        <br/>
                                    </div>    

                                    <div class="col col-lg-2 col-md-2">
                                        <h4 class="panel-heading x-label">Final Board</h4>
                                        <input type="text" class="form-control" id="placa" name="placa" maxlength="4" value="{$produto->FINAL_PLACA}" placeholder="Final Board"/>
                                        <br/>
                                    </div> 
                                </div>  
                                <div class="row">
                                    <div class="col col-lg-12 col-md-12">        
                                        <h4 class="panel-heading x-label">Specifications</h4>
                                        <textarea class="form-control" rows="25" style="min-width: 100%" id="especificacoes" name="especificacoes">{$produto->ESPECIFICACOES}</textarea>
                                        <br/>
                                    </div>    
                                </div> 
                                <div class="row">
                                    <div class="col col-lg-12 col-md-12">  
                                        {include file="btn_send.tpl"}
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

{include file="tinymce_1.tpl"}
{include file="footer.tpl"}

