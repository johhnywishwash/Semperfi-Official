<?php
require_once("../scripts/login.php");
include("../scripts/dbConnect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" ><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" >
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="chrome=1,IE=9" />
		<meta name="viewport" content="user-scalable=yes, width=940" />
		<title>Semperfi - Official Website</title>
		<link rel="stylesheet" type="text/css" href="../body.css" />
		<link rel="stylesheet" type="text/css" href="../admin.css" />
		<link rel="stylesheet" href="stylesheet.css" type="text/css" charset="utf-8" />

<style type="text/css">
</style>

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
$(document).ready(function() {
$('#supportNum').change(function() {
 var num = parseInt($(this).val(), 8);
 var container = $('<div />');

 for(var i = 1; i <= num; i++) {
     $('<label>Support: </label><input type="text" name= "' + i + '"/><br/>', {
         id: "id" + 1,
         name: "name" + 1
     }).appendTo(container);
	 $('<label>Support Link: </label><input type="text" name= "link' + i + '"/><br/><br/>', {
         id: "id" + 1,
         name: "name" + 1 + "link"
     }).appendTo(container);
 }
 $('#support').html(container);
 });
});
</script>

<script type="text/javascript">
$(document).ready(function() {

function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
}

var visited = getUrlVars()["x"];

if (visited == 1){

$("#header_hype_container").replaceWith( "<div class='header-replace'>" );

}

});
</script>
</head>
	<body>
<div class="container">
<div class="shell">

<div class="edge-top"></div>

<div class="edge-right">
	<div class="edge-left">
		<div class="content-container">
			<div class="content">

<!-- Content -->
<div class="inner" style="width:700px;">
<div class="admin-container">

<ul class="admin">
<li><h2>GIGS</h2></li>
<li></li>	
<?php

/* fetch gigs from database */
$queryGig = "SELECT * FROM gigs"; 
$resultGig = mysql_query($queryGig) or die(mysql_error());
$i = 0;

