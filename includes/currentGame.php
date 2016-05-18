<?php

    class CurrentGame {

        public $gameId;
        public $mapId;
        public $gameMode;
        public $gameType;
        public $gameQueueConfigId;
        public $platformId;
        public $gameStartTime;
        public $gameLength;
        public $participants = array();

        public function setVars($ary){

            foreach($ary as $key => $obj){
                switch($key){

                    case 'participants':
                        $this->setParticipants($obj);
                        break;
//
//                    case 'observers':
//                        //$this->setObservers();
//                        break;
//
//                    case 'bannedChampions':
//                        //$this->setBannedChampions();
//                        break;

                    default:
                        $this->$key = $obj;
                        break;
                }
            }

        }

        public function setParticipants($obj){

            foreach($obj as $player) {

                $current_player = new Player($player);
                array_push($this->participants, $current_player);

            }


        }

    }

?>