<?php
include 'db_connection.php'; // Include database connection

// Fetch total livestock
$totalLivestock = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS total FROM livestock"))['total'];

// Fetch total farmers
$totalFarmers = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS total FROM farmers"))['total'];

// Fetch upcoming vaccinations
$upcomingVaccinations = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS total FROM vaccinations WHERE schedule_date >= CURDATE()"))['total'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reports</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
      padding: 20px;
    }
    .card-container {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
    }
    .card {
      width: 300px;
      border: none;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      color: #fff;
    }
    .card-body {
      text-align: center;
    }
    .card-title {
      font-size: 1.5rem;
      font-weight: bold;
    }
    .card-text {
      font-size: 1.2rem;
    }
    .card-livestock {
      background-color: #28a745; /* Green */
    }
    .card-farmers {
      background-color: #007bff; /* Blue */
    }
    .card-vaccinations {
      background-color: #ffc107; /* Yellow */
    }
    .card-icon {
      font-size: 3rem;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>

<div class="container">
  <!-- Back to Dashboard Button -->
  <div class="mb-4">
    <a href="dashboard.php" class="btn btn-secondary">Back to Dashboard</a>
  </div>

  <!-- Reports Section -->
  <h3 class="text-center mb-4">Reports</h3>
  <div class="card-container">
    <!-- Total Livestock Card -->
    <div class="card card-livestock">
      <div class="card-body">
        <i class="fas fa-paw card-icon"></i>
        <h5 class="card-title">Total Livestock</h5>
        <p class="card-text"><?php echo $totalLivestock; ?></p>
      </div>
    </div>

    <!-- Total Farmers Card -->
    <div class="card card-farmers">
      <div class="card-body">
        <i class="fas fa-user card-icon"></i>
        <h5 class="card-title">Total Farmers</h5>
        <p class="card-text"><?php echo $totalFarmers; ?></p>
      </div>
    </div>

    <!-- Upcoming Vaccinations Card -->
    <div class="card card-vaccinations">
      <div class="card-body">
        <i class="fas fa-syringe card-icon"></i>
        <h5 class="card-title">Upcoming Vaccinations</h5>
        <p class="card-text"><?php echo $upcomingVaccinations; ?></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>