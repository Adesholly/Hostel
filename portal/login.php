<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Portal Login</title>
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body style="background-color: #E2E2E2;">
    <div class="container">
        <div class="row text-center " style="padding-top:100px;">
            <div class="col-md-12">
               <h1><b> Login to Portal </b></h1>
            </div>
        </div>
         <div class="row ">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                           <?php
						   
						   if(isset($_POST['submit']))
						   {
							include('include/dbconfig.php');
							$username=$_POST['user'];   
							$password=md5($_POST['password']);
							$a=mysqli_query($conn,"SELECT username,password FROM portal WHERE username='$username' AND BINARY password='$password'");
							$result=mysqli_num_rows($a);
							if($result==1)
							   {
								   $_SESSION['username']=$username;
								   header('location:index.php');
							   }
							   else
								echo '<script>alert("Invalid Username or Password");</script>';
						   }
						   ?>
                            <div class="panel-body">
                                <form action="" method="post">
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
