<?php
$id = $_POST['id'];
$Bno = $_POST['Bno'];
$product = $_POST['product'];
$gram = $_POST['gram'];
$company = $_POST['company'];
$Qty = $_POST['Qty'];
$price = $_POST['price'];
$Expire = $_POST['Expire'];
$margin = $_POST['margin'];
$Rate = $_POST['Rate'];

include 'config.php';

$sql = "UPDATE herbal SET  Bno = '{$Bno}',product = '{$product}',gram = '{$gram}', company = '{$company}',Qty = '{$Qty}',price = '{$price}',Expire = '{$Expire}',margin = '{$margin}',Rate = '{$Rate}' WHERE id = {$id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/crud/agency.php");

mysqli_close($conn);

?>

