<?php
include '../include/dbconfig.php';
	 $hostel_id=$_REQUEST['hostel_id'];
	 echo '<option>Select</option>';
	$data=mysqli_query($conn,"SELECT * FROM rooms_details WHERE hostel_id='$hostel_id'");
	while ($row=mysqli_fetch_object($data)) 
	{
		$room_id=$row->id;
		$room_name=$row->room_name;
 $count=mysqli_num_rows(mysqli_query($conn,"SELECT * FROM bed_info WHERE room_id='$room_id' AND status='Free'"));
		if($count>0)
		{
			echo '<option value="'.$room_id.'">'.$room_name.'</option>';
		}
		
	}

?>