<?php

$action = $_POST['action'];

if ($action == 'remove_tmp_fotos') {

    $fotos = json_decode($_POST['fotos']);
    foreach ($fotos as $foto) {
        if(is_readable($foto))
        unlink($foto);
    }
    die;
}