<?php
session_start();
ob_start();
include("html/header.html");
require('class/dbconnect.php');
?>

<?php

if(isset($_POST["forgotpass"])) {
//$connection = new mysqli("localhost", "root","","");
$email = $DBcon->real_escape_string($_POST["email"]);
$data =$DBcon->query("SELECT ID from users WHERE email='$email'");
if ($data->num_rows > 0) {
  $str ="0123456789qwertzuioplkjhgfdsayxcvbnm";
  $str = str_shuffle($str);
  $str = substr($str, 0, 10);
  //$url ="http://localhost/test/resetpassword.php?token=$str&email=$email";
  require('mailindex.php');
  //echo $url;
  //mail($email, "Reset Password", "To reset your Password, Please visit this: $url", "From: roslin.albert@gmail.com\r\n");
  $DBcon->query("UPDATE users SET active_code='$str' WHERE email='$email'");
  $_SESSION['forgot_info'] = "Plz Check Ur Email!!";
  //echo "Plz Check Ur Email!";
  //echo $str;
}
else {
  $_SESSION['forgot_error'] = "plz check ur inputs!!!";
//echo"plz check ur inputs!";
}
}
?>
<style type="text/css">
    /*.sticky-nav{
        display: none;
    }*/
    .navbar-default{
      background-color: #3CAFC4;
    }
  label{
    float: left;
  }
.section-title{
  margin-top: 50px;
}
.contact-form form button {
background-color: #2BBFD9 !important;
border-color: #0D9CB7 !important;
border-radius: 0 !important;

}
.contact-form form button:hover{
background-color: #0d9cb7 !important;
border-color: #0d9cb7 !important;
}
.btn-forg:hover{
background-color: #e2e2e2 !important;
border-color: #313131 !important;
color: #313131 !important;
}
</style>

<section class="x-services ptb-100 gray-bg">
<section class="contact-form ptb-100">
    <div class="container text-center">
        <!-- <div class="row"> -->
            <!-- <div id="" class=""> -->
     <!--  <div class=""> -->
          <!-- <div class=""> -->
             <!--  <h4 class="" id="">Welcome To The Big Beach Marathon</h4> -->
          <!-- </div> -->
          <!-- <div class=""> -->
              <div class="row">
                  <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                      <div class="well">
                          
<form class="form-signin" method="POST" action="forgotpass.php">

 <h2 class="form-signin-heading">Forgot Password</h2>

        <div class="form-group user-email">

   
    <input type="text" name="email" class="form-control" placeholder="Enter your email.." required>

  </div>

  <br />

        <button class="btn btn-success btn-block" name="forgotpass" type="submit">Forgot Password</button>

        <a class="btn btn-lg btn-primary btn-block" href="join.php">Login</a>

      </form>

                      </div>
                  </div>
                 </div>
          <!-- </div> -->
     <!--  </div> -->
  <!-- </div> -->
        <!-- </div> -->

    </div>
</section>
</section>

<?php
include("html/footer.html")
?>
