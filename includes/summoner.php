<?php

    class Summoner {

        public $currentGame;
        public $id;
        public $name;
        public $profileIconId;
        public $summonerLevel;
        public $revisionDate;

        public function __construct($ary){

            $this->currentGame = new CurrentGame();

            foreach($ary as $key => $obj){
                $this->$key = $obj;
            }

        }

        public function getSummonerCurrentGame(){

            $url = "https://na.api.pvp.net/observer-mode/rest/consumer/getSpectatorGameInfo/NA1/".rawurlencode($this->id)."?api_key=81f03430-b7db-4373-b922-fee3f6d3313d";
            if($result = @file_get_contents($url))
            {

                $summonerInfo = json_decode($result, true);
                $this->currentGame->setVars($summonerInfo);
                var_dump($this);
            }
            else{
                echo 'Summoner is not currently in a game.';
            }

        }

    }


?>