<?php $title = "Update Portals";
include('include/header.php');
include 'include/dbconfig.php'; ?>



<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Update Portal</h1>
            </div>
        </div>
        <div class="container">
            <div class="jumbotron">
                <?php
                if (isset($_REQUEST['submit'])) {
                    $username = $_REQUEST['username'];
                    $password = md5($_REQUEST['password']);
                    if (mysqli_query($conn, "UPDATE portal SET password='$password' WHERE username='$username'")) {
                        echo '<script>alert("Updated Sucessfully");</script>';
                    } else {
                        echo '<script>alert("Unable to Update");</script>';
                    }
                }
                ?>


                <div class="container">
                    <div class="jumbotron">
                        <form action="" method="post">
                            <div class="form-group">
                                <?php
                                if (empty($_REQUEST['id'])) {
                                    header('location:remove_portal.php');
                                } else {
                                    $id = $_REQUEST['id'];
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

                </div>
                </div>
        </div> </div>
        





        </body>
        <?php include('include/footer.php'); ?>

        </html>