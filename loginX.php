<!doctype html>
<?php
  /*Name: Settbon
	Surname: Benjamin
	Student#: 218327862
	Title of Project
	Declaration: This is my own work and 
	  any code obtained from other sources
	  will be referenced
*/  
	?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Your Title</title>
</head>
<h1>enter info to login</h1>
<body>
<form name="Nombre" action="process.php" method="post">

	<p>email adress:
		<input type="email" name="mail"></p>


	<p>Password:
		<input type="password" name="password"></p>
	<input type = "submit" id = "btnSubmit" name = "submit" value = "submit">

</form>

<?php
	if(isset($_POST ['submit'])){
	    $email = $_POST['X'][0];
	    $password = $_POST['X'][1];
    }
?>



</body>
</html>