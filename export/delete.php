<?php
include('conn.php');
if(isset($_GET['e_Id'])){
$e_Id=$_GET['e_Id'];
$delete=mysqli_query($conn,"DELETE FROM export WHERE e_Id='$e_Id'");
if($delete){
    echo"deleted";
}
else{
    echo"not deleted";
}
}
?>