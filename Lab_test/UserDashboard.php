
<?php 
    session_start();
    if(!isset($_COOKIE['status'])){
        header('location: login.php');
    }
?>

<html>

   <head>
      <title>User Dashboard</title>
   </head>
	
   <body>

      <table border = "1" width = "800" height = "350" align="center">
         
            <tr>
                <td colspan = "3"  align="center" >Welcome <?=$_SESSION['current_user'][0]?>!!</td>
             </tr>
         <tr>
            <td rowspan = "3"  >
           
                <a href="RegistrationPage.php">Registration</a><br>
                
                <a href="Logout.php">Log out</a>

            </td>
            <td colspan="2"  align="center">
                <a href="CreateSpecification.php">Create Specification</a>
            </td>
           
         </tr>
         <tr>
            <td  align="center">
            <a href="DeleteSpecification.php">Delete Specification</a>
            </td>
            <td  align="center">
            <a href="EditSpecification.php">Edit Specification</a>
            </td>
         </tr>
         <tr>
            

            
      </table>
   </body>
	
</html>