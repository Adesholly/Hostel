<?php $title='Track Your Records'; include('include/header.php'); ?>


<h2 align="center" class="beautify-border">Hostel Management System</h2>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>


<h1 align="center">Track Request Status </h1>



<div class="container">
<div class="jumbotron">




<?php
if(isset($_REQUEST['submit'])){
$request_id=$_REQUEST['request_id'];
$mobile=$_REQUEST['mobile'];
include 'include/dbconfig.php';
$data=mysqli_fetch_row(mysqli_query($conn,"SELECT * FROM students WHERE id='$request_id' and mobile='$mobile'"));
if($data>0){
	echo '<h1>Your Status is : '.$data[8].'</h1>';
}
}
?>


        <form action="" method="post">
            <div class="form-group">
                <label for="inputEmail">Enter Request Id No. :</label>
                <input name="request_id" type="number" class="form-control" id="inputEmail" >
            </div>

           <div class="form-group">
                <label for="mobile">Enter Mobile No. :</label>
                <input name="mobile" type="number" class="form-control" id="mobile" >
            </div>
                <input type="submit" name="submit" class="btn btn-primary">
        </form>





</div>

</div>







</body>
<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/custom.js?v=11"></script>
</html>