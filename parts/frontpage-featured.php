<?php
/**
 * Frontpage - Featured Posts
 *
 * @package kale
 */
?>
<?php 
$kale_frontpage_featured_posts_show = kale_get_option('kale_frontpage_featured_posts_show');
if($kale_frontpage_featured_posts_show == 1) { 
    global $post;
    $kale_frontpage_featured_posts_heading = kale_get_option('kale_frontpage_featured_posts_heading');
    $kale_frontpage_featured_posts_post_1 = kale_get_option('kale_frontpage_featured_posts_post_1');
    $kale_frontpage_featured_posts_post_2 = kale_get_option('kale_frontpage_featured_posts_post_2');
    $kale_frontpage_featured_posts_post_3 = kale_get_option('kale_frontpage_featured_posts_post_3'); 
    $kale_entry = 'small'; ?>
    <!-- Frontpage Featured Posts -->
    <div class="frontpage-featured-posts">
        <h2 class="block-title"><span><?php echo esc_html($kale_frontpage_featured_posts_heading); ?></span></h2>
        <div class="row" data-fluid=".entry-title">

            <?php
            query_posts('posts_per_page=3&cat=1'); /*1, 2*/
            if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <div class="col-sm-4"><?php $kale_entry = 'small'; include(locate_template('parts/entry.php')); $kale_i++; ?></div>
            <?php endwhile; ?> <?php wp_reset_query(); /*4*/ ?>

        </div>
        <a href="/wordpress/category/our-products/" class="view-more-link">View More Products</a>
	</div>
	<!-- /Frontpage Featured Posts -->
<?php } ?>