<?php $title = 'Home Page';
include('include/header.php'); ?>

<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Track Request Status</h1>
            </div>
        </div>
        <div class="container">
            <div class="jumbotron">

                <form action="" method="post">
                    <div class="form-group">
                        <label for="inputEmail">Enter Request Id No. :</label>
                        <input name="request_id" type="number" class="form-control" id="inputEmail">
                    </div>

                    <div class="form-group">
                        <label for="mobile">Enter Mobile No. :</label>
                        <input name="mobile" type="number" class="form-control" id="mobile">
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary">
                </form>

                <?php
                if (isset($_REQUEST['submit'])) {
                    $request_id = $_REQUEST['request_id'];
                    $mobile = $_REQUEST['mobile'];
                    include 'include/dbconfig.php';
                    $data = mysqli_fetch_row(mysqli_query($conn, "SELECT * FROM students WHERE id='$request_id' and mobile='$mobile'"));
                    if ($data > 0) {
echo

'<div class="jumbotron">
<table class="table">
<tr><td>Name</td><td>'.$data[1].'</td></tr>
<tr><td>College Name</td><td>'.$data[2].'</td></tr>
<tr><td>Course</td><td>'.$data[3].'</td></tr>
<tr><td>Roll No.</td><td>'.$data[4].'</td></tr>
<tr><td>Email</td><td>'.$data[5].'</td></tr>
<tr><td>Address</td><td>'.$data[7].'</td></tr>
<tr><td>Date of Apply</td><td>'.$data[9].'</td></tr>
<tr><td>Current Year</td><td>'.$data[11].'</td></tr>
<tr><td>Request Status</td><td>'.$data[8].'</td></tr>
</table>
</div>
';
                    }
                }
                ?>

            </div>

        </div>
    </div>

</div>

</body>
<?php include("include/footer.php"); ?>
</html>
