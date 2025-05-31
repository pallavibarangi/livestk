<?php
include 'db_connection.php';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $livestock_id = $_POST['livestock_id'];
    $production_date = $_POST['production_date'];
    $quantity = $_POST['quantity'];

    $insert = "INSERT INTO milk_production (livestock_id, production_date, quantity) VALUES ('$livestock_id', '$production_date', '$quantity')";
    mysqli_query($conn, $insert);
    header('Location: milk_production.php');
    exit;
}

// Fetch livestock for dropdown
$livestock_result = mysqli_query($conn, "SELECT id, name FROM livestock");

// Fetch milk production records
$query = "SELECT mp.id, l.name, l.id AS livestock_id, mp.production_date, mp.quantity
          FROM milk_production mp
          JOIN livestock l ON mp.livestock_id = l.id
          ORDER BY mp.production_date DESC";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Milk Production</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
  <h3>Add Milk Production Record</h3>
  <form method="POST" action="">
    <div class="form-group">
      <label for="livestock_id">Livestock</label>
      <select class="form-control" id="livestock_id" name="livestock_id" required>
        <option value="">Select Livestock</option>
        <?php while ($row = mysqli_fetch_assoc($livestock_result)) { ?>
          <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?> (ID: <?php echo $row['id']; ?>)</option>
        <?php } ?>
      </select>
    </div>
    <div class="form-group">
      <label for="production_date">Date</label>
      <input type="date" class="form-control" id="production_date" name="production_date" required>
    </div>
    <div class="form-group">
      <label for="quantity">Milk Produced (Liters)</label>
      <input type="number" step="0.01" class="form-control" id="quantity" name="quantity" placeholder="Enter quantity in liters" required>
    </div>
    <button type="submit" class="btn btn-primary">Add Record</button>
  </form>

  <hr>
  <h3>Milk Production Records</h3>
  <table class="table table-bordered table-striped">
    <thead class="thead-dark">
      <tr>
        <th>ID</th>
        <th>Livestock Name</th>
        <th>Livestock ID</th>
        <th>Date</th>
        <th>Milk Produced (Liters)</th>
        <th>Actions</th> <!-- New column for actions -->
      </tr>
    </thead>
    <tbody>
      <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo htmlspecialchars($row['name']); ?></td>
          <td><?php echo $row['livestock_id']; ?></td>
          <td><?php echo $row['production_date']; ?></td>
          <td><?php echo $row['quantity']; ?></td>
          <td>
            <a href="edit_milk_production.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
            <a href="delete_milk_production.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
</body>
</html>