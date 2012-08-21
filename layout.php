<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
	<title>Rss Reader</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link href="style.css" rel="stylesheet">
    </head>
    <body>
	<div class="BoxRssFeeds">
	<?php
		if(is_array($getRssFeeds)){
		    foreach($getRssFeeds as $getRssFeed) {
			$viewRssFeed = '<div class="BoxRssFeed">';
			$viewRssFeed .= '<h4>'.$getRssFeed['title']."</h4>";
			$viewRssFeed .= '<div class="RssFeedContent">'.$getRssFeed['description'].'</div>';
			$viewRssFeed .= '</div>';

			echo $viewRssFeed;
		    }
		}
	?>
	</div>
    </body>
</html>