<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Batch no</label>
            <input type="text" name="Bno" required/>
        </div>
        <div class="form-group">
            <label>product name</label>
            <input type="text" name="product" required/>
        </div>
        <div class="form-group">
            <label>gram</label>
            <input type="text" name="gram" required/>
        </div>
        <div class="form-group">
            <label>company name</label>
            <input type="text" name="company" required/>
        </div>
        <div class="form-group">
            <label>Qty</label>
            <input type="text" name="Qty" required/>
        </div>
        <div class="form-group">
            <label>price</label>
            <input type="text" name="price" required/>
        </div>
        <div class="form-group">
            <label>Expire date</label>
            <input type="text" name="Expire" required/>
        </div>
        <div class="form-group">
            <label>margin</label>
            <input type="text" name="margin" required/>
        </div>
        <div class="form-group">
            <label>Rate</label>
            <input type="text" name="Rate" required/>
        </div>
        <input class="submit" type="submit" value="Add"  />
    </form>
</div>
</div>
</body>
</html>
