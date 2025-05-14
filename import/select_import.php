<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <a href="insert.php">add new </a>
    <table border=2>
<tr>
    <th>I_id</th>
    <th>food_id</th>
    <th>importDate</th>
    <th>quantity</th>
    <th colspan=2>operation</th>
</tr>
<?php
include('conn.php');
$select=mysqli_query($conn,"SELECT * FROM import");
while($row=mysqli_fetch_array($select)){

?>
<tr>
   

<td><?php echo $row['food_id']?></td>
<td><?php echo $row['importDate']?></td>
<td><?php echo $row['quantity']?></td>
<td><a href="update.php?food_id=<?php echo $row['food_id']?>">update</a></td>
<td><a href="delete_import.php?food_id=<?php echo $row['food_id']?>">delete</a></td>

</tr>
<?php
}
?>

    </table>
</body>
</html>