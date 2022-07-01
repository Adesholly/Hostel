<?php $title = "Add Rooms";
include('include/header.php');
include 'include/dbconfig.php'; ?>

<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Hostel Management System</h1>
            </div>
        </div>
        <div class="container">
            <div class="jumbotron">


                <?php
                if (isset($_REQUEST['submit'])) {
                    $hostel_Name = $_REQUEST['hostel_Name'];
                    $room_name = $_REQUEST['room_name'];
                    $no_of_beds = $_REQUEST['no_of_beds'];
                    $date = date("Ymd");
                    if (mysqli_query($conn, "INSERT INTO 
                            rooms_details(hostel_id,
                            room_name,
                            no_of_beds,
                            added_on) 
                        VALUES('$hostel_Name',
                            '$room_name',
                            '$no_of_beds',
                            '$date')")) {
                        $room_id = mysqli_fetch_row(mysqli_query($conn, "SELECT id FROM rooms_details ORDER BY id DESC LIMIT 1"));
                        for ($i = 1; $i <= $no_of_beds; $i++) {
                            mysqli_query($conn, "INSERT INTO bed_info(room_id,bed_no,status,added_on) VALUES('$room_id[0]','$i','Free','$date')");
                        }
                        echo '<script>alert("Room Added Sucessfully");</script>';
                    } else {
                        echo '<script>alert("Unable to Add rooms");</script>';
                    }
                }

                ?>

                <h1 align="center">Add Rooms</h1>
                <div class="container">
                    <div class="jumbotron">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="hostel_Name">Select Hostel :</label>
                                <select name="hostel_Name" id="hostel_Name" class="form-control">
                                    <?php
                                    $i = 0;
                                    $data = mysqli_query($conn, "SELECT * FROM hostel_details");
                                    while ($row = mysqli_fetch_object($data)) {
                                        $id = $row->id;
                                        @$hostel_name = $row->hostel_name;
                                        echo '<option value="' . $id . '">' . $hostel_name . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="room_name">Enter Room Name :</label>
                                <input type="text" name="room_name" id="room_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="no_of_beds">Enter Number of Beds in Room :</label>
                                <input type="text" name="no_of_beds" id="no_of_beds" class="form-control">
                            </div>

                            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
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