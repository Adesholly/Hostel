<!DOCTYPE html>
<html>
<?php session_start();
if (!isset($_SESSION['username'])) {
  header('location:login.php');
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title><?php echo $title; ?></title>

  <!-- BOOTSTRAP STYLES-->
  <link href="../assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="../assets/css/font-awesome.css" rel="stylesheet" />
  <!--CUSTOM BASIC STYLES-->
  <link href="../assets/css/basic.css" rel="stylesheet" />
  <!--CUSTOM MAIN STYLES-->
  <link href="../assets/css/custom.css" rel="stylesheet" />
  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
  <script type="text/javascript" src="js/javascript.js"></script>

</head>

<body>
  <div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Welcome to Hostel Portal</a>
      </div>

      <div class="header-right">

        <!--<a href="../Contact_us.php" class="btn btn-info" title="New Message"><b></b><i class="fa fa-envelope-o fa-2x"></i></a>
         <a href="message-task.html" class="btn btn-primary" title="New Task"><b> </b><i class="fa fa-bars fa-2x"></i></a>-->
        <a href="logout.php" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>

      </div>
    </nav>
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
      <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
          <li>
            <div class="user-img-div">
              <img src="../assets/img/user1.png" class="img-thumbnail" />

              <div class="inner-text">
                Yusuf
                <br />
              </div>
            </div>

          </li>


          <li>
            <a href="index.php" style="font-size:20px"><i class="fa fa-dashboard "></i>Pending Allotment</a>
          </li>
          <li>
            <a href="student_information.php" style="font-size:20px"><i class="fa fa-dashboard "></i>Student Information</a>
          </li>
          <li>
            <a href="deallotbed.php" style="font-size:20px"><i class="fa fa-dashboard "></i>DeAllot Bed</a>
          </li>
          <li>
            <a href="logout.php" style="font-size:20px"><i class="fa fa-dashboard "></i>Logout</a>
          </li>


        </ul>

      </div>

    </nav>