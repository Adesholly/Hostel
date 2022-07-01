<?php $title='Request Fot Allotment'; include('include/header.php'); include 'include/dbconfig.php'; ?>
<h2 align="center" class="beautify-border">Pending For Allotment</h2>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
<h1 align="center">Student Details</h1>
<div class="container">
<div class="jumbotron">




<?php
if(!empty($_REQUEST['msg']))
{
    $messgae=$_REQUEST['msg'];
    echo "<h2 align='center' style='color:green;'>".$messgae."</h2>";
}

?>
<table class="table">
    <thead>
        <tr align="center">
            <th>Date</th>
            <th>Name</th>
            <th>College Name</th>
            <th>Address</th>
            <th>Mobile</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody align="center">
        <?php
        $data=mysqli_query($conn,"SELECT * FROM students WHERE request_status='Pending'");
        while ($row=mysqli_fetch_object($data)) {
            $name=$row->name;
            $college_name=$row->college_name;
            $address=$row->address;
            $mobile=$row->mobile;
            $id=$row->id;
            $apply_date=$row->apply_date;
        echo '<tr>
            <td>'.$apply_date.'</td>
            <td>'.$name.'</td>
            <td>'.$college_name.'</td>
            <td>'.$address.'</td>
            <td>'.$mobile.'</td>
    <td><a href="allot_room.php?student_id='.$id.'"><button type="button" class="btn btn-info btn-lg">Allot Room</button></a></td>
            </tr>  ';
        }
        ?> 

    </tbody>
</table>

<!-- data-toggle="modal" data-target="#myModal" -->










</div>
<hr>
</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/custom.js?v=11"></script>
</html>