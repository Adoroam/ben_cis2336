<?php>

    $page_title = 'Register';
    
    //check for submission:
    
    if
    {
       $error = array(); 
       
        //check firstName
        if (empty($_POST['firstName'])){
            $error[] = 'Please enter your first name.';
        } else {
                $fn = trim($_POST['firstName']);
                }
                
        //check lastName
        if (empty($_POST['lastName'])){
            $error[] = 'Please enter your last name.';
        } else {
                $ln = trim($_POST['lastName']);  
                }
                
        //check email
        if (empty($_POST['email'])){
            $error[] = 'Please enter your email address.';
        } else {
                $e = trim($_POST['email']);
                }
                
        //check password
        if (empty($_POST['pass1'])){
            if ($_POST['pass1'] != $_POST['pass2']){
                $error[] = 'Your passwords do not match!';
            } else {
                    $p = trim($_POST['pass1']);
                    }
        } else {
                $error[] = 'Please enter a password.';
                }
                
            if (empty($error))
            {
                
                require '/home/ben/db/mysqli_connect.php';
                
                $q = "INSERT INTO users (firstName, lastName, email, pass, registrationDate)
                        VALUES ('$fn', '$ln', '$e', SHA1('$p'), NOW() )";
            
                $result = @mysqli_query ($dbc, $q);
                    if ($result){
                        echo '<h1> Thank you!</h1>
                        <p> You are not registered. Some day, you\'ll be able to log in! </p>'
                    } else {
                            echo '<h1> System Error</h1>
                            <p> We were unable to register you because weak sauce </p>';
                             echo mysqli_error($dbc);
                            }
            
            }
    }