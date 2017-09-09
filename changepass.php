<?php
session_start();
include("html/header.php");
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
                          
<form class="form-signin" method="POST" action="changepass.php">

 <h2 class="form-signin-heading">Reset Password</h2>

        <div class="form-group user-name">

   
    <input type="text" name="pass" class="form-control" placeholder="Enter New Pass.." required>


  </div>

 <div class="form-group user-name">

   
    <input type="text" name="confirmpass" class="form-control" placeholder="Confirm Ur Password.." required>


  </div>

  <br />

        <button class="btn btn-success btn-block" type="submit">Submit Password</button>
 Ur
        <a class="btn btn-lg btn-primary btn-block" href="join.php">Login</a>

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

<?php
include("html/footer.html")
?>
