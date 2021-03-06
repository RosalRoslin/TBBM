<?php
session_start();
include("html/header.html")
?>
<style type="text/css">
    /*.navbar-default{
        background-color: #3CAFC4 !important;
    }*/
/*    .tbbm-section{
        padding-top: 200px !important; 
    }
@media screen and (max-width: 600px){
    .tbbm-section{
        padding-top: 100px !important;
    }
}*/
.x-services .thumbnail .caption {
    padding: 0px !important;
    color: #969595;
    overflow: hidden;
    padding-left: 15px !important;
    padding-right: 5px !important;

}

.single-page-title {
    background: url(img/chapters-marathon.jpg) no-repeat bottom;
        background-attachment: scroll;
        background-size: auto auto;
    background-size: cover;
    width: 100%;
    background-attachment: scroll;
    padding: 15% 0 5%;
    position: relative;
}
.x-services .thumbnail a > img{
    float: none;
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
.ptb-100 {
    padding-top: 70px;
    padding-bottom: 70px;
}

.chapters-row{
    margin-left: 100px;
}
@media only screen and (min-width: 1280px)
and (max-width: 1366px){
    .chapters-row{
    margin-left: 50px;
}
}
.x-services .thumbnail {
    width: 80%;
}
@media (max-width: 600px){
    .x-services .thumbnail {
    width: 100%;
    }
        .chapters-row{
    margin-left: -15px;
    }
    }
</style>
<section class="single-page-title">
    <div class="container text-center">
        <h2 class="title">Chapters/Groups</h2>
    </div>
</section>
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

<section class="x-services ptb-100 gray-bg tbbm-section">

    <section class="section-title">
        <div class="container text-center">
           <!--  <h2>Our Chapters</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span> -->
        </div>
    </section>

    <div class="container-fluid">
        <div class="row chapters-row">
            <div class="col-md-4">
                <div class="thumbnail clearfix">
                    <a href="#"><img class="img-responsive" src="img/chapters.jpg" alt="Image"></a>

                     <div class="caption">
                        <h3><a href="#">Big Beach runners - Chennai</a></h3>

                        <p>Chennai chapter includes groups of runners from different areas in Chennai. Stay fit and keep running is our mantra. We gather across various areas in Chennai and run during the course of the week.</p>
                       <!--  <button class="btn btn-primary pull-right">View More</button> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail clearfix">
                    <a href="#"><img class="img-responsive" src="img/chapters.jpg" alt="Image"></a>

                    <div class="caption">
                        <h3><a href="#">Big Beach runners - Bangalore</a></h3>

                        <p>Bangalore the garden city has some amazing group of runners. This is our budding group which has started taking shape slowly. Watch this space for more running routines.</p>
                        <!-- <button class="btn btn-primary pull-right">View More</button> -->
                    </div>
                </div>
            </div>

             <div class="col-md-4">
                <div class="thumbnail clearfix">
                    <a href="#"><img class="img-responsive" src="img/chapters.jpg" alt="Image"></a>

                    <div class="caption">
                        <h3><a href="#">Big Beach runners - Pune</a></h3>

                        <p>Pune the budding IT city has some amazing group of runners. This is our budding group which has started taking shape slowly. Watch this space for more running routines.</p>
                        <!-- <button class="btn btn-primary pull-right">View More</button> -->
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

<!-- <section class="skills ptb-100 gray-bg">
    <section class="section-title">
        <div class="container text-center">
            <h2>Our Professional Skills</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Completely reconceptualize leading-edge e-commerce</h3>

                <p>Whereas 2.0 ideas. Energistically expedite frictionless infrastructures without user friendly quality
                    vectors. Distinctively communicate customer directed content for leading-edge web-readiness.
                    Professionally fabricate technically sound mindshare before emerging paradigms. Efficiently e-enable
                    vertical benefits after intermandated vortals.</p>

                <p>Enthusiastically innovate one-to-one technology through user-centric architectures. Dynamically
                    whiteboard global processes with compelling interfaces. Globally empower ubiquitous growth
                    strategies vis-a-vis cross-unit alignments. Collaboratively evisculate client-focused niches with
                    impactful alignments.</p>
            </div>
            <div class="col-md-6 x-progress">
                <div class="progress-wrapper">
                    <div class="progress-item">
                        <span class="progress-title">Chennai</span>

                        <div class="progress">
                            <div class="progress-bar progress-bar-dealy" role="progressbar" aria-valuenow="50"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                        </div>
                        <span class="progress-percent">50%</span>
                    </div> --> 
                    <!-- /.progress-item -->

                    <!-- <div class="progress-item">
                        <span class="progress-title">Bangalore</span>

                        <div class="progress">
                            <div class="progress-bar progress-bar-dealy" role="progressbar" aria-valuenow="90"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                        </div>
                        <span class="progress-percent">90%</span>
                    </div>  -->
                    <!-- /.progress-item -->

                    <!-- <div class="progress-item">
                        <span class="progress-title">Pune</span>

                        <div class="progress">
                            <div class="progress-bar progress-bar-dealy" role="progressbar" aria-valuenow="75"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                        </div>
                        <span class="progress-percent">75%</span>
                    </div> --> 
                    <!-- /.progress-item -->

                    <!-- <div class="progress-item">
                        <span class="progress-title">Brand</span>

                        <div class="progress">
                            <div class="progress-bar progress-bar-dealy" role="progressbar" aria-valuenow="33"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
                        </div>
                        <span class="progress-percent">33%</span>
                    </div>  -->
                    <!-- /.progress-item -->

                     <!-- <div class="progress-item">
                        <span class="progress-title">Efficiency</span>

                        <div class="progress">
                            <div class="progress-bar progress-bar-dealy" role="progressbar" aria-valuenow="82"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 82%;"></div>
                        </div>
                        <span class="progress-percent">82%</span>
                    </div>  -->
                    <!-- /.progress-item -->
                <!-- </div> -->
                <!-- /.progress-wrapper -->
        <!--     </div>
        </div>
    </div>

</section> -->
<!-- .skills -->

<!-- <section class="x-features">
    <section class="section-title">
        <div class="container text-center">
            <h2>Our Capabilities</h2>
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 img-left">
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

                <!-- <div class="promo-block-wrapper clearfix">
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

             <!--    <div class="promo-block-wrapper clearfix">
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
<!-- 
            </div>
        </div>
    </div>
</section> -->
<!-- .x-features -->

<!-- <section class="team ptb-100 tbbm-section">
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

            <!-- <div class="col-sm-4">
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
        <!-- <div class="row">
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

            <!-- <div class="col-sm-4">
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

        <!-- </div> -->
        <!-- /.row -->
    <!-- </div> -->
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
        <div id="testimonialSlider" class="carousel slide" data-ride="carousel"> -->

            <!-- Wrapper for slides -->
           <!--  <div class="carousel-inner" role="listbox">
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
            </div> -->
            <!-- Controls -->
          <!--   <a class="left carousel-control" href="#testimonialSlider" role="button" data-slide="prev">
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
                    <a href="http://www.raymond.in/" target="_blank"><img src="img/Raymond-new.png" alt="Image"></a>
                </div>

            <!-- <div class="col-md-2 col-sm-4 col-xs-6 section-margin">
                <a href="#"><img src="img/bovonto-new.png" alt="Image"></a>
            </div> -->

                <div class="col-md-2 col-sm-4 col-xs-6 clearfix o2 section-margin">
                    <a href="http://www.o2healthstudio.com/" target="_blank"><img src="img/O2-Health-Studio.png" alt="Image"></a>
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


