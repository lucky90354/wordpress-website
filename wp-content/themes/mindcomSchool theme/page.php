<?php get_header(); ?>
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
            <div class="col-lg-3 col-md-5">
                                    <?php dynamic_sidebar('primary-sidebar') ?>
            </div>
            <div class="col-lg-9">
                <h2 class="section-heading1"><?php the_title() ?></h2>
                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                ?>
                        <!-- Content -->
                        <article class="box post">
                            <a href="<?php the_permalink() ?>" class="image featured">
                                <?php the_post_thumbnail('post-thumbnails') ?></a>
                            <header>
                                <h2><?php the_title() ?></h2>
                            </header>
                            <?php the_content() ?>
                    <?php
                    }
                }
                    ?>
                        </article>
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