<?php

$servername = "localhost";
$username = "ben";
$password = "bl1ndr34p3r!@!@";

try {
        $conn = new PDO("mysql: host=$servername; dbname=ben_customer", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
                echo "Connected Successfully <br />";
            
        $fn = $_REQUEST['firstName'];
        $ln = $_REQUEST['lastName'];
        $p = $_REQUEST['tel'];
        $e = $_REQUEST['email'];
        $c = $_REQUEST['comments'];
            
            echo "User: $fn $ln, phone $p, with following email: $e, comments: $c";
            //INSERT HERE
            $sql = "INSERT INTO customer (firstName, lastName, phone, email, comments)
                    VALUES ('$fn', '$ln', '$p', '$e', '$c')";
                    
            //UPDATE HERE        
            #$sql="UPDATE customer SET comments = 'IMPORTANT CUSTOMER' WHERE lastName = 'Fofanova'";
            
            //DELETE HERE
            #$sql="DELETE FROM customer WHERE id = 5";
                    
                    //echo $sql->affected_rows;
                    
                    $conn->exec($sql);
                    
    }
    
        catch(PDOException $err)
        {
            echo "Connection failed:" .$err->getMessage();
        }
        
    echo '<br /><br /> Return to form <a href="http://ibeneaton.com/uh/cis2336/exam3/collectData_BE.php"> here </a>';
        
?>