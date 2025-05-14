<?php 
include('conn.php');
$food_id=$_GET['food_id'];
$select=mysqli_query($conn,"SELECT * FROM foods WHERE food_id='$food_id'");
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
    <input type="text"name ="food_name"placeholder="foodname"value="<?php echo $row['food_name']?>"><br>
        <input type="password"name ="food_owner_name"placeholder="food_owner_name"value="<?php echo $row['food_owner_name']?>"><br>
        <button name="submit">update</button>
    </form>
</body>
</html>
<?php
}?>
<?php
include("conn.php");
if(isset($_POST['submit'])){
    $food_name=$_POST['food_name'];
    $food_owner_name=$_POST['food_owner_name'];
    $update = mysqli_query($conn, "UPDATE foods SET food_name='$food_name', `food_owner_name`='$food_owner_name' WHERE food_id='$food_id'");
    if($update){
        header("location:select.php");
    }
    else{
        echo"not data inserted";
    }
}

?>