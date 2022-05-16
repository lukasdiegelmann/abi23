<?php
    include "dbconnect.php";
    function createTickerEntry($committee, $creator, $creationdate, $eventdate, $eventplace, $expiredate, $title, $content) {
        $createTickerEntry = $db->prepare("INSERT INTO ticker (committee, creator, creationdate, eventdate, eventplace, expiredate, title, content) VALUES (:committee, :creator, :creationdate, :eventdate, :eventplace, :expiredate, :title, :content)");
        
        $createTickerEntry->bindParam(":committee", $committee);
        $createTickerEntry->bindParam(":creator", $creator);
        $createTickerEntry->bindParam(":creationdate", $creationdate);
        $createTickerEntry->bindParam(":eventdate", $eventdate);
        $createTickerEntry->bindParam(":eventplace", $eventplace);
        $createTickerEntry->bindParam(":expiredate", $expiredate);
        $createTickerEntry->bindParam(":title", $title);
        $createTickerEntry->bindParam(":content", $content);

        $createTickerEntry->execute();
    }
    function readTicker($from, $to) {
        $getLastInsertID = $db->prepare("SELECT LAST_INSERT_ID();");
        $getLastInsertID->execute();
        


    }
?>
//LAST_INSERT_ID()