<?php
include 'db_connection.php'; // Include database connection

// Check if ID is provided
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the record
    $delete_query = "DELETE FROM livestock WHERE id = $id";
    mysqli_query($conn, $delete_query);
}

// Redirect back to the main page
header('Location: livestock.php');
exit;
?>