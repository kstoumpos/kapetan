<?php
/**
 * The header for the Kapetan theme.
 * Markup is carried over verbatim from the approved static build;
 * only asset paths and internal links are made WordPress-aware.
 *
 * @package Kapetan
 */

// On any page other than the front page, in-page anchors ("#services" etc.)
// need to point back at the homepage first.
$kapetan_home = is_front_page() ? '' : home_url( '/' );
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php wp_head(); ?>
</head>
<body <?php body_class( 'bg-white text-navy-900 antialiased' ); ?>>
<?php wp_body_open(); ?>

  <!-- ===================== HEADER ===================== -->
  <header class="absolute top-0 left-0 right-0 z-30">
    <div class="max-w-[1800px] mx-auto px-6 md:px-2 flex items-center justify-between h-20 md:h-24">
      <a href="<?php echo esc_url( $kapetan_home . '#top' ); ?>" class="inline-flex items-center hover:opacity-70 transition-opacity">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-dark.webp' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="h-12 md:h-14 w-auto" />
      </a>

      <div class="flex items-center gap-8">
        <nav class="hidden lg:flex items-center gap-8 text-body text-navy-900">
          <a href="<?php echo esc_url( $kapetan_home . '#services' ); ?>" class="hover:text-brand transition-colors">Services</a>
          <a href="<?php echo esc_url( $kapetan_home . '#work' ); ?>" class="hover:text-brand transition-colors">Work</a>
          <a href="<?php echo esc_url( $kapetan_home . '#who-we-are' ); ?>" class="hover:text-brand transition-colors">Who We Are</a>
          <a href="<?php echo esc_url( $kapetan_home . '#market-access' ); ?>" class="hover:text-brand transition-colors">Market Access</a>
          <a href="<?php echo esc_url( $kapetan_home . '#signals' ); ?>" class="hover:text-brand transition-colors">Kapetan Signals</a>
          <a href="<?php echo esc_url( $kapetan_home . '#insights' ); ?>" class="hover:text-brand transition-colors">Insights</a>
        </nav>

        <a href="<?php echo esc_url( $kapetan_home . '#contact' ); ?>" class="hidden md:inline-flex items-center bg-accent hover:bg-accent/90 hover:-translate-y-0.5 hover:shadow-lg text-white text-body font-medium px-6 py-3 rounded-sm transition-all duration-200">
          Contact
        </a>

        <!-- mobile menu button -->
        <button id="menu-btn" class="lg:hidden text-navy-900" aria-label="Open menu">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
    </div>

    <!-- mobile menu -->
    <div id="mobile-menu" class="hidden lg:hidden bg-white/95 backdrop-blur border-t border-navy-900/10">
      <nav class="flex flex-col px-6 py-4 gap-4 text-navy-900 text-body font-medium">
        <a href="<?php echo esc_url( $kapetan_home . '#services' ); ?>" class="hover:text-brand transition-colors">Services</a>
        <a href="<?php echo esc_url( $kapetan_home . '#work' ); ?>" class="hover:text-brand transition-colors">Work</a>
        <a href="<?php echo esc_url( $kapetan_home . '#who-we-are' ); ?>" class="hover:text-brand transition-colors">Who We Are</a>
        <a href="<?php echo esc_url( $kapetan_home . '#market-access' ); ?>" class="hover:text-brand transition-colors">Market Access</a>
        <a href="<?php echo esc_url( $kapetan_home . '#signals' ); ?>" class="hover:text-brand transition-colors">Kapetan Signals</a>
        <a href="<?php echo esc_url( $kapetan_home . '#insights' ); ?>" class="hover:text-brand transition-colors">Insights</a>
        <a href="<?php echo esc_url( $kapetan_home . '#contact' ); ?>" class="inline-flex w-fit items-center bg-accent hover:bg-accent/90 text-white font-medium px-5 py-2.5 rounded-sm transition-colors">Contact</a>
      </nav>
    </div>
  </header>
