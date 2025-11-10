<footer id="site-footer" class="site-footer">
    <div class="footer-content">
        <p>&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'Всі права захищені.', 'mexa' ); ?></p>
        <?php
        wp_nav_menu( array(
            'theme_location' => 'footer',
            'menu_class'     => 'menu footer-menu',
            'container'      => false,
            'depth'          => 1,
        ) );
        ?>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
