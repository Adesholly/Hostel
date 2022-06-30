<?php include('include/header.php'); ?>


<h2 align="center" class="beautify-border">Hostel Management System</h2>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>


<h1 align="center">Add Hostel</h1>



<div class="container">
<div class="jumbotron">
<form action="" method="post">
    <div class="form-group">
        <label for="inputEmail">Enter Hostel Name</label>
        <input type="email" class="form-control" id="inputEmail" placeholder="Enter Hostel Name">
    </div>

    <button type="submit" class="btn btn-primary">Add Hostel</button>
</form>


</div>
<hr>




<div class="jumbotron">
<table class="table">
    <thead>
        <tr align="center">

            <th>Row</th>
            <th>Hostel Name</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody align="center">
        <tr>

            <td>Subhash Bhawan</td>
            <td>2018-07-15</td>
            <td><input type="submit" name="" class="btn btn-success" value="Edit"></td>
        </tr>   


    </tbody>
</table>
</div>









</body>
<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/custom.js?v=11"></script>
</html>