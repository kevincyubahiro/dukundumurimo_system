<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=2>
<tr>
    <th>food_id</th>
    <th>foodName</th>
    <th>Food_Owner_Name</th>
    <th colspan=2>operation</th>
</tr>
<?php
include('conn.php');
$select=mysqli_query($conn,"SELECT * FROM foods");
while($row=mysqli_fetch_array($select)){

?>
<tr>
<td><?php echo $row['food_id']?></td>
<td><?php echo $row['food_name']?></td>
<td><?php echo $row['food_owner_name']?></td>
<td><a href="update.php?food_id=<?php echo $row['food_id']?>">update</a></td>
<td><a href="delete.php?food_id=<?php echo $row['food_id']?>">delete</a></td>

</tr>
<?php
}
?>

    </table>
</body>
</html>