while($rowGig = mysql_fetch_array($resultGig)){

$oDate = strtotime($rowGig['gigDate']);
$gigDate = date("d/m/y",$oDate);
$gigDay = date("d",$oDate);
$gigMonth = date("m",$oDate);
$gigYear = date("y",$oDate);

$timeSelect = "<select name='gigTimeEdit'><option> - Time - </option><option value='TBA'>TBA</option><option value='5:00 AM'>5:00 AM</option><option value='5:15 AM'>5:15 AM</option><option value='5:30 AM'>5:30 AM</option><option value='5:45 AM'>5:45 AM</option><option value='6:00 AM'>6:00 AM</option><option value='6:15 AM'>6:15 AM</option><option value='6:30 AM'>6:30 AM</option><option value='6:45 AM'>6:45 AM</option><option value='7:00 AM'>7:00 AM</option><option value='7:15 AM'>7:15 AM</option><option value='7:30 AM'>7:30 AM</option><option value='7:45 AM'>7:45 AM</option><option value='8:00 AM'>8:00 AM</option><option value='8:15 AM'>8:15 AM</option><option value='8:30 AM'>8:30 AM</option><option value='8:45 AM'>8:45 AM</option>	<option value='9:00 AM'>9:00 AM</option><option value='9:15 AM'>9:15 AM</option><option value='9:30 AM'>9:30 AM</option><option value='9:45 AM'>9:45 AM</option><option value='10:00 AM'>10:00 AM</option><option value='10:15 AM'>10:15 AM</option><option value='10:30 AM'>10:30 AM</option><option value='10:45 AM'>10:45 AM</option><option value='11:00 AM'>11:00 AM</option><option value='11:15 AM'>11:15 AM</option><option value='11:30 AM'>11:30 AM</option><option value='11:45 AM'>11:45 AM</option><option value='12:00 PM'>12:00 PM</option><option value='12:15 PM'>12:15 PM</option><option value='12:30 PM'>12:30 PM</option><option value='12:45 PM'>12:45 PM</option><option value='1:00 PM'>1:00 PM</option><option value='1:15 PM'>1:15 PM</option><option value='1:30 PM'>1:30 PM</option><option value='1:45 PM'>1:45 PM</option>	<option value='2:00 PM'>2:00 PM</option><option value='2:15 PM'>2:15 PM</option><option value='2:30 PM'>2:30 PM</option><option value='2:45 PM'>2:45 PM</option><option value='3:00 PM'>3:00 PM</option><option value='3:15 PM'>3:15 PM</option><option value='3:30 PM'>3:30 PM</option><option value='3:45 PM'>3:45 PM</option><option value='4:00 PM'>4:00 PM</option><option value='4:15 PM'>4:15 PM</option><option value='4:30 PM'>4:30 PM</option><option value='4:45 PM'>4:45 PM</option><option value='5:00 PM'>5:00 PM</option><option value='5:15 PM'>5:15 PM</option><option value='5:30 PM'>5:30 PM</option><option value='5:45 PM'>5:45 PM</option><option value='6:00 PM'>6:00 PM</option><option value='6:15 PM'>6:15 PM</option><option value='6:30 PM'>6:30 PM</option><option value='6:45 PM'>6:45 PM</option><option value='7:00 PM'>7:00 PM</option><option value='7:15 PM'>7:15 PM</option><option value='7:30 PM'>7:30 PM</option><option value='7:45 PM'>7:45 PM</option><option value='8:00 PM'>8:00 PM</option><option value='8:15 PM'>8:15 PM</option><option value='8:30 PM'>8:30 PM</option><option value='8:45 PM'>8:45 PM</option><option value='9:00 PM'>9:00 PM</option><option value='9:15 PM'>9:15 PM</option><option value='9:30 PM'>9:30 PM</option><option value='9:45 PM'>9:45 PM</option><option value='10:00 PM'>10:00 PM</option><option value='10:15 PM'>10:15 PM</option><option value='10:30 PM'>10:30 PM</option><option value='10:45 PM'>10:45 PM</option><option value='11:00 PM'>11:00 PM</option><option value='11:15 PM'>11:15 PM</option><option value='11:30 PM'>11:30 PM</option><option value='11:45 PM'>11:45 PM</option><option value='12:00 AM'>12:00 AM</option><option value='12:15 AM'>12:15 AM</option><option value='12:30 AM'>12:30 AM</option><option value='12:45 AM'>12:45 AM</option></select>";


$daySelect = "<select name='gigDateDayEdit'><option> - Day - </option><option value='01'>1</option><option value='02'>2</option><option value='03'>3</option><option value='04'>4</option><option value='05'>5</option><option value='06'>6</option><option value='07'>7</option><option value='08'>8</option><option value='09'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option><option value='21'>21</option><option value='22'>22</option><option value='23'>23</option><option value='24'>24</option><option value='25'>25</option><option value='26'>26</option><option value='27'>27</option><option value='28'>28</option><option value='29'>29</option><option value='30'>30</option><option value='31'>31</option></select>";

$monthSelect = "<select name='gigDateMonthEdit'><option> - Month - </option><option value='01'>January</option><option value='02'>February</option><option value='03'>March</option><option value='04'>April</option><option value='05'>May</option><option value='06'>June</option><option value='07'>July</option><option value='08'>August</option><option value='09'>September</option><option value='10'>October</option><option value='11'>November</option><option value='12'>December</option></select>";

$yearSelect = "<select name='gigDateYearEdit'><option> - Year - </option><option value='2012'>2012</option><option value='2013'>2013</option><option value='2014'>2014</option><option value='2015'>2015</option></select>";




$findTime = "value='".$rowGig['gigTime']."'>";
$replaceTime = "value='".$rowGig['gigTime']."' selected='selected'>";
$timeSelectSelected = str_ireplace($findTime, $replaceTime, $timeSelect);

$findDay = "value='".$gigDay."'>";
$replaceDay = "value='".$gigDay."' selected='selected'>";
$findMonth = "value='".$gigMonth."'>";
$replaceMonth = "value='".$gigMonth."' selected='selected'>";
$findYear = "value='20".$gigYear."'>";
$replaceYear = "value='20".$gigYear."' selected='selected'>";
$daySelectSelected = str_ireplace($findDay, $replaceDay, $daySelect);
$monthSelectSelected = str_ireplace($findMonth, $replaceMonth, $monthSelect);
$yearSelectSelected = str_ireplace($findYear, $replaceYear, $yearSelect);
$dateSelect = $daySelectSelected." ".$monthSelectSelected." ".$yearSelectSelected;

	echo '<script type="text/javascript">';
	echo '$(document).ready(function() {';
	echo '$("#button'.$i.'").click(function () {';
	echo '$("#cityEdit'.$i.',#venueEdit'.$i.',#addressEdit'.$i.',#fbLinkEdit'.$i.',#ticketPriceEdit'.$i.',#doorPriceEdit'.$i.',#descriptionEdit'.$i.'").removeAttr("readonly");';
	echo '$("#cityEdit'.$i.',#venueEdit'.$i.',#addressEdit'.$i.',#fbLinkEdit'.$i.',#ticketPriceEdit'.$i.',#doorPriceEdit'.$i.',#descriptionEdit'.$i.'").removeAttr("style");';
	echo '$("#timeInputEdit'.$i.'").html("'.$timeSelectSelected.'");';
	echo '$("#dateInputEdit'.$i.'").html("'.$dateSelect.'");';
	echo "});";
	echo "});";
	echo "</script>";

	echo '<li><img src="../images/body-div.png" class="body-div"></li>';
	echo '<form action="../scripts/gigEdit.php" method="post">';
	echo '<li><label>City: </label><input type="text" name="cityEdit" id="cityEdit' . $i . '"  value="' . $rowGig['city'] . '" readonly="readonly" style="background:none;border:0;color:white"/></li>';
	echo '<li><label>Venue: </label><input type="text" name="venueEdit" id="venueEdit' . $i . '"  value="' . $rowGig['venue'] . '" readonly="readonly" style="background:none;border:0;color:white"/></li>';
	echo '<li><label>Address: </label><textarea rows="5" cols="40" name="addressEdit"  id="addressEdit' . $i . '" readonly="readonly" style="background:none;border:0;color:white">' . $rowGig['address'] . '</textarea></li>';
	echo '<li><label>Description: </label><textarea rows="5" cols="40" name="descriptionEdit"  id="descriptionEdit' . $i . '" readonly="readonly" style="background:none;border:0;color:white">' . $rowGig['description'] . '</textarea></li>';
	echo '<li><label>Facebook Link: </label><input type="text" name="fbLinkEdit" id="fbLinkEdit' . $i . '"  value="' . $rowGig['fbLink'] . '" readonly="readonly" style="background:none;border:0;color:white"/></li>';
	echo '<li><label>Ticket Price: </label><input type="text" name="ticketPriceEdit" id="ticketPriceEdit' . $i . '"  value="' . $rowGig['ticketPrice'] . '" readonly="readonly" style="background:none;border:0;color:white"/></li>';
	echo '<li><label>Door Price: </label><input type="text" name="doorPriceEdit" id="doorPriceEdit' . $i . '"  value="' . $rowGig['doorPrice'] . '" readonly="readonly" style="background:none;border:0;color:white"/></li>';
	echo '<li><label>Time: </label><div id="timeInputEdit'.$i.'"><input type="text" name="gigTimeEdit" value="' . $rowGig['gigTime'] . '" readonly="readonly" style="background:none;border:0;color:white"/></div></li>';
	echo '<li><label>Date: </label><div id="dateInputEdit'.$i.'"><input type="text" name="gigDateEdit" value="' . $gigDate . '" readonly="readonly" style="background:none;border:0;color:white"/></div></li>';
	echo '<input type="hidden" name="id" value="' . $rowGig['id'] . '">';
	
	echo '<li>';
	echo '<input type="submit" value="Save"></li>';
	echo '</form>';
	echo '<li><input type="submit" id="button'.$i.'" value="Edit"></li>';
	echo '<form action="../scripts/gigDelete.php" method="post">';
	echo '<li><input type="hidden" name="id" value="' . $rowGig['id'] . '"></li>';
	echo '<li><input type="submit" value="Delete"></li>';
	echo '</form>';
	
	$i++;
	
}

