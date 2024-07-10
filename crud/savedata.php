<?php  
 $Bno = $_POST['Bno'];
 $product = $_POST['product'];
 $gram = $_POST['gram'];
 $company = $_POST['company'];
 $Qty = $_POST['Qty'];
 $price = $_POST['price'];
 $Expire = $_POST['Expire'];
 $margin = $_POST['margin'];
 $Rate = $_POST['Rate'];
$conn = mysqli_connect("localhost","root","","crud") or die("Connection Failed");

$sql = "INSERT INTO herbal(Bno,product,gram,company,Qty,price,Expire,margin,Rate) VALUES ('{$Bno}','{$product}','{$gram}','{$company}','{$Qty}','{$price}','{$Expire}','{$margin}','{$Rate}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/crud/agency.php");

mysqli_close($conn);

?>



