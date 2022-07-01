<?php session_start();
if(!isset($_SESSION['username']))
{
  header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
</head>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="index.php">Add Hostel</a>
  <a href="add_rooms.php">Add Rooms</a>
  <a href="view_hostel_details.php">View Hostel Rooms</a>
  <a href="add_portal.php">Add Portals</a>
  <a href="view_portal.php">Update Portals</a>
  <a href="student_information.php">View Student Info</a>
  <a href="logout.php">Logout.php</a>
</div>