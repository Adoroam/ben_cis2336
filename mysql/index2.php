<?php
//updating db's
require '/home/ben/db/connect.php';

if ($update = $db->query(
    
    "UPDATE people SET lastName = 'Eaton' WHERE id = 2"
    
    )){
        echo $db->affected_rows;
    }