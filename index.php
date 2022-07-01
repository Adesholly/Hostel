<?php $title='Home Page'; include('include/header.php'); ?>
<h2 align="center" class="beautify-border">Apply Online for Your Hostel</h2>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
<h1 align="center">Enter Your Detail's</h1>
<div class="container">
<div class="jumbotron">

<?php
if(isset($_REQUEST['submit']))
{
    $name=$_REQUEST['name'];
    $college=$_REQUEST['college'];
    $course=$_REQUEST['course'];
    $roll_no=$_REQUEST['roll_no'];
    $email=$_REQUEST['email'];
    $mobile=$_REQUEST['mobile'];
    $permanent_address=$_REQUEST['permanent_address'];
    $date = date("Ymd");
    $time= date("His");
    include 'include/dbconfig.php';
    if(mysqli_query($conn,"INSERT INTO 
                                        students(name,
                                                college_name,
                                                course,
                                                roll_no,
                                                email,
                                                mobile,
                                                address,
                                                request_status,
                                                apply_date,
                                                apply_time) 
                                         VALUES('$name',
                                                '$college',
                                                '$course',
                                                '$roll_no',
                                                '$email',
                                                '$mobile',
                                                '$permanent_address',
                                                'Pending',
                                                '$date',
                                                '$time')")){
    $request_id=mysqli_fetch_row(mysqli_query($conn,"SELECT id FROM students WHERE mobile='$mobile' AND apply_date='$date' AND apply_time='$time'"));
                echo '<script>alert("Successfully Registered for Hostel.");</script>';
                                    }
                                    else
                                    {
                                     echo '<script>alert("Unable to Make Request");</script>';
                                 
                                    }
}


?>

<h1 align="center">
    <?php
    if(!empty($request_id[0]))
    {
     echo 'Your Request No is : '.$request_id[0]; 
    }

    ?>
    </h1>
<form action="" method="post">
    <div class="form-group">
        <label for="name">Enter your Name :</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Hostel Name">
    </div>
    <div class="form-group">
        <label for="college">Enter College Name :</label>
        <input type="text" name="college" class="form-control" id="college" placeholder="Enter Hostel Name">
    </div>
    <div class="form-group">
        <label for="course">Course Persuing :</label>
        <input type="text" name="course" class="form-control" id="course" placeholder="Enter Hostel Name">
    </div>
    <div class="form-group">
        <label for="roll_no">College Roll No. :</label>
        <input type="text" name="roll_no" class="form-control" id="roll_no" placeholder="Enter Hostel Name">
    </div>
    <div class="form-group">
        <label for="email">Enter Your Email :</label>
        <input type="text" name="email" class="form-control" id="email" placeholder="Enter Hostel Name">
    </div>
    <div class="form-group">
        <label for="mobile">Enter Your Mobile No. :</label>
        <input type="number" name="mobile" class="form-control" id="mobile" placeholder="Enter Hostel Name">
    </div>
    <div class="form-group">
        <label for="permanent_address">Enter Your Permanent Address :</label>
        <textarea name="permanent_address" id="permanent_address" class="form-control"></textarea>
        </div>
            <input type="submit" class="btn btn-primary" name="submit" value="Add your Request">
</form>
</div>
<hr>
</body>
<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/custom.js?v=11"></script>
</html>