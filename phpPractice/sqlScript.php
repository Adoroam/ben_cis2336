<?php

$servername = "localhost";
$username = "ben";
$password = "bl1ndr34p3r!@!@";

try {
        $conn = new PDO("mysql: host=$servername; dbname=ben_phpPractice", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
                echo "Connected Successfully! <br />";
            
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $gender = $_REQUEST['gender'];
        $comments = $_REQUEST['comments'];
            
            echo "User: $name ($gender), with following email: $email, wrote $comments";
            
            $sql = "INSERT INTO data_form (name, email, gender, comments)
                    VALUES ('$name', '$email', '$gender', '$comments')";
                    
                    $conn->exec($sql);
    }
    
        catch(PDOException $e)
        {
            echo "Connection failed:" .$e->getMessage();
        }
        
?>