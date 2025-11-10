<?php
/**
 * Template for the home page.
 *
 * @package MEXA
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header();
?>

<main id="primary" class="site-main">
    <section class="hero">
        <div class="hero-content">
            <h1 class="h1"><?php esc_html_e( 'ІНФРАСТРУКТУРА МАЙНІНГУ', 'mexa' ); ?></h1>
            <h2><?php esc_html_e( 'НА ОСНОВІ ШТУЧНОГО ІНТЕЛЕКТУ', 'mexa' ); ?></h2>
            <h3><?php esc_html_e( 'Представляємо інноваційну інфраструктуру майнінгу, керовану АІ, що використовує протоколи blockDAG, масштабоване узагальнення Консенсусу Накамото.', 'mexa' ); ?></h3>
        </div>
        <?php if ( file_exists( MEXA_THEME_PATH . '/assets/images/hero.png' ) ) : ?>
        <div class="hero-image">
            <img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/hero.png' ) ); ?>" alt="<?php esc_attr_e( 'Ілюстрація інфраструктури майнінгу', 'mexa' ); ?>">
        </div>
        <?php endif; ?>
    </section>

    <section class="buttons">
        <a href="#" class="button gitbook"><?php esc_html_e( 'GitBook', 'mexa' ); ?></a>
        <a href="#" class="button telegram"><?php esc_html_e( 'Наш Телеграм Канал', 'mexa' ); ?></a>
    </section>
</main>

<?php
get_footer();
