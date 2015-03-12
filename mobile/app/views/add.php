<?php partials('head'); ?>

<div class="uk-grid">
    <form class="ajax-form uk-form uk-width-1-1" action='' method="post" data-uk-grid-margin novalidate>

        <!--        <div id="upload-drop" class="uk-placeholder">
                    Info text... <a class="uk-form-file">Adicionar fotos<input id="upload-select" type="file"></a>.
                </div>-->
        <div id="upload-drop" class="uk-placeholder uk-text-center">
            <i class="md-photo-camera uk-text-muted uk-margin-small-right" style='font-size: 32px;vertical-align: middle;'></i> Clique para adicionar Fotos<a class="uk-form-file"><input id="upload-select" type="file" name="myfile[]" accept="image/*;capture=camera" multiple></a>
        </div>
        

        <div id="progressbar" class="uk-progress uk-hidden">
            <div class="uk-progress-bar" style="width: 0%;">Barra</div>
        </div>

        <div id="photos" class="uk-width-1-1 list"></div>
<div id="CODFOTOS"></div>
        <fieldset data-uk-margin>
            <div class="uk-form-row">
                <input type="text" name="veiculo" placeholder="Veículo" class="uk-width-1-1" required>
            </div>
            <div class="uk-form-row">
                <div class="input-group">
                    <span class="input-group-addon">R$</span>
                    <input type="tel" name="preco" placeholder="Preço" class="uk-width-1-1" data-mask='000.000.000.000.000,00' data-mask-reverse='true' required>
                </div>
            </div>
            <div class="uk-form-row">
                <div class="uk-grid uk-grid-small">
                    <div class="uk-width-1-2"><select name="carroceria" class="uk-width-1-1">
                            <option value="" selected>Carroceria -</option>
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
                        </select></div><div class="uk-width-1-2"><select name="categoria" class="uk-width-1-1" required>
                            <option value="" selected>Categoria -</option>
                            <option value="Zero KM">Zero KM</option>
                            <option value="Seminovos">Seminovos</option>
                            <option value="Usado">Usado</option>
                        </select></div>
                </div>
            </div>            <div class="uk-form-row"><select name="fabricante" class="uk-width-1-1" >
                    <option value="" selected>Fabricante -</option>
                </select>
            </div>
            <div class="uk-form-row">
                <div class="uk-grid uk-grid-small"><div class="uk-width-1-2"><input type="tel" name="ano" placeholder="Ano" class="uk-width-1-1"></div>
                    <div class="uk-width-1-2"><input type="tel" name="km" placeholder="Quilometragem" class="uk-width-1-1" data-mask='000.000.000.000.000' data-mask-reverse='true' required></div>


                </div>
            </div>
            <div class="uk-form-row">
                <div class="uk-grid uk-grid-small"><div class="uk-width-1-2"><input type="text" name="cor" placeholder="Cor" class="uk-width-1-1"></div>
                    <div class="uk-width-1-2"><input type="text" class="uk-width-1-1" id="combustivel" name="combustivel" maxlength="25" placeholder="Combustível"/></div>

                </div>
            </div>
            <div class="uk-form-row">
                <div class="uk-grid uk-grid-small">
                    <div class="uk-width-1-2"><input type="text" class="uk-width-1-1" id="portas" name="portas" maxlength="1"  placeholder="Nº de Portas" onkeypress="return formataNumDV(event, this, 1);"/>   </div>
                    <div class="uk-width-1-2"><input type="text" class="uk-width-1-1" id="placa" name="placa" maxlength="4" placeholder="Final da Placa"/>   </div>


                </div>
            </div>

            <div class="uk-form-row">
                <textarea name="adicionais" placeholder="Informações adicionais" class="uk-width-1-1" style='height: 120px;'></textarea>
            </div>
            <div class="uk-form-row">
                <button class="uk-button btn-primary uk-width-1-1" type="submit">Publicar</button>
                <span id="visualizar"></span>
            </div>
        </fieldset>

    </form>
</div>

<?php partials('footer'); ?>