?>
</ul>	
	
	
<ul class="admin">
<li><h2>ADD GIG</h2></li>
<li><img src="../images/body-div.png" class="body-div"></li>	
<form action="../scripts/gig.php" method="post">
<li><label>City: </label><input type="text" name="city" /></li>
<li><label>Venue: </label><input type="text" name="venue" /></li>
<li><label>Address: </label><textarea rows="5" cols="40" name="address"></textarea></li>
<li><label>Description: </label><textarea rows="5" cols="40" name="description"></textarea></li>
<li><label>Facebook Link: </label><input type="text" name="fbLink" /></li>
<li><label>Ticket Price: </label><input type="text" name="ticketPrice" /></li>
<li><label>Door Price: </label><input type="text" name="doorPrice" /></li>
<li><label>Date: </label>
<li><select name="gigDateDay">
	<option> - Day - </option>
	<option value="01">1</option>
	<option value="02">2</option>
	<option value="03">3</option>
	<option value="04">4</option>
	<option value="05">5</option>
	<option value="06">6</option>
	<option value="07">7</option>
	<option value="08">8</option>
	<option value="09">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="21">21</option>
	<option value="22">22</option>
	<option value="23">23</option>
	<option value="24">24</option>
	<option value="25">25</option>
	<option value="26">26</option>
	<option value="27">27</option>
	<option value="28">28</option>
	<option value="29">29</option>
	<option value="30">30</option>
	<option value="31">31</option>
