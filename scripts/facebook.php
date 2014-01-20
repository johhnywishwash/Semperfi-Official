<?php
$feed_burner_url = 'http://feeds.feedburner.com/SemperfisFacebookWall';
 
$doc = new DOMDocument();
$doc->load($feed_burner_url); 

$feeds = array();
 
$limit = 7;
$counter = 0;

foreach ($doc->getElementsByTagName('item') as $node) {
 
	if	($counter <= $limit)
	{
	$items = array (
			'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
			'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
			'description' => $node->getElementsByTagName('description')->item(0)->nodeValue,
			'pubDate' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue
		);
 
	array_push($feeds, $items);
	}
	$counter++;
}

echo '<ul id="fb_feed">';
 
foreach ($feeds as $feed)
{
	$oDate = strtotime($feed['pubDate']);
	$fbDate = date("d/m/y", $oDate);
	$description = $feed['description'];
		
	$idStarts = strpos($description, '?v=');
	$ytvIDlen = 11;
	$idStarts +=3;
    $ytvID = substr($description, $idStarts, $ytvIDlen);
	$description2 = preg_replace("/<img[^>]+\>/i", "", $description);

	$pos = strpos($description, "youtube");
	
 	echo '<li class="post">';


	if ($pos === false){
	echo $description; 
	} else {
	echo $description2; 
	echo '<iframe style="margin:15px auto;" id ="youtubePlayer" name="youtubePlayer" class="youtube-player" type="text/html" width="330" height="198" src="http://www.youtube.com/embed/' . $ytvID . '" frameborder="0"></iframe>';
	}
	
	echo '</li>';

	echo '<li class="date_fb">';
	echo $fbDate . '&nbsp;-&nbsp;SEE IT ON  ' . '<a href="'. $feed['link'] .'" target="_blank">FACEBOOK</a>';
	echo '</li>';

}
 
echo '</ul>';

?>