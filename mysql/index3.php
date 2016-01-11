<?php 
error_reporting(0);
require '/home/ben/db/connect.php';

//preparing queries - binding

if(isset($_GET['lastName'])){
    $lastName = trim($_GET['lastName']);
    
    $persons = $db->prepare("SELECT firstName, lastName FROM people WHERE lastName = ?");
    $persons->bind_param("s", $lastName);
    $persons->execute();
    
    $persons->bind_result($first_name, $last_name);
    
    while ($persons->fetch()){
    
    echo $first_name, ' ', $last_name, '<br />';
        }

    }