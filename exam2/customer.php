<!DOCTYPE html>

<html>
    <head>
        <title> Exam 2</title>
        
        <style>
            .error {color: #FF0000;}
         </style>
        
    </head>
    
    <body> <!--- customer.php --->
    
        <form action = "handle_form.php" method = "POST">
            <fieldset>
                <h1>PHP Form Validation EXAM</h1>
                    <span class="error"><p> * required field.</p></span>
                <p> Name: <input type="text" name="name" size="20" maxlength="40" /> <span class="error"> * </span></p>
                
                <p> Email ID: <input type="text" name="email" size="40" maxlength="60" /><span class="error"> * </span></p>
                
                <p> Phone Number: <input type="tel" name="usrtel"> </p>
                
                <p> Movie Name: <select name="movie">
                    <option value="1"> The Matrix </option>
                    <option value="2"> The Matrix: Reloaded </option>
                    <option value="3"> The Matrix: Revolution </option>
                    <option value="4"> The Animatrix </option>
                    <option value="5"> Equilibrium </option>
                </select><span class="error"> * </span></p>
                
                <p> Quantity: 
                        <input type="radio" name="quantity" value="1" /> 1 
                        <input type="radio" name="quantity" value="2" /> 2 
                        <input type="radio" name="quantity" value="3" /> 3
                        <input type="radio" name="quantity" value="4" /> 4 
                        <input type="radio" name="quantity" value="5" /> 5 
                        <span class="error"> * </span></p>
                
                <p> Card details: <input type="text" name="card" size="16" maxlength="16" /></p>
                
                <p>Comments: <textarea name="comments" rows="3" cols="40"></textarea></p>
                
                    <p align="center"><input type="submit" name="submit" value"Submit my info" /></p>
                
            </fieldset>
            
        </form>
        
        
        
    </body>
</html>