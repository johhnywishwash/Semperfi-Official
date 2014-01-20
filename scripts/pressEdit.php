<?php 
include("dbConnect.php");

$author = $_POST['pressAuthorEdit'];
$source = $_POST['pressSourceEdit'];
$content = $_POST['contentEdit'];
$id = $_POST['id'];

/* insert data in mysql tables */
if ($author != "" || $source != "" || $content != ""){
mysql_query("UPDATE biography SET pressAuthor='" . $author . "', pressSource='" . $source . "', content='" . $content . "' WHERE id='" . $id . "'") or die(mysql_error());  
}

$url="http://".$_SERVER['HTTP_HOST'];
header("Location: " . $url .  "/admin/index.php?x=1");
?>