<?php
try {
	$con = new PDO("mysql:host=localhost;dbname=db_cilacap",'root','');
}
catch(PDOException $exception){
	echo"Gagal terkoneksi ke database:".$exception->getMessage();
}
$in = $con->prepare("SELECT * FROM alam where namaa like 'c%'");
$in->execute();
$result = "{gambar :".json_encode($in->fetchAll(PDO::FETCH_OBJ))."}";
echo $result;
?>
