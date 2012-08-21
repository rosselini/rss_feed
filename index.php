<?php
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>";

include_once 'RssFeed.php';

$config_ini = parse_ini_file("Config.ini", true);

$rssFeed = new RssFeed($_GET['rssFeed'], $config_ini['main_config']['url']);

$getRssFeeds = $rssFeed->getRssFeed();
 
include_once 'layout.php';