</select>

<select name="gigDateMonth">
	<option> - Month - </option>
	<option value="01">January</option>
	<option value="02">February</option>
	<option value="03">March</option>
	<option value="04">April</option>
	<option value="05">May</option>
	<option value="06">June</option>
	<option value="07">July</option>
	<option value="08">August</option>
	<option value="09">September</option>
	<option value="10">October</option>
	<option value="11">November</option>
	<option value="12">December</option>
</select>

<select name="gigDateYear">
	<option> - Year - </option>
	<option value="2012">2012</option>
	<option value="2013">2013</option>
	<option value="2014">2014</option>
	<option value="2015">2015</option>
</select></li>	

<li><label>Time: </label><select name="gigTime" id="gigTime">
	<option> - Time - </option>

	<option value="TBA">TBA</option>
	
	<option value="5:00 AM">5:00 AM</option>
	<option value="5:15 AM">5:15 AM</option>
	<option value="5:30 AM">5:30 AM</option>
	<option value="5:45 AM">5:45 AM</option>
	
	<option value="6:00 AM">6:00 AM</option>
	<option value="6:15 AM">6:15 AM</option>
	<option value="6:30 AM">6:30 AM</option>
	<option value="6:45 AM">6:45 AM</option>
	
	<option value="7:00 AM">7:00 AM</option>
	<option value="7:15 AM">7:15 AM</option>
	<option value="7:30 AM">7:30 AM</option>
	<option value="7:45 AM">7:45 AM</option>
	
	<option value="8:00 AM">8:00 AM</option>
	<option value="8:15 AM">8:15 AM</option>
	<option value="8:30 AM">8:30 AM</option>
	<option value="8:45 AM">8:45 AM</option>
	
	<option value="9:00 AM">9:00 AM</option>
	<option value="9:15 AM">9:15 AM</option>
	<option value="9:30 AM">9:30 AM</option>
	<option value="9:45 AM">9:45 AM</option>
	
	<option value="10:00 AM">10:00 AM</option>
	<option value="10:15 AM">10:15 AM</option>
	<option value="10:30 AM">10:30 AM</option>
	<option value="10:45 AM">10:45 AM</option>
	
	<option value="11:00 AM">11:00 AM</option>
	<option value="11:15 AM">11:15 AM</option>
	<option value="11:30 AM">11:30 AM</option>
	<option value="11:45 AM">11:45 AM</option>
	
	<option value="12:00 PM">12:00 PM</option>
	<option value="12:15 PM">12:15 PM</option>
	<option value="12:30 PM">12:30 PM</option>
	<option value="12:45 PM">12:45 PM</option>
	
	<option value="1:00 PM">1:00 PM</option>
	<option value="1:15 PM">1:15 PM</option>
	<option value="1:30 PM">1:30 PM</option>
	<option value="1:45 PM">1:45 PM</option>
	
	<option value="2:00 PM">2:00 PM</option>
	<option value="2:15 PM">2:15 PM</option>
	<option value="2:30 PM">2:30 PM</option>
	<option value="2:45 PM">2:45 PM</option>
	
	<option value="3:00 PM">3:00 PM</option>
	<option value="3:15 PM">3:15 PM</option>
	<option value="3:30 PM">3:30 PM</option>
	<option value="3:45 PM">3:45 PM</option>
	
	<option value="4:00 PM">4:00 PM</option>
	<option value="4:15 PM">4:15 PM</option>
	<option value="4:30 PM">4:30 PM</option>
	<option value="4:45 PM">4:45 PM</option>
	
	<option value="5:00 PM">5:00 PM</option>
	<option value="5:15 PM">5:15 PM</option>
	<option value="5:30 PM">5:30 PM</option>
	<option value="5:45 PM">5:45 PM</option>
	
	<option value="6:00 PM">6:00 PM</option>
	<option value="6:15 PM">6:15 PM</option>
	<option value="6:30 PM">6:30 PM</option>
	<option value="6:45 PM">6:45 PM</option>
	
	<option value="7:00 PM">7:00 PM</option>
	<option value="7:15 PM">7:15 PM</option>
	<option value="7:30 PM">7:30 PM</option>
	<option value="7:45 PM">7:45 PM</option>
	
	<option value="8:00 PM">8:00 PM</option>
	<option value="8:15 PM">8:15 PM</option>
	<option value="8:30 PM">8:30 PM</option>
	<option value="8:45 PM">8:45 PM</option>
	
	<option value="9:00 PM">9:00 PM</option>
	<option value="9:15 PM">9:15 PM</option>
	<option value="9:30 PM">9:30 PM</option>
	<option value="9:45 PM">9:45 PM</option>
	
	<option value="10:00 PM">10:00 PM</option>
	<option value="10:15 PM">10:15 PM</option>
	<option value="10:30 PM">10:30 PM</option>
	<option value="10:45 PM">10:45 PM</option>
	
	<option value="11:00 PM">11:00 PM</option>
	<option value="11:15 PM">11:15 PM</option>
	<option value="11:30 PM">11:30 PM</option>
	<option value="11:45 PM">11:45 PM</option>
	
	<option value="12:00 AM">12:00 AM</option>
	<option value="12:15 AM">12:15 AM</option>
	<option value="12:30 AM">12:30 AM</option>
	<option value="12:45 AM">12:45 AM</option>
