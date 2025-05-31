<?php

include 'db_connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $delete = "DELETE FROM milk_production WHERE id = $id";
    mysqli_query($conn, $delete);
}

header('Location: milk_production.php');
exit;
?>