<?php
try {
	$con = new PDO("mysql:host=localhost;dbname=db_cilacap",'root','');
}
catch(PDOException $exception){
	echo"Gagal terkoneksi ke database:".$exception->getMessage();
}
$in = $con->prepare("SELECT * FROM kuliner");
$in->execute();
$result = "{kuliner: ".json_encode($in->fetchAll(PDO::FETCH_OBJ))."}";
echo $result;
?>
