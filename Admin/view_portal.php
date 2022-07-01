<?php $title = "Remove Portal user";
include('include/header.php');
include 'include/dbconfig.php'; ?>


<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Modify Portals</h1>
            </div>
        </div>
        <div class="container">
            <div class="jumbotron">
                <table class="table">
                    <thead>
                        <tr>

                            <th>Hostel Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $data = mysqli_query($conn, "SELECT * FROM portal");
                        while ($row = mysqli_fetch_object($data)) {
                            $username = $row->username;
                            echo '<tr>
                        <td>' . $username . '</td>
        <td><a href="update_portal.php?id=' . $username . '"><input type="submit" name="" class="btn btn-success" value="Edit"></a></td>
                </tr> ';
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            </div>  </div>  








        </body>
        <?php include('include/footer.php'); ?>

        </html>