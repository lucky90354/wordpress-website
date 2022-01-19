<?php get_header(); ?>
<!--
 Template Name: Exams
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
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {

        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }
    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-5">
                <?php dynamic_sidebar('primary-sidebar') ?>
            </div>
            <div class="col-lg-9">
                <h2 class="section-heading1"><strong>EXAMS</strong></h2>
                <div class="col-sm-6">
                    <div class="dataTables_length" id="wpdmmydls-0491587a9b846f9131c477101b98a5d4_length">
                        <label>Display
                            <select name="wpdmmydls-0491587a9b846f9131c477101b98a5d4_length" aria-control="wpdmmydls-0491587a9b846f9131c477101b98a5d4" class="form-control input-sm">
                                <option value="20">20</option>
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="-1">All</option>
                            </select>  downloads per page
                        </label>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div id="wpdmmydls-0491587a9b846f9131c477101b98a5d4_filter" class="dataTables_filter">
                    <label>Search
                            <input type="search" class="form-control input-sm" placeholder aria-controls="wpdmmydls-0491587a9b846f9131c477101b98a5d4">
                        </label>
                    </div>
                </div>
                <table>
                    <tr>
                        <th>Title</th>
                        <th>Categories</th>
                        <th>Update Date</th>
                        <th>Download</th>
                    </tr>
                    <tr>
                        <td class="" style="background-image: url(/wp-content/uploads/2021/11/pdf-image.png); background-size: 36px;
                        background-position: 5px 8px;
                        background-repeat: no-repeat;
                        padding-left: 52px;
                        line-height: normal;">
                            <a href="#">Exam Time Table For Class VI to IX & XI- 2020</a>
                            <br>
                            <span class="__dt_file_count small-txt"><i class="fa fa-files-o" style="content:\f0c5;"></i>&nbsp; 1 file(s)&nbsp;</span>
                            <span class="__dt_download_count small-txt"><i class="fa fa-download" style="content:\f019;">&nbsp; 2 downloads</i></span>
                        </td>
                        <td>
                            <a href="#">exam</a>
                        </td>
                        <td data-order="1635379200" style="vertical-align: middle !important;">
                            <span class="__dt_update_date">28th October 2021</span>
                        </td>
                        <td class="__dt_col_3 __dt_col __dt_col_download_link">
                            <a class="wpdm-download-link btn btn-primary" rel="nofollow" href="#" onclick="">
                                <i class></i>
                                Download
                            </a>
                        </td>
                    </tr>

                    <tr>
                        <td class="" style="background-image: url(/wp-content/uploads/2021/11/pdf-image.png); background-size: 36px;
                        background-position: 5px 8px;
                        background-repeat: no-repeat;
                        padding-left: 52px;
                        line-height: normal;">
                            <a href="#">Exam Time Table For Class I to V- 2020</a><br>
                            <span class="__dt_file_count small-txt"><i class="fa fa-files-o" style="content:\f0c5;"></i>&nbsp; 1 file(s)&nbsp;</span>
                            <span class="__dt_download_count small-txt"><i class="fa fa-download" style="content:\f019;">&nbsp; 2 downloads</i></span>
                        </td>
                        <td>
                            <a href="#">exam</a>
                        </td>
                        <td data-order="1635379200" style="vertical-align: middle !important;">
                            <span class="__dt_update_date">28th October 2021</span>
                        </td>
                        <td class="__dt_col_3 __dt_col __dt_col_download_link">
                            <a class="wpdm-download-link btn btn-primary" rel="nofollow" href="#" onclick="">
                                <i class></i>
                                Download
                            </a>
                        </td>
                    </tr>

                </table>
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