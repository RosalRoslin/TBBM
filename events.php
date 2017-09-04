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
</style>
<!-- <video class="tatsu-bg-video" autoplay="autoplay" loop="loop" muted="muted" preload="auto" style="width:100%; height: 720px; left: 0px; top: -137.5px; display: block;object-fit:cover;"><source src="video/Marathon.mp4" type="video/mp4"></video> -->
<!-- <div id="x-corp-carousel" class="carousel slide hero-slide hidden-xs" data-ride="carousel">

    <ol class="carousel-indicators">
        <li data-target="#x-corp-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#x-corp-carousel" data-slide-to="1"></li>
        <li data-target="#x-corp-carousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="img/hero-slide-1.jpg" alt="Hero Slide">

            <div class="carousel-caption">
                <h1>It′s simple, smart and occasionally magical.</h1>

                <p>Intrinsicly negotiate corporate synergy rather than user-centric web services. Synergistically
                    transition emerging schemas and.</p>
            </div>
        </div>
        <div class="item">
            <img src="img/hero-slide-2.jpg" alt="...">

            <div class="carousel-caption">
                <h1>It′s profitable and successful!</h1>

                <p>Synergistically enhance low-risk high-yield testing procedures with clicks-and-mortar architectures.
                    Compellingly revolutionize future-proof interfaces and.</p>
            </div>
        </div>
        <div class="item">
            <img src="img/hero-slide-3.jpg" alt="...">

            <div class="carousel-caption">
                <h1>Good solutions for your business!</h1>

                <p>Monotonectally envisioneer 24/7 bandwidth with reliable imperatives. Continually unleash unique
                    niches after go forward.</p>
            </div>
        </div>
    </div>

    <a class="left carousel-control" href="#x-corp-carousel" role="button" data-slide="prev">
        <i class="fa fa-angle-left" aria-hidden="true"></i>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#x-corp-carousel" role="button" data-slide="next">
        <i class="fa fa-angle-right" aria-hidden="true"></i>
        <span class="sr-only">Next</span>
    </a>
</div> -->
<!-- #x-corp-carousel-->

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
                    <a href="#"><img class="img-responsive" src="http://chennaismile.com/img/display/1619chennaismile-display.png" alt="Image"></a>

                    <div class="caption">
                        <h3><a href="#">Half Marathon</a></h3>

                        <p>There is a beautiful mystique to the half marathon. It’s the next level for the experienced 10K runners and a life altering challenge for newbie’s. The track will take you through the aura of Chennai reminiscent of her rich history and culture.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="thumbnail clearfix">
                    <a href="#"><img class="img-responsive" src="http://chennaismile.com/img/display/1619chennaismile-display.png" alt="Image"></a>

                    <div class="caption">
                        <h3><a href="#">10K Run</a></h3>

                        <p>The people favourite 10k run.  It’s the first love for anyone who wishes to try his luck at running. This one cuts across all demographics and has been a huge success across the globe. Bought a new running shoe ?. This is the right opportunity to stress it out.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
       <!--  <div class="row">
            <div class="col-md-6">
                <div class="thumbnail clearfix">
                    <a href="#"><img class="img-responsive" src="img/img-offer-3.jpg" alt="Image"></a>

                    <div class="caption">
                        <h3><a href="#">Analysis</a></h3>

                        <p>Praesent dapibus eleifend aug eget sollicitudin velit malesuada Aliquam blandit diam feugiat
                            tellus odio malesuada ex.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="thumbnail clearfix">
                    <a href="#"><img class="img-responsive" src="img/img-offer-4.jpg" alt="Image"></a>

                    <div class="caption">
                        <h3><a href="#">Banking</a></h3>

                        <p>Praesent dapibus eleifend aug eget sollicitudin velit malesuada Aliquam blandit diam feugiat
                            tellus odio malesuada ex.</p>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- .row -->
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
            <!-- <div class="col-md-6 img-left">
                <img class="img-responsive" src="img/img-about.png" alt="">
            </div>
            <div class="col-md-6">
                <div class="promo-block-wrapper clearfix">
                    <div class="promo-icon">
                        <i class="fa fa-line-chart"></i>
                    </div>
                    <div class="promo-content">
                        <h3>We teach you how to improve your business</h3>

                        <p>Lorem ipsum dolor sit consectetuer adipiscing elit nonummy ib uismod tincidunt ut laoreet
                            dolore magna aliquam erat volutpat.</p>
                    </div>
                </div> -->
                <!-- /.promo-block-wrapper -->

               <!--  <div class="promo-block-wrapper clearfix">
                    <div class="promo-icon">
                        <i class="fa fa-life-ring"></i>
                    </div>
                    <div class="promo-content">
                        <h3>We make the technology affordable for you</h3>

                        <p>Lorem ipsum dolor sit consectetuer adipiscing elit nonummy ib uismod tincidunt ut laoreet
                            dolore magna aliquam erat volutpat.</p>
                    </div>
                </div> -->
                <!-- /.promo-block-wrapper -->

                <!-- <div class="promo-block-wrapper clearfix">
                    <div class="promo-icon">
                        <i class="fa fa-calculator"></i>
                    </div>
                    <div class="promo-content last-type">
                        <h3>Seamlessly grow wireless human capital before turnkey.</h3>

                        <p>Lorem ipsum dolor sit consectetuer adipiscing elit nonummy ib uismod tincidunt ut laoreet
                            dolore magna aliquam erat volutpat.</p>
                    </div>
                </div> -->
                <!-- /.promo-block-wrapper -->

            <!-- </div> -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <div id="">
        <div class="container">
        <!-- <h2>Our Sample Pricing</h2> -->
            <div class="row">
        <table class="table table-condensed table-hover">
