<?php 
include("dbConnect.php");

$city = $_POST['city'];
$venue = $_POST['venue'];
$addressPost = $_POST['address'];
$address = preg_replace('/&(?![#]?[a-z0-9]+;)/i', "+", $addressPost); 

$description = $_POST['description'];
$fbLink = $_POST['fbLink'];
$ticketPrice = $_POST['ticketPrice'];
$doorPrice = $_POST['doorPrice'];
$gigTime = $_POST['gigTime'];

$gigDateDay = $_POST['gigDateDay'];
$gigDateMonth = $_POST['gigDateMonth'];
$gigDateYear = $_POST['gigDateYear'];
$gigDate = $gigDateYear . '-' . $gigDateMonth . '-' . $gigDateDay;



/* insert data in mysql tables */
if ($city != "" || $venue != "" || $description != "" || $gigDate != ""){
mysql_query("INSERT INTO gigs (city, venue, address, description, fbLink, ticketPrice, doorPrice, gigTime, gigDate) VALUES('" . $city . "', '" . $venue . "', '" . $address . "' , '" . $description . "', '" . $fbLink . "', '" . $ticketPrice . "' , '" . $doorPrice . "', '" . $gigTime . "', '" . $gigDate . "')") or die(mysql_error());  
}

$url="http://".$_SERVER['HTTP_HOST'];
header("Location: " . $url .  "/admin/index.php?x=1");
?>