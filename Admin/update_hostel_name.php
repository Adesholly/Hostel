<?php $title="Update Hostel"; include('include/header.php');     include 'include/dbconfig.php';
 ?>


<h2 align="center" class="beautify-border">Hostel Management System</h2>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>


<h1 align="center">Add Hostel</h1>



<div class="container">
<div class="jumbotron">
    <?php
    if(isset($_REQUEST['submit']))
    {
    $hostel_name=$_REQUEST['hostel_name'];
    $hostel_id=$_REQUEST['hostel_id'];
    if(mysqli_query($conn,"UPDATE hostel_details SET hostel_name='$hostel_name' WHERE id='$hostel_id'")){
        echo '<script>alert("Hostel Updated Sucessfully");</script>';
    }
    else
    {
        echo '<script>alert("Unable to Update Hostel");</script>';
    }
    }
    ?>
    <?php
    if(empty($_REQUEST['id']))
    {
        header('location:index.php');
    }
    else
    {
        $id=$_REQUEST['id'];
$name=mysqli_fetch_row(mysqli_query($conn,"SELECT * FROM hostel_details WHERE id='$id'"));
    }

    ?>
<form action="" method="post">
    <div class="form-group">
        <label for="hostel_name">Enter Hostel Name</label>
        <input type="text" name="hostel_id" value="<?php echo $name[0]; ?>" hidden>
<input type="text" name="hostel_name" class="form-control" id="hostel_name" placeholder="Enter Hostel Name" value="<?php echo $name[1]; ?>" required="">
    </div>
    <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Update Name">
</form>


</div>
<hr>





</body>
<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/custom.js?v=11"></script>
</html>