<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Your Login</title>
</head>
<body>
<?php
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
else{
    echo"error";
}

?>
</body>
</html>