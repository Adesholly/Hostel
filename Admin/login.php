<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Portal Login</title>
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<body style="background-color: #E2E2E2;">
    <div class="container"  align="center">
        <div class="row text-center " style="padding-top:100px;">
            <div class="col-md-12"  align="center">
               <h1 align="center"><b> Login to Portal </b></h1>
            </div>
        </div>
         <div class="row " align="center">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1" align="center">
                           <?php
               
               if(isset($_POST['submit']))
               {
              include('include/dbconfig.php');
              $username=$_POST['user'];   
              $password=$_POST['password'];
              $a=mysqli_query($conn,"SELECT username,password FROM admin WHERE username='$username' AND BINARY password='$password'");
              $result=mysqli_num_rows($a);
              if($result==1)
                 {
                   $data=mysqli_fetch_row(mysqli_query($conn,"SELECT id FROM admin WHERE username='$username' AND BINARY password='$password'"));
                   $_SESSION['username']=$username;
                   $_SESSION['id']=$data[0];
                   header('location:index.php');
                 }
                 else
                   echo '<script>alert("Invalid Username or Password");</script>';
               }
               ?>
                            <div class="panel-body"  align="center">
                                <form action="" method="post"  align="center">
                                    <hr />
                                    <h5>Enter Details to Login</h5>
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input value="123" type="text" name="user" class="form-control" placeholder="Your Username " />
                                        </div>
                                             <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input value="123" type="password" name="password" class="form-control"  placeholder="Your Password" />
                                        </div>
                                    <div class="form-group">
                                            
                                            <!--<span class="pull-right">
                                                   <a href="index.html" >Forget password ? </a> 
                                            </span>-->
                                        </div>
                                     <input type="submit" class="btn btn-primary" name="submit" value="Login Now"/>
                                    <hr />
                                    </form>
                            </div>
                           
                        </div>
                
                
        </div>
    </div>

</body>
</html>
