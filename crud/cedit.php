<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php
    include 'config.php';

    $id = $_GET['id'];

    $sql = "SELECT * FROM custdetail WHERE id = {$id}";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    if(mysqli_num_rows($result) > 0)  {
      while($row = mysqli_fetch_assoc($result)){
    ?>
    <form class="post-form" action="cupdatedata.php" method="post">
    <div class="form-group">
            <label for=""></label>
            <input type="hidden" name="id"  value="<?php echo $row['id']; ?>" />
        </div>
        <div class="form-group">
            <label>customer name</label>
            <input type="text" name="cname" value="<?php echo $row['cname']; ?>" />
        </div>
        <div class="form-group">
            <label>customer phone</label>
            <input type="text" name="cphone" value="<?php echo $row['cphone']; ?>" />
            </div>
            <div class="form-group">
            <label>customer email</label>
            <input type="text" name="cemail" value="<?php echo $row['cemail']; ?>" />
            </div>
            <div class="form-group">
            <label>customer address</label>
            <input type="text" name="caddress" value="<?php echo $row['caddress']; ?>" />
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