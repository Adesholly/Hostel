<?php $title="Remove Portal user"; include('include/header.php'); include 'include/dbconfig.php'; ?>


<h2 align="center" class="beautify-border">Hostel Management System</h2>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>


<h1 align="center">Modify Portals</h1>



<div class="container">
<div class="jumbotron">
<table class="table">
    <thead>
        <tr >

            <th>Hostel Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody >
        <?php
        $data=mysqli_query($conn,"SELECT * FROM portal");
        while ($row=mysqli_fetch_object($data)) {
            $username=$row->username;
            echo '<tr>
                        <td>'.$username.'</td>
        <td><a href="update_portal.php?id='.$username.'"><input type="submit" name="" class="btn btn-success" value="Edit"></a></td>
                </tr> ';
        }
        ?>
    </tbody>
</table>
</div>

</div>







</body>
<script type="text/javascript" src="js/bootstrap.bundle.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/custom.js?v=11"></script>
</html>