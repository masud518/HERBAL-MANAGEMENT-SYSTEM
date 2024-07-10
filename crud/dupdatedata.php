<?php
$id = $_POST['id'];
$dagency = $_POST['dagency'];
$downer = $_POST['downer'];
$dLno = $_POST['dLno'];
$daddress = $_POST['daddress'];
$dphone = $_POST['dphone'];
$demail = $_POST['demail'];


include 'config.php';

$sql = "UPDATE distdetail SET  dagency = '{$dagency}',downer = '{$downer}', dLno = '{$dLno}',daddress = '{$daddress}', dphone = '{$dphone}', demail = '{$demail}' WHERE id = {$id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/crud/ddetails.php");

mysqli_close($conn);

?>