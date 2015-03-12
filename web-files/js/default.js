function getMyFolderRoot() {
    return "";
}

$(document).ready(function() {

    $('[rel="tooltip"]').tooltip();

    if (document.getElementById("pesquisar_endereco") != null) {
        $('#pesquisar_endereco').click(function() {
            get_endereco();
        });

//        $('#cep').keyup(function() {
//            get_endereco();
//        });
    }

    if (document.getElementById("preco") != null) {
        $("#preco").keyup(function() {
            $(".view-preco").html($("#preco").val());
        });
    }

    if (document.getElementById("nome") != null) {
        $("#nome").keyup(function() {
            $(".view-nome").html($("#nome").val());
        });
    }


    if (document.getElementById("linha_1") != null) {
        $("#linha_1").keyup(function() {
            $(".view-linha_1").html($("#linha_1").val());
        });
    }


    if (document.getElementById("linha_2") != null) {
        $("#linha_2").keyup(function() {
            $(".view-linha_2").html($("#linha_2").val());
        });
    }

    if (document.getElementById("linha_3") != null) {
        $("#linha_3").keyup(function() {
            $(".view-linha_3").html($("#linha_3").val());
        });
    }

    if (document.getElementById("updatePassword") != null) {
        $("select").css("height", "50px");
        $("#updatePassword").click(function() {
            if ($(".updatePassword").hasClass("hide")) {
                $(".updatePassword").removeClass("hide");
            } else {
                $(".updatePassword").addClass("hide");

            }
        });
    }
});


function get_endereco() {
    var cep = $("#cep").val();

    $(".Loader").removeClass('hide');
    $.ajax({
        type: 'post',
        data: "cep=" + cep,
        url: '/pt/ajax/consultar-cep',
        success: function(data) {
            $(".Loader").addClass('hide');
            $("#logradouro").val(data["Logradouro"]);
            $("#bairro").val(data["Bairro"]);
            $("#cidade").val(data["Cidade"]);
            $("#estado").val(data["UF"]);
        }
    });
}

function getCrop(id) {

    var $image1 = $("." + id + "_preview_1"),
            $dataX1_1 = $("#" + id + "_dataX1_1"),
            $dataY1_1 = $("#" + id + "_dataY1_1"),
            $dataX2_1 = $("#" + id + "_dataX2_1"),
            $dataY2_1 = $("#" + id + "_dataY2_1"),
            $dataHeight_1 = $("#" + id + "_dataHeight_1"),
            $dataWidth_1 = $("#" + id + "_dataWidth_1");

    $image1.cropper({
        aspectRatio: 0.9,
        done: function(data) {
            console.log(data.x1 + ":" + data.y1 + ":" + data.x2 + ":" + data.y2 + ":" + data.height + ":" + data.width);
            $dataX1_1.val(data.x1);
            $dataY1_1.val(data.y1);
            $dataX2_1.val(data.x2);
            $dataY2_1.val(data.y2);
            $dataHeight_1.val(data.height);
            $dataWidth_1.val(data.width);
        }
    });

    var $image2 = $("." + id + "_preview_2"),
            $dataX1_2 = $("#" + id + "_dataX1_2"),
            $dataY1_2 = $("#" + id + "_dataY1_2"),
            $dataX2_2 = $("#" + id + "_dataX2_2"),
            $dataY2_2 = $("#" + id + "_dataY2_2"),
            $dataHeight_2 = $("#" + id + "_dataHeight_2"),
            $dataWidth_2 = $("#" + id + "_dataWidth_2");

    $image2.cropper({
        aspectRatio: 1.8,
        done: function(data) {
            console.log(data.x1 + ":" + data.y1 + ":" + data.x2 + ":" + data.y2 + ":" + data.height + ":" + data.width);
            $dataX1_2.val(data.x1);
            $dataY1_2.val(data.y1);
            $dataX2_2.val(data.x2);
            $dataY2_2.val(data.y2);
            $dataHeight_2.val(data.height);
            $dataWidth_2.val(data.width);
        }
    });

}

function release_crop(key, imagem, codfoto, indice, dimensao, guid) {

    var dataX1 = $("#" + key + "_dataX1_" + indice).val();
    var dataY1 = $("#" + key + "_dataY1_" + indice).val();
    var dataX2 = $("#" + key + "_dataX2_" + indice).val();
    var dataY2 = $("#" + key + "_dataY2_" + indice).val();
    var dataWidth = $("#" + key + "_dataWidth_" + indice).val();
    var dataHeight = $("#" + key + "_dataHeight_" + indice).val();
    var link = '';
    if (dimensao == "retrato") {
        link = getMyFolderRoot() + '/web-files/server/crop.php';
    } else {
        link = getMyFolderRoot() + '/web-files/server/crop_paisagem.php';
    }

    $(".LoaderCrop").removeClass('hide');

    $.ajax({
        type: 'post',
        data: "indice=" + indice + "&x1=" + dataX1 + "&y1=" + dataY1 + "&x2=" + dataX2 + "&y2=" + dataY2 + "&w=" + dataWidth + "&h=" + dataHeight + "&codfoto=" + codfoto + "&imagem=" + imagem,
        url: link,
        success: function(data) {
            $(".LoaderCrop").addClass('hide');
            if (dimensao == "retrato") {
                choose_crop(guid);
            } else {
                $("a[title=Close]").click();
                window.location.reload();
            }
        }
    });
}


