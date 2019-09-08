<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "Rahma_2000";
$dbname = "zr3tna";



if (isset($_POST['submit'])) {
    $sql = "INSERT INTO users (name, email, password, role)
    VALUES ('$_POST[name]','$_POST[email]','$_POST[password]','user')";
    $_SESSION['name'] = $_POST["name"];//super global variable
    


    }
?>
    <form>
        <input name="name" type="text" placeholder="Name"><br>
        <input name="email" type="text" placeholder="Email"><br>
        <input name="password" type="text" placeholder="Password"><br>  
        <input name="Submit" type="submit">    
    </form>
</body>
</html>