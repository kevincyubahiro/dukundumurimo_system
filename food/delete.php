<?php
include('conn.php');
if(isset($_GET['food_id'])){
$food_id=$_GET['food_id'];
$delete=mysqli_query($conn,"DELETE FROM foods WHERE food_id='$food_id'");
if($delete){
    echo"deleted";
}
else{
    echo"not deleted";
}
}
?>