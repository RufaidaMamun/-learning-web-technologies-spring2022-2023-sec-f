<html>

<head>
    <title>Log In page</title>
</head>

<body>
    <table border="1" align="center" width="650px" style="border-collapse: collapse; margin-top: 20px">
        <tr>
            <td style="padding: 80px">
                <form method="POST" action="loginCheck.php" >
                    
                        <table>
                            <tr>
                                <td>User Name </td>
                                <td>:</td>
                                <td><input type="text" name="username" value="" required></td>
                            </tr>
                            <tr>
                                <td>Password </td>
                                <td>:</td>
                                <td><input type="password" name="password" value="" required></td>
                        </table>
                        <hr>
                        <table>
                            <tr><input type="checkbox">Remember me</tr> 
                            <tr><br><br></tr>
                            <tr>
                                <td>
                                    <td><input type="submit" name="submit" value="Submit"></td>
                                </td>
                                <td><a href="RegistrationPage.php"> Don't have an account?</a></td>
                            </tr>
                        </table>
                    
                </form>
            </td>
            </tr>

          

    </table>

</body>

</html>
