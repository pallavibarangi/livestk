<?php

include 'db_connection.php'; // Include database connection

// Check if ID is provided
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the existing record
    $query = "SELECT * FROM livestock WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $livestock = mysqli_fetch_assoc($result);

    // Handle form submission
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $type = $_POST['type'];
        $age = $_POST['age'];
        $health_status = $_POST['health_status'];
        $last_checkup = $_POST['last_checkup'];

        // Update the record
        $update_query = "UPDATE livestock SET 
                         name = '$name', 
                         type = '$type', 
                         age = '$age', 
                         health_status = '$health_status', 
                         last_checkup = '$last_checkup' 
                         WHERE id = $id";
        mysqli_query($conn, $update_query);

        // Redirect back to the main page
        header('Location: livestock.php');
        exit;
    }
} else {
    // Redirect if no ID is provided
    header('Location: livestock.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Livestock</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
  <h3>Edit Livestock</h3>
  <form method="POST" action="">
    <div class="form-group">
      <label for="name">Livestock Name</label>
      <input type="text" class="form-control" id="name" name="name" value="<?php echo $livestock['name']; ?>" required>
    </div>
    <div class="form-group">
      <label for="type">Type</label>
      <input type="text" class="form-control" id="type" name="type" value="<?php echo $livestock['type']; ?>" required>
    </div>
    <div class="form-group">
      <label for="age">Age</label>
      <input type="number" class="form-control" id="age" name="age" value="<?php echo $livestock['age']; ?>" required>
    </div>
    <div class="form-group">
      <label for="health_status">Health Status</label>
      <input type="text" class="form-control" id="health_status" name="health_status" value="<?php echo $livestock['health_status']; ?>" required>
    </div>
    <div class="form-group">
      <label for="last_checkup">Last Checkup Date</label>
      <input type="date" class="form-control" id="last_checkup" name="last_checkup" value="<?php echo $livestock['last_checkup']; ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Update Livestock</button>
    <a href="livestock.php" class="btn btn-secondary">Cancel</a>
  </form>
</div>
</body>
</html>