<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RssFeed
 *
 * @author Ariel
 */
class RssFeed {
    private $stringRssFeed = null;
    private $rssFeedUrl = null;
    const MESSAGE_ERROR_URL = "Błąd URL";
    
    function __construct($stringRssFeed = null, $rssFeedUrl) {
	$this->stringRssFeed	= $stringRssFeed;
	$this->rssFeedUrl	= $rssFeedUrl;
    }
    
    public function getRssFeed() {

	$rssUrl = $this->rssFeedUrl;
	$file_headers = @get_headers($rssUrl);

	if($file_headers[0] == 'HTTP/1.0 404 Not Found') {
	    echo self::MESSAGE_ERROR_URL;
	    
	    return false;
	}
	else {
	    $xml = simplexml_load_file($this->rssFeedUrl);
	}

	$items	= $xml->channel->item;

	$arrayPushRssFeed = array();
	foreach($items as $item) {
	    $rss_feed_description = $item->description;
	    $find_string_rss_feed = strpos($rss_feed_description, $this->stringRssFeed);
    
	    if($find_string_rss_feed == true){
		$setArrayRss['title']		= $item->title;
		$setArrayRss['description']	= $rss_feed_description;
		
		array_push($arrayPushRssFeed, $setArrayRss);
	    }
	}
	return $arrayPushRssFeed;
    }
}