<thead>
<tr>
<th class="tabco1 "></th>
<th class="tabco2" >Half Marathon</th>
<th class="tabco3">10K</th>
</tr>
</thead>
<tbody>
<tr>
<td class="tabco1" >Event fee</td>
<td class="tabco2" >850 INR</td>
<td class="tabco3">650 INR</td>
</tr>
<tr>
<td class="tabco1" >Start Time</td>
<td class="tabco2" >Would be published before race day</td>
<td class="tabco3" >Would be published before race day</td>
</tr>
<tr>
<td class="tabco1" >Route map</td>
<td class="tabco2" >Would be published before race day</td>
<td class="tabco3" >Would be published before race day</td>
</tr>
<tr>
<td class="tabco1" >Goodie bag </td>
<td class="tabco2" >T shirt/Bib/Sponsor merchandise</td>
<td class="tabco3" >T shirt/Bib/Sponsor merchandise</td>
</tr>
<tr>
<td class="tabco1" >Medals</td>
<td class="tabco2" >For all finishers</td>
<td class="tabco3" >For all finishers</td>
</tr>
<tr>
<td class="tabco1">Trophies and cash price</td>
<td class="tabco2" >For first 3 winners in each demographics. Details would be published before the race day</td>
<td class="tabco3" >For first 3 winners in each demographics. Details would be published before the race day</td>
</tr>
<tr>
<td class="tabco1"></td>
<td class="tabco2" ><button class="btn btn-primary" data-toggle="modal" data-target="#half-mar-modal">Register Now</button></td>
<td class="tabco3" ><button class="btn btn-primary" data-toggle="modal" data-target="#tenk-mar-modal">Register Now</button></td>
</tr>
</tbody>
</table>
      </div><!--row-->
    </div><!--container-->
</div><!--PricingTab-->


    
        </div>
    </div>
</section>




