<!DOCTYPE html>

<html>
    <head>
        <title> Validating Data </title>
    </head>
    
    <body>
        <fieldset>
    
        <?php #begin php
            
            //each post get run through this function, and then returned to check for pre_match
            function test_input($data)
            {
             $data = trim($data);
             $data = stripslashes($data);
             $data = htmlspecialchars($data);
            
             return $data;
            }
        
                if (!empty($_POST["name"])) 
                {
                    $name = test_input($_POST["name"]);
                    if (preg_match("/^[a-zA-Z ]*$/",$name)) 
                    {
                        echo '<p>Thank you, ' . $name . ', we have received your information</p>';
                    } 
                        else
                        {
                        echo 'Only letters and white spaces allowed.';
                        }
                }
                
                if (!empty($_POST["name"])) 
                {
                    $name = test_input($_POST["name"]);
                    if (preg_match("/^[a-zA-Z ]*$/",$name)) 
                    //if (preg_match("/P[A-Z]P/", "$name"))
                    {
                        echo '<p>Thank you, ' . $name . ', we have received your information</p>';
                    } 
                        else
                        {
                        echo 'Only letters and white spaces allowed.';
                        }
                }
            
        #end of php
        ?>
        
        <p><h3> Return to form <a href="customer.php"> here </a>
        </fieldset>
        
    </body>
</html>