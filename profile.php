<?php
session_start();
if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header('Location: login.php'); // Redirect to login if not logged in
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
  <h3>Welcome, <?php echo $_SESSION['user_name']; ?>!</h3>
  <p>This is your profile page.</p>
  <a href="logout.php" class="btn btn-danger">Logout</a>
</div>
</body>
</html>