<!DOCTYPE html>
<!-- Created By MindcomGroup -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="Mindcom consulting services">
    <meta name="keywords" content="">
    <meta name="author" content="mindcomgroup">
    <!-- Mobile Specific Metas 
        ================================================== -->
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body class="boxed_wrapper ltr">
    <!-- main header -->
    <header class="main-header style-one">
    <?php add_theme_support('post-thumbnails'); ?>
        <div class="header-lower">
                <div class="outer-box clearfix">
                <div class="logo-box pull-left">
                        <figure class="logo" onmouseleave="topBorderRemove()" onmouseover="topBorder()"><a href="/"><img src="/wp-content/uploads/2022/01/logo.png" alt="" height="70px" width="250px"></a></figure>
                </div>
                    <!-- <div class="navbar-brand">
                    <//?php
                    if (function_exists('the_custom_logo')) {
                        the_custom_logo();
                    }
                    ?>
                    </div> -->
                    <div class="menu-area pull-right">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="locator"><a href="/" onmouseleave="topBorderRemove()" onmouseover="topBorder()">Home</a></li> 
                                    <li class="dropdown locator" onmouseleave="topBorderRemove()" onmouseover="topBorder()"><a href="">WHO WE ARE</a>
                                        <div class="megamenu">
                                            <div class="row clearfix">
                                                    <h3>Company</h3>
                                                    <ul>
                                                        <li><a href="/about">About US</a></li>
                                                    </ul>
                                                    <ul>
                                                        <li><a href="/business-excellence">Business Excellence</a></li>
                                                    </ul>
                                                    <ul>
                                                        <li><a href="/affilications">Affiliations & Appraisals</a></li>
                                                    </ul>                                  
                                            </div>
                                            <div class="row clearfix" >
                                                 <h3>What we stand for</h3> 
                                                <ul>
                                                    <li><a href="/what we stand for">What we stand for</a></li>
                                                </ul>                                  
                                        </div>                                             
                                        </div>
                                    </li>
                                    <li class="dropdown locator" onmouseleave="topBorderRemove()" onmouseover="topBorder()"><a href="">What We Do</a>
                                        <div class="megamenu">
                                            <div class="row clearfix">
                                                    <h3>IT Services</h3>
                                                    <ul>
                                                        <li><a href="/erp-services">ERP Services</a></li>
                                                        <li><a href="/training-services">Training Services  </a></li>
                                                        <li><a href="/managedapplicationservices">Managed Application Services</a></li>
                                                        
                                                    </ul>
                                                    <ul>
                                                        <li><a href="/applicationdevelopmentsupports">Application Development & Support</a></li>
                                                        <li><a href="/rims">Remote Infrastructure Management Services</a></li>
                                                        <li><a href="/data-analytics">Data and Analytics </a></li>
                                                    </ul>                                  
                                            </div>
                                            <div class="row clearfix">
                                                <h3>Products</h3>
                                                <ul>
                                                    <li><a href="/education_erp">Education ERP</a></li>
                                                </ul> 
                                                <ul>
                                                    <li><a href="/hospitality-management">Hospitality Management</a></li>
                                                </ul> 
                                                <ul>
                                                    <li><a href="/supply-chain-solutions">Supply Chain Solutions</a></li>
                                                </ul>                                  
                                        </div>                                             
                                        </div>
                                    </li> 
                                    <li class="dropdown locator" onmouseleave="topBorderRemove()" onmouseover="topBorder()"><a href="">WHO WE SERVE</a>
                                        <div class="megamenu">
                                            <div class="row clearfix">
                                                    <h3>Industries</h3> 
                                                    <ul>
                                                        <li><a href="/automobile">Automobile</a></li>
                                                        <li><a href="/aviation">Aviation</a></li>
                                                        <li><a href="/industrialservices">Industrial Design & services</a></li>
                                                    </ul>
                                                    <ul>
                                                        <li><a href="/engineeringservices">Engineering Services</a></li>
                                                        <li><a href="/itServicesSolutions">IT Services & Solutions</a></li>
                                                    </ul>
                                                    <ul>
                                                        <li><a href="/education">Education </a></li>
                                                        <li><a href="/healthcare">Healthcare</a></li>
                                                    </ul>
                                                                                      
                                            </div>
                                        </div>
                                    </li>
                                    
                                    <li class="locator"><a href="/contact" onmouseleave="topBorderRemove()" onmouseover="topBorder()">contact</a></li>
                                </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!--sticky Header-->
        <div class="sticky-header">
                <div class="outer-box clearfix">
                    <div class="logo-box pull-left">
                        <figure class="logo" onmouseleave="topBorderRemove()" onmouseover="topBorder()"><a href="/"><img src="/wp-content/uploads/2022/01/logo.png" alt="" height="70px" width="250px"></a></figure>
                    </div>
                    <div class="menu-area pull-right">
                        <nav class="main-menu clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                </div>
                </div>
            </div>
        
    </header>
    <!-- main-header end -->

     <!-- Mobile Menu  -->
     <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>
        
        <nav class="menu-box">
            <div class="nav-logo"><a href="/"><img src="/wp-content/uploads/2022/01/logo.png" height="25px" width="70px"  alt="" title=""></a>
            </div>
            <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
        </nav>
    </div><!-- End Mobile Menu -->

