<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php
    include 'config.php';

    $id = $_GET['id'];

    $sql = "SELECT * FROM herbal WHERE id = {$id}";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    if(mysqli_num_rows($result) > 0)  {
      while($row = mysqli_fetch_assoc($result)){
    ?>
    <form class="post-form" action="updatedata.php" method="post">
    <div class="form-group">
            <label for=""></label>
            <input type="hidden" name="id"  value="<?php echo $row['id']; ?>" />
        </div>
        <div class="form-group">
            <label>Batch no</label>
            <input type="text" name="Bno" value="<?php echo $row['Bno']; ?>" />
        </div>
        <div class="form-group">
            <label>product name</label>
            <input type="text" name="product" value="<?php echo $row['product']; ?>" />
            </div>
            <div class="form-group">
            <label>gram</label>
            <input type="text" name="gram" value="<?php echo $row['gram']; ?>" />
            </div>
            <div class="form-group">
            <label>company name</label>
            <input type="text" name="company" value="<?php echo $row['company']; ?>" />
            </div>
            <div class="form-group">
            <label>Qty</label>
            <input type="text" name="Qty" value="<?php echo $row['Qty']; ?>" />
            </div>
            <div class="form-group">
            <label>price</label>
            <input type="text" name="price" value="<?php echo $row['price']; ?>" />
            </div>
            <div class="form-group">
            <label>Expire date</label>
            <input type="text" name="Expire" value="<?php echo $row['Expire']; ?>" />
            </div>
            <div class="form-group">
            <label>margin</label>
            <input type="text" name="margin" value="<?php echo $row['margin']; ?>" />
            </div>
            <div class="form-group">
            <label>Rate</label>
            <input type="text" name="Rate" value="<?php echo $row['Rate']; ?>" />
            </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php
      }
    }
    ?>
</div>
</div>
</body>
</html>
