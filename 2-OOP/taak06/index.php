<?php
    class robot{
        public $naam;
        public $geluid;
        public $voorstuwing;
        function setSound($sound){ 
            $this->sound = $sound;
        }

        function getSound(){
            return $this->sound . "<br>";
        }
    }

    $wally = new robot();
    $wally->naam = ("wal-e");
    $wally->geluid = ("beepboop");
    $wally->voorstuwing = ("rollend");
    $wally->setSound("beepboop");
    echo $wally->getSound(); 

    $wolly = new robot();
    $wolly->naam = ("wol-e");
    $wolly->geluid = ("boopbeep");
    $wolly->voorstuwing = ("lopend");
    $wolly->setSound("boopbeep");
    echo $wolly->getSound(); 
?>