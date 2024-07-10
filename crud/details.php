<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
   <?php
    include 'config.php';

    $sql = "SELECT * FROM custdetail";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    if(mysqli_num_rows($result) > 0)  {
  ?>
  
    <table cellpadding="8px">
        <thead>
        <th>Id</th>
        <th>customer name</th>
        <th>customer phone</th>
        <th>customer email</th>
        <th>customer address</th>
        <th>Action</th>
        </thead>
        <tbody>
          <?php
            while($row = mysqli_fetch_assoc($result)){
          ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['cname']; ?></td>
                <td><?php echo $row['cphone']; ?></td>
                <td><?php echo $row['cemail']; ?></td>
                <td><?php echo $row['caddress']; ?></td>
                <td>
                    <a href='cedit.php?id=<?php echo $row['id']; ?>'>Edit</a>
                    <a href='cdelete-inline.php?id=<?php echo $row['id']; ?>'>Delete</a>
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



