<?php
$xmlTree = simplexml_load_file('ree.xml');
echo $xmlTree->channel->title;
?>