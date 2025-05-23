<?php
include 'db_connection.php'; // Include database connection

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $type = $_POST['type'];
    $age = $_POST['age'];
    $health_status = $_POST['health_status'];
    $last_checkup = $_POST['last_checkup'];

    $insert_query = "INSERT INTO livestock (name, type, age, health_status, last_checkup) 
                     VALUES ('$name', '$type', '$age', '$health_status', '$last_checkup')";
    mysqli_query($conn, $insert_query);

    // Redirect back to the main page
    header('Location: livestock.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Livestock</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
  <h3>Add New Livestock</h3>
  <form method="POST" action="">
    <div class="form-group">
      <label for="name">Livestock Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter livestock name" required>
    </div>
    <div class="form-group">
      <label for="type">Type</label>
      <input type="text" class="form-control" id="type" name="type" placeholder="Enter livestock type (e.g., Cow, Goat)" required>
    </div>
    <div class="form-group">
      <label for="age">Age</label>
      <input type="number" class="form-control" id="age" name="age" placeholder="Enter age in years" required>
    </div>
    <div class="form-group">
      <label for="health_status">Health Status</label>
      <input type="text" class="form-control" id="health_status" name="health_status" placeholder="Enter health status" required>
    </div>
    <div class="form-group">
      <label for="last_checkup">Last Checkup Date</label>
      <input type="date" class="form-control" id="last_checkup" name="last_checkup" required>
    </div>
    <button type="submit" class="btn btn-primary">Add Livestock</button>
    <a href="livestock.php" class="btn btn-secondary">Cancel</a>
  </form>
</div>
</body>
</html>