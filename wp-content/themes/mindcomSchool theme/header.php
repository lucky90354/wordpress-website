<!DOCTYPE html>
<html class="no-js">

<head>
    <!-- Basic Page Needs
        ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="Mindcom Consulting Service">
        <meta name="keywords" content="">
        <meta name="author" content="mindcomgroup">
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body>
    <!--==================================================
        Header Section Start
        ================================================== -->
        <!--TOP BAR -->
        <header id="top-bar" class="navbar-fixed-top animated-header">
        <?php add_theme_support('post-thumbnails'); ?>
        <div class="header-top-area">
                    <div class="container">
                        <div class="top-bar-border">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="header-top-left">
                                        <ul>
                                            <li><i class="fa fa-phone" aria-hidden="true"></i><a href="Tel:+919457044950"> +91-8954370477</a></li>
                                            <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> shpschool@yahoo.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="header-top-right">
                                        <ul>
                                            <li><a href="/">Home</a></li>
                                            <li><a href="/gallery">Photo Gallery</a></li>
                                            <li><a href="/contact/">Contact Us</a></li>                        
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        <div class="container">
            <div class="navbar-header">
                <!-- responsive nav button -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- /responsive nav button -->

                <!-- logo -->
                <div class="navbar-brand">
                    <?php
                    if (function_exists('the_custom_logo')) {
                        the_custom_logo();
                    }
                    ?>
                </div>
                <!-- /logo -->
            </div>
            <!-- main menu -->
            <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <div class="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="/about-us/">About School</a></li>
                        <!-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">About School <span class="caret"></span></a>
                            <div class="dropdown-menu">
                                <ul class="mega-menu-area">
                                    <li>
                                        <a href="/fee-structure/">Know School</a>
                                        <a href="/tc-format-2/">Vision Mission</a>
                                        <a href="/talent-management-consulting/">Managing Director Message</a>
                                    </li>
                                    <li>
                                        <img src="/wp-content/uploads/2021/11/menu-tab-1.gif" style="margin: -60px 0 0 0; border: 2px solid #fff; padding: 2px;">
                                    s</li>
                                    <li>
                                        <a href="/talent-management-consulting/">Executive Director Message</a>
                                        <a href="/talent-management-consulting/">Principal Message</a>
                                        <a href="/talent-management-consulting/">Registration Certificate</a>
                                    </li>
                                </ul>
                            </div>
                        </li> -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Academic Programme <span class="caret"></span></a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a href="/methodology/">Methodology</a></li>
                                    <li><a href="/curriculum/">Curriculum</a></li>
                                    <li><a href="/admission/">admission</a></li>
                                    <li><a href="/talent-management-consulting/">Booklist</a></li>
                                    <li><a href="/talent-management-consulting/">Staff List</a></li>
                                    <li><a href="/talent-management-consulting/">School Toppers</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admission <span class="caret"></span></a>
                            <div class="dropdown-menu">
                                <ul>
                                    <!-- <li><a href="/it-services/">IT Services</a></li> -->
                                    <li><a href="/fee-structure/">Fee Structure</a></li>
                                    <li><a href="/tc-format-2/">TC-Verification</a></li>
                                    <li><a href="/syllabus/">Syllabus</a></li>
                                    <li><a href="/exams/">Exams</a></li>
                                    <li><a href="/results/">Results</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Infrastructure <span class="caret"></span></a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a href="/who-we-serve/">Campus</a></li>
                                    <li><a href="/partners-associates/">Library</a></li>
                                    <li><a href="/partners-associates/">Sports Facilities</a></li>
                                    <li><a href="/partners-associates/">Bus Facilities</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="/contact/">Contact Us</a></li>
                    </ul>
                </div>
            </nav>
            <!-- /main nav -->
        </div>
    </header>