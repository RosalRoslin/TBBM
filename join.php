<?php
session_start();
include("html/header.html");
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
<section class="section-title">
        <div class="container text-center">
            <!-- <h2>Login/Signup</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span> -->
        </div>
    </section>
<section class="contact-form ptb-100" style="padding-top: 25px;">
    <div class="container text-center">
        <div class="row">
            <div id="" class="">
      <div class="">
          <div class="">
             <!--  <h4 class="" id="">Welcome To The Big Beach Marathon</h4> -->
          </div>
          <div class="">
              <div class="row">
                  <div class="col-xs-12 col-sm-6">
                      <div class="well">
                      <form id="loginForm" method="POST" action="class/signup.php">
                             <!--  <?php
                                if (isset($_SESSION['sign_error'])) {
                                 echo $_SESSION['sign_error'];
                                }
                              ?> -->
                              <h2>Signup</h2>
                              <div class="form-group">
                                  <label for="username" class="control-label" style="display: none;">Firstname</label>
                                  <input type="text" class="form-control" id="username" name="firstname" value="" required placeholder="Enter your First Name">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="lastname" class="control-label" style="display: none;">Lastname</label>
                                  <input type="text" class="form-control" id="password" name="lastname" required placeholder="Enter your Last Name">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label" style="display: none;">Email ID</label>
                                  <input type="email" class="form-control" id="email" name="email" required title="Please enter your password" placeholder="Enter your Email">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label" style="display: none;">Password</label>
                                  <input type="password" class="form-control" id="password" name="password" title="Please enter your password" placeholder="Enter your Password">
                                  <span class="help-block"></span>
                              </div>

                              <div class="form-group">
                                  <label for="password" class="control-label" style="display: none;">Confirm Password</label>
                                  <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" value="" required="" title="Please enter your password" placeholder="Enter Confirm your Password">
                                  <span class="help-block"></span>
                              </div>
                              
                              <button type="submit" class="btn btn-success btn-block" name="btn-signup">Register</button>
                          </form>
                          
                      </div>
                  </div>
                  <div class="col-xs-12 col-sm-6">
                      <div class="well">
                          <form  method="post" action="class/login.php" id="login-form">
                              <!-- <?php
                                if (isset($_SESSION['login_error'])) {
                                 echo $_SESSION['login_error'];
                                }
                              ?> -->
                              <h2>Login</h2>
                              <div class="form-group">
                                  <label for="username" class="control-label" style="display: none;">Email</label>
                                  <input type="text" class="form-control" id="username" name="email" placeholder="Enter your email address" required>
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label" style="display: none;">Password</label>
                                  <input type="password" class="form-control" id="password" name="password" placeholder="Enter your Password" required>
                                  <span class="help-block"></span>
                              </div>
                              <div id="loginErrorMsg" class="alert alert-error hide">Wrong username or password</div>
                              <button type="submit" name="btn-login" id="btn-login" class="btn btn-success btn-block">Login</button>
                              <a href="forgot.php" class="btn btn-default btn-block btn-forg">Forgot Password</a>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
        </div>

    </div>
</section>
</section>
<!-- .contact-form-->

<!-- <section class="map-section">
    <div id="googleMap"></div>
</section> -->
    <!--.map-section-->

<?php
include("html/footer.html")
?>