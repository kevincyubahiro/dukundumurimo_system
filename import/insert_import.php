<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import Form</title>
</head>
<body>
    <h2>Import Form</h2>
    <form action="" method="post">
        <label for="importDate">Import Date:</label><br>
        <input type="number" name="food_id" id="food_id" required><br><br>
        <input type="date" name="importDate" id="importDate" required><br><br>
        <label for="quantity">Quantity:</label><br>
        <input type="number" name="quantity" id="quantity" required><br><br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <?php
    include('conn.php');

    if (isset($_POST['submit'])) {
        $food_id = $_POST['food_id'];
        $importDate = $_POST['importDate'];
        $quantity = $_POST['quantity'];

        $insert = mysqli_query($conn, "INSERT INTO import(food_id,importDate, quantity) VALUES('$food_id','$importDate', '$quantity')");

        if ($insert) {
            echo "<p style='color: green;'>Inserted successfully.</p>";
            header("location:select.php");
        } else {
            echo "<p style='color: red;'>Failed to insert.</p>";
        }
    }
    ?>
</body>
</html>
