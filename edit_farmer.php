<?php
include 'db_connection.php'; // Include database connection

// Check if ID is provided
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the existing record
    $query = "SELECT * FROM farmers WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $farmer = mysqli_fetch_assoc($result);

    // Handle form submission
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];

        // Update the record
        $update_query = "UPDATE farmers SET 
                         name = '$name', 
                         contact = '$contact', 
                         address = '$address' 
                         WHERE id = $id";
        mysqli_query($conn, $update_query);

        // Redirect back to the main page
        header('Location: farmers.php');
        exit;
    }
} else {
    // Redirect if no ID is provided
    header('Location: farmers.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Farmer</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
  <h3>Edit Farmer</h3>
  <form method="POST" action="">
    <div class="form-group">
      <label for="name">Farmer Name</label>
      <input type="text" class="form-control" id="name" name="name" value="<?php echo $farmer['name']; ?>" required>
    </div>
    <div class="form-group">
      <label for="contact">Contact</label>
      <input type="text" class="form-control" id="contact" name="contact" value="<?php echo $farmer['contact']; ?>" required>
    </div>
    <div class="form-group">
      <label for="address">Address</label>
      <textarea class="form-control" id="address" name="address" rows="3" required><?php echo $farmer['address']; ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update Farmer</button>
    <a href="farmers.php" class="btn btn-secondary">Cancel</a>
  </form>
</div>
</body>
</html>