<?php

@mkdir("images", 0777);
$xml = simplexml_load_file('rss.xml');
$count = 1;

foreach ($xml->item as $item) {
    $path = $_SERVER['DOCUMENT_ROOT'] . "/site/images/" . $count;
    copy($item->picture, $_SERVER['DOCUMENT_ROOT'] . "/site/images/" . $count);
    $item->picture = $path;
    $count++;
}

$xml->asXML('rssResult.xml');

?>