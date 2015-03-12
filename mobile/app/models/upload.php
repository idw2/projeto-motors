<?php

$fotos = rearrange_files($_FILES['fotos']);

foreach ($fotos as $k => $foto) {
    
    $id = md5(time() . $foto['tmp_name']);
    $tmp_path = APP . 'tmp' . DS . $id . '.jpg';
    
    $img = new abeautifulsite\SimpleImage($foto['tmp_name']);
    
    $img->save($tmp_path);
    $base64 = $img->adaptive_resize(50, 50)->output_base64();
    $fotos[$k]['tmp_path'] = $tmp_path;
    $fotos[$k]['base64'] = $base64;
    $fotos[$k]['size'] = ($foto['size']/1000) . ' KB';
}

echo Json::encode($fotos);
