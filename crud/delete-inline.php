<?php

$id = $_GET['id'];

include 'config.php';

$sql = "DELETE FROM herbal WHERE id = {$id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/crud/agency.php");

mysqli_close($conn);

?>



