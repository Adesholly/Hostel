<?php $title = 'Home Page';
include('include/header.php'); ?>

<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div><marquee><h1>Department of Computer Engineering Final Year Project</h1>
                <h4 class="h4 center">Supervised by Engr. Mrs. O. Okosun</h4>
                     </marquee>
                </div>
               <h1 class="page-head-line">Apply Online for Your Hostel </h1>
            </div>
        </div>
        <div class="container">
            <div class="jumbotron">

                <?php
                if (isset($_REQUEST['submit'])) {
                    $name = $_REQUEST['name'];
                    $college = $_REQUEST['college'];
                    $course = $_REQUEST['course'];
                    $roll_no = $_REQUEST['roll_no'];
                    $email = $_REQUEST['email'];
                    $mobile = $_REQUEST['mobile'];
                    $permanent_address = $_REQUEST['permanent_address'];
                    $date = date("Ymd");
                    $time = date("His");
                    $current_year = $_REQUEST['current_year'];

                    include 'include/dbconfig.php';
                    if (mysqli_query($conn, "INSERT INTO 
                                        students(name,
                                                college_name,
                                                course,
                                                roll_no,
                                                email,
                                                mobile,
                                                address,
                                                request_status,
                                                apply_date,
                                                apply_time,
                                                current_year) 
                                         VALUES('$name',
                                                '$college',
                                                '$course',
                                                '$roll_no',
                                                '$email',
                                                '$mobile',
                                                '$permanent_address',
                                                'Pending',
                                                '$date',
                                                '$time',
                                                '$current_year')")) {
                        $request_id = mysqli_fetch_row(mysqli_query($conn, "SELECT id FROM students WHERE mobile='$mobile' AND apply_date='$date' AND apply_time='$time'"));
                        echo '<script>alert("Successfully Registered for Hostel.");</script>';
                    } else {
                        echo '<script>alert("Unable to Make Request");</script>';
                    }
                }


                ?>

                <h1 align="center">
                    <?php
                    if (!empty($request_id[0])) {
                        echo 'Your Request No is : ' . $request_id[0];
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
                        <label for="course">Department :</label>
                        <input type="text" name="course" class="form-control" id="course" placeholder="Enter your Department">
                    </div>
                    <div class="form-group">
                        <label for="roll_no">Matriculation Number. :</label>
                        <input type="text" name="roll_no" class="form-control" id="roll_no" placeholder="Enter your Matriculation Number">
                    </div>
                    <div class="form-group">
                        <label for="current_year">Current Level. :</label>
                        <input type="text" name="current_year" class="form-control" id="current_year" placeholder="Enter your level">
                    </div>
                    <div class="form-group">
                        <label for="email">Enter Your Email :</label>
                        <input type="text" name="email" class="form-control" id="email" placeholder="Enter your Email">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Enter Your Mobile No. :</label>
                        <input type="number" name="mobile" class="form-control" id="mobile" placeholder="Enter your phone Number">
                    </div>
                    <div class="form-group">
                        <label for="permanent_address">Enter Your Permanent Address :</label>
                        <textarea name="permanent_address" id="permanent_address" class="form-control"></textarea>
                    </div>
                    <input type="submit" class="btn btn-primary" name="submit" value="Add your Request">
                </form>
            </div>
        </div>
    </div>
    </body>
    <?php include("include/footer.php"); ?>

    </html>