<!-- <section class="team ptb-100">
    <section class="section-title">
        <div class="container text-center">
            <h2>Our Team</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <figure class="thumbnail">
                    <a href="#"><img src="img/img-team-1.jpg" class="img-responsive" alt="Image"></a>
                    <figcaption class="caption text-center">
                        <h3>Reena Scot -
                            <small>Director</small>
                        </h3>
                    </figcaption>
                </figure>
            </div> -->
            <!-- /.col-sm-4 -->

           <!--  <div class="col-sm-4">
                <figure class="thumbnail">
                    <a href="#"><img src="img/img-team-2.jpg" class="img-responsive" alt="Image"></a>
                    <figcaption class="caption text-center">
                        <h3>David Martin -
                            <small>Founder</small>
                        </h3>
                    </figcaption>
                </figure>
            </div> -->
            <!-- /.col-sm-4 -->

           <!--  <div class="col-sm-4">
                <figure class="thumbnail">
                    <a href="#"><img src="img/img-team-3.jpg" class="img-responsive" alt="Image"></a>
                    <figcaption class="caption text-center">
                        <h3>Jenefir White -
                            <small>marketing</small>
                        </h3>
                    </figcaption>
                </figure>
            </div> -->
            <!-- /.col-sm-4 -->

        <!-- </div> -->
        <!-- /.row -->
       <!--  <div class="row">
            <div class="col-sm-4">
                <figure class="thumbnail">
                    <a href="#"><img src="img/img-team-4.jpg" class="img-responsive" alt="Image"></a>
                    <figcaption class="caption text-center">
                        <h3>Reena Scot -
                            <small>Director</small>
                        </h3>
                    </figcaption>
                </figure>
            </div> -->
            <!-- /.col-sm-4 -->

            <!-- <div class="col-sm-4">
                <figure class="thumbnail">
                    <a href="#"><img src="img/img-team-5.jpg" class="img-responsive" alt="Image"></a>
                    <figcaption class="caption text-center">
                        <h3>David Martin -
                            <small>Founder</small>
                        </h3>
                    </figcaption>
                </figure>
            </div> -->
            <!-- /.col-sm-4 -->

           <!--  <div class="col-sm-4">
                <figure class="thumbnail">
                    <a href="#"><img src="img/img-team-6.jpg" class="img-responsive" alt="Image"></a>
                    <figcaption class="caption text-center">
                        <h3>Jenefir White -
                            <small>marketing</small>
                        </h3>
                    </figcaption>
                </figure>
            </div> -->
            <!-- /.col-sm-4 -->

<!--         </div> -->
        <!-- /.row -->
<!--     </div> -->
    <!-- /.container -->
<!-- </section> -->
<!-- .team -->

<!-- <section class="testimonial">
    <section class="section-title">
        <div class="container text-center">
            <h2>Satisfied Customer</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>
    <div class="container">
        <div id="testimonialSlider" class="carousel slide" data-ride="carousel">
 -->
            <!-- Wrapper for slides -->
            <!-- <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <blockquote>
                        <ul>
                            <li><img src="img/img-testimonial-1.jpg" class="img-responsive" alt=""/></li>
                            <li class="name">Justus Kühn</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum egetvel </br>lacus
                            pretium rhoncus a quis nisly Ut vehicula gravida dui in pulvinar donec</br> diam elit
                            consequat eget augue vitae aliquet sollicitudin.
                        </p>

                    </blockquote>
                </div>
                <div class="item">
                    <blockquote>
                        <ul>
                            <li><img src="img/img-testimonial-2.jpg" class=" img-responsive" alt=""/></li>
                            <li class="name">Lennox Arnold</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum egetvel </br>lacus
                            pretium rhoncus a quis nisly Ut vehicula gravida dui in pulvinar donec</br> diam elit
                            consequat eget augue vitae aliquet sollicitudin.
                        </p>

                    </blockquote>
                </div>
                <div class="item">
                    <blockquote>
                        <ul>
                            <li><img src="img/img-testimonial-3.jpg" class="img-responsive" alt=""/></li>
                            <li class="name">Paulina Berger</li>
                        </ul>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum egetvel </br>lacus
                            pretium rhoncus a quis nisly Ut vehicula gravida dui in pulvinar donec</br> diam elit
                            consequat eget augue vitae aliquet sollicitudin.
                        </p>
                    </blockquote>
                </div>
            </div>
            <!-- Controls -->
           <!--  <a class="left carousel-control" href="#testimonialSlider" role="button" data-slide="prev">
                <span><i class="fa fa-angle-left"></i></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#testimonialSlider" role="button" data-slide="next">
                <span><i class="fa fa-angle-right"></i></span>
                <span class="sr-only">Next</span>
            </a>
        </div> -->
        <!-- #testimonialSlider -->
