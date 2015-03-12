(function () {

    $(function () {

        var regions = {
            fotos: $('#photos')
        }

        // ============================
        // FILE UPLOAD
        // ============================

        var progressbar = $("#progressbar"),
                bar = progressbar.find('.uk-progress-bar'),
                settings = {
                    single: false,
                    param: 'myfile[]',
                    action: './upload', // upload url

                    allow: '*.(jpg|jpeg|gif|png)', // allow only images
                    type: 'json',
                    loadstart: function () {
                        bar.css("width", "0%").text("0%");
                        progressbar.removeClass("uk-hidden");
                    },
                    progress: function (percent) {
                        percent = Math.ceil(percent);
                        bar.css("width", percent + "%").text(percent + "%");
                    },
                    allcomplete: function (res) {
                        bar.css("width", "100%").text("Processando");
                        progressbar.addClass("uk-hidden");
                        console.log(res);
                        set_uploads_images(res.FOTO);
                        function logArrayElements(element, index, array) {
                            console.log('a[' + index + '] = ' + element);
                            $("#CODFOTOS").append('<input type="hidden" name="CODFOTO[]" value="' + element + '"/>');
                        }
                        res.CODFOTO.forEach(logArrayElements);
                    }
                };

        var select = $.UIkit.uploadSelect($("#upload-select"), settings),
                drop = $.UIkit.uploadDrop($("#upload-drop"), settings);

        // ============================
        // MASK
        // ============================

        $('[data-mask]').each(function () {
            var mask = $(this).attr('data-mask');
            var reverse = $(this).attr('data-mask-reverse');
            if (reverse == 'true') {
                $(this).mask(mask, {reverse: true});
            } else {
                $(this).mask(mask);
            }
        });

        // ============================
        // AJAX FORM
        // ============================

        $('.ajax-form').submit(function (e) {
            e.preventDefault();

            var valid = true;
            $("[required]").each(function () {
                if (!this.checkValidity()) {
                    $(this).addClass('uk-form-danger');
                    valid = false;
                } else {
                    $(this).removeClass('uk-form-danger');
                }
            });

            $("select[required]").each(function () {
                if (this.value == '') {
                    $(this).addClass('uk-form-danger');
                    valid = false;
                } else {
                    $(this).removeClass('uk-form-danger');
                }
            });

            if (!$(this).find('input[name="fotos[tmp_name][]"]').length) {
                regions.fotos.find('.uk-alert-danger').remove();
                regions.fotos.append(tpl('sem-foto'));
                valid = false;
            }

            if (!valid) {
                $('html,body').scrollTop(0);
                return;
            }

            var action = this.action;
            var data = new FormData();
            $('input, textarea, select, file').each(function () {
                data.append(this.name, this.value);
            });

            $.ajax({
                type: 'post',
                data: data,
                cache: false,
                contentType: false,
                processData: false,
                url: action,
                success: function (data) {
                    if (data['erro'] != "") {
                        $("#visualizar").html(data['erro']);
                    } else {
                        $("#visualizar").html(data['success']);

                    }

                }
            });
            return false;
        });

        // ============================
        // FUNCTIONS
        // ============================

        function tpl(tpl) {
            return $('#tpl_' + tpl).html();
        }

        function set_uploads_images(json) {
            regions.fotos.find('.uk-alert-danger').remove();
            $.each(json, function (i, foto) {
                var rendered = Mustache.render(tpl('foto-upload'), foto);
                regions.fotos.append(rendered);
            });
            $('.list-item--delete').click(function (e) {
                e.preventDefault();

                var self = this;
                var item = $(this).parents('.list-item');
                var overlay = item.find('.uk-overlay-area');
                var fotos = function () {
                    var array = [];
                    item.find('input[name="fotos[tmp_name][]"]').each(function (i) {
                        array.push(this.value);
                    });
                    return JSON.stringify(array);
                };

                overlay.show();
                $.post('./helpers', {action: 'remove_tmp_fotos', fotos: fotos()}, function (res) {
                    overlay.hide();
                    item.remove();
                });

                return false;
            });
        }

    });
})();