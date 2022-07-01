<?php $title="Update Portals"; include('include/header.php'); include 'include/dbconfig.php'; ?>

<h2 align="center" class="beautify-border">Hostel Management System</h2>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>

<?php
if(isset($_REQUEST['submit'])){
$username=$_REQUEST['username'];
$password=md5($_REQUEST['password']);
if(mysqli_query($conn,"UPDATE portal SET password='$password' WHERE username='$username'")){
echo '<script>alert("Updated Sucessfully");</script>';
}
else
{
    echo '<script>alert("Unable to Update");</script>';

}
}
?>


<h1 align="center">Update Portal</h1>
<div class="container">
<div class="jumbotron">
<form action="" method="post">
    <div class="form-group">
        <?php
        if(empty($_REQUEST['id'])){
            header('location:remove_portal.php');
        }
        else
        {
         $id=$_REQUEST['id'];
        }
        ?>
        <label for="username">Enter UserName :</label>
        <input value="<?php echo $id; ?>" type="text" name="username" id="username" class="form-control" readonly="">

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