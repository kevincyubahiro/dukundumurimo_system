<?php
include('conn.php');

if (isset($_GET['food_id'])) {
    $food_id = $_GET['food_id'];

    // Fetch the current record
    $select = mysqli_query($conn, "SELECT * FROM import WHERE food_id = '$food_id'");
    $row = mysqli_fetch_array($select);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Import</title>
</head>
<body>
    <h2>Update Import Information</h2>
    <form action="" method="post">
        <label for="importDate">Import Date:</label><br>
        <input type="date" name="importDate" id="importDate" value="<?php echo($row['importDate']); ?>" required><br><br>

        <label for="quantity">Quantity:</label><br>
        <input type="number" name="quantity" id="quantity" value="<?php echo($row['quantity']); ?>" required><br><br>

        <button type="submit" name="submit">Update</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $importDate = $_POST['importDate'];
        $quantity = $_POST['quantity'];

        // Use prepared statements to avoid SQL injection
        $stmt = $conn->prepare("UPDATE import SET importDate = ?, quantity = ? WHERE food_id = ?");
        $stmt->bind_param("ssi", $importDate, $quantity, $food_id);

        if ($stmt->execute()) {
            // Redirect after successful update
            header("Location: select.php");
            exit();
        } else {
            echo "<p style='color: red;'>Failed to update the record.</p>";
        }

        $stmt->close();
    }
    ?>
</body>
</html>
