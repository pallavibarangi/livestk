
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard - Livestock Management</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
    }
    .sidebar {
      height: 100vh;
      background: linear-gradient(135deg, #4e54c8, #8f94fb); /* Gradient background */
      color: #fff;
      padding: 20px;
      position: fixed;
      width: 250px;
      box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1); /* Subtle shadow */
    }
    .sidebar h2 {
      font-size: 24px;
      font-weight: bold;
      text-align: center;
      margin-bottom: 30px;
      color: #fff;
    }
    .sidebar a {
      color: #fff;
      text-decoration: none;
      display: flex;
      align-items: center;
      padding: 10px 15px;
      margin: 10px 0;
      border-radius: 8px;
      transition: background 0.3s ease, transform 0.3s ease;
    }
    .sidebar a i {
      margin-right: 10px;
      font-size: 18px;
    }
    .sidebar a:hover {
      background: rgba(255, 255, 255, 0.2); /* Hover effect */
      transform: translateX(5px); /* Slight movement on hover */
    }
    .sidebar a.active {
      background: rgba(255, 255, 255, 0.3); /* Active link styling */
      font-weight: bold;
    }
    .content {
      margin-left: 270px;
      padding: 20px;
    }
    .card {
      border: none;
      border-radius: 15px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }
    .card .card-icon {
      font-size: 40px;
      margin-bottom: 10px;
    }
    .card-primary {
      background: linear-gradient(135deg, #007bff, #0056b3);
      color: #fff;
    }
    .card-success {
      background: linear-gradient(135deg, #28a745, #1e7e34);
      color: #fff;
    }
    .card-warning {
      background: linear-gradient(135deg, #ffc107, #e0a800);
      color: #fff;
    }
    .card-danger {
      background: linear-gradient(135deg, #dc3545, #bd2130);
      color: #fff;
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
    <h2>Admin Dashboard</h2>
    <a href="#" class="active"><i class="fas fa-home"></i> Dashboard</a>
    <a href="livestock.php"><i class="fas fa-cow"></i> Livestock Records</a>
    <a href="farmers.php"><i class="fas fa-user"></i> Farmers</a>
    <a href="vaccinations.php"><i class="fas fa-calendar-alt"></i> Vaccination Schedules</a>
    <a href="reports.php"><i class="fas fa-chart-line"></i> Reports</a>
    <a href="#"><i class="fas fa-cogs"></i> Settings</a>
    <a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
  </div>

  <!-- Main Content -->
  <div class="content">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">LivestockCare</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <!-- <a class="nav-link" href="#"><i class="fas fa-bell"></i> Notifications</a> -->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-user-circle"></i> Admin</a>
          </li>
        </ul>
      </div>
    </nav>

    <?php
    // Include the database connection file
    include 'db_connection.php';

    // Fetch total livestock
    $totalLivestock = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS total FROM livestock"))['total'];

    // Fetch total farmers
    $totalFarmers = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS total FROM farmers"))['total'];

    // Fetch upcoming vaccinations
    $upcomingVaccinations = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS total FROM vaccinations WHERE schedule_date >= CURDATE()"))['total'];

    // Fetch pending issues
    $pendingIssues = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS total FROM vaccinations WHERE status = 'Pending'"))['total'];
    ?>

    <!-- Dashboard Overview -->
    <div class="row mt-4">
      <div class="col-md-3">
        <div class="card card-primary text-center">
          <div class="card-body">
            <div class="card-icon"><i class="fas fa-cow"></i></div>
            <h5 class="card-title">Total Livestock</h5>
            <p class="card-text"><?php echo $totalLivestock; ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card card-success text-center">
          <div class="card-body">
            <div class="card-icon"><i class="fas fa-user"></i></div>
            <h5 class="card-title">Farmers Registered</h5>
            <p class="card-text"><?php echo $totalFarmers; ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card card-warning text-center">
          <div class="card-body">
            <div class="card-icon"><i class="fas fa-syringe"></i></div>
            <h5 class="card-title">Upcoming Vaccines</h5>
            <p class="card-text"><?php echo $upcomingVaccinations; ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card card-danger text-center">
          <div class="card-body">
            <div class="card-icon"><i class="fas fa-exclamation-circle"></i></div>
            <h5 class="card-title">Pending Issues</h5>
            <p class="card-text"><?php echo $pendingIssues; ?></p>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>