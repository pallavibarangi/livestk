<?php
include 'db_connection.php';

// Get vaccination ID
if (!isset($_GET['id'])) {
    header('Location: vaccinations.php');
    exit;
}
$id = $_GET['id'];

// Fetch vaccination record
$query = "SELECT * FROM vaccinations WHERE id = $id";
$result = mysqli_query($conn, $query);
$vaccination = mysqli_fetch_assoc($result);

// Fetch livestock for dropdown
$livestock_query = "SELECT id, name FROM livestock";
$livestock_result = mysqli_query($conn, $livestock_query);

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $livestock_id = $_POST['livestock_id'];
    $vaccine_name = $_POST['vaccine_name'];
    $schedule_date = $_POST['schedule_date'];
    $status = $_POST['status'];

    $update_query = "UPDATE vaccinations SET 
        livestock_id = '$livestock_id', 
        vaccine_name = '$vaccine_name', 
        schedule_date = '$schedule_date', 
        status = '$status'
        WHERE id = $id";
    mysqli_query($conn, $update_query);

    header('Location: vaccinations.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Vaccination Schedule</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
  <h3>Edit Vaccination Schedule</h3>
  <form method="POST" action="">
    <div class="form-group">
      <label for="livestock_id">Livestock</label>
      <select class="form-control" id="livestock_id" name="livestock_id" required>
        <?php while ($row = mysqli_fetch_assoc($livestock_result)) { ?>
          <option value="<?php echo $row['id']; ?>" <?php if ($row['id'] == $vaccination['livestock_id']) echo 'selected'; ?>>
            <?php echo $row['name']; ?>
          </option>
        <?php } ?>
      </select>
    </div>
    <div class="form-group">
      <label for="vaccine_name">Vaccine Name</label>
      <input type="text" class="form-control" id="vaccine_name" name="vaccine_name" value="<?php echo $vaccination['vaccine_name']; ?>" required>
    </div>
    <div class="form-group">
      <label for="schedule_date">Schedule Date</label>
      <input type="date" class="form-control" id="schedule_date" name="schedule_date" value="<?php echo $vaccination['schedule_date']; ?>" required>
    </div>
    <div class="form-group">
      <label for="status">Status</label>
      <select class="form-control" id="status" name="status" required>
        <option value="Pending" <?php if ($vaccination['status'] == 'Pending') echo 'selected'; ?>>Pending</option>
        <option value="Completed" <?php if ($vaccination['status'] == 'Completed') echo 'selected'; ?>>Completed</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="vaccinations.php" class="btn btn-secondary">Cancel</a>
  </form>
</div>
</body>
</html>