<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header id="site-header" class="site-header">
    <div class="header-content">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
            <?php if ( has_custom_logo() ) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <?php bloginfo( 'name' ); ?>
            <?php endif; ?>
        </a>

        <input type="checkbox" id="menu-toggle" class="menu-toggle" hidden>
        <label for="menu-toggle" class="hamburger-icon">
            <span></span>
            <span></span>
            <span></span>
        </label>

        <div class="nav-container">
            <nav class="primary-navigation" aria-label="<?php esc_attr_e( 'Primary menu', 'mexa' ); ?>">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'menu nav-menu',
                    'container'      => false,
                    'fallback_cb'    => function() {
                        echo '<ul class="menu nav-menu">';
                        echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Головна сторінка', 'mexa' ) . '</a></li>';
                        echo '<li><a href="#infrastructure">' . esc_html__( 'Інфраструктура', 'mexa' ) . '</a></li>';
                        echo '<li><a href="#token">' . esc_html__( 'Токен', 'mexa' ) . '</a></li>';
                        echo '<li><a href="#navigation">' . esc_html__( 'Навігатор по сайту', 'mexa' ) . '</a></li>';
                        echo '</ul>';
                    },
                ) );
                ?>
            </nav>
            <div class="header-icons">
                <?php if ( file_exists( MEXA_THEME_PATH . '/assets/images/x.png' ) ) : ?>
                    <a href="https://x.com" target="_blank" rel="noopener noreferrer">
                        <img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/x.png' ) ); ?>" alt="X">
                    </a>
                <?php endif; ?>
                <?php if ( file_exists( MEXA_THEME_PATH . '/assets/images/telegram.png' ) ) : ?>
                    <a href="https://t.me" target="_blank" rel="noopener noreferrer">
                        <img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/telegram.png' ) ); ?>" alt="Telegram">
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>
