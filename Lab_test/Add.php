<?php 
	session_start();
	if(!isset($_COOKIE['status'])){
		header('location: login.php');
	}
?>
<?php 
    session_start();
    

   while(isset($_POST['submit'])){

    
       

    }

    else{
        echo "Invalid";
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Create Specification</title>
</head>
<body >
	<table >
		<tr>
			<td  align="right">
				<a href="logout.php?username=<?=$_COOKIE['status']?>" ><b >Logout</b></a>
			</td>
		</tr>
		<tr >
			<td >
				
			</td>
			<td >
				<table width="1000px" align="center" border="1">
					<tr align="center">
						<td colspan="10"><b >PRD<br></b></td>
					</tr>
					<tr>
						
						<td><b >Date of Birth</b><br></td>
						<td><b >Disease</b><br></td>
						<td><b >Medical history</b><br></td>
						<td><b >Lab results</b><br></td>
						<td><b >Actions</b><br></td>
					</tr>

				</table>
			</td>
		</tr>
		
	</table>
</body>
</html>