<?php $title = 'View All Hostels';
include('include/header.php');
include 'include/dbconfig.php'; ?>


<div id="page-wrapper">
  <div id="page-inner">
    <div class="row">
      <div class="col-md-12">
        <h1 class="page-head-line">Total Hostels</h1>
      </div>
    </div>
    <div class="container">
      <div class="jumbotron">

        <?php
        $fetch_hostel = mysqli_query($conn, "SELECT * FROM hostel_details");
        while ($hostel_details = mysqli_fetch_object($fetch_hostel)) {
          $id = $hostel_details->id;
          $hostel_name = $hostel_details->hostel_name;
          $total_rooms = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM rooms_details WHERE 
        hostel_id='$id'"));
          echo '<div class="col-sm-4 fullCard">
                <div class="card">
                  <div class="card-body">
                <strong>Room Name :</strong> ' . $hostel_name . '<br>
  <strong>Total Rooms :</strong> ' . $total_rooms . '

              </div>
                </div>
            </div>';
        }


        ?>




      </div>

    </div>
    <hr>



  </div>












  </body>
  <?php include('include/footer.php'); ?>

  </html>