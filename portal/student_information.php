<?php $title = "Student Information";
include('include/header.php');
include 'include/dbconfig.php'; ?>


<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Student Information</h1>
            </div>
        </div>
        <div class="container">
            <div class="jumbotron">


                <table class="table">
                    <thead>
                        <tr align="center">
                            <th>Name</th>
                            <th>College Name</th>
                            <th>Address</th>
                            <th>Hostel</th>
                            <th>Room</th>
                            <th>Bed</th>
                        </tr>
                    </thead>
                    <tbody align="justify">
                        <?php
                        $data = mysqli_query($conn, "SELECT * FROM students WHERE request_status='Approved'");
                        while ($row = mysqli_fetch_object($data)) {
                            $name = $row->name;
                            $college_name = $row->college_name;
                            $address = $row->address;
                            $mobile = $row->mobile;
                            $id = $row->id;
                            $apply_date = $row->apply_date;

                            $room_allotment_data = mysqli_fetch_row(mysqli_query($conn, "SELECT * FROM room_allotment_table WHERE id='$id'"));
                            $hostel_name = mysqli_fetch_row(mysqli_query($conn, "SELECT * FROM hostel_details WHERE id='$room_allotment_data[2]'"));

                            $room_no = mysqli_fetch_row(mysqli_query($conn, "SELECT * FROM rooms_details WHERE id='$room_allotment_data[3]'"));

                            $bed_no = mysqli_fetch_row(mysqli_query($conn, "SELECT * FROM room_allotment_table WHERE id='$id'"));

                            echo '<tr>
            <td>' . $name . '</td>
            <td>' . $college_name . '</td>
            <td>' . $address . '</td>
            <td>' . $hostel_name[1] . '</td>
                <td>' . $room_no[2] . '</td>
                <td>' . $room_allotment_data[4] . '</td>
            </tr>  ';
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