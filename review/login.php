<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h1>login form</h1>
        <input type="text" name='username'> <br> <br>
        <input type="text" name='password'> <br> <br>
        <button name='submit'>login</button> <br>
        <a href="insert.php">create account</a>
    </form>
</body>
</html>
<?php

include('conn.php');
session_start();
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $insert=mysqli_query($conn,"SELECT * FROM manager WHERE username='$username' AND `password`='$password'");
    $count=mysqli_num_rows($insert);
    if($count){
           $_SESSION=$_POST['username'];
           $_SESSION=$_POST['password'];
        
           header('location:index.php');
    }
    else{
        echo"invalid account credential";
    }
}
?>