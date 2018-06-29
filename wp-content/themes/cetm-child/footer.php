<?php
/**
 * The template for displaying the footer.
 *
 * @package flatsome
 */

global $flatsome_opt;
?>

</main><!-- #main -->

<footer class="footer-cetm">
    <?php if (is_active_sidebar('sidebar-footer-2') && get_theme_mod('footer_2', 1)) : ?>
        <div class="container">
            <div class="row clearfix">
                <?php dynamic_sidebar('sidebar-footer-2'); ?>
            </div>
        </div>
    <?php endif; ?>
    <!--	--><?php //do_action('flatsome_footer'); ?>

</footer><!-- .footer-wrapper -->

</div><!-- #wrapper -->

<?php wp_footer(); ?>

</body>
</html>
