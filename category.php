<?php
/**
* The category template file.
* 
* @package kale
*/
?>
<?php get_header(); ?>

<?php 
$kale_pages_sidebar = kale_get_option('kale_pages_sidebar'); 
$kale_pages_featured_image_show = kale_get_option('kale_pages_featured_image_show');
$kale_sidebar_size = kale_get_option('kale_sidebar_size');
?>

<h1 class="block-title"><span><?php single_cat_title(); ?></span></h1>
<div class="row two-columns">
    <!-- Main Column -->
    <?php if($kale_pages_sidebar == 1) { ?>
    <div class="main-column <?php if($kale_sidebar_size == 0) { ?> col-md-9 col-sm-8 <?php } else { ?> col-sm-9 <?php } ?>">
    <?php } else { ?>
    <div class="main-column col-md-12">
    <?php } ?>


<!-- Full Width Category -->
        <div class="full-width-category">
            
            <!-- Blog Feed -->
            <div class="blog-feed">
                <div class="row" data-fluid=".entry-title">
                <?php $kale_i = 0; 
                if ( have_posts() ) { 
                    while ( have_posts() ) : the_post(); ?>
                    
                    <div class="col-md-4"><?php $kale_entry = 'small'; include(locate_template('parts/entry.php')); $kale_i++; ?></div>
                    
                    <?php 
                    endwhile; 
                }?>
                </div>
            </div>
            <!-- /Blog Feed -->
            <?php if(get_next_posts_link() || get_previous_posts_link()) { ?>
            <hr />
            <div class="pagination-blog-feed">
                <?php if( get_next_posts_link() ) { ?><div class="previous_posts"><?php next_posts_link( esc_html__('Previous Posts', 'kale') ); ?></div><?php } ?>
                <?php if( get_previous_posts_link() ) { ?><div class="next_posts"><?php previous_posts_link( esc_html__('Next Posts', 'kale') ); ?></div><?php } ?>
            </div>
            <?php } ?>
        </div>
<!-- /Full Width Category -->

        
    </div>
    <!-- /Main Column -->

    <?php if($kale_pages_sidebar == 1)  get_sidebar();  ?>

</div>

<?php get_footer(); ?>