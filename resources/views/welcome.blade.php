<!DOCTYPE html>
<html lang="en">

@include('partials.core.head')

<body>
@include('partials.core.preloader')
    <!--Main Container Start Here-->
    <div class="main-container">
        @include('partials.core.header')

        <!--Conference Area Startadssadsd dadsasdsHere-->
        <div class="conference-area">
            <div class="container-fluid">
                <div class="row"> 
                    <div class="col-lg-6">
                        <div class="conference-content ct-1"> 
                            <h1>Welcome to<br/>Public Speaking Academy</h1>
                            <p>Passionate about transformational communication training. We don’t just teach groundbreaking methods, we ensure you experience a permanent shift in your Public Speaking and presentation skills. Our methods are fun, creative and build on your existing and hidden strengths…</p>
                        </div>
                    </div>
                    <!-- col end-->
                    <div class="col-lg-6 pl-0">
                        <div class="conference-active owl-carousel owl-theme">
                            <div class="inner-img xs-mb30 xs-mt30">
                                <img class="img-fluid" src="assets/img/conference/1.jpg" alt="">
                            </div>
                            <div class="inner-img xs-mb30 xs-mt30">
                                <img class="img-fluid" src="assets/img/conference/2.jpg" alt="">
                            </div>
                            <div class="inner-img xs-mb30 xs-mt30">
                                <img class="img-fluid" src="assets/img/conference/3.jpg" alt="">
                            </div>
                            <div class="inner-img xs-mb30 xs-mt30">
                                <img class="img-fluid" src="assets/img/conference/4.jpg" alt="">
                            </div>
                            <div class="inner-img xs-mb30 xs-mt30">
                                <img class="img-fluid" src="assets/img/conference/3.jpg" alt="">
                            </div>
                            <div class="inner-img  xs-mt30">
                                <img class="img-fluid" src="assets/img/conference/1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- col end-->
                </div>
                <!-- /row end-->
                <div class="row">
                    <div class="col-lg-6 pr-0">
                        <div class="inner-img">
                            <img class="img-fluid" src="assets/img/conference/2.jpg" alt="">
                        </div>
                    </div>
                    <!-- col end-->
                    <div class="col-lg-6">
                        <div class="generel-information-area">
                            <div class="generel-icons">
                                <ul>
                                    <li><img src="assets/img/feature/1.png" alt=""></li>
                                    <li><img src="assets/img/feature/2.png" alt=""></li>
                                    <li><img src="assets/img/feature/3.png" alt=""></li>
                                    <li class="mr-0"><img src="assets/img/feature/4.png" alt=""></li>
                                </ul>
                            </div>
                            <div class="inner-content">
                                <h2>General Information</h2>
                                <p>Take a Public Speaking Academy course and we promise you will see real change in how you think, feel and speak as future presenters. Whether it’s an open course for your personal development, or looking to help your business team. We deliver professional and practical presentation training, with passion and energy. So you learn rapidly whilst having fun.</p>
                                <div class="primary-btn">
                                    <a href="/book-course#buytickets" class="btn-primary">Buy Ticket</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col end-->
                </div>
                <!-- /row end-->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="conference-content ct-2 pdd">
                            <h1>Events Spaces</h1>
                            <div class="maintestimonybox">
                            <p class="text-center">&bdquo;Entering the PSA community has proved to be one of the most positively transformative steps I have ever taken. Top quality professional guidance in a highly supportive environment and huge amounts of encouragement. They genuinely want you to achieve your fullest potential, and take you beyond anything you may have thought possible when you first set out. Observing how much people can grow in just one day of their training is truly inspirational.&ldquo;</p>
                            <p class="maintestimony text-center">Sian Podmore</p>
                        </div>
                            <div class="bordered-btn d-none d-md-block">
                                <a href="/book-course#events">Book course <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- col end-->
                    <div class="col-lg-6 pl-0">
                        <div class="inner-img xs-mb30">
                            <img class="img-fluid" src="assets/img/conference/4.jpg" alt="">
                        </div>
                    </div>
                    <!-- col end-->
                </div>
                <!-- /row end-->
                <div class="row">
                    <div class="col-lg-6 pr-0">
                        <div class="inner-img">
                            <img class="img-fluid" src="assets/img/conference/3.jpg" alt="">
                        </div>
                    </div>
                    <!-- col end-->
                    <div class="col-lg-6">
                        <div class="conference-content ct-2">
                            <h1>Who's Speaking </h1>
                            <p>
                                Our trainers are Professional Speakers and Coaches. And we’ve worked with all walks of life, from Royalty and Politicians, to SMEs and Students. Our approach is practical not lecture based, not only will we teach what is most relevant, but do so in a creative positive environment. Resulting in sharp shifts in your confidence and speaking delivery.
                            </p>
                            <div class="bordered-btn xs-mb40">
                                <a href="/about#allspeakers">All Speaker</a>
                            </div>
                        </div>
                    </div>
                    <!-- col end-->
                </div>
                <!-- /row end-->
            </div>
            <!-- /container end-->
        </div>
        <!--Conference Area End Here-->

        @include('partials.core.footer')
    </div>
    @include('partials.core.scripts')
</body>

</html>
