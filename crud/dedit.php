<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php
    include 'config.php';

    $id = $_GET['id'];

    $sql = "SELECT * FROM distdetail WHERE id = {$id}";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    if(mysqli_num_rows($result) > 0)  {
      while($row = mysqli_fetch_assoc($result)){
    ?>
    <form class="post-form" action="dupdatedata.php" method="post">
    <div class="form-group">
            <label for=""></label>
            <input type="hidden" name="id"  value="<?php echo $row['id']; ?>" />
        </div>
        <div class="form-group">
            <label>Agency name</label>
            <input type="text" name="dagency" value="<?php echo $row['dagency']; ?>" />
        </div>
        <div class="form-group">
            <label>owner name</label>
            <input type="text" name="downer" value="<?php echo $row['downer']; ?>" />
        </div>
        <div class="form-group">
            <label>Licence no</label>
            <input type="text" name="dLno" value="<?php echo $row['dLno']; ?>" />
            </div>
            <div class="form-group">
            <label>Address</label>
            <input type="text" name="daddress" value="<?php echo $row['daddress']; ?>" />
            </div>
            <div class="form-group">
            <label>Phone no</label>
            <input type="text" name="dphone" value="<?php echo $row['dphone']; ?>" />
            </div>
            <div class="form-group">
            <label>Email.id</label>
            <input type="text" name="demail" value="<?php echo $row['demail']; ?>" />
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