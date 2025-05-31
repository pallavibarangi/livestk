<?php
include 'db_connection.php';

// Check if ID is provided
if (!isset($_GET['id'])) {
    header('Location: milk_production.php');
    exit;
}
$id = $_GET['id'];

// Fetch the existing record
$query = "SELECT * FROM milk_production WHERE id = $id";
$result = mysqli_query($conn, $query);
$record = mysqli_fetch_assoc($result);

// Fetch livestock for dropdown
$livestock_result = mysqli_query($conn, "SELECT id, name FROM livestock");

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $livestock_id = $_POST['livestock_id'];
    $production_date = $_POST['production_date'];
    $quantity = $_POST['quantity'];

    $update = "UPDATE milk_production SET livestock_id='$livestock_id', production_date='$production_date', quantity='$quantity' WHERE id=$id";
    mysqli_query($conn, $update);

    header('Location: milk_production.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Milk Production</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
  <h3>Edit Milk Production Record</h3>
  <form method="POST" action="">
    <div class="form-group">
      <label for="livestock_id">Livestock</label>
      <select class="form-control" id="livestock_id" name="livestock_id" required>
        <?php while ($row = mysqli_fetch_assoc($livestock_result)) { ?>
          <option value="<?php echo $row['id']; ?>" <?php if ($row['id'] == $record['livestock_id']) echo 'selected'; ?>>
            <?php echo $row['name']; ?> (ID: <?php echo $row['id']; ?>)
          </option>
        <?php } ?>
      </select>
    </div>
    <div class="form-group">
      <label for="production_date">Date</label>
      <input type="date" class="form-control" id="production_date" name="production_date" value="<?php echo $record['production_date']; ?>" required>
    </div>
    <div class="form-group">
      <label for="quantity">Milk Produced (Liters)</label>
      <input type="number" step="0.01" class="form-control" id="quantity" name="quantity" value="<?php echo $record['quantity']; ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Update Record</button>
    <a href="milk_production.php" class="btn btn-secondary">Cancel</a>
  </form>
</div>
</body>
</html>