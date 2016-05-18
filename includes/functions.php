<?php

    function getSummonerInfoFromName($summonerName)
    {
        $url = "https://na.api.pvp.net/api/lol/na/v1.4/summoner/by-name/".rawurlencode($summonerName)."?api_key=81f03430-b7db-4373-b922-fee3f6d3313d";
        if($result = @file_get_contents($url))
        {

            $summonerInfo = json_decode($result, true);
            $summoner = new Summoner(current($summonerInfo));
            $output = $summoner;

        }
        else{
            $output = 0;
        }


        return $output;


    }




?>