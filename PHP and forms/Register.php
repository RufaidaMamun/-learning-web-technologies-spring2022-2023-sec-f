<?php 
    session_start();
   // print_r($_SESSION);
?>

<html>
    <head>
        <title>Register Page</title>
    </head>
    <body>
    <form method="post" action="abc.html" enctype="">
    <table border="1" width="500px" align="center">
        <tr colspan="3">
            <td> <img src="x logo.png" width="300px" height="100px" aling="left" />| <a href="Plogin.php">Login </a> | <a href="Phome.php">Home</a>
             
        </tr>

    <tr>
        <fieldset>
                <legend>Registration</legend>
            Username: <input type="text" name="username" value=""/> <br>
            password: <input type="password" name="password" value=""/> <br/>
            Email: <input type="email" name="email" value=""/> <br/>
            Phone: <input type="number" name="phone" value=""/> <br/>
            DOB: <input type="date" name="dob" value=""/> <br/>
            Gender: 
                     <input type="radio" name="gender" value=""/> Male
                     <input type="radio" name="gender" value=""/> Female
                     <input type="radio" name="gender" value=""/> Other <br/>
            Option: <br/>
                    <input type="checkbox" name="option[]" value=""/> item-1 <br/>
                    <input type="checkbox" name="option[]" value=""/> item-2 <br/>
                    <input type="checkbox" name="option[]" value=""/> item-3 <br/>
            DEPT:   
                    <select name="dept">
                        <option value="CSE">CSE</option>
                        <option value="CIS">CIS</option>
                        <option value="SE">SE</option>
                        <option value="CSSE">CSSE</option>
                    </select> <br>
            Image: <input type="file" name="" value=""/> <br>
            Add:    <textarea name="add"></textarea> <br>
            <input type="button" name="" value="Click">
            <input type="submit" name="" value="Submit">
            <input type="reset" name="" value="reset">
</fieldset>
        </form>
</tr>

<tr>
    <td align="center" >Copyright 2017 </td>
</body>
</html>