<!--     </div>
</section> -->
<!-- .testimonial -->
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
                    <a href="http://www.raymond.in/" target="_blank"><img src="img/raymond(150x150).png" alt="Image"></a>
                </div>

            <!-- <div class="col-md-2 col-sm-4 col-xs-6 section-margin">
                <a href="#"><img src="img/bovonto-new.png" alt="Image"></a>
            </div> -->

                <div class="col-md-2 col-sm-4 col-xs-6 clearfix o2 section-margin">
                    <a href="http://www.o2healthstudio.com/" target="_blank"><img src="img/o2-healthstudio(150x150).png" alt="Image"></a>
                </div>

            <!-- <div class="col-md-2 col-sm-4 col-xs-6 section-margin">
                <a href="#"><img src="img/poorvika.png" alt="Image"></a>
            </div> -->
            <!-- <div class="col-md-2 col-sm-4 col-xs-6 section-margin">
                <a href="#"><img src="img/riceday.png" alt="Image"></a>
            </div> -->
        </div>
    </div>
    <!--end of .container -->
</section>
<!-- /.client-logo --> 

<?php
include("html/footer.html")
?>
<div class="container">
  <div class="modal fade" id="half-mar-modal" role="dialog">
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
                                   <select name="tickets" id="numNames" onchange="calcamount(this);">
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
                                  Total Price: <span id="priceSpan_mar">0</span>
                                </div>
                                </div>
                                </div>
                            <div id="elcontainer"></div>
                              <!-- <button type="submit" class="btn btn-success btn-block">Proceed to Pay</button> -->
                                <input value="0" id="price_mar" type="hidden" name="price" required="true" title="totalprice" readonly="true">
            <input value="850" id="defaultprice_mar" type="hidden" name="defaultprice" required="true">
           
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

<div class="container">

      
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
                            <!--  <button type="submit" class="btn btn-success btn-block">Proceed to Pay</button> -->
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
</div>
<script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js">
webshims.setOptions('forms-ext', {types: 'date'});
webshims.polyfill('forms forms-ext');
</script>
<script type="text/javascript">

var el ='<br><br><div class="form-group">'+
 ' <input type="text" class="form-control" id="firstname" name="firstname" value="" required="true" title="firstname" placeholder="Please enter you Firstname">'+
            '</div>'+
'<div class="form-group">'+
 ' <input type="text" class="form-control" id="lastname" name="lastname" value="" required="true" title="Please enter your lastname" placeholder="Please enter you Lastname">'+
            '</div>'+
'<div class="form-group">'+
   '<input type="email" class="form-control" id="email" name="email" value="" required="true" title="Please enter your email" placeholder="Please enter you Email address">'+
'</div>'+
'<div class="form-group">'+
    // '<label for="">Gender</label>'+  
    ' <select class="form-control" id="tshirt" required="true">'+
                                      '<option value="">Tshirt Size</option>'+
                                      '<option value="XS">XS</option>'+
                                      '<option value="S">S</option>'+
                                      '<option value="M">M</option>'+
                                      '<option value="L">L</option>'+
                                      '<option value="XL">XL</option>'+
                                      '<option value="XXL">XXL</option>'+
                                  '</select>'+ 
'</div>'+
'<div class="form-group">'+
    // '<label for="">Gender</label>'+  
    ' <select class="form-control" id="KM" required="true">'+
                                      '<option value="">Select KM</option>'+
                                      '<option value="10KM">10KM</option>'+
                                      '<option value="21.1KM">21.1KM</option>'+
                                  '</select>'+ 
'</div>'+

'<div class="form-group">'+
    ' <input type="date" name="date_of_birth" id="date" class="form-control input-lg" placeholder="Enter Your Date Of Birth" tabindex="2">'+   
'</div>'+
'<div class="form-group">'+
    // '<label for="">Gender</label>'+  
    ' <select class="form-control" id="gender" required="true">'+
                                      '<option>Male</option>'+
                                      '<option>Female</option>'+
                                  '</select>'+ 
'</div>'+
'<div class="form-group">'+
            // '<label for="">Blood Group</label>'+
              '<select class="form-control" id="bloodgroup" name="Blood" required>'+
                 '<option value="">Select Bloood Group</option>'+
                '<option value="A+">A+</option>'+
                '<option value="A-">A-</option>'+
                '<option value="B+">B+</option>'+
                '<option value="B-">B-</option>'+
                '<option value="O+">O+</option>'+
                '<option value="O-">O-</option>'+
                '<option value="AB+">AB+</option>'+
                '<option value="AB-">AB-</option>'+
              '</select>'+
          '</div>'+
'<div class="form-group">'+
    ' <input type="number" class="form-control" id="Mobile" name="Mobile" value="" required="true" title="Please enter your mobile number" placeholder="Enter Mobile number">'+  
