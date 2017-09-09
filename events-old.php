<?php
session_start();
include("html/header.html")
?>
<style type="text/css">
   /* .navbar-default{
        background-color: #3CAFC4 !important;
    }*/
    .tbbm-section{
        padding-top: 0px !important; 
    }
@media screen and (max-width: 600px){
    .tbbm-section{
        padding-top: 0px !important;
    }
}

.x-services .thumbnail .caption {
    padding: 0px !important;
    color: #969595;
    overflow: hidden;
    padding-left: 15px !important;
    padding-right: 5px !important;

}


#PricingTab {
    background-image: url('http://techprocircle.com/wp-content/uploads/2016/08/pricing_bg.jpg');
    background-size: 100% 100%;
    background-attachment: fixed;
    padding: 100px 0;
}
#PricingTab h2{
    font-family: 'Lato', sans-serif;
    font-weight: 700;
    font-size: 35px;
    color: #fff;
    text-transform: uppercase;
    text-align: center;
}
#PricingTab table{
    max-width:800px;
    margin: 0 auto;
    box-shadow: 1px 1px 149px 0px rgb(24, 25, 25);
}

.tabco1 {
  background: #fff;
  width: 40%;
  padding: 10px !important;
}
th.tabco1 {
    background: #fff;
    padding: 32px 10px !important;
    font-size: 18px;
    text-transform: uppercase;
    color: #000;
}
.tabco2 {
 /* background: #009688;*/
 background: #fff;
  text-align: center;
  /*color: #fff;*/
  color: #969595;
}
 
th.tabco2 {
    /*background: #00C853;*/
    background: #fff;
    padding: 20px 5px !important;
    font-size: 18px;
    text-transform: uppercase;
}
.tabco3 {
 /* background: #03A9F4;*/
  background: #fff;
  text-align: center;
  /*color: #fff;*/
  color: #969595;
}
th.tabco3 {
   /* background: #039BE5;*/
   background: #fff;
    padding: 20px 10px !important;
    font-size: 18px;
    text-transform: uppercase;
}
.tabco4 {
  background: #EF5350;
  text-align: center;
  color: #fff;
}
th.tabco4 {
    background: #E53935;
    
    padding: 20px 10px !important;
    font-size: 18px;
    text-transform: uppercase;
}
.rightSign {
    color: #1ab921;
    background: #fff;
    border-radius: 45px;
    padding: 5px;
    border: 2px solid;
    box-shadow: 0px 0px 11px -5px #000;
}
.crossSign {
    color: #de2315;
    background: #fff;
    border-radius: 45px;
    padding: 5px 7px;
    border: 2px solid;
    box-shadow: 0px 0px 11px -5px #000;
}
.White-Yellow {
    border-top: 0;
    border-left: 75px solid #fff;
    border-right: 75px solid #FEF200;
    height: 5px;
    width: 0px;
}
.single-page-title {
    background: url(img/Event-Marathon.jpg) no-repeat bottom;
        background-attachment: scroll;
        background-size: auto auto;
    background-size: cover;
    width: 100%;
    background-attachment: scroll;
    padding: 15% 0 5%;
    position: relative;
}
.single-page-title::before {
    position: absolute;
    content: "";
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5);
}
.o2{
    margin-left: 30px;
}
@media (max-width: 600px){
    .title{
        font-size: 25px !important;
        letter-spacing: 5px !important;
    }
    .single-page-title {
    padding: 25% 0 5%;
    }
}
input[type='number'] {
    -moz-appearance:textfield;
}


/*
Author: Bootstrapthemes
Author URI: http://bootstrapthemes.co
*/


/* ==========================================================================
   Author's custom styles
   ========================================================================== */


.roomy-50{
    padding:50px 0px;
} 
.p-top-100{
    padding:100px;
}





/* ======= PRICING ======= */



.bs-pricing-four {
    font-size: 16px;
    font-family: 'Open Sans', sans-serif;
}
.bs-pricing {
    background:#fff;
}
.bs-pricing-four .btn,
.bs-pricing-four .navbar > li > a.btn {
    border: none;
    /*border-radius: 3px;*/
    position: relative;
    padding: 15px 40px;
    margin: 10px 1px;
    font-size: 14px;
    font-weight: 400;
    text-transform: uppercase;
    letter-spacing: 0;
    will-change: box-shadow, transform;
    transition: box-shadow 0.2s cubic-bezier(0.4, 0, 1, 1), background-color 0.2s cubic-bezier(0.4, 0, 0.2, 1);
}

.bs-pricing-four .btn {
   /* border-radius: 30px;*/
}





