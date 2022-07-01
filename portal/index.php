<?php $title = 'Request Fot Allotment';
include ('include/header.php');
include 'include/dbconfig.php'; ?>


<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Student Details</h1>
            </div>
        </div>
        <div class="container">
            <div class="jumbotron">

                <?php
                if (!empty($_REQUEST['msg'])) {
                    $messgae = $_REQUEST['msg'];
                    echo "<h2 align='center' style='color:green;'>" . $messgae . "</h2>";
                }

                ?>
                <table class="table">
                    <thead>
                        <tr align="justify">
                            <th>Date</th>
                            <th>Name</th>
                            <th>College Name</th>
                            <th>Address</th>
                            <th>Mobile</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody align="justify">
                        <?php
                        $data = mysqli_query($conn, "SELECT * FROM students WHERE request_status='Pending'");
                        while ($row = mysqli_fetch_object($data)) {
                            $name = $row->name;
                            $college_name = $row->college_name;
                            $address = $row->address;
                            $mobile = $row->mobile;
                            $id = $row->id;
                            $apply_date = $row->apply_date;
                            echo '<tr>
            <td>' . $apply_date . '</td>
            <td>' . $name . '</td>
            <td>' . $college_name . '</td>
            <td>' . $address . '</td>
            <td>' . $mobile . '</td>
    <td><a href="allot_room.php?student_id=' . $id . '"><button type="button" class="btn btn-info btn-lg">Allot Room</button></a></td>
            </tr>  ';
                        }
                        ?>

                    </tbody>
                </table>

                <!-- data-toggle="modal" data-target="#myModal" -->


            </div>
        </div>
    </div>
    <hr>
    </body>
    <?php include('include/footer.php'); ?>

    </html>