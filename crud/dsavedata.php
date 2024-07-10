
<?php  
 $dagency = $_POST['dagency'];
 $downer = $_POST['downer'];
 $dLno = $_POST['dLno'];
 $daddress = $_POST['daddress'];
 $dphone = $_POST['dphone'];
 $demail = $_POST['demail'];
$conn = mysqli_connect("localhost","root","","crud") or die("Connection Failed");

$sql = "INSERT INTO distdetail(dagency,downer,dLno,daddress,dphone,demail) VALUES ('{$dagency}','{$downer}','{$dLno}','{$daddress}','{$dphone}','{$demail}')";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: http://localhost/crud/ddetails.php");

mysqli_close($conn);

?>
