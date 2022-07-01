<?php $title="Contact Us"; include('include/header.php');  ?>

<h2 align="center" class="beautify-border">Contact Us</h2>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
<?php
if(isset($_REQUEST['submit']))
{
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $mobile_no=$_REQUEST['mobile_no'];
    $message=$_REQUEST['message'];
    $date = date("Ymd");
    $time= date("His");
    include 'include/dbconfig.php';
    if(mysqli_query($conn,"INSERT INTO contact_us(name,
                                                    email,
                                                    mobile,
                                                    message,
                                                    apply_date,
                                                    apply_time) 
                                            VALUES('$name',
                                                    '$email',
                                                    '$mobile_no',
                                                    '$message',
                                                    '$date',
                                                    '$time')"))
    {
        echo '<script>alert("Sucessfully Submitted Request");</script>';
    }
    else
    {
        echo '<script>alert("Unable to Submite Request");</script>';
    }
}


?>

<h1 align="center">Leave Us a Message</h1>
<div class="container">
<div class="jumbotron">
        <form action="" method="post">
            <div class="form-group">
                <label for="name">Enter Your Name :</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter Hostel Name" required="">
            </div>
            <div class="form-group">
                <label for="email">Enter Email :</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter Hostel Name" required="">
            </div>
            <div class="form-group">
                <label for="inputEmail">Enter Mobile No. :</label>
                <input type="number" name="mobile_no" class="form-control" id="inputEmail" placeholder="Enter Hostel Name" required="">
            </div>
            <div class="form-group">
                <label for="message">Your Message :</label>
                <textarea class="form-control" id="message" name="message" required=""></textarea>
            </div>

                <input type="submit" name="submit" class="btn btn-primary" value="Submit">
        </form>

</div>
<hr>













</body>
<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/custom.js?v=11"></script>
</html>