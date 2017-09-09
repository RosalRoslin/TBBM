<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>Admin Login</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="admin/css/bootstrap.min.css" />
		<link rel="stylesheet" href="admin/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="admin/css/matrix-login.css" />
        <link href="admin/font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <div id="loginbox">    

            <form  method="post" action="class/login.php" id="login-form" class="form-vertical" >
             <!-- <?php
                                if (isset($_SESSION['login_error'])) {
                                 echo $_SESSION['login_error'];
                                }
                              ?> -->
                             
				 <div class="control-group normal_text"> <h3><img src="admin/img/1.png" alt="Logo" /> <br> Admin Login</h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span>                                  <input type="text" class="form-control" id="username" name="email" placeholder="Enter your email address" required></div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" class="form-control" id="password" name="password" placeholder="Enter your Password" required>
                                  
                        </div>
                    </div>
                </div>
                <div class="form-actions">

                    <span class="pull-right"><button type="submit" name="btn-login" id="btn-login" class="btn btn-success btn-block">Login</button>
                              
                   </div>
            </form>
            </div>
        
        <script src="admin/js/jquery.min.js"></script>  
        <script src="admin/js/matrix.login.js"></script> 
    </body>

</html>
