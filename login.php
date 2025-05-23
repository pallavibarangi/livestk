<?php

session_start();
include 'db_connection.php'; // Include database connection

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Query to check user credentials
    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        // Login successful
        $user = mysqli_fetch_assoc($result);
        $_SESSION['user_logged_in'] = true;
        $_SESSION['user_name'] = $user['name']; // Store the user's name
        header('Location: index.php'); // Redirect to the homepage
        exit;
    } else {
        // Login failed
        $error = "Invalid email or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
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
  <h3>Login</h3>
  <?php if (isset($error)) { ?>
    <div class="alert alert-danger"><?php echo $error; ?></div>
  <?php } ?>
  <form method="POST" action="">
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
    </div>
    <button type="submit" class="btn btn-primary btn-block">Login</button>
  </form>
</div>

</body>
</html>