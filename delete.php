<?php
include('conn.php');
if(isset($_GET['id'])){
$id=$_GET['id'];
$delete=mysqli_query($conn,"DELETE FROM manager WHERE id='$id'");
if($delete){
    echo"deleted";
}
else{
    echo"not deleted";
}
}
?>