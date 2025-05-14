<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h2> add the food food</h2>
        FoodNames:      <input type="text" name='food_name' > <br><br>
        Food_Owner_name:<input type="text" name='food_owner_name'><br><br>
        <button name='submit'>submit</button>
    </form>
</body>
</html>
<?php
include('conn.php');
if(isset($_POST['submit'])){
    $food_name=$_POST['food_name'];
    $food_owner_name=$_POST['food_owner_name'];
    $insert=mysqli_query($conn,"INSERT INTO foods(food_name,food_owner_name)VALUES('$food_name','$food_owner_name')");
    if($insert){
    header('location:select.php');
    }
    else{
        echo"not inserted";
    }
}
?>