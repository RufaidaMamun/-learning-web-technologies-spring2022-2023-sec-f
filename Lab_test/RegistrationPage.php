<html>
  <head>
    <title>Registration Page</title>
  </head>
  <body>
    <table
      border="1"
      align="center"
      width="650px"
      style="border-collapse: collapse; margin-top: 20px"
    >
      <tr>
        <td><a href="publichome.php" style="width: 100px" style="margin: 40px">Home</a> | <a href="rlogin.php">Login</a> | <a href="RegistrationPage.php">Registration</a></td>
      </tr>

      <tr>
        <td style="padding: 80px">
        <form method="POST" action="regCheck.php" enctype="" >
        <fieldset>
            <legend>REGISTRATION</legend>
            <table>
                <tr>
                    <td>Name </td>
                    <td>:</td>
                    <td><input type="text" name="name" value=""></td>
                </tr>

                <tr>
                    <td>Email </td>
                    <td>:</td>
                    <td><input type="email" name="email" value=""></td>
                </tr>
                <tr>
                    <td>User Name </td>
                    <td>:</td>
                    <td><input type="text" name="username" value=""></td>
                </tr>
                <tr>
                    <td>Password </td>
                    <td>:</td>
                    <td><input type="password" name="password" value=""></td>
                </tr>
                <tr>
                    <td>Confirm Password </td>
                    <td>:</td>
                    <td><input type="password" name="confirmPass"></td>
                </tr>
            </table>
            <hr>
            <table>
                <tr>
                    <fieldset>
                        <legend>Gender</legend>
                        <input type="radio" name="gender" value="Male" /> Male
                        <input type="radio" name="gender" value= "Female"/> Female
                        <input type="radio" name="gender" value="Other" /> Other
                    </fieldset>
                </tr>
                <tr>
                    <fieldset>
                        <legend>Date of Birth</legend>
                        <input type="date" name="dob">
                    </fieldset>
                </tr>
            </table>
            <hr>
            <input type="submit" name="Rsubmit"  value="Confirm">
            <input type="reset" name="reset" value="Reset">
        </fieldset>
    </form></td>
      </tr>

      <tr align="center">
      </tr>

    </table>

  </body>
</html>

<?php

    session_start();

    
?>