<?php $title="Add Portals"; include('include/header.php'); include 'include/dbconfig.php'; ?>

<h2 align="center" class="beautify-border">Hostel Management System</h2>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>

<?php
if(isset($_REQUEST['submit'])){
$username=$_REQUEST['username'];
$password=md5($_REQUEST['password']);
$date=date("Ymd");
$a=mysqli_query($conn,"SELECT * FROM portal WHERE username='$username'");
$result=mysqli_num_rows($a);
    if($result==0)
    {
        if(mysqli_query($conn,"INSERT INTO portal(username,password,created_on) 
            VALUES('$username','$password','$date')"))
            {
        echo '<script>alert("Portal User Added Sucessfully");</script>';
            }
            else
            {
        echo '<script>alert("Unable to Add Portal User Now");</script>';
            }
    }
    else
    {
        echo '<script>alert("Username Exists");</script>';
    }
}
?>
<h1 align="center">Add Portal</h1>
<div class="container">
<div class="jumbotron">
<form action="" method="post">
    <div class="form-group">
        <label for="username">Enter UserName :</label>
        <input type="text" name="username" id="username" class="form-control">

    </div>
    <div class="form-group">
        <label for="password">Enter Password :</label>
        <input type="text" name="password" id="password" class="form-control">
    </div>

    <input type="submit" name="submit" class="btn btn-primary" value="Create Portal" />
</form>


</div>
<hr>













</body>
<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/custom.js?v=11"></script>
</html>