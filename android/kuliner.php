<?php
include "database.php";
$kunci = $_GET["kunci"];
$query = "select * from kuliner where namak='$kunci'";
$result = mysql_query($query) or die('Errorquery:  '.$query);
$rows = array();
while ($r = mysql_fetch_array($result)) {
    $rows[] = $r;
}
$data = "{kuliner:".json_encode($rows)."}"; //JSONArray kuliner.java
echo $data;
?>
