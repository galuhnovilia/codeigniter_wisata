<?php
require 'Helper.php';

$obj_data = new Datalokasi(); // membuat objek dari kelas Datalokasi
$lokasi = $obj_data->ambilLokasi(); //memanggil fungsi ambillokasi();
// coba cek isi dari variabel $lokasinya
echo "<pre>",
 print_r($lokasi), "</pre>";

$googlemap = new Googlemaps(); //inisiasi library google map dengan membuat object $googlemap

$config['center'] = '-7.7065127,108.997478'; // lokasi peta awal -> cilacap
$config['zoom'] = '10'; // default zoom tampilan awal nilai 1-19

$x = $googlemap->initialize($config);
foreach ($lokasi as $data) {
    $marker = array();
    $marker['position'] = "$data->lattd ,$data->longtd";
    $marker['infowindow_content'] = "$data->nama_lokasi";
    $marker['icon'] = "icons/$data->icon";
    $googlemap->add_marker($marker);
}

$peta = $googlemap->create_map();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?= $peta['js']; // panggil javascriptnya disini?>
    </head>
    <body>
        <?= $peta['html']; // panggil petanya disini?>

    </body>
</html>
