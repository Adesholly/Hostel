<?php $title='Deallot Beds'; include('include/header.php'); include 'include/dbconfig.php'; ?>


<h2 align="center" class="beautify-border">Hostel Management System</h2>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>


<h1 align="center">Deallot the Room </h1>



<div class="container">
<div class="jumbotron">


<?php 
if(isset($_REQUEST['submit']))
{
$student_id=$_REQUEST['student_id'];
$hostel_id=$_REQUEST['hostel_id'];
$room_id=$_REQUEST['room_id'];
$bed_no=$_REQUEST['bed_no'];
$date = date("Y-m-d");
if(mysqli_query($conn,"UPDATE room_allotment_table SET dealloted_on='$date ' WHERE student_id='$student_id' AND hostel_id	='$hostel_id' AND room_id='$room_id' AND alloted_bed='$bed_no'"))
	{
		if(mysqli_query($conn,"UPDATE bed_info SET status='Free' WHERE room_id='$room_id'"))
		{
			echo '<script>alert("Room has been De-alloted");</script>';
		}
		else
		{
			echo '<script>alert("Unable to change Status");</script>';

		}

	}
	else
	{
		echo '<script>alert("Unable to Deallot");</script>';
	}
}

?>







<table class="table">
    <thead>
        <tr >
            <th>Name</th>
            <th>Hostel Name</th>
            <th>Room No.</th>
            <th>Bed No.</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
 $data=mysqli_query($conn,"SELECT * FROM room_allotment_table WHERE dealloted_on='0000-00-00'");
        while ($row=mysqli_fetch_object($data)) {
        		$student_id	=$row->student_id	;
        		$hostel_id=$row->hostel_id;
        		$room_id=$row->room_id;
        		$alloted_bed=$row->alloted_bed;
 $Student_name=mysqli_fetch_row(mysqli_query($conn,"SELECT * FROM students WHERE id='$student_id' "));
 $hostel_name=mysqli_fetch_row(mysqli_query($conn,"SELECT * FROM hostel_details WHERE id='$hostel_id' "));
 $room_name=mysqli_fetch_row(mysqli_query($conn,"SELECT * FROM rooms_details WHERE id='$room_id' "));

        echo '<tr>
            <td>'.$Student_name[1].'</td>
            <td>'.$hostel_name[1].'</td>
            <td>'.$room_name[2].'</td>
            <td>'.$alloted_bed.'</td>
            <td>
<form action="" method="post">
			<input type="text" name="student_id" value="'.$student_id.'" hidden/>
			<input type="text" name="hostel_id" value="'.$hostel_id.'" hidden/>
			<input type="text" name="room_id" value="'.$room_id.'" hidden/>
			<input type="text" name="bed_no" value="'.$alloted_bed.'" hidden/>
            <input type="submit" name="submit" class="btn btn-success" value="De-allot">
</form>
            </td>
            </tr>  ';
        }
        ?> 

    </tbody>
</table>










</div>

</div>







</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/custom.js?v=11"></script>
</html>