<?php

//fungsi untuk memanggil class secara otomatis
function autoload($className) {
    //mendefinisikan lokasi file class
    $file = dirname(__FILE__) . "/" . $className . ".php"; 
    if (file_exists($file)) {
        require $file;
    }
}

//meregisterkan fungsi autoload agar dijalankan secara otomatis ketika file helper dijalankan
try {
    spl_autoload_register('autoload');
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
    echo $exc->getMessage();
}


?>