
 <?php
 session_start();
 ?>
 <!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
   #main-wrapper{              
   display: flex;
   flex-direction: column;
   width: 700px;
   margin: 25% auto;
   background-color: #f9f9f9;
   padding: 66px;
   border: 1px #c3c3c3 solid;
   }
    </style>
   
</head>
<body>

<div id="main-wrapper">
 <form action="" method="post">
 <table algin="center">
 
        <tr>
            <td>Username</td>
            <td><input type="text" name="uname"></td>
        </tr>

         <tr>
            <td>password</td>
            <td><input type="password" name="pas"></td>

         </tr>

            <tr>
                <td algin ="right"><input type="submit"></td>
            </tr>

    </table>

<?php
$users = array(
    array("name"=>'Alex', "password"=>'123', "role"=>'User'),
    array("name"=>'rahma', "password"=>'2000', "role"=>'Admin'),
    array("name"=>'Emily', "password"=>'12345dsa', "role"=>'User')

);
   $name=$_POST['uname'];
  $pass=$_POST['pas'];
  foreach ($users as $key => $value) {
      if($name == $value['name'] && $pass == $value['password']){
  $_SESSION['name']= $name;
header("Location: dash.php");
      }

      else {
              echo "you are not authenticated";
      }
  }

    ?>
</form>
</div>
</body>
</html>