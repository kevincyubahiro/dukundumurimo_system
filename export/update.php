<?php 
include('conn.php');
$e_Id=$_GET['e_Id'];
$select=mysqli_query($conn,"SELECT * FROM export WHERE e_Id='$e_Id'");
while($row=mysqli_fetch_array($select)){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="text"name ="exportDate"placeholder="exportDate"value="<?php echo $row['exportDate']?>"><br>
        <input type="password"name ="quantity"placeholder="quantity"value="<?php echo $row['quantity']?>"><br>
        <button name="submit">update</button>
    </form>
</body>
</html>
<?php
}?>
<?php
include("conn.php");
if(isset($_POST['submit'])){
    $exportDate=$_POST['exportDate'];
    $quantity=$_POST['quantity'];
    $update = mysqli_query($conn, "UPDATE export SET exportDate='$exportDate', `quantity`='$quantity' WHERE e_Id='$e_Id'");
    if($update){
        header("location:select.php");
    }
    else{
        echo"not data inserted";
    }
}

?>