</select></li>
<input type="submit" value="Submit">
</form>
</ul>


<ul class="admin">
<li><h2>PRESS</h2></li>
<li></li>
<?php

/* fetch gigs from database */
$queryPress = "SELECT * FROM biography"; 
$resultPress = mysql_query($queryPress) or die(mysql_error());
$x = 0;

while($rowPress = mysql_fetch_array($resultPress)){

	echo '<script type="text/javascript">';
	echo '$(document).ready(function() {';
	echo '$("#buttonPress'.$x.'").click(function () {';
	echo '$("#pressAuthorEdit'.$x.',#pressSourceEdit'.$x.',#contentEdit'.$x.'").removeAttr("readonly");';
	echo '$("#pressAuthorEdit'.$x.',#pressSourceEdit'.$x.',#contentEdit'.$x.'").removeAttr("style");';
	echo "});";
	echo "});";
	echo "</script>";
	
	echo '<li><img src="../images/body-div.png" class="body-div"></li>';
	echo '</li></li><form action="../scripts/pressEdit.php" method="post">';
	echo '<li><label>Press Author: </label><input type="text" name="pressAuthorEdit" id="pressAuthorEdit' . $x . '"  value="' . $rowPress['pressAuthor'] . '" readonly="readonly" style="background:none;border:0;color:white"/></li>';
	echo '<li><label>Press Source: </label><input type="text" name="pressSourceEdit" id="pressSourceEdit' . $x . '"  value="' . $rowPress['pressSource'] . '" readonly="readonly" style="background:none;border:0;color:white"/></li>';
	echo '<li><label>Review Content: </label><textarea rows="5" cols="40" name="contentEdit"  id="contentEdit' . $x . '" readonly="readonly" style="background:none;border:0;color:white">' . $rowPress['content'] . '</textarea></li>';
	echo '<input type="hidden" name="id" value="' . $rowPress['id'] . '">';
	echo '<li><input type="submit" value="Save"></li>';
	echo '</form>';
	
	echo '<li><input type="submit" id="buttonPress'.$x.'" value="Edit"></li>';
	
	echo '<form action="../scripts/pressDelete.php" method="post">';
	echo '<li><input type="hidden" name="id" value="' . $rowPress['id'] . '"></li>';
	echo '<li><input type="submit" value="Delete"></li>';
	echo '</form>';
	
	$x++;
	
}

