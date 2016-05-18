<?php

require_once("includes/auto_config.php");

if(isset($_GET['summonerName']))
{
    $summonerName = $_GET['summonerName'];
    if($summoner = getSummonerInfoFromName($summonerName)){
        var_dump($summoner);
        $summoner->getSummonerCurrentGame();
    } else{
        echo "<h1>Summoner with this name doesn't exist.</h1>";
    }

}else{

    echo '<h1>No summoner info present</h1>';

}

?>