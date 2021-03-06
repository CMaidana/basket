<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package magazine-prime
 */

?>
</div><!-- #content -->

<!--cut from here-->
<footer id="colophon" class="site-footer primary-bg" role="contentinfo">
    <div class="container-fluid">
        <!-- end col-12 -->
        <div class="row">
        <?php $magazine_prime_footer_widgets_number = magazine_prime_get_option('number_of_footer_widget');
        if( 1 == $magazine_prime_footer_widgets_number ){
            $col = 'col-md-12';
        }
        elseif( 2 == $magazine_prime_footer_widgets_number ){
            $col = 'col-md-6';
        }
        elseif( 3 == $magazine_prime_footer_widgets_number ){
            $col = 'col-md-4';
        }
        elseif( 4 == $magazine_prime_footer_widgets_number ){
            $col = 'col-md-3';
        }
        else{
            $col = 'col-md-3';
        }
        if(is_active_sidebar( 'footer-col-one' ) || is_active_sidebar( 'footer-col-two' ) || is_active_sidebar( 'footer-col-three' ) || is_active_sidebar( 'footer-col-four' )){ ?>
            <section class="wrapper block-section footer-widget pt-40 pb-40">
                <div class="container overhidden">
                    <div class="contact-inner">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <?php if( is_active_sidebar( 'footer-col-one' ) && $magazine_prime_footer_widgets_number > 0 ) : ?>
                                        <div class="contact-list <?php echo esc_attr( $col );?>">
                                            <?php dynamic_sidebar( 'footer-col-one' ); ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if( is_active_sidebar( 'footer-col-two' ) && $magazine_prime_footer_widgets_number > 1 ) : ?>
                                        <div class="contact-list <?php echo esc_attr( $col );?>">
                                            <?php dynamic_sidebar( 'footer-col-two' ); ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if( is_active_sidebar( 'footer-col-three' ) && $magazine_prime_footer_widgets_number > 2 ) : ?>
                                        <div class="contact-list <?php echo esc_attr( $col );?>">
                                            <?php dynamic_sidebar( 'footer-col-three' ); ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if( is_active_sidebar( 'footer-col-four' ) && $magazine_prime_footer_widgets_number > 3 ) : ?>
                                        <div class="contact-list <?php echo esc_attr( $col );?>">
                                            <?php dynamic_sidebar( 'footer-col-four' ); ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php }?>

            <div class="copyright-area">
                <div class="site-info">
                    <h4 class="site-copyright">
                        <?php
                        $magazine_prime_copyright_text = magazine_prime_get_option('copyright_text');
                        if(!empty ($magazine_prime_copyright_text)){
                            echo wp_kses_post($magazine_prime_copyright_text);
                        }
                        ?>
                        <span class="sep"> | </span>
                        <?php printf('Desarrollado por <a href="https://cmaidana.herokuapp.com" target = "_blank" rel="designer">Christian Maidana </a>' ); ?>
                    </h4>
                </div><!-- .site-info -->
            </div>
        </div>
        <!-- end col-12 -->
    </div>
    <!-- end container -->
</footer>
</div><!-- #page -->
<a id="scroll-up"><i class="ion-ios-arrow-up"></i></a>
<?php wp_footer(); ?>

</body>
</html>
