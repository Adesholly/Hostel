<?php $title='View All Hostels'; include('include/header.php'); include 'include/dbconfig.php'; ?>

<h2 align="center" class="beautify-border">Hostel Management System</h2>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>


<h1 align="center">Total Hostels</h1>
<div class="container">
<div class="jumbotron">

<div class="row" align="center">


<?php 
$fetch_hostel=mysqli_query($conn,"SELECT * FROM hostel_details");
while($hostel_details=mysqli_fetch_object($fetch_hostel)) 
{
      $id=$hostel_details->id;
      $hostel_name=$hostel_details->hostel_name;
      $total_rooms=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM rooms_details WHERE 
        hostel_id='$id'"));
      echo '<div class="col-sm-4 fullCard">
                <div class="card">
                  <div class="card-body">
                <strong>Room Name :</strong> '. $hostel_name.'<br>
  <strong>Total Rooms :</strong> '.$total_rooms.'

              </div>
                </div>
            </div>';
}


?>




</div>

</div>
<hr>













</body>
<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/custom.js?v=11"></script>
</html>