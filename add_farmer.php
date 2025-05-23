<?php
include 'db_connection.php'; // Include database connection

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $registered_date = date('Y-m-d'); // Automatically set the current date

    $insert_query = "INSERT INTO farmers (name, contact, address, registered_date) VALUES ('$name', '$contact', '$address', '$registered_date')";
    mysqli_query($conn, $insert_query);

    // Redirect back to the farmers list
    header('Location: farmers.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Farmer</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
  <h3>Add New Farmer</h3>
  <form method="POST" action="">
    <div class="form-group">
      <label for="name">Farmer Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter farmer's name" required>
    </div>
    <div class="form-group">
      <label for="contact">Contact</label>
      <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter contact number" required>
    </div>
    <div class="form-group">
      <label for="address">Address</label>
      <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter address" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Add Farmer</button>
    <a href="farmers.php" class="btn btn-secondary">Cancel</a>
  </form>
</div>
</body>
</html>