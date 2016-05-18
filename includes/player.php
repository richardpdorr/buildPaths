<?php

    class Player {

        public $teamId;
        public $spell1Id;
        public $spell2Id;
        public $championId;
        public $profileIconId;
        public $summonerName;
        public $bot;
        public $summonerId;
        public $runes = array();
        public $masteries = array();


        public function __construct($ary){

            foreach($ary as $key => $obj){

                $this->$key = $obj;

            }


        }

        public function getChampionInfo($championId){

            //

        }



    }


?>