<?php
/**
* The template for displaying the footer
*
* @package kale
*/
?>

        <?php if(is_front_page() && !is_paged() ) { 
            get_template_part('parts/frontpage', 'large'); 
        } ?>

        <?php get_sidebar('footer'); ?>
        
        <!-- Footer -->
        <div class="footer">

            <div class="row is-flex">
                <div class="col-sm-6">
                    <h4>Our Adress</h4>
                    <p>Molodizhna street, 52</p>
                    <p>Ivano-Frankivsk</p>
                    <p>Ukraine</p>
                    <p>76018</p>
                    <p>phone: +380509320871, +380686478430</p>
                    <p>e-mail: greennaturaloils@ukr.net</p>
                </div>
            
                <div class="col-sm-6">
                    <?php if ( is_active_sidebar( 'footer-row-3-center' ) ) { ?>
                    <div class="footer-row-3-center"><?php dynamic_sidebar( 'footer-row-3-center' ); ?>
                    <?php } ?>
                    
                    <?php $kale_footer_copyright = kale_get_option('kale_footer_copyright'); ?>
                    <?php if($kale_footer_copyright) { ?>
                    <div class="footer-copyright copyright"><?php echo wp_kses_post($kale_footer_copyright); ?></div>
                    <?php } ?>
                </div>

            </div>
            
        </div>
        <!-- /Footer -->
        
    </div><!-- /Container -->
</div><!-- /Main Wrapper -->

<?php wp_footer(); ?>
</body>
</html>
