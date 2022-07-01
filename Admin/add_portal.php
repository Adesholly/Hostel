<?php $title = "Add Portals";
include('include/header.php');
include 'include/dbconfig.php'; ?>

<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Add Portal</h1>
            </div>
        </div>
        <div class="container">
            <div class="jumbotron">
                <?php
                if (isset($_REQUEST['submit'])) {
                    $username = $_REQUEST['username'];
                    $password = md5($_REQUEST['password']);
                    $date = date("Ymd");
                    $a = mysqli_query($conn, "SELECT * FROM portal WHERE username='$username'");
                    $result = mysqli_num_rows($a);
                    if ($result == 0) {
                        if (mysqli_query($conn, "INSERT INTO portal(username,password,created_on) 
            VALUES('$username','$password','$date')")) {
                            echo '<script>alert("Portal User Added Sucessfully");</script>';
                        } else {
                            echo '<script>alert("Unable to Add Portal User Now");</script>';
                        }
                    } else {
                        echo '<script>alert("Username Exists");</script>';
                    }
                }
                ?>
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




                </div>
            </div>
        </div>
    </div>







    </body>
    <?php include('include/footer.php'); ?>

    </html>