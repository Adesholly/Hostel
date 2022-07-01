<?php
include '../include/dbconfig.php';
	 $room_id=$_REQUEST['room_id'];
	$data=mysqli_query($conn,"SELECT * FROM bed_info WHERE room_id='$room_id' AND status='Free'");
	while ($row=mysqli_fetch_object($data)) 
	{
		$bed_id=$row->id;
		$bed_no=$row->bed_no;

		{
			echo '<option value="'.$bed_no.'">'.$bed_no.'</option>';
		}
		
	}

?>