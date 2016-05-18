<?php

$url = "https://global.api.pvp.net/api/lol/static-data/na/v1.2/champion?champData=all&api_key=81f03430-b7db-4373-b922-fee3f6d3313d";
$result = file_get_contents($url);
$championInfo = json_decode($result, true);

var_dump($championInfo);

?>