<?php

$url = 'https://tech.onliner.by/feed';
$rss = simplexml_load_file($url);
$count = 0;

$string = "<?xml version='1.0' encoding='UTF-8'?>\n<news>\n";

foreach ($rss->channel->item as $item) {
    $count++;
    $group = $item->children("media", true);
    $thumbnail = $group->thumbnail[0]->attributes();
    $string = $string . "\t<item>\n\t\t<title>" . str_replace("&nbsp;", '', $item->title) . "</title>\n\t\t<link>" . str_replace("&nbsp;", '', $item->link) . "</link>\n\t\t<description>" . strip_tags(str_replace("&nbsp;", '', $item->description)) . "</description>\n\t\t<picture>" . $thumbnail['url'] . "</picture>\n\t</item>\n";

    if ($count == 10) break;

}

$string = $string . "</news>";
$file = fopen("rss.xml", "w");
fwrite($file, $string);
fclose($file);

?>