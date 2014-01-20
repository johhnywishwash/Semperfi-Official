<?php 
include("dbConnect.php");

$author = $_POST['pressAuthor'];
$source = $_POST['pressSource'];
$content = $_POST['content'];

/* insert data in mysql tables */
if ($author != "" || $source != "" || $content != ""){
mysql_query("INSERT INTO biography (pressAuthor, pressSource, content) VALUES('" . $author . "', '" . $source . "', '" . $content . "')") or die(mysql_error());  
}

$url="http://".$_SERVER['HTTP_HOST'];
header("Location: " . $url .  "/admin/index.php?x=1");
?>