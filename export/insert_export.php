<!DOCTYPE html>
<html lang="en">
<head>
   
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> <h2 class='text-center text-info'>Export</h2>
    <form action="" method="post" class='card container p-3 mt-3'>
       
        exportDate:<input type="date" name='exportDate' class=''> <br><br>
        quantity:<input type="number" name='quantity'><br><br>
        <button name='submit'>login</button>
    </form>
</body>
</html>
<?php
include('conn.php');
if(isset($_POST['submit'])){
    $exportDate=$_POST['exportDate'];
    $quantity=$_POST[' quantity'];
    $insert=mysqli_query($conn,"INSERT INTO export(exportDate, quantity)VALUES('$exportDate','$ quantity')");
    if($insert){
       header('location:select.php');
    }
    else{
        echo"not inserted";
    }
}
?>