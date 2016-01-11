<?php

error_reporting(0);
require '../../../../db/connect.php';

    if($result = $db->query(
        "INSERT INTO people(firstName, lastName, bio, created)
        VALUES ('Mary', 'Mazy', 'Straight Killin\' all the time', NOW())
        
        ")){
            
            echo $db->affected_rows;
        }

?>