/* btn-danger */
.bs-pricing-four .btn.btn-danger {
    color: #FFFFFF;
    background-color: #f44336;
    border-color: #f44336;
    box-shadow: 0 2px 2px 0 rgba(244, 67, 54, 0.14), 0 3px 1px -2px rgba(244, 67, 54, 0.2), 0 1px 5px 0 rgba(244, 67, 54, 0.12);
}

.bs-pricing-four .btn.btn-danger:focus,
.bs-pricing-four .btn.btn-danger:active,
.bs-pricing-four .btn.btn-danger:hover {
    box-shadow: 0 14px 26px -12px rgba(244, 67, 54, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(244, 67, 54, 0.2);
}


/* btn-success */
.bs-pricing-four .btn.btn-success {
    color: #FFFFFF;
    background-color: #4caf50;
    border-color: #4caf50;
    box-shadow: 0 2px 2px 0 rgba(76, 175, 80, 0.14), 0 3px 1px -2px rgba(76, 175, 80, 0.2), 0 1px 5px 0 rgba(76, 175, 80, 0.12);
}

.bs-pricing-four .btn.btn-success:focus,
.bs-pricing-four .btn.btn-success:active,
.bs-pricing-four .btn.btn-success:hover {
    box-shadow: 0 14px 26px -12px rgba(76, 175, 80, 0.42), 0 4px 23px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(76, 175, 80, 0.2);
}




/* btn-white */
.bs-pricing-four .btn.btn-white {
    color: #3C4857;
    background-color: #fff;
    border-color: #fff;
    box-shadow: 0 2px 2px 0 rgba(153, 153, 153, 0.14), 0 3px 1px -2px rgba(153, 153, 153, 0.2), 0 1px 5px 0 rgba(153, 153, 153, 0.12);
}

.bs-pricing-four .btn.btn-white:focus,
.bs-pricing-four .btn.btn-white:active,
.bs-pricing-four .btn.btn-white:hover {
  box-shadow:  0 14px 26px -12px rgba(255, 255, 255, 0.42), 0 4px 23px 0px rgba(255, 255, 255, 0.12), 0 8px 10px -5px rgba(255, 255, 255, 0.2)
}








.bs-pricing-four .bs {
    display: inline-block;
    position: relative;
    width: 100%;
    margin-bottom: 30px;
    border-radius: 6px;
    color: #444;
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
}

.bs-pricing-four .bs.bs-background-img{
    background: url(images/pricing-bg-image.jpg) no-repeat center center;
    background-size: cover;
    position: relative;
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
    transition: all 1s;
}
.bs-pricing-four .bs.bs-background-img:hover{
    -webkit-filter: grayscale(0%);
    filter: grayscale(0%);
}
.bs-pricing-four .bs-background-img,
.bs-pricing-four .bs-background-img h1 small{
    color:#fff ;
}
.bg-danger{background-color: #f44336}

.bs-pricing-four .bg-danger,
.bs-pricing-four .bg-danger h1 small
{
    color:#fff;
}


.bs-pricing-four .bs-background-img:after {
    position: absolute;
    z-index: 1;
    width: 100%;
    height: 100%;
    display: bs;
    left: 0;
    top: 0;
    content: "";
    background-color: rgba(0, 0, 0, 0.56);
    border-radius: 6px;
}

.bs-pricing-four .bs-pricing {
    text-align: center;
    position: relative;
}

.bs-pricing-four .bs-pricing .bs-caption {
    margin-top: 30px;
}

.bs-pricing-four .bs-pricing .cotent {
    padding: 15px;
    margin-bottom: 0px;
    z-index: 2;
    position: relative;
}



.bs-pricing-four .bs-pricing ul {
    list-style: none;
    padding: 0;
    margin: 10px auto;

}

.bs-pricing-four .bs-pricing ul li {
    text-align: center;
    padding: 12px 0;
}
.bs-pricing-four .bs-pricing ul:not(.nav-pills) li{
    border-bottom: 1px solid rgba(153, 153, 153, 0.3);
}





.float-label-control { position: relative; margin-bottom: 1.5em; }
  /*.float-label-control ::-webkit-input-placeholder { color: transparent; }
  .float-label-control :-moz-placeholder { color: transparent; }
  .float-label-control ::-moz-placeholder { color: transparent; }
  .float-label-control :-ms-input-placeholder { color: transparent; }*/
  .float-label-control input:-webkit-autofill,
  .float-label-control textarea:-webkit-autofill { background-color: transparent !important; -webkit-box-shadow: 0 0 0 1000px white inset !important; -moz-box-shadow: 0 0 0 1000px white inset !important; box-shadow: 0 0 0 1000px white inset !important; }
  .float-label-control input, .float-label-control textarea, .float-label-control label { font-size: 1.2em; box-shadow: none; -webkit-box-shadow: none; }
    .float-label-control input:focus,
    .float-label-control textarea:focus { box-shadow: none; -webkit-box-shadow: none; border-bottom-width: 2px; padding-bottom: 0; background: none; }
    .float-label-control textarea:focus { padding-bottom: 4px; }
  .float-label-control input, .float-label-control textarea { display: block; width: 100%; padding: 0.1em 0em 1px 0em; border: none; border-radius: 0px; border-bottom: 1px solid #aaa; outline: none; margin: 0px; background: none;font-size: 14px; }
  .float-label-control textarea { padding: 0.1em 0em 5px 0em; }
  .float-label-control label { position: absolute; font-weight: normal; top: -1.0em; left: 0.08em; color: #aaaaaa; z-index: -1; font-size: 0.85em; -moz-animation: float-labels 300ms none ease-out; -webkit-animation: float-labels 300ms none ease-out; -o-animation: float-labels 300ms none ease-out; -ms-animation: float-labels 300ms none ease-out; -khtml-animation: float-labels 300ms none ease-out; animation: float-labels 300ms none ease-out; /* There is a bug sometimes pausing the animation. This avoids that.*/ animation-play-state: running !important; -webkit-animation-play-state: running !important; }
  .float-label-control input.empty + label,
  .float-label-control textarea.empty + label { top: 0.1em; font-size: 1.5em; animation: none; -webkit-animation: none; }
  .float-label-control input:not(.empty) + label,
  .float-label-control textarea:not(.empty) + label { z-index: 1; }
  .float-label-control input:not(.empty):focus + label,
  .float-label-control textarea:not(.empty):focus + label { color: #aaaaaa; }
  .float-label-control.label-bottom label { -moz-animation: float-labels-bottom 300ms none ease-out; -webkit-animation: float-labels-bottom 300ms none ease-out; -o-animation: float-labels-bottom 300ms none ease-out; -ms-animation: float-labels-bottom 300ms none ease-out; -khtml-animation: float-labels-bottom 300ms none ease-out; animation: float-labels-bottom 300ms none ease-out; }
  .float-label-control.label-bottom input:not(.empty) + label,
  .float-label-control.label-bottom textarea:not(.empty) + label { top: 3em; }


@keyframes float-labels {
  0% { opacity: 1; color: #aaa; top: 0.1em; font-size: 1.5em; }
  20% { font-size: 1.5em; opacity: 0; }
  30% { top: 0.1em; }
  50% { opacity: 0; font-size: 0.85em; }
  100% { top: -1em; opacity: 1; }
}

@-webkit-keyframes float-labels {
  0% { opacity: 1; color: #aaa; top: 0.1em; font-size: 1.5em; }
  20% { font-size: 1.5em; opacity: 0; }
  30% { top: 0.1em; }
  50% { opacity: 0; font-size: 0.85em; }
  100% { top: -1em; opacity: 1; }
}

@keyframes float-labels-bottom {
  0% { opacity: 1; color: #aaa; top: 0.1em; font-size: 1.5em; }
  20% { font-size: 1.5em; opacity: 0; }
  30% { top: 0.1em; }
  50% { opacity: 0; font-size: 0.85em; }
  100% { top: 3em; opacity: 1; }
}

@-webkit-keyframes float-labels-bottom {
  0% { opacity: 1; color: #aaa; top: 0.1em; font-size: 1.5em; }
  20% { font-size: 1.5em; opacity: 0; }
  30% { top: 0.1em; }
  50% { opacity: 0; font-size: 0.85em; }
  100% { top: 3em; opacity: 1; }
}

.float-form:focus{
  border-bottom: 1px solid #31aae2 !important;
  border-left: none !important;
  border-top: none !important;
  border-right: none !important;
}
@media screen and (min-width: 768px)
and (max-width: 1920px){
.form-size{
  width: 16% !important;
}
}
.form-control{
  padding: 0px 0px 0px 0px;
}

/*@media screen and (min-width: 768px)
and (max-width: 1920px){
.form-size{
  width: 20% !important;
}
}*/
.help-block {
    display: block;
    margin-top: 5px;
    margin-bottom: 10px;
    color: red;
    font-style: normal;
    font-size: 10px;
}
</style>
<section class="single-page-title">
    <div class="container text-center">
        <h2 class="title">Events</h2>
    </div>
</section>

<section class="x-services ptb-100 gray-bg tbbm-section">

    <section class="section-title">
        <div class="container text-center">
            <!-- <h2>Our Events</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span> -->
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="thumbnail clearfix">
                    <a href="#"><img class="img-responsive" src="img/runner-img.png" alt="Image" style="width: 50%;"></a>

                    <div class="caption">
                        <h3><a href="#">Half Marathon</a></h3>

                        <p>There is a beautiful mystique to the half marathon. It’s the next level for the experienced 10K runners and a life altering challenge for newbie’s. The track will take you through the aura of Chennai reminiscent of her rich history and culture.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="thumbnail clearfix">
                    <a href="#"><img class="img-responsive" src="img/runner-img.png" alt="Image" style="width: 50%;"></a>

                    <div class="caption">
                        <h3><a href="#">10K Run</a></h3>

                        <p>The people favourite 10k run.  It’s the first love for anyone who wishes to try his luck at running. This one cuts across all demographics and has been a huge success across the globe. Bought a new running shoe ?. This is the right opportunity to stress it out.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .container -->
</section>
<!-- .x-services -->

<section class="x-features">
    <section class="section-title">
        <div class="container text-center">
            <h2>Event Overview</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>
    <div class="container">
        <div class="row">
 <section id="bs-pricing-six" class="bs-pricing-four roomy-50 bg-white fix">
            <div class="container">
                <div class="row">
                   <!--  <div class="col-md-3">
                        <div class="bs bs-pricing">
                            <div class="cotent">
                                <h3 class="category">Personal</h3>
                                <h1 class="bs-caption"><small>$</small>11</h1>
                                <ul>
                                    <li><b>5 GB</b> Space</li>
                                    <li><b>2 GB</b> RAM</li>
                                    <li><b>24/7</b> Tech Support</li>
                                    <li><b>Auto</b> Backup</li>
                                    <li>Monthly Backups</li>
                                    <li>8 CPU Core</li>
                                </ul>
                                <a href="https://bootstrapthemes.co" class="btn btn-danger">Buy Now</a>  
                            </div>
                        </div>
                    </div> -->
                    <div class="col-md-offset-3 col-lg-offset-1" style="position: relative;left: 40px;">
                    <div class="col-md-4 col-lg-5">
                        <div class="bs bs-pricing">
                            <div class="cotent">
                                <h3 class="category">Half Marathon</h3>
                                <h1 class="bs-caption"><small>₹</small>850</h1>
                                <ul>
                                    <li><b>Start Time</b><br>Would be published before race day</li>
                                    <li><b>Route map</b><br>Would be published before race day</li>
                                    <li><b>Goodie bag</b><br>T shirt/Bib/Sponsor merchandise</li>
                                    <li><b>Medals</b><br>For all finishers</li>
                                    <li><b>Trophies and cash price</b><br>For first 3 winners in each demographics. Details would be published before the race day</li>
                                </ul>
                                <!-- <a href="#" class="btn btn-danger">Buy Now</a>   -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-5">
                        <div class="bs bs-pricing">
                            <div class="cotent">
                                <h3 class="category">10K Run</h3>
                                <h1 class="bs-caption"><small>₹</small>650</h1>
                                <ul>
                                    <li><b>Start Time</b><br>Would be published before race day</li>
                                    <li><b>Route map</b><br>Would be published before race day</li>
                                    <li><b>Goodie bag</b><br>T shirt/Bib/Sponsor merchandise</li>
                                    <li><b>Medals</b><br>For all finishers</li>
                                    <li><b>Trophies and cash price</b><br>For first 3 winners in each demographics. Details would be published before the race day</li>
                                </ul>
                               <!--  <a href="#" class="btn btn-white">Buy Now</a>  -->
                            </div>
                        </div>
                    </div>
                    </div>
                  <!--   <div class="col-md-3">
                        <div class="bs bs-pricing">
                            <div class="cotent">
                                <h3 class="category">Professional</h3>
                                <h1 class="bs-caption"><small>$</small>25</h1>
                                <ul>
                                    <li><b>5 GB</b> Space</li>
                                    <li><b>2 GB</b> RAM</li>
                                    <li><b>24/7</b> Tech Support</li>
                                    <li><b>Auto</b> Backup</li>
                                    <li>Monthly Backups</li>
                                    <li>8 CPU Core</li>
                                </ul>
                                <a href="https://bootstrapthemes.co" class="btn btn-danger">Buy Now</a>  
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="container">
                <div class="row">
                <div class="text-center">
                    <button href="#" class="btn btn-lg btn-primary member-btn" data-toggle="modal" data-target="#half-mar-modal" data-backdrop="static" data-keyboard="false">Register Now</button>
                </div>
                </div> 
                </div>
            </div>
        </section>

    
        </div>
    </div>
</section>
<section class="client-logo ptb-100">
    <section class="section-title">
        <div class="container text-center">
            <h2>Our Sponsors</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>
    <div class="container">
        <div class="row">
  
                <div class="col-md-2 col-sm-4 col-xs-6 col-md-offset-4 clearfix section-margin">
                    <a href="http://www.raymond.in/" target="_blank"><img src="img/Raymond-new.png" alt="Image"></a>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 clearfix o2 section-margin">
                    <a href="http://www.o2healthstudio.com/" target="_blank"><img src="img/O2-Health-Studio.png" alt="Image"></a>
                </div>
        </div>
    </div>
    <!--end of .container -->
</section>
<!-- /.client-logo -->
<script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js">
webshims.setOptions('forms-ext', {id: '#date'});
webshims.polyfill('forms forms-ext');
</script>
<?php
include("html/footer.html")
?>

<?php
// Merchant key here as provided by Payu
$MERCHANT_KEY = "jS3PnccY";

// Merchant Salt as provided by Payu
$SALT = "pmYnbucDQL";

// End point - change to https://secure.payu.in for LIVE mode
$PAYU_BASE_URL = "https://secure.payu.in";

$action = '';
$phone = '';
$posted = array();
if(!empty($_POST)) {
    
  //Set Values for Payumoney
  $_POST['amount'] = $_POST['price_mar'];
  $_POST['firstname'] = $_POST['fullname'][0];
   
  foreach($_POST as $key => $value) {  
    if($key == 'fullname') //|| $key != 'tshirt' || $key != 'KM' || $key != 'rowAmt' || $key != 'gender' || $key != 'price_mar') 
    {
      continue;    
    } elseif ( $key == 'tshirt') {
      continue;
    } elseif ($key == 'KM') {
      # code...
      continue;
    } elseif ($key == 'rowAmt') {
      # code...
      continue;
    } elseif ($key == 'gender') {
      # code...
      continue;
    } elseif ($key == 'price_mar') {
      # code...
      continue;
    }
    $posted[$key] = $value; 
  } 
  $phone = $posted['phone'];
  //print_r($posted); exit(0);
}

$formError = 0;

if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = ''; 
$hash_string = ''; 
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
      || empty($posted['service_provider'])
  ) {
    $formError = 1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
  $hashVarsSeq = explode('|', $hashSequence);
   
  foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }
    $hash_string .= $SALT;
    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
    $_POST['hash'] = $hash;
    //echo 'var payuForm = document.forms.payuForm;';
    //echo 'payuForm.submit();';
  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}



if(!empty($hash))
{
  require_once 'class/dbconnect.php';

  //Transaction DB process
  $firstname = strip_tags($_POST['firstname']);
  $email = strip_tags($_POST['email']);
  $txnid = strip_tags($_POST['txnid']);
  $amount = strip_tags($_POST['amount']);
  $productinfo = strip_tags($_POST['productinfo']); 
  $hash = strip_tags($hash);
  $phone = strip_tags($_POST['phone']);
  
  $firstname = $DBcon->real_escape_string($firstname);
  $email = $DBcon->real_escape_string($email);
  $txnid = $DBcon->real_escape_string($txnid);
  $amount = $DBcon->real_escape_string($amount);
  $productinfo = $DBcon->real_escape_string($productinfo);
  $hash = $DBcon->real_escape_string($hash);
  $phone = $DBcon->real_escape_string($phone);
  $query = "INSERT INTO transactions(firstname, email, txnid, amount, productinfo, hash, phone) VALUES('$firstname','$email','$txnid','$amount','$productinfo','$hash','$phone')";
  if($DBcon->query($query)) {

    $trans_id = $DBcon->insert_id;
    //Tickets booking Process
    foreach ($_POST['fullname'] as $key => $value) {
      # code...
      $tickets = strip_tags($_POST['tickets']);
      $fullname = strip_tags($value);
      $tshirt = strip_tags($_POST['tshirt'][$key]);
      $KM = strip_tags($_POST['KM'][$key]);
      $gender = strip_tags($_POST['gender'][$key]);
      $email = strip_tags($_POST['email']);
      $phone = strip_tags($_POST['phone']);
      
      $tickets = $DBcon->real_escape_string($tickets);
      $fullname = $DBcon->real_escape_string($fullname);
      $tshirt = $DBcon->real_escape_string($tshirt);
      $KM = $DBcon->real_escape_string($KM);
      $gender = $DBcon->real_escape_string($gender);
      $email = $DBcon->real_escape_string($email);
      $phone = $DBcon->real_escape_string($phone);    
      
      $query = "";
      $query = "INSERT INTO tickets(tickets, fullname,tshirt,KM,gender,email,phone, transactions_id) VALUES('$tickets','$fullname','$tshirt','$KM','$gender','$email','$phone','$trans_id')";
      $DBcon->query($query);
    }
  }
}

?>

  <script>
    var hash = '<?php echo $hash ?>';
    //alert(hash);
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
<body onload="submitPayuForm()">
<div class="container">
  <div class="modal fade" id="half-mar-modal" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Online Registration</h4>
      </div>
      <div class="modal-body">

              <div class="row">
                  <div class="col-xs-12">
                      <div class="well">
                          <form id="payuForm" class="mar-form" method="POST" action="<?php echo $action; ?>">
                            <div class="row">
                                  <?php if($formError) { ?>
                                    <span style="color:red">Please fill all mandatory fields.</span>
                                    <br/>
                                    <br/>
                                  <?php } ?>
                                  <div class="col-xs-12 col-lg-12">
                                  <div class="col-xs-4 col-lg-4">
                                    <label>Select Seats:</label>
                                  </div>
                                  
                                  <div class="col-xs-3 col-lg-3">
                                   <select name="tickets" id="numNames" onchange="calcamount(this);">
                                   <option value="">0</option>
                                   <option value="1">1</option>
                                   <option value="2">2</option>
                                   <option value="3">3</option>
                                   <option value="4">4</option>
                                   <option value="5">5</option>
                                   <!-- <option value="6">6</option>
                                   <option value="7">7</option>
                                   <option value="8">8</option>
                                   <option value="9">9</option>
                                   <option value="10">10</option> -->
                                </select>
                                </div>
                                <div class="col-xs-5 col-lg-5">
                                  Total Price: <span id="priceSpan_mar">0</span>
                                </div>
                                </div>
                                </div>
                                <!-- <div class="row"> -->
                                
                                <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
                                <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
                                <input type="hidden" name="abc" value="<?php echo $hash_string ?>"/>
                                <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />  
                                <input type="hidden" name="productinfo" value="The Big Beah Marathon" /> 
                                <input type="hidden" name="service_provider" value="payu_paisa" /> 
                                <input type="hidden" name="surl" value="../class/success.php" /> 
                                <input type="hidden" name="furl" value="../class/success.php" /> 
                                <input type="hidden" name="curl" value="../class/success.php" />  
                                <input type="hidden" name="amount" value="<?php echo (empty($posted['amount'])) ? '0' : $posted['amount'] ?>" />  
                                <input type="hidden" name="firstname" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>"/>  
                                <input type="hidden" name="service_provider" value="payu_paisa" size="64" />

                                <!-- <div class="col-md-6 col-lg-6 col-xs-12">
                                  <div class="form-group float-label-control label-bottom">
                                  <label for="">Email Address</label>
                                     <input type="email" class="form-control float-form" id="email" name="email" required="true" title="Please enter your email" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" placeholder="Please enter you Email address">
                                  </div>
                                </div>

                                <div class="col-md-6 col-lg-6 col-xs-12">
                                  <div class="form-group float-label-control label-bottom">
                                  <label for="">Mobile Number</label>
                                       <input type="number" class="form-control float-form" id="phone" name="phone" required="true" title="Please enter your mobile number" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" placeholder="Please enter your mobile number">  
                                  </div>
                                  </div>
                                </div> -->
                            <div id="elcontainer"></div>
                              <!-- <button type="submit" class="btn btn-success btn-block">Proceed to Pay</button> -->
                                <input value="0" id="price_mar" type="hidden" name="price_mar" required="true" title="totalprice" readonly="true">
           <!--  <input value="850" id="defaultprice_mar" type="hidden" name="defaultprice" required="true"> -->
           
                              <button type="submit" class="btn btn-success btn-block pay-btn">Proceed to pay ( ₹ <span id="priceSpan_mar_proceed">0</span> )</button>
                             
                          </form>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>
</body>

<!-- <div class="container">
  <div class="modal fade" id="tenk-mar-modal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Online Registration</h4>
      </div>
      <div class="modal-body">

              <div class="row">
                  <div class="col-xs-12">
                      <div class="well">
                          <form id="loginForm" method="POST" action="/login/">
                            <div class="row">
                                  <div class="col-xs-12 col-lg-12">
                                  <div class="col-xs-4 col-lg-4">
                                    <label>Select Seats:</label>
                                  </div>
                                  
                                  <div class="col-xs-3 col-lg-3">
                                   <select name="tickets" id="numNames2" onchange="calcamount2(this);">
                                   <option value="">0</option>
                                   <option value="1">1</option>
                                   <option value="2">2</option>
                                   <option value="3">3</option>
                                   <option value="4">4</option>
                                   <option value="5">5</option>
                                   <option value="6">6</option>
                                   <option value="7">7</option>
                                   <option value="8">8</option>
                                   <option value="9">9</option>
                                   <option value="10">10</option>
                                </select>
                                </div>
                                <div class="col-xs-5 col-lg-5">
                                  Total Price: <span id="priceSpan_mar2">0</span>
                                </div>
                                </div>
                                </div>
                            <div id="clcontainer"></div>
                            
                               <input value="0" id="price_mar2" type="hidden" name="price" required="true" title="totalprice" readonly="true">
                              <input value="650" id="defaultprice_mar2" type="hidden" name="defaultprice2" required="true">
           
                              <button type="submit" class="btn btn-success btn-block pay-btn2">Proceed to pay ( ₹ <span id="priceSpan_mar_proceed">0</span> )</button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>  -->         
<script src="js/jquery.validate.min.js"></script>
<script type="text/javascript">

var el =
'<div class="row parent-row"><input class="parentRowAmt" value="0" type="hidden" /><div class="col-xs-12 col-sm-3 col-lg-3 form-size mob-form-size">'+
  '<div class="form-group float-label-control label-bottom">'+
                                  '<label for="">Email Address</label>'+
                                     '<input type="email" class="form-control float-form" id="email[]" name="email[]" required="true" title="Please enter your email" placeholder="Email address">'+
                                  '</div>'+
  '</div>'+

  '<div class="col-xs-12 col-sm-3 col-lg-3 form-size mob-form-size">'+
  '<div class="form-group float-label-control label-bottom">'+
                                  '<label for="">Mobile Number</label>'+
                                       '<input type="number" class="form-control float-form" id="phone[]" name="phone[]" value="" required="true" title="Please enter your mobile number" placeholder="Mobile number">'+  
                                  '</div>'+
  '</div>'+

  '<div class="col-xs-12 col-sm-3 col-lg-3 form-size mob-form-size">'+
  '<div class="form-group float-label-control label-bottom">'+
    '<label for="">Fullname</label>'+
    '<input type="text" class="form-control float-form" id="fullname[]" name="fullname[]" required="true" title="fullname" placeholder="Fullname">'+
  '</div>'+
  '</div>'+

'<div class="col-xs-12 col-sm-3 col-lg-3 form-size mob-form-size">'+
'<div class="form-group float-label-control label-bottom">'+
    // '<label for="">Gender</label>'+  
    ' <select class="form-control" id="tshirt[]" name="tshirt[]" required="true">'+
                                      '<option value="">Tshirt Size</option>'+
                                      '<option value="XS">XS</option>'+
                                      '<option value="S">S</option>'+
                                      '<option value="M">M</option>'+
                                      '<option value="L">L</option>'+
                                      '<option value="XL">XL</option>'+
                                      '<option value="XXL">XXL</option>'+
                                  '</select>'+ 
'</div>'+
'</div>'+
'<div class="col-xs-12 col-sm-3 col-lg-3 form-size mob-form-size">'+
'<div class="form-group float-label-control label-bottom">'+
    // '<label for="">Gender</label>'+  
    ' <select class="form-control select-km" id="KM[]" name="KM[]" required="true">'+
                                      '<option value="">Select KM</option>'+
                                      '<option value="10KM">10KM</option>'+
                                      '<option value="21.1KM">21.1KM</option>'+
                                  '</select>'+ 
                                  '<input type="hidden" class="form-control float-form" id="rowAmt" name="rowAmt[]" title="rowAmt" placeholder="Please enter you Fullname">'+
'</div>'+
'</div>'+
'<div class="col-xs-12 col-sm-3 col-lg-3 form-size mob-form-size">'+
'<div class="form-group">'+
    // '<label for="">Gender</label>'+  
    ' <select class="form-control" id="gender[]" name="gender[]" required="true">'+
                                      '<option value="">Select Gender</option>'+
                                      '<option>Male</option>'+
                                      '<option>Female</option>'+
                                  '</select>'+ 
'</div>'+
'</div>'+
'</div>'+
'<br><br>';


function appendControls(num) {
  $('#elcontainer').empty();
  var html = null;
  for (var i=0; i<num; i++) {
    $('#elcontainer').append(el); 
  } 
}
function calcamount(tkt){
    $('#price_mar').val("0");
  $("#priceSpan_mar").text("0");
}

$("#elcontainer").on('change', '.select-km', function(e){
      var val = $(this).val();
      var amt = parseInt($('#price_mar').val());
      var finalAmt = (amt == "") ? 0 : amt;
      //console.log(val);
      var parentRow = $(this).parent().parent().parent();
      var parentAmtVal = parseInt(parentRow.find(".parentRowAmt").val());

      if(val != ""){
        if(val == "10KM"){
          var fixedAmt = 650;
        }
        else if(val == "21.1KM"){
          var fixedAmt = 850;
        }
        
        if(parentAmtVal == 0) {
          parentRow.find(".parentRowAmt").val(fixedAmt);
          finalAmt = finalAmt + fixedAmt;
        } else {
          finalAmt = finalAmt - parentAmtVal;
          finalAmt = finalAmt + fixedAmt;
          parentRow.find(".parentRowAmt").val(finalAmt);
        }
      } else {
        finalAmt = finalAmt - parentAmtVal;
        parentRow.find(".parentRowAmt").val(0);
      }
      
      // else {
      //   parentRow.find(".select-age option").show();
      //   finalAmt = finalAmt - parentAmtVal;
      //   parentRow.find(".parentRowAmt").val(0);
      // }
      $('#amount').val(finalAmt);
      $('#price_mar').val(finalAmt);
      $('#priceSpan_mar_proceed').html(finalAmt);
      $('#priceSpan_mar').html(finalAmt);
    });

$('#numNames').on('change', function(e) {
  var numSelected = Number($(this).val());
  appendControls(numSelected);
  if(numSelected == 0){
    $(".pay-btn").css('display','none');
  } else{
   $(".pay-btn").css('display','block'); 
}
});
(function ($) {
  $.fn.floatLabels = function (options) {

    // Settings
    var self = this;
    var settings = $.extend({}, options);


    // Event Handlers
    function registerEventHandlers() {
      self.on('input keyup change', 'input, textarea', function () {
        actions.swapLabels(this);
      });
    }


    // Actions
    var actions = {
      initialize: function() {
        self.each(function () {
          var $this = $(this);
          var $label = $this.children('label');
          var $field = $this.find('input,textarea').first();

          if ($this.children().first().is('label')) {
            $this.children().first().remove();
            $this.append($label);
          }

          var placeholderText = ($field.attr('placeholder') && $field.attr('placeholder') != $label.text()) ? $field.attr('placeholder') : $label.text();

          $label.data('placeholder-text', placeholderText);
          $label.data('original-text', $label.text());

          if ($field.val() == '') {
            $field.addClass('empty')
          }
        });
      },
      swapLabels: function (field) {
        var $field = $(field);
        var $label = $(field).siblings('label').first();
        var isEmpty = Boolean($field.val());

        if (isEmpty) {
          $field.removeClass('empty');
          $label.text($label.data('original-text'));
        }
        else {
          $field.addClass('empty');
          $label.text($label.data('placeholder-text'));
        }
      }
    }


    // Initialization
    function init() {
      registerEventHandlers();

      actions.initialize();
      self.each(function () {
        actions.swapLabels($(this).find('input,textarea').first());
      });
    }
    init();


    return this;
  };

  $(function () {
    jQuery('.form-element').each(function(){
      if($(this).parent().hasClass('required')){
       jQuery('.form-element').unwrap();
      }
    });

    setTimeout(function(){
      $('.float-label-control').floatLabels();
    },1000);
  });
})(jQuery);


$(".mar-form" ).validate( {
 rules: {
   'fullname[]': "required",
   'phone[]':  {
                    required: true,
                    minlength: 10,
                    number: true
            }
 },
 messages: {
   'fullname[]': "Please enter your Fullname",      
   'email[]': { 
  required: "Please enter a valid email address"
   },
   'phone[]': "Please enter a valid Mobile number with 10 digits"
 },
  errorElement: "em",
  errorPlacement: function ( error, element ) {
    // Add the `help-block` class to the error element
    error.addClass( "help-block" );

    if ( element.prop( "type" ) === "checkbox" ) {
    error.insertAfter( element.parent( "label" ) );
    } else {
    error.insertAfter( element );
    }
  },
  highlight: function ( element, errorClass, validClass ) {
    $( element ).parents( ".input" ).addClass( "has-error" ).removeClass( "has-success" );
  },
  unhighlight: function (element, errorClass, validClass) {
    $( element ).parents( ".input" ).addClass( "has-success" ).removeClass( "has-error" );
  }
  });


// $("#payuForm" ).validate( {
//  rules: {
//    fullname: "required",
//    mobile_number:  {
//                     required: true,
//                     minlength: 10,
//                     number: true
//             }
//  },
//  messages: {
//    fullname: "Please enter your Fullname",      
//    email: { 
//   required: "Please enter a valid email address"
//    },
//    mobile_number: "Please enter a valid Mobile number with 10 digits"
//  },
//   errorElement: "em",
//   errorPlacement: function ( error, element ) {
//     // Add the `help-block` class to the error element
//     error.addClass( "help-block" );

//     if ( element.prop( "type" ) === "checkbox" ) {
//     error.insertAfter( element.parent( "label" ) );
//     } else {
//     error.insertAfter( element );
//     }
//   },
//   highlight: function ( element, errorClass, validClass ) {
//     $( element ).parents( ".input" ).addClass( "has-error" ).removeClass( "has-success" );
//   },
//   unhighlight: function (element, errorClass, validClass) {
//     $( element ).parents( ".input" ).addClass( "has-success" ).removeClass( "has-error" );
//   }
//   });


</script>


