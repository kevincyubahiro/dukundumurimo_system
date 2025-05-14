<!DOCTYPE html>
<html lang="en">
<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=2 class='table table-striped'>
<tr>
    <th>e_Id</th>
    <th>food_Id</th>
    <th>exportDate</th>
    <th>quantity</th>
    <th colspan=2>operation</th>
</tr>
<?php
include('conn.php');
$select=mysqli_query($conn,"SELECT * FROM export");
while($row=mysqli_fetch_array($select)){

?>
<tr>
<td><?php echo $row['e_Id']?></td>
<td><?php echo $row['food_Id']?></td>
<td><?php echo $row['exportDate']?></td>
<td><?php echo $row['quantity']?></td>
<td><a href="update.php?e_Id=<?php echo $row['e_Id']?>">update</a></td>
<td><a href="delete.php?e_Id=<?php echo $row['e_Id']?>">delete</a></td>

</tr>
<?php
}
?>

    </table>
</body>
</html>