function choose_crop(id) {

    if ($(".show_" + id + "_2").hasClass("hidex")) {
        $(".show_" + id + "_1").addClass('hidex');
        $(".show_" + id + "_2").removeClass('hidex');
    } else {
        $(".show_" + id + "_1").removeClass('hidex');
        $(".show_" + id + "_2").addClass('hidex');
    }
}


function vDestaqueUpdate(id, url, codproduto) {

    $("#" + id).find("img").removeClass("hide");
    $.ajax({
        type: 'post',
        data: '',
        url: getMyFolderRoot() + '/' + url,
        success: function(data) {

            if ($(".ico-default-star-" + codproduto).hasClass("desative")) {
                $(".ico-default-star-" + codproduto).removeClass("desative");
            } else {
                $(".ico-default-star-" + codproduto).addClass("desative");
            }

            $("#" + id).find("img").addClass("hide");
            console.log(data);

        }
    });

}

function vStatusUpdate(id, url, codproduto) {

    $("#" + id).find("img").removeClass("hide");

    $.ajax({
        type: 'post',
        data: '',
        url: getMyFolderRoot() + '/' + url,
        success: function(data) {

            if ($(".ico-default-eye-" + codproduto).hasClass("desative")) {
                $(".ico-default-eye-" + codproduto).removeClass("desative");
            } else {
                $(".ico-default-eye-" + codproduto).addClass("desative");
            }

            $("#" + id).find("img").addClass("hide");
            console.log(data);

        }
    });

}

function vNovidadeUpdate(id, url, codproduto) {

    $("#" + id).find("img").removeClass("hide");

    $.ajax({
        type: 'post',
        data: '',
        url: getMyFolderRoot() + '/' + url,
        success: function(data) {

            if ($(".ico-default-novidade-" + codproduto).hasClass("desative")) {
                $(".ico-default-novidade-" + codproduto).removeClass("desative");
            } else {
                $(".ico-default-novidade-" + codproduto).addClass("desative");
            }

            $("#" + id).find("img").addClass("hide");
            console.log(data);

        }
    });

}

function vDeleteUpdate(url, codproduto) {

    $("#delete_" + codproduto).find("img").removeClass("hide");

    if (confirm('ATENÇÃO: Esta ação não poderá ser desfeita!\n Deseja continuar?')) {
        $.ajax({
            type: 'post',
            data: '',
            url: getMyFolderRoot() + '/' + url,
            success: function(data) {

                $("#delete_" + codproduto).find("img").addClass("hide");
                $("#veiculo_" + codproduto).remove();
                console.log(data);

            }
        });
    } else {
        $("#" + id).addClass("hide");
    }


}

function datagrid_less() {

    var n = 0;
    $("#data .datagrid").each(function(i) {
        n = i;
    });
    var qntdd = (parseInt(n) - 1);

    if (qntdd > -1) {
        $("#data .datagrid:last").remove();
    }

}

function datagrid_plus() {

    var n = 0;
    $("#data .datagrid").each(function(i) {
        n = i;
    });
    var qntdd = (parseInt(n) + 1);

    var str = "<div class='row datagrid'><br/>"
            + "<div class='col col-sm-2'>"
            + "<input type='text' class='form-control' id='ddd_" + qntdd + "' name='ddd_" + qntdd + "' maxlength='4' value='' placeholder='DDD' onkeypress='return formataNumDV(event, this, 2);'/>"
            + "</div>"
            + "<div class='col col-sm-3'>"
            + "<input type='text' class='form-control' id='tel_" + qntdd + "' name='tel_" + qntdd + "' maxlength='10' value='' placeholder='Telefone ou celular' onkeypress='return formataNumDV(event, this, 9);'/>"
            + "</div>"
            + "<div class='col col-sm-7'>"
            + "<input type='text' class='form-control' id='ramal_" + qntdd + "' name='ramal_" + qntdd + "' maxlength='100' value='' placeholder='Informações adicionais'/>    "
            + "</div>"
            + "</div>";

    $("#data").append(str);
}

function show_Tipopessoa(tipo) {

    if (tipo == "cpf") {
        $(".tipo-pessoa-cpf").removeClass("hide");
        $(".tipo-pessoa-cnpj").addClass("hide");
        $(".tipo-pesso-sexo").removeClass("hide");
    } else {
        $(".tipo-pessoa-cnpj").removeClass("hide");
        $(".tipo-pessoa-cpf").addClass("hide");
        $(".tipo-pesso-sexo").addClass("hide");
    }

}


