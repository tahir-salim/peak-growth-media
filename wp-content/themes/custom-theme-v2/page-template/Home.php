<?php /** * Template Name: Home Template */ ?>
<?php $banner_section = get_field('banner_section');?>
<?php $first_section = get_field('first_section');?>
<?php $second_section = get_field('second_section');?>
<?php $third_section = get_field('third_section');?>
<?php $fourth_section = get_field('fourth_section');?>
<?php $fifth_section = get_field('fifth_section');?>



<?php get_header(); ?>
<section class="mainBanner"
    style="background-image:url(<?php echo get_template_directory_uri();?>/assets/images/banner/bg-banner.jpg); ">
    <div class="container">
        <div class="banner-bg" style="background: url(<?php echo $banner_section['image_1'];?>) top / cover no-repeat;">
            <div class="row">
                <div class="col-md-12 wow bounceIn">
                    <div class="mb-cnt">
                        <h4><?php echo $banner_section['h_1'];?></h4>
                        <h1><?php echo $banner_section['h_2'];?></h1>
                        <h4 class="head-left"><?php echo $banner_section['h_3'];?></h4>
                        <p><?php echo $banner_section['content'];?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 wow fadeInUp">
                <div class="videoBanner">
                    <a href="<?php echo $banner_section['image_2'];?>" data-fancy="video"><img
                            src="<?php echo $banner_section['image_3'];?>" alt=""></a>
                    <figure><img src="<?php echo $banner_section['image_2'];?>" alt=""></figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner-end -->
<section class="sec-two animate_number">
    <div class="container">
        <div class="sec-title wow fadeInDown">
            <h2 class="main-head"><?php echo $first_section['heading'];?></h2>
        </div>
        <div class="row">
            <?php $box_list = $first_section['box_list'];?>
            <?php foreach ($box_list as $boxlist) {?>
            <div class="col-md-3 wow zoomIn">
                <div class="s2-content">
                    <h4><?php echo $boxlist['heading']; ?></h4>
                    <span><?php echo $boxlist['para']; ?></span>
                    <p><?php echo $boxlist['content']; ?></p>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>
<section class="sec-three" id="services">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-3 wow fadeInLeft">
                <div class="s3-content">
                    <h2 class="main-head"><?php echo $second_section['heading'];?></h2>
                    <p><?php echo $second_section['content'];?></p>
                    <a href="<?php echo $second_section['b_link'];?>"
                        class="theme-btn"><?php echo $second_section['b_text'];?></a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row g-0 text-center">

                    <?php    $x=1;  $args = array( 'post_type' => 'service' , 'posts_per_page' => '3','post_status' => 'publish','order'=>'ASC',); $index_query = new WP_Query($args); while ($index_query->have_posts()) : $index_query->the_post(); ?>
                    <div class="col-md-4 wow bounceIn">
                        <div class="s3_card">
                            <figure><img src="<?php the_post_thumbnail_url() ;?>" alt=""></figure>
                            <h5><?php the_title() ;?></h5>
                            <?php the_excerpt() ;?>
                            <a href="#">read more</a>
                        </div>
                    </div>
                    <?php $x++; endwhile; wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sec-four">
    <div class="container">
        <div class="sec-title wow fadeInDown">
            <h2 class="main-head"><?php echo $third_section['heading'];?></h2>
            <p><?php echo $third_section['content'];?></p>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="industry-list">
                    <?php $box_list = $third_section['box_list'];?>
                    <?php foreach ($box_list as $boxlist) {?>
                    <li class="wow zoomIn">
                        <figure><img src="<?php echo $boxlist['image']; ?>" alt=""></figure>
                        <h4><?php echo $boxlist['heading']; ?></h4>
                        <a href="<?php echo $boxlist['b_link']; ?>"><?php echo $boxlist['b_text']; ?></a>
                    </li>
                    <?php }?>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="sec-five" id="cases">
    <div class="s5-inner-cont">
        <div class="container-fluid">
            <div class="sec5-title">
                <div class="row">
                    <div class="col-md-6 wow fadeInLeft">
                        <div class="s4Heading">
                            <h2 class="main-head"><?php echo $fourth_section['heading'];?></h2>
                            <p><?php echo $fourth_section['content'];?></p>
                        </div>
                    </div>
                    <div class="col-md-6 text-center text-lg-end wow fadeInRight">
                        <a href="<?php echo $fourth_section['b_link'];?>"
                            class="theme-btn"><?php echo $fourth_section['b_text'];?></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 wow fadeInRight">
                    <ul class="cases-slider">
                        <?php    $x=1;  $args = array( 'post_type' => 'case' , 'posts_per_page' => '5','post_status' => 'publish','order'=>'ASC',); $index_query = new WP_Query($args); while ($index_query->have_posts()) : $index_query->the_post(); ?>
                        <li>
                            <div class="case-card">
                                <figure><img src="<?php the_post_thumbnail_url() ;?>" alt=""></figure>
                                <div class="content">
                                    <h5><?php the_title() ;?></h5>
                                    <a href="#"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </li>
                        <?php $x++; endwhile; wp_reset_query(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="btn-case text-center wow fadeInUp">
        <a href="<?php echo $second_section['b_link'];?>" class="theme-btn"><?php echo $second_section['b_text'];?></a>
    </div>
</section>
<section class="sec-six" id="faqs">
    <div class="container">
        <div class="sec-title wow fadeInDown">
            <h2 class="main-head"><?php echo $fifth_section['heading'];?></h2>
            <p><?php echo $fifth_section['content'];?></p>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="accordion-list">
                    <?php $box_list = $fifth_section['box_list'];?>
                    <?php $x=1; foreach ($box_list as $boxlist) {?>
                    <li class="<?php if ($x==1) {echo 'active';}?> wow zoomIn">
                        <h3><?php echo $boxlist['heading']; ?>"</h3>
                        <div class="answer">
                            <p><?php echo $boxlist['content']; ?>"</p>
                        </div>
                    </li>
                    <?php $x++;}?>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="sec-seven">
    <div class="container">
        <div class="row">
            <div class="col-md-12 wow bounceInUp">
                <div class="content">
                    <h3><?php echo get_field('heading');?></h3>
                    <a href="<?php echo $second_section['b_link'];?>"
                        class="theme-btn"><?php echo $second_section['b_text'];?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>