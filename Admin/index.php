<?php $title = "Add Hostel";
include ('include/header.php');
include 'include/dbconfig.php'; ?>

<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Add Hostel</h1>
            </div>
        </div>
        <div class="container">
            <div class="jumbotron">


                <?php
                if (isset($_REQUEST['submit'])) {
                    $hostel_name = $_REQUEST['hostel_name'];
                    if (mysqli_query($conn, "INSERT INTO hostel_details(hostel_name) VALUES('$hostel_name')")) {
                        echo '<script>alert("Hostel Added Sucessfully");</script>';
                    } else {
                        echo '<script>alert("Unable to Add Hostel");</script>';
                    }
                }
                ?>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="hostel_name">Enter Hostel Name</label>
                        <input type="text" name="hostel_name" class="form-control" id="hostel_name" placeholder="Enter Hostel Name" required="">
                    </div>
                    <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Add Hostel">
                </form>


            </div>
            <hr>




            <div class="jumbotron">
                <table class="table">
                    <thead>
                        <tr align="center" >
                            <th>Row</th>
                            <th>Hostel Name</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody align="justify" >
                        <?php
                        $i = 0;
                        $data = mysqli_query($conn, "SELECT * FROM hostel_details");
                        while ($row = mysqli_fetch_object($data)) {
                            @$hostel_name = $row->hostel_name;
                            $id = $row->id;
                            echo '<tr>
            <td>' . ++$i . '</td>
            <td>' . $hostel_name . '</td>
            <td><a href="update_hostel_name.php?id=' . $id . '"><input type="submit" name="" class="btn btn-success" value="Edit"></a></td>
            </tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>









    </body>
    <?php include('include/footer.php'); ?>

    </html>