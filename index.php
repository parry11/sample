<?php
	
	require_once('zillowapi.class.php' );

	
	$zillow_id = 'XXX'; //zillow id 
	$search = "2114 Bigelow Ave";
	$citystate = "Seattle, WA";
	$address = urlencode($search);
	$citystatezip = urlencode($citystate);
	
	$url = "http://www.zillow.com/webservice/GetSearchResults.htm?zws-id=$zillow_id&address=$address&citystatezip=$citystatezip";
	
	$zillow = new ZillowAPI();

	$result = $zillow->getResults(Url);
	print_r($result);
	
?>