function cStatusUpdate(id, url, codconta) {

    $("#" + id).html("<img src='/web-files/img/Loader_small.gif' border='0' title='Carregando' alt='Carregando'/>");

    $.ajax({
        type: 'post',
        data: '',
        url: getMyFolderRoot() + '/' + url,
        success: function(data) {

            if ($(".ico-default-eye-" + codconta).hasClass("desative")) {
                $(".ico-default-eye-" + codconta).removeClass("desative");
            } else {
                $(".ico-default-eye-" + codconta).addClass("desative");
            }

            $("#" + id).html(null);
            console.log(data);

        }
    });

}

function fStatusUpdate(id, url, codfoto) {

    $("#" + id).html("<img src='/web-files/img/Loader_small.gif' border='0' title='Carregando' alt='Carregando'/>");

    $.ajax({
        type: 'post',
        data: '',
        url: getMyFolderRoot() + '/' + url,
        success: function(data) {

            if ($(".ico-default-eye-" + codfoto).hasClass("desative")) {
                $(".ico-default-eye-" + codfoto).removeClass("desative");
            } else {
                $(".ico-default-eye-" + codfoto).addClass("desative");
            }

            $("#" + id).html(null);
            console.log(data);

        }
    });

}

function fDestaqueUpdate(id, url, codfoto) {

    $("#" + id).html("<img src='/web-files/img/Loader_small.gif' border='0' title='Carregando' alt='Carregando'/>");

    $.ajax({
        type: 'post',
        data: '',
        url: getMyFolderRoot() + '/' + url,
        success: function(data) {
            $(".ico-default-star").addClass("desative");
            if ($(".ico-default-star-" + codfoto).hasClass("desative")) {
                $(".ico-default-star-" + codfoto).removeClass("desative");
            } else {
                $(".ico-default-star-" + codfoto).addClass("desative");
            }

            $("#" + id).html(null);

            $.ajax({
                type: 'post',
                data: '',
                url: getMyFolderRoot() + '/' + "pt/veiculos/get-foto-destaque/" + $("#url_amigavel").val(),
                success: function(data) {
                    $(".auto-img").html("<img src='" + data + "' alt='' title='' border=''>");

                }
            });

            console.log(data);

        }
    });

}

function cSuspensoUpdate(id, url, codconta) {

    $("#" + id).html("<img src='/web-files/img/Loader_small.gif' border='0' title='Carregando' alt='Carregando'/>");

    $.ajax({
        type: 'post',
        data: '',
        url: getMyFolderRoot() + '/' + url,
        success: function(data) {

            if ($(".ico-default-suspenso-" + codconta).hasClass("desative")) {
                $(".ico-default-suspenso-" + codconta).removeClass("desative");
            } else {
                $(".ico-default-suspenso-" + codconta).addClass("desative");
            }

            $("#" + id).html(null);
            console.log(data);

        }
    });

}

function cBloqueadoUpdate(id, url, codconta) {

    $("#" + id).html("<img src='/web-files/img/Loader_small.gif' border='0' title='Carregando' alt='Carregando'/>");

    $.ajax({
        type: 'post',
        data: '',
        url: getMyFolderRoot() + '/' + url,
        success: function(data) {

            if ($(".ico-default-bloqueado-" + codconta).hasClass("desative")) {
                $(".ico-default-bloqueado-" + codconta).removeClass("desative");
            } else {
                $(".ico-default-bloqueado-" + codconta).addClass("desative");
            }

            $("#" + id).html(null);
            console.log(data);

        }
    });

}

function cDeleteUpdate(id, url, codconta) {

    $("#" + id).html("<img src='/web-files/img/Loader_small.gif' border='0' title='Carregando' alt='Carregando'/>");

    if (confirm('ATENÇÃO: Esta ação não poderá ser desfeita!\n Deseja continuar?')) {
        $.ajax({
            type: 'post',
            data: '',
            url: getMyFolderRoot() + '/' + url,
            success: function(data) {

                $("#" + id).html(null);
                $("#conta_" + codconta).remove();
                console.log(data);

            }
        });
    } else {
        $("#" + id).html(null);
    }

}

function fDeleteUpdate(id, url, codfoto) {

    $("#" + id).html("<img src='/web-files/img/Loader_small.gif' border='0' title='Carregando' alt='Carregando'/>");

    if (confirm('ATENÇÃO: Esta ação não poderá ser desfeita!\n Deseja continuar?')) {
        $.ajax({
            type: 'post',
            data: '',
            url: getMyFolderRoot() + '/' + url,
            success: function(data) {

                $("#" + id).html(null);
                $("#" + codfoto).remove();
                console.log(data);

            }
        });
    } else {
        $("#" + id).html(null);
    }

}

function scrollToAnchor(aid) {
    var aTag = $("#" + aid);
    $('html,body').animate({scrollTop: aTag.offset().top}, 'slow');
}