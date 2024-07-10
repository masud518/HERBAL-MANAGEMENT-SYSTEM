 <?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
   <?php
    include 'config.php';

    $sql = "SELECT * FROM herbal";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    if(mysqli_num_rows($result) > 0)  {
  ?>
  
    <table cellpadding="8px">
        <thead>
        <th>Id</th>
        <th>Batch no</th>
        <th>product name</th>
        <th>gram</th>
        <th>company name</th>
        <th>Qty</th>
        <th>price</th>
        <th>Expire date</th>
        <th>margin</th>
        <th>Rate</th>
        <th>Action</th>
        </thead>
        <tbody>
          <?php
            while($row = mysqli_fetch_assoc($result)){
          ?>
            <tr>
            
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['Bno']; ?></td>
                <td><?php echo $row['product']; ?></td>
                <td><?php echo $row['gram']; ?></td>
                <td><?php echo $row['company']; ?></td>
                <td><?php echo $row['Qty']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><?php echo $row['Expire']; ?></td>
                <td><?php echo $row['margin']; ?></td>
                <td><?php echo $row['Rate']; ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['id']; ?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row['id']; ?>'>Delete</a>
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
