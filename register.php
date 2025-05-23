<?php
session_start();
include 'db_connection.php'; // Include database connection

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $number = trim($_POST['number']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $captcha = trim($_POST['captcha']);

    // Validate CAPTCHA
    if ($captcha != $_SESSION['captcha_code']) {
        $error = "Invalid CAPTCHA code.";
    } else {
        // Insert user into the database
        $query = "INSERT INTO users (name, number, email, password) VALUES ('$name', '$number', '$email', '$password')";
        if (mysqli_query($conn, $query)) {
            $success = "Registration successful! You can now log in.";
        } else {
            $error = "Error: " . mysqli_error($conn);
        }
    }
}

// Generate CAPTCHA code
$captcha_code = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789"), 0, 6);
$_SESSION['captcha_code'] = $captcha_code;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
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
    .register-container {
      background-color: #fff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
    }
    .register-container h3 {
      text-align: center;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>

<div class="register-container">
  <h3>Register</h3>
  <?php if (isset($error)) { ?>
    <div class="alert alert-danger"><?php echo $error; ?></div>
  <?php } ?>
  <?php if (isset($success)) { ?>
    <div class="alert alert-success"><?php echo $success; ?></div>
  <?php } ?>
  <form method="POST" action="">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
    </div>
    <div class="form-group">
      <label for="number">Phone Number</label>
      <input type="text" class="form-control" id="number" name="number" placeholder="Enter your phone number" pattern="\d{10}" title="Enter a valid 10-digit phone number" required>
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" minlength="6" required>
    </div>
    <div class="form-group">
      <label for="captcha">CAPTCHA</label>
      <div class="d-flex align-items-center">
        <input type="text" class="form-control mr-2" id="captcha" name="captcha" placeholder="Enter CAPTCHA" required>
        <span class="badge badge-primary p-2"><?php echo $_SESSION['captcha_code']; ?></span>
      </div>
    </div>
    <button type="submit" class="btn btn-primary btn-block">Register</button>
  </form>
</div>

</body>
</html>