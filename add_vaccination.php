<?php
include 'db_connection.php';

// Fetch livestock for dropdown
$livestock_query = "SELECT id, name FROM livestock";
$livestock_result = mysqli_query($conn, $livestock_query);

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $livestock_id = $_POST['livestock_id'];
    $vaccine_name = $_POST['vaccine_name'];
    $schedule_date = $_POST['schedule_date'];
    $status = $_POST['status'];

    $insert_query = "INSERT INTO vaccinations (livestock_id, vaccine_name, schedule_date, status) 
                     VALUES ('$livestock_id', '$vaccine_name', '$schedule_date', '$status')";
    mysqli_query($conn, $insert_query);

    header('Location: vaccinations.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Vaccination Schedule</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
  <h3>Add New Vaccination Schedule</h3>
  <form method="POST" action="">
    <div class="form-group">
      <label for="livestock_id">Livestock</label>
      <select class="form-control" id="livestock_id" name="livestock_id" required>
        <option value="">Select Livestock</option>
        <?php while ($row = mysqli_fetch_assoc($livestock_result)) { ?>
          <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
        <?php } ?>
      </select>
    </div>
    <div class="form-group">
      <label for="vaccine_name">Vaccine Name</label>
      <input type="text" class="form-control" id="vaccine_name" name="vaccine_name" placeholder="Enter vaccine name" required>
    </div>
    <div class="form-group">
      <label for="schedule_date">Schedule Date</label>
      <input type="date" class="form-control" id="schedule_date" name="schedule_date" required>
    </div>
    <div class="form-group">
      <label for="status">Status</label>
      <select class="form-control" id="status" name="status" required>
        <option value="Pending">Pending</option>
        <option value="Completed">Completed</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Add Schedule</button>
    <a href="vaccinations.php" class="btn btn-secondary">Back</a>
  </form>
</div>
</body>
</html>