'</div>'+
'<br><br>';

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
var cl ='<br><br><div class="form-group">'+
 ' <input type="text" class="form-control" id="firstname" name="firstname" value="" required="true" title="firstname" placeholder="Please enter you Firstname">'+
            '</div>'+
'<div class="form-group">'+
 ' <input type="text" class="form-control" id="lastname" name="lastname" value="" required="true" title="Please enter your lastname" placeholder="Please enter you Lastname">'+
            '</div>'+
'<div class="form-group">'+
   '<input type="email" class="form-control" id="email" name="email" value="" required="true" title="Please enter your email" placeholder="Please enter you Email address">'+
'</div>'+
'<div class="form-group">'+
    // '<label for="">Gender</label>'+  
     ' <select class="form-control" id="tshirt" required="true">'+
                                      '<option value="">Tshirt Size</option>'+
                                      '<option value="XS">XS</option>'+
                                      '<option value="S">S</option>'+
                                      '<option value="M">M</option>'+
                                      '<option value="L">L</option>'+
                                      '<option value="XL">XL</option>'+
                                      '<option value="XXL">XXL</option>'+
                                  '</select>'+ 
'</div>'+
'<div class="form-group">'+
    // '<label for="">Gender</label>'+  
    ' <select class="form-control" id="KM" required="true">'+
                                      '<option value="">Select KM</option>'+
                                      '<option value="10KM">10KM</option>'+
                                      '<option value="21.1KM">21.1KM</option>'+
                                  '</select>'+ 
'</div>'+
'<div class="form-group">'+
    ' <input type="date" name="date_of_birth" id="date" class="form-control input-lg" placeholder="Enter Your Date Of Birth" tabindex="2">'+   
'</div>'+
'<div class="form-group">'+
    // '<label for="">Gender</label>'+  
    ' <select class="form-control" id="gender" required="true">'+
                                      '<option>Male</option>'+
                                      '<option>Female</option>'+
                                  '</select>'+ 
'</div>'+
'<div class="form-group">'+
            '<label for="">Blood Group</label>'+
              '<select class="form-control" id="sel1" name="Blood" required>'+
                '<option value="A+">A+</option>'+
                '<option value="A-">A-</option>'+
                '<option value="B+">B+</option>'+
                '<option value="B-">B-</option>'+
                '<option value="O+">O+</option>'+
                '<option value="O-">O-</option>'+
                '<option value="AB+">AB+</option>'+
                '<option value="AB-">AB-</option>'+
              '</select>'+
          '</div>'+
'<div class="form-group">'+
    ' <input type="number" class="form-control" id="Mobile" name="Mobile" value="" required="true" title="Please enter your mobile number" placeholder="Enter Mobile number">'+   
'</div>'+
'<br><br>';

$('#numNames').on('change', function(e) {
  var numSelected = Number($(this).val());
  appendControls1(numSelected);
  if(numSelected == 0){
    $(".pay-btn").css('display','none');
  } else{
   $(".pay-btn").css('display','block'); 
}
});

function appendControls1(num) {
  $('#elcontainer').empty();
  var html = null;
  for (var i=0; i<num; i++) {
    $('#elcontainer').append(el); 
  } 
}
function calcamount(tkt){
  var tktcount = tkt.value;
  var price = $('#defaultprice_mar').val();
    $('#price_mar').val(tktcount * price);
  $("#priceSpan_mar").text(tktcount * price); 
  $("#priceSpan_mar_proceed").text(tktcount * price); 
}


$('#numNames2').on('change', function(e) {
  var numSelected = Number($(this).val());
  appendControls2(numSelected);
  if(numSelected == 0){
    $(".pay-btn2").css('display','none');
  } else{
   $(".pay-btn2").css('display','block'); 
}
});

function appendControls2(num) {
  $('#clcontainer').empty();
  var html = null;
  for (var i=0; i<num; i++) {
    $('#clcontainer').append(cl); 
  } 
}
function calcamount2(tkt){
  var tktcount = tkt.value;
  var price = $('#defaultprice_mar2').val();
    $('#price_mar2').val(tktcount * price);
  $("#priceSpan_mar2").text(tktcount * price); 
  $("#priceSpan_mar_proceed2").text(tktcount * price); 
}
</script>