?>
</ul>

<ul class="admin">
<li><h2>ADD PRESS</h2></li>
<li><img src="../../../images/body-div.png" class="body-div"></li>
<form action="../scripts/press.php" method="post">
<li><label>Press Author: </label><input type="text" name="pressAuthor" /></li>
<li><label>Press Source: </label><input type="text" name="pressSource" /></li>
<li><label>Review Content: </label><textarea rows="5" cols="40" name="content"></textarea></li>
<li><input type="submit" value="Submit"></li>
</form>
			</div>
		</div>
	</div>
</div>
	
<div class="edge-bottom"></div>

<div class="footer">
	<ul class="footer-menu">
		<li><a href="index.html?x=1" style="padding-left:0px;" id="index">HOME</a></li>
		<li><a href="bio.html?x=1" id="bio">BIO</a></li>
		<li><a href="gigs.html?x=1" id="gigs">GIGS</a></li>
		<li><a href="disco.html?x=1" id="media">MEDIA</a></li>
		<li><a href="http://semperfi.dizzyjam.com/" id="merch" target="_blank">MERCH</a></li>
		<li><a href="contact.html?x=1" style="background-image: none;padding-right:0px;" id="contact">CONTACT</a></li>
	</ul>
	<ul class="submenu">
		<li><a href="#">Facebook &bull;</a></li>
		<li><a href="#">Twitter &bull;</a></li>
		<li><a href="#">Youtube &nbsp;</a></li>
		<li>|&nbsp;&nbsp;&nbsp;Copyright &copy; 2012</li>
	</ul>
	<div style="height:30px;width:100%;"></div>
	<!-- <div class="webeast"><a href="#"><img src="images/webeast.png" style="position:relative; height: 30px;"></a></div> /-->
</div>
</div>
</div>
</body>
</html>