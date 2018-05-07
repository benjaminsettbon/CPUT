<?php
	include 'DBConn.php';
	function loadForm($email_error = "")
	{
		?><h1>Please enter your details to log in</h1> 
		<form name = "myForm" method="post" action="<?php echo $_SERVER["SCRIPT_NAME"] ?>"> 
			<div>
				<p>Email: <input type="text" name="pers_data[]" value="<?php if (isset($_POST['pers_data'][2])) echo $_POST['pers_data'][2]; ?>" required /><?php echo $email_error; ?></p>
			</div>
			<p>Password: <input type="password" name="pers_data[]" /></p> 					
			<p><input type="submit" name="submit" value="Log In" required />&nbsp &nbsp &nbsp <a href="register.php">No account? Register here</a></p>
		</form>	
		
		<?php
	}
	
	if(isset($_POST['submit']) && $_POST['pers_data'][0] != null && $_POST['pers_data'][1] != null)
	{
		//getting posted data 
		$data = $_POST['pers_data'];
		$email = $data[0];
		$password = $data[1];
		
		//setting up database variables
		$PWresult = $mysqli->query("SELECT * FROM tbl_User WHERE email = '{$email}'");
		$row = $PWresult->fetch_array(MYSQLI_ASSOC);
		$hashedPW = $row['password'];
		$dbFName = $row['fname'];
		$dbLName = $row['lname'];
		$PWresult->close();
		
		if(preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $email) == 1 && trim(md5($password)) == trim($hashedPW))
		{
			echo "User {$dbFName} {$dbLName} is logged in. ";
			
			//user logged in. load online shop now
			echo '<button onclick="toggleContent()" id="contentButton">Show content</button>';
			include 'shop.php';
		}
		else
		{
			loadForm("*email or password invalid");
		}
	}
	else
	{
		//in theory, we should never get here a jquery should prevent the user from proceeding without entering all the data
		loadForm("");
	}
?>