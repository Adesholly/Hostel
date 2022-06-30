<?php include('include/header.php'); ?>

<h2 align="center" class="beautify-border">Hostel Management System</h2>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>


<h1 align="center">Add Portal</h1>
<div class="container">
<div class="jumbotron">
<form action="" method="post">
    <div class="form-group">
        <label for="hostel_Name">Enter UserName :</label>
        <select id="hostel_Name" class="form-control">
            <option></option>
        </select>
    </div>
    <div class="form-group">
        <label for="room_name">Enter Password :</label>
        <input type="text" name="room_name" id="room_name" class="form-control">
    </div>
    <div class="form-group">
        <label for="no_of_beds">Confirm Password :</label>
        <input type="text" name="no_of_beds" id="no_of_beds" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Create Portal</button>
</form>


</div>
<hr>













</body>
<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/custom.js?v=11"></script>
</html>