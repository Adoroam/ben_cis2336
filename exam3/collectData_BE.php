<!DOCTYPE html>

<html>
    <head>
        <title> Exam 3</title>
        
        <style>
            .error {color: #FF0000;}
         </style>
        
    </head>
    
    <body> <!--- customer.php --->
    
        <form action = "SQL_script_BE.php" method = "POST">
            <fieldset> <strong>Please enter your information in the form bellow: </strong>
                    <span class="error"><p> * required field.</p></span>
                    
                <p> ID: <input type="text" name="card" size="2" maxlength="20" /></p>
                
                <p> First Name: <input type="text" name="firstName" size="20" maxlength="40" />
                
                <p> Last Name: <input type="text" name="lastName" size="20" maxlength="40" /> <span class="error"> * </span></p>
                
                <p> Phone Number: <input type="text" name="tel" size="10" maxlength="12" /> </p>
                
                <p> Email Address: <input type="text" name="email" size="40" maxlength="60" /><span class="error"> * </span></p>
                
                <p>Remarks: <textarea name="comments" rows="3" cols="40"></textarea></p>
                
                    <p align="center"><input type="submit" name="submit" value"submit" /></p>
                
            </fieldset>
            
        </form>
        
        
        
    </body>
</html>