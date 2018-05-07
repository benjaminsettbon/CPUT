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
	<title>Login All-in-one Form</title>
</head>
<body>
<pre>
    <h1>Please sign in</h1>

    <form action = "<?php echo $_SERVER["PHP_SELF"];?>" method = 'get'>



        <p>Login : <input type="text" name="login" size="20"  required></p>  </p>

    <p>password : <input type="password" name="password" size="20"  required></p> </p>

        <input type="submit" name="submit" value="Send My Login">

    </form>

    <?php function Login (){

    $Login = $_GET['login'];
    $password = $_GET['password'];

    if(!empty($Login) && !empty($password)){
        if(md5 ($Login) == "e3afed0047b08059d0fada10f400c1e5" && md5 ($password) == "37e4392dad1ad3d86680a8c6b06ede92"){
            echo "Login sucessfull";
        }
        else {
            echo "Access denied";
        }
    }
    }
    Login();
    ?>






</pre>
</body>
</html>