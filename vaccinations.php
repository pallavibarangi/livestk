<?php
include 'db_connection.php';

// Fetch vaccination schedules
$query = "SELECT v.id, l.name AS livestock_name, v.vaccine_name, v.schedule_date, v.status 
          FROM vaccinations v 
          JOIN livestock l ON v.livestock_id = l.id";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vaccination Schedules</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
      padding: 20px;
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

  <!-- Button to Add Vaccination Schedule -->
  <div class="mb-3">
    <a href="add_vaccination.php" class="btn btn-primary">Add New Vaccination Schedule</a>
  </div>

  <!-- Display Vaccination Schedules Table -->
  <div class="table-container">
    <h3>Vaccination Schedules</h3>
    <table class="table table-bordered table-striped">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Livestock Name</th>
          <th>Vaccine Name</th>
          <th>Schedule Date</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['livestock_name']; ?></td>
            <td><?php echo $row['vaccine_name']; ?></td>
            <td><?php echo $row['schedule_date']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td>
              <a href="edit_vaccination.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
              <a href="delete_vaccination.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>

</body>
</html>