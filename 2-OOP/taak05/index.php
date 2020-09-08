<?php
    class lamp{
        function setStatus($status){ 
            $this->isAan = $status;
        }
    }

        $woonkamerlamp = new lamp();
        $woonkamerlamp->kleur = 'geel';
        $woonkamerlamp->helderheid = 'zacht';
        $woonkamerlamp->isAan = 'true';
        $woonkamerlamp->setStatus("false");
        

        $keukenlamp = new lamp();
        $keukenlamp->kleur = 'wit';
        $keukenlamp->helderheid = 'vel';
        $keukenlamp->isAan = 'false';
    
        echo $woonkamerlamp->isAan."<br>";
        echo $keukenlamp->isAan."<br>";
?>
