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
}

// Fetch farmer records
$query = "SELECT * FROM farmers";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Farmers Management</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
      padding: 20px;
    }
    .form-container {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      margin-bottom: 20px;
    }
    .table-container {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .table th, .table td {
      text-align: center;
      vertical-align: middle;
    }
  </style>
</head>
<body>

<div class="container">
  <!-- Back to Dashboard Button -->
  <div class="mb-3">
    <a href="dashboard.php" class="btn btn-secondary">Back to Dashboard</a>
  </div>

  <!-- Button to Add Farmer -->
  <div class="mb-3">
    <a href="add_farmer.php" class="btn btn-primary">Add New Farmer</a>
  </div>

  <!-- Form to Add Farmers -->
  <div class="form-container">
    <h3>Add New Farmer</h3>
   
  </div>

  <!-- Display Farmers Table -->
  <div class="table-container">
    <h3>Farmers List</h3>
    <table class="table table-bordered table-striped">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Contact</th>
          <th>Address</th>
          <th>Registered Date</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['contact']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['registered_date']; ?></td>
            <td>
              <a href="edit_farmer.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
              <a href="delete_farmer.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>

</body>
</html>