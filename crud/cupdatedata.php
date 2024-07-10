
<?php
$id = $_POST['id'];
$cname = $_POST['cname'];
$cphone = $_POST['cphone'];
$cemail = $_POST['cemail'];
$caddress = $_POST['caddress'];

include 'config.php';

$sql = "UPDATE custdetail SET  cname = '{$cname}',cphone = '{$cphone}', cemail = '{$cemail}',caddress = '{$caddress}' WHERE id = {$id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/crud/details.php");

mysqli_close($conn);

?>