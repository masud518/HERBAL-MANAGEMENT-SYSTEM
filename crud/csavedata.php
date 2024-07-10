<?php
$cname = $_POST['cname'];
 $cphone = $_POST['cphone'];
 $cemail = $_POST['cemail'];
 $caddress = $_POST['caddress'];
$conn = mysqli_connect("localhost","root","","crud") or die("Connection Failed");

$sql = "INSERT INTO custdetail(cname,cphone,cemail,caddress) VALUES ('{$cname}','{$cphone}','{$cemail}','{$caddress}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/crud/details.php");

mysqli_close($conn);

?>