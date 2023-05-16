<?php
/**
 * 
 * Template name: Front Page
 * The template for displaying home page
 *
 * This is the template that displays home page by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TECHiT-test
 */
get_header();

$page_id = get_the_ID();

?>

<?php the_content(); ?>
<main id="primary" class="site-main">
    <section class="heading">
        <h2><?php echo get_field('higher_education_header', $page_id); ?></h2>
        <span class="line">
            <hr class="first"><hr class="second">
        </span>
    </section>

    <section>
        <div class="site-wrapper">
            <div class="hostel-section">
                <div class="hostel-content">
                    <span class="head">
                        <h3><?php echo get_field('hostel', $page_id); ?></h3>
                    </span>
                    <h1><?php echo get_field('hostel_header', $page_id); ?></h1>
                    <p><?php echo get_field('hostel_paragraph', $page_id); ?></p>
                    <button class="btn"><a href="#">Get Started</a></button>
                </div>
                <div class="hostel-image">
                    <img src="<?php echo get_field('hostel_image', $page_id); ?>" alt="">
                    <img src="<?php echo get_field('hostel_icon', $page_id); ?>" alt="">
                </div>
            </div>

        </div>
    </section>

    <section>
        <div class="site-wrapper">
            <div class="campus-section">
                <div class="hostel-image">
                    <img src="<?php echo get_field('campus_image', $page_id); ?>" alt="">
                    <img src="<?php echo get_field('campus_icon', $page_id); ?>" alt="">
                </div>
                <div class="campus-content">
                    <span class="head">
                        <h3><?php echo get_field('campus', $page_id); ?></h3>
                    </span>
                    <h1><?php echo get_field('campus_header', $page_id); ?> </h1>
                    <p><?php echo get_field('campus_paragraph', $page_id); ?></p>
                    <button class="btn"><a href="#">Get Started</a></button>
                </div>
            </div>

        </div>
    </section>
</main>
<?php

get_footer();