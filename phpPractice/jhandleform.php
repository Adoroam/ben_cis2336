<?php
$servername = "localhost";
$username = "ben";
$password = "bl1ndr34p3r!@!@";

try{
    $conn = new PDO("mysql:host=$servername;dbname=ben_jtest",$username,$password);
    
    //set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
    echo"Connected SUCCESFULLY WHOOP WHOOP";
    
        $name = $_REQUEST['Name'];
        $email = $_REQUEST['Email'];
        $gender = $_REQUEST['Gender'];
        $age = $_REQUEST['Age'];
        $comments = $_REQUEST['Comments'];
    
            echo "User: $name($gender),with following email:$email,$age y.o,wrote$comments";
            
                $sql="INSERT INTO dataform(Name, Email, Gender, Age, Comments)
                VALUES('$name','$email','$gender','$age','$comments')";
                
    //use exec() because no results are returned
    $conn->exec($sql);
}

    catch(PDOException $e)
    {
        echo"connection failed:" .$e->getMessage();
    }
?>
