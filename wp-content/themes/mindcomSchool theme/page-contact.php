<?php get_header(); ?>
<!--
 Template Name: Contact
-->
<!--================================================== 
            Global Page Section Start
    ================================================== -->
<section class="global-page-header" style="background-image:url('/wp-content/uploads/2021/10/banner-1.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2><?php the_title(); ?></h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="/">
                                <i class="ion-ios-home"></i>
                                Home
                            </a>
                        </li>
                        <li class="active"><?php the_title(); ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="container py-20">
                    <div class="row">
                        <div class="col-md-12">
                            <center class="sub-head">
                                <h2>Contact Us</h2>
                            </center>
                            <div class="contact-page-section ">

                                <div class="row contact-address-section">
                                    <div class="col-md-4 pl-0">
                                        <div class="contact-info contact-address">
                                            <i class="fa fa-map-marker"></i>
                                            <h4>Address</h4>
                                            <p>SACRED HEART HIGHER SECONDARY SCHOOL<br></p>
                                            <p>GAURA BARICK CHAWANI, 4 Cantt Road Sitapur – 261001</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="contact-info contact-phone">
                                            <i class="fa fa-phone"></i>
                                            <h4>Phone Number</h4>
                                            <a href="tel:+05862-270096"><i class="fa fa-mobile" aria-hidden="true"></i> +05862-270096</a>

                                        </div>
                                    </div>
                                    <div class="col-md-4 pr-0">
                                        <div class="contact-info contact-email">
                                            <i class="fa fa-envelope"></i>
                                            <h4>Email Address</h4>
                                            <a href="shpschool%40yahoo.html">
                                                <p>sacredheart1954sitapur@gmail.com</p>
                                            </a>
                                            <a href="#">
                                                <p> sacredheartsitapur.org</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="row contact-us-map">
                                    <div class="col-md-6" style="float:left">
                                        <h3>Leave Comment</h3>
                                        <div id="form-messages"></div>
                                        <form id="" method="post" action="#">
                                            <fieldset>

                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Name*</label>
                                                            <input name="fname" id="fname" class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Phone No.</label>
                                                            <input name="lname" id="lname" class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Email*</label>
                                                            <input name="email" id="email" class="form-control" type="email">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="form-group">
                                                            <label>City</label>
                                                            <input name="subject" id="subject" class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Message *</label>
                                                            <textarea cols="40" rows="6" id="message" name="message" class="textarea form-control"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-0 text-center">
                                                    <input class="btn-send c-button" type="submit" value="Submit">
                                                </div>


                                            </fieldset>
                                        </form>
                                    </div>
                                    <div class="col-md-6" style="float:left">
                                        <h3>Reach Us</h3>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3508.521405638178!2d79.42954301440228!3d28.433694699804676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39a0063191d360c7%3A0x93eac64e878fabb2!2sSacred%20Hearts%20Senior%20Secondary%20Public%20School%20.!5e0!3m2!1sen!2sin!4v1575961145149!5m2!1sen!2sin" width="530" height="336" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
</section>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br><br>
<br><br>
<br>
<?php get_footer(); ?>