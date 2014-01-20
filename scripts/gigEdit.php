<?php 
include("dbConnect.php");

$city = $_POST['cityEdit'];
$venue = $_POST['venueEdit'];
$addressPost = $_POST['addressEdit'];
$address = preg_replace('/&(?![#]?[a-z0-9]+;)/i', "+", $addressPost); 

$description = $_POST['descriptionEdit'];
$fbLink = $_POST['fbLinkEdit'];
$ticketPrice = $_POST['ticketPriceEdit'];
$doorPrice = $_POST['doorPriceEdit'];
$gigTime = $_POST['gigTimeEdit'];

$gigDateDay = $_POST['gigDateDayEdit'];
$gigDateMonth = $_POST['gigDateMonthEdit'];
$gigDateYear = $_POST['gigDateYearEdit'];
$gigDate = $gigDateYear . '-' . $gigDateMonth . '-' . $gigDateDay;
$id = $_POST['id'];


/* insert data in mysql tables */
if ($city != "" || $venue != "" || $description != "" || $gigDate != ""){
mysql_query("UPDATE gigs SET city='" . $city . "', venue='" . $venue . "', address='" . $address . "', description='" . $description . "', fbLink='" . $fbLink . "', ticketPrice='" . $ticketPrice . "', doorPrice='" . $doorPrice . "', gigTime='" . $gigTime . "', gigDate='" . $gigDate . "' WHERE id='" . $id . "'") or die(mysql_error());  
}

$url="http://".$_SERVER['HTTP_HOST'];
header("Location: " . $url .  "/admin/index.php?x=1");
?>