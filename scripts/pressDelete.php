<?php 
include("dbConnect.php");

$id = $_POST['id'];

/* insert data in mysql tables */
mysql_query("DELETE FROM biography WHERE id='".$id."'") or die(mysql_error());  

$url="http://".$_SERVER['HTTP_HOST'];
header("Location: " . $url .  "/admin/index.php?x=1");
?>