<?php
include "database.php";
$kunci = $_GET["kunci"];
$query = "select * from wisata where namaw='$kunci'";
$result = mysql_query($query) or die('Errorquery:  '.$query);
$rows = array();
while ($r = mysql_fetch_array($result)) {
    $rows[] = $r;
}
$data = "{wisata:".json_encode($rows)."}";
echo $data;
?>
