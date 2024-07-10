<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="csavedata.php" method="post">
        <div class="form-group">
            <label>customer name</label>
            <input type="text" name="cname" required/>
        </div>
        <div class="form-group">
            <label>customer phone</label>
            <input type="text" name="cphone" required/>
        </div>
        <div class="form-group">
            <label>customer email</label>
            <input type="text" name="cemail" required/>
        </div>
        <div class="form-group">
            <label>customer address</label>
            <input type="text" name="caddress" required/>
        </div>
        <input class="submit" type="submit" value="Add"  />
    </form>
</div>
</div>
</body>
</html>