<?php $title="Allot Room"; include('include/header.php'); include 'include/dbconfig.php'; ?>
<h2 align="center" class="beautify-border">Room Allotment Panel</h2>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
<h1 align="center">Allot a Room</h1>
<div class="container">
<div class="jumbotron">
<?php
if(isset($_REQUEST['submit'])){
$student_id=$_REQUEST['student_id'];
$hostel_Name=$_REQUEST['hostel_Name'];
$room_id=$_REQUEST['room_id'];
$bed_no=$_REQUEST['bed_no'];
$date=date("Ymd");
if(mysqli_query($conn,"INSERT INTO 
                    room_allotment_table(student_id,
                            hostel_id,
                            room_id,
                            alloted_bed,
                            alloted_on,
                            dealloted_on) 
                    VALUES('$student_id',
                            '$hostel_Name',
                            '$room_id',
                            '$bed_no',
                            '$date',
                            '0000-00-00')")){
    mysqli_query($conn,"UPDATE students SET request_status='Approved' WHERE id='$student_id'");
    mysqli_query($conn,"UPDATE bed_info SET status='Booked' WHERE room_id='$room_id' AND bed_no='$bed_no'");
    header('location:index.php?msg=Room Alloted Sucessfully');
}
else
{
    echo '<script>alert("Unable to Allot");</script>';
}
}
?>
<form action="" method="post">
    <div class="form-group">
<table class="table">
    <thead>
        <tr align="justify">
            <th>Date</th>
            <th>Name</th>
            <th>College Name</th>
            <th>Address</th>
            <th>Mobile</th>
            <th>Level</th>
        </tr>
    </thead>
    <tbody align="justify">
      <?php
        $student_id=$_REQUEST['student_id'];
$data=mysqli_query($conn,"SELECT * FROM students WHERE request_status='Pending' AND 
    id='$student_id'");
        while ($row=mysqli_fetch_object($data)) {
            $name=$row->name;
            $college_name=$row->college_name;
            $address=$row->address;
            $mobile=$row->mobile;
            $id=$row->id;
            $apply_date=$row->apply_date;
            $current_year=$row->current_year;
        echo '<tr>
            <td>'.$apply_date.'</td>
            <td>'.$name.'</td>
            <td>'.$college_name.'</td>
            <td>'.$address.'</td>
            <td>'.$mobile.'</td>
            <td>'.$current_year.'</td>
            </tr>';
        }
        ?> 

    </tbody>
</table>
    </div>
    <div class="form-group">
        <input hidden type="text" name="student_id" value="<?php echo $student_id=$_REQUEST['student_id']; ?>">
        <label for="hostel_Name">Select Hostel :</label>
        <select onchange="fetch_room_details(this.value);" name="hostel_Name" id="hostel_Name" class="form-control" required="">
            <option>Select</option>
        <?php
    $distint_room_id=mysqli_query($conn,"SELECT room_id FROM bed_info WHERE status='Free'");
        while ($row=mysqli_fetch_object($distint_room_id)) {
            if($row->room_id==$room_id)
            {
                continue;
            }
            else
            {
            $room_id=$row->room_id;

        $hostel_details=mysqli_query($conn,"SELECT * FROM rooms_details WHERE id='$room_id'");
            while ($fetch_hotel_data=mysqli_fetch_object($hostel_details)) {
                if($fetch_hotel_data->hostel_id==$hostel_id){
                    continue;
                } 
                else 
                {
                    $hostel_id=$fetch_hotel_data->hostel_id;
    $hotel_id=mysqli_fetch_row(mysqli_query($conn,"SELECT DISTINCT hostel_id FROM rooms_details WHERE id='$room_id'"));
    $hostel_name=mysqli_fetch_row(mysqli_query($conn,"SELECT hostel_name FROM hostel_details WHERE id='$hotel_id[0]'"));
                    echo '<option value="'.$hotel_id[0].'">'.$hostel_name[0].'</option>';
                }
            }

            }
        }
        ?>
        </select>
    </div>
<script type="text/javascript">      
                function fetch_room_details(a){  
                    $.ajax({    //create an ajax request to display.php
                        type: "POST",
                        url: "ajax/fetch_room_name.php?hostel_id="+a,             
                        dataType: "html",   //expect html to be returned            
                        success: function(responses){
                               document.getElementById("room_id").innerHTML = responses;
                        }                
                });
                }
</script>
    <div class="form-group">
        <label for="room_id">Select Room :</label>
        <select required="" name="room_id" onchange="fetch_bed_details(this.value);" id="room_id" class="form-control">
        </select>
    </div>
<script type="text/javascript">      
                function fetch_bed_details(a){  
                    $.ajax({    //create an ajax request to display.php
                        type: "POST",
                        url: "ajax/fetch_bed_details.php?room_id="+a,             
                        dataType: "html",   //expect html to be returned            
                        success: function(responses){
                               document.getElementById("bed_no").innerHTML = responses;
                        }                
                });
                }
</script>

    <div class="form-group">
        <label for="bed_no">Select Bed :</label>
        <select required="" name="bed_no" id="bed_no" class="form-control">
        </select>
    </div>
    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
</form>
</div>
<hr>
</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/custom.js?v=11"></script>
</html>