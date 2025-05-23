<?php
include 'db_connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $delete_query = "DELETE FROM vaccinations WHERE id = $id";
    mysqli_query($conn, $delete_query);
}

header('Location: vaccinations.php');
exit;
?>