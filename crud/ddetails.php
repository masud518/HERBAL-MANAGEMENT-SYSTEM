
<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
   <?php
    include 'config.php';

    $sql = "SELECT * FROM distdetail";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    if(mysqli_num_rows($result) > 0)  {
  ?>
  
    <table cellpadding="8px">
        <thead>
        <th>Id</th>
        <th>agency name</th>
        <th>owner name</th>
        <th>Licence no</th>
        <th>address</th>
        <th>phone no</th>
        <th>email.id</th>
        <th>Action</th>
        </thead>
        <tbody>
          <?php
            while($row = mysqli_fetch_assoc($result)){
          ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['dagency']; ?></td>
                <td><?php echo $row['downer']; ?></td>
                <td><?php echo $row['dLno']; ?></td>
                <td><?php echo $row['daddress']; ?></td>
                <td><?php echo $row['dphone']; ?></td>
                <td><?php echo $row['demail']; ?></td>
                <td>
                    <a href='dedit.php?id=<?php echo $row['id']; ?>'>Edit</a>
                    <a href='ddelete-inline.php?id=<?php echo $row['id']; ?>'>Delete</a>
                </td>
            </tr>
          <?php } ?>
        </tbody>
    </table>
  <?php }else{
    echo "<h2>No Record Found</h2>";
  }
  mysqli_close($conn);
  ?>
</div>
</div>

</body>
</html>