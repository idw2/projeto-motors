<?php partials('head'); ?>

<div class="uk-grid">
    <form class="ajax-form uk-form uk-width-1-1" action='' data-uk-grid-margin novalidate>

        <!--        <div id="upload-drop" class="uk-placeholder">
                    Info text... <a class="uk-form-file">Adicionar fotos<input id="upload-select" type="file"></a>.
                </div>-->
        <div id="upload-drop" class="uk-placeholder uk-text-center">
            <i class="md-photo-camera uk-text-muted uk-margin-small-right" style='font-size: 32px;vertical-align: middle;'></i> Clique para adicionar Fotos<a class="uk-form-file"><input id="upload-select" type="file" accept="image/*;capture=camera" multiple></a>
        </div>

        <div id="progressbar" class="uk-progress uk-hidden">
            <div class="uk-progress-bar" style="width: 0%;">Barra</div>
        </div>

        <div id="photos" class="uk-width-1-1 list"></div>

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
                    <div class="uk-width-1-2"><input type="tel" name="ano" placeholder="Ano" class="uk-width-1-1"></div>
                    <div class="uk-width-1-2"><input type="tel" name="km" placeholder="Km" class="uk-width-1-1" data-mask='000.000.000.000.000' data-mask-reverse='true' required></div>
                </div>
            </div>
            <div class="uk-form-row">
                <div class="uk-grid uk-grid-small">
                    <div class="uk-width-1-2"><input type="text" name="cor" placeholder="Cor" class="uk-width-1-1"></div>
                    <div class="uk-width-1-2">
                        <select name="cambio" class="uk-width-1-1" required>
                            <option value="">Câmbio -</option>
                            <option>Manual</option>
                            <option>Automático</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="uk-form-row">
                <select name="categoria" class="uk-width-1-1" required>
                    <option value="">Categoria -</option>
                    <option>Novidades</option>
                    <option>Zero KM</option>
                    <option>Seminovos</option>
                </select>
            </div>
            <div class="uk-form-row">
                <textarea name="descricao" placeholder="Informações adicionais" class="uk-width-1-1" style='height: 120px;'></textarea>
            </div>
            <div class="uk-form-row">
                <button class="uk-button btn-primary uk-width-1-1" type="submit">Publicar</button>
            </div>
        </fieldset>

    </form>
</div>

<?php partials('footer'); ?>