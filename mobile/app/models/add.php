<?php

$model = new Model();

$fotos = rearrange_files($_POST['fotos']);
unset($_POST['fotos']);

$codproduto = strtoupper(md5(uniqid(rand(), true)));

//=========================
// FOTOS
//=========================

$upload_path = '/home/dlab34/auto.designlab.com.br/web-files' . DS . 'upload' . DS . date("Y") . DS . date("m") . DS;
$upload_path_base = '/web-files' . DS . 'upload' . DS . date("Y") . DS . date("m") . DS;

if (!is_dir($upload_path)) {
    mkdir($upload_path, 0777, true);
}

foreach ($fotos as $k => $foto) {

    $ext = pathinfo($foto['name'], PATHINFO_EXTENSION);
    $filename = crc32($foto['name'] . time()) . '.' . $ext;
    $filename_920 = crc32($foto['name'] . time()) . '_920x620.' . $ext;
    $filename_640 = crc32($foto['name'] . time()) . '_640x480.' . $ext;
    $filename_320 = crc32($foto['name'] . time()) . '_320x240.' . $ext;

    $fotos_info[$k]['filename'] = $foto['name'];
    $fotos_info[$k]['filepath'] = $upload_path_base . $filename;
    $fotos_info[$k]['filepath_920'] = $upload_path_base . $filename_920;
    $fotos_info[$k]['filepath_640'] = $upload_path_base . $filename_640;
    $fotos_info[$k]['filepath_320'] = $upload_path_base . $filename_320;

    $img = new abeautifulsite\SimpleImage($foto['tmp_name']);

    $img->save($upload_path . $filename);
    $img->adaptive_resize(920, 620)->save($upload_path . $filename_920);
    $img->adaptive_resize(640, 480)->save($upload_path . $filename_640);
    $img->adaptive_resize(320, 240)->save($upload_path . $filename_320);
}

$model->add_fotos($fotos_info);

die;

//=========================
// CADASTRO
//=========================

$preco = $_POST["preco"];
$nome = $_POST["veiculo"];
$categoria = $_POST["categoria"];
$linha_1 = $_POST["cambio"];
$linha_2 = $_POST["linha_2"];
$linha_3 = $_POST["linha_3"];

$ano = $_POST["ano"];
$km = $_POST["km"];
$cor = $_POST["cor"];
$combustivel = $_POST["combustivel"];
$portas = $_POST["portas"];
$final_placa = $_POST["placa"];
$carroceria = $_POST["carroceria"];
$especificacoes = $_POST["adicionais"];

$url_amigavel = slug($nome);

if ($model->existe_url_amigavel($url_amigavel)) {
    $check = true;
    $i = 1;
    while ($check) {
        if ($model->existe_url_amigavel($url_amigavel . "-" . $i)) {
            $check = true;
        } else {
            $url_amigavel = $url_amigavel . "-" . $i;
            $check = false;
        }
        $i++;
    }
}

$dados["CODPRODUTO"] = $codproduto;
$dados["NOME"] = utf8_encode($nome);
$dados["URL_AMIGAVEL"] = $url_amigavel;
$dados["CATEGORIA"] = $categoria;
$dados["PRECO"] = $preco;
$dados["LINHA_1"] = utf8_encode($linha_1);
$dados["LINHA_2"] = utf8_encode($linha_2);
$dados["LINHA_3"] = utf8_encode($linha_3);
$dados["DESTAQUE"] = 0;
$dados["STATUS"] = 1;
$dados["ANO"] = utf8_encode($ano);
$dados["KM"] = $km;
$dados["COR"] = utf8_encode($cor);
$dados["COMBUSTIVEL"] = utf8_encode($combustivel);
$dados["PORTAS"] = $portas;
$dados["FINAL_PLACA"] = utf8_encode($final_placa);
$dados["CARROCERIA"] = utf8_encode($carroceria);
$dados["ESPECIFICACOES"] = trim(stripslashes($especificacoes));

if ($model->insert_produto($dados)) {
    echo Json::encode(array('status' => 'success'));
}