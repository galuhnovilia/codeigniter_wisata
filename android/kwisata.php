<?php
try {
	$con = new PDO("mysql:host=localhost;dbname=db_cilacap",'root','');
}
catch(PDOException $exception){
	echo"Gagal terkoneksi ke database:".$exception->getMessage();
}
$in = $con->prepare("SELECT * FROM wisata");
$in->execute();
$result = "{wisata: ".json_encode($in->fetchAll(PDO::FETCH_OBJ))."}";
echo $result;
?>
