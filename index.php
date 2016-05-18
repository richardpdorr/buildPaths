<?php

require_once("includes/auto_config.php");

//
//$json = file_get_contents('https://na.api.pvp.net/api/lol/na/v1.4/summoner/by-name/halp%20im%20tilted?api_key=81f03430-b7db-4373-b922-fee3f6d3313d');
$url = 'https://na.api.pvp.net/api/lol/na/v1.4/summoner/by-name/halp%20im%20tilted?api_key=81f03430-b7db-4373-b922-fee3f6d3313d';
$result = file_get_contents($url);
$summonerInfo = json_decode($result, true);


?>
<html>
<head>
    <title>Build Paths v1.0</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>
<body>
    <form name="findSummoner" id="findSummoner" method="get" action="summonerInfo.php">
        <input type="text" name="summonerName" id="summonerName" />
        <input type="submit" id="getSumInfo" />
    </form>
</body>
</html>
