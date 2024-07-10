<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="dsavedata.php" method="post">
        <div class="form-group">
            <label>Agency name</label>
            <input type="text" name="dagency" required/>
        </div>
        <div class="form-group">
            <label>owner name</label>
            <input type="text" name="downer" required/>
        </div>
        <div class="form-group">
            <label>Licence no</label>
            <input type="text" name="dLno" required/>
        </div>
        <div class="form-group">
            <label>address</label>
            <input type="text" name="daddress" required/>
        </div>
        <div class="form-group">
            <label>phone no</label>
            <input type="text" name="dphone" required/>
        </div>
        <div class="form-group">
            <label>Email.id</label>
            <input type="text" name="demail" required/>
        </div>
        <input class="submit" type="submit" value="Add"  />
    </form>
</div>
</div>
</body>
</html>