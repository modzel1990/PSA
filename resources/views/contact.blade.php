<!DOCTYPE html>
<html lang="en">

@include('partials.core.head')

<body>
@include('partials.core.preloader')
    <!--Main Container Start Here-->
    <div class="main-container">
        @include('partials.core.header')
        <!--About Us Area Start Here-->
        <div class="about-us-area pad-head bg-about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="about-content">
                            <div class="section-title text-center">
                                <h2>Contact Us</h2>
                            </div>
                            <ol class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li>|</li>
                                <li>Contact Us</li>
                            </ol>
                        </div>
                    </div>
                    <!-- /col-->
                </div>
                <!-- /row-->
            </div>
            <!--/ container-->
        </div>
        <!--About Us Area End Here-->

        <!--Contact Area Start Here-->
        <div class="ct-2 contact-area pad100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <div class="title-text pl">
                                <h2>Get in Touch</h2>
                                <p>Get In Touch With Public Speaking Academy</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /col-->
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-8">
                        <div class="contact ct-form">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="contact-form">
                                        <form id="contact-form" data-toggle="validator" role="form">
                                            <div class="form-group">
                                                <input id="inputName" type="text" name="name" class="form-control" placeholder="Name" required data-error="Enter your name">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <div class="form-group">
                                                <input id="inputEmail" type="email" name="email" class="form-control" placeholder="Email" required data-error="Enter your email">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <div class="form-group">
                                                <input id="inputSubject" type="text" name="subject" class="form-control" placeholder="Subject" required data-error="Enter your email">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <div class="form-group">
                                                <textarea id="inputMessage" name="message" class="form-control" placeholder="Massage" rows="5" required data-error="Enter message with details"></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <div class="btn-2">
                                                <button class="btn-primary" name="submit-form" type="submit">Send</button>
                                            </div>
                                        </form>
                                        <div id="msgalert" class="hidden"></div>
                                    </div>
                                </div>
                                <!-- /col-->
                            </div>
                        </div>
                    </div>
                    <!-- /col-->
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-4">
                        <div class="title xs-mt30">
                            <h2>Contact</h2>
                        </div>
                        <div class="inner-box">
                            <div class="inner-content">
                                <i class="fa fa-mobile"></i>
                                <p>+44 114 221 0514</p>
                            </div>
                            <div class="inner-content">
                                <i class="fa fa-location-arrow"></i>
                                <p><a href="mailto:enquiry@publicspeakingacademy.co.uk" class="__cf_email__">enquiry@publicspeakingacademy.co.uk</a></p>
                            </div>
                        </div>
                        <hr>
                        <div class="title xs-mt30">
                            <h2>Opening Time</h2>
                        </div>
                        <div class="inner-box">
                            <p>Tuesday: 10:00 am – 7:00 pm</p>
                            <p>Wednesday: 11:00 am – 8:00 pm</p>
                            <p>Thursday: 11:00 am – 8:00 pm</p>
                            <p>Friday: 9:00 am – 6:00 pm</p>
                            <p>Saturday: 9:00 am – 6:00 pm</p>
                        </div>
                    </div>
                    <!-- /col-->
                </div>
                <!-- /row-->
            </div>
            <!-- /container-->
        </div>
        <!--Contact Area End Here-->

        @include('partials.core.footer')
    </div>
    @include('partials.core.scripts')
</body>

</html>
