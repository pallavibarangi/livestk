<?php
include 'db_connection.php'; // Include database connection

session_start(); // Start session to store admin login state

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query to check admin credentials
    $query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        // Login successful
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_username'] = $username;
        header('Location: dashboard.php'); // Redirect to dashboard
        exit;
    } else {
        // Login failed
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .login-container {
      background-color: #fff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
    }
    .login-container h3 {
      text-align: center;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>

<div class="login-container">
  <h3>Admin Login</h3>
  <?php if (isset($error)) { ?>
    <div class="alert alert-danger"><?php echo $error; ?></div>
  <?php } ?>
  <form method="POST" action="">
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
    </div>
    <button type="submit" class="btn btn-primary btn-block">Login</button>
  </form>
</div>

</body>
</html>