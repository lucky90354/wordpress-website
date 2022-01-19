<?php get_header() ?>
<!--
 Template Name: ViewGallery
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

<section>
<div class="container">
  <div class="row row-cols-3">
    <div class="col"> <?php echo do_shortcode("[print_gllr id=405]"); ?></div>
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
<br>
<br>
<br>
<br>
<br>
<?php get_footer(); ?>