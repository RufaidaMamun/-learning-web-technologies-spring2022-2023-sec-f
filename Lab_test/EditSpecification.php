<?php 
	session_start();
	if(!isset($_COOKIE['status'])){
		header('location: login.php');
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
            <form method="POST" action="Add.php" >
				<table width="1000px" align="center" border="1">
					<tr align="center">
						<td colspan="10"><b >PRD<br></b></td>
					</tr>
					<tr>
						
						<td><b >Specific</b><br></td>
						<td><b >Disease</b><br></td>
						<td><b >Medical history</b><br></td>
						<td><b >Lab results</b><br></td>
						
					</tr>

                    <tr>
                        <td>
                                <input type="text" name="spe" value=" " /></b>
                        </td>
                        <td>
								<input type="text" name="sd" value=" " /></b>
</td>
<td>
								<input type="text" name="us" value=" " /></b>
</td>
<td>
								<input type="text" name="ac" value=" " /></b>
</td>

            
            </tr>


                    <input type="submit" name="edit" value="Edit">


                </form>
				</table>
			</td>
		</tr>
		
	</table>
</body>
</html>