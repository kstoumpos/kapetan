<?php
/**
 * Single template for the "case_study" custom post type.
 *
 * WordPress loads this automatically for every Case Study entry —
 * no manual Page Template assignment needed. Section markup and copy
 * are carried over verbatim from the approved static build; only
 * image paths and internal links are made WordPress-aware.
 *
 * @package Kapetan
 */

$img = get_template_directory_uri() . '/assets/images/';
$home = home_url( '/' );

get_header();
?>

  <!-- ===================== CASE STUDY HERO ===================== -->
  <section id="top" class="relative">
    <div class="relative h-[520px] md:h-[640px] w-full overflow-hidden">
      <img id="hero-bg-img" src="<?php echo esc_url( $img . 'case-study-1.webp' ); ?>" alt="Client project — dry dock at sunrise" class="absolute inset-0 w-full h-full object-cover" fetchpriority="high" decoding="async" />
      <div class="absolute inset-0 bg-gradient-to-t from-navy-900/80 via-navy-900/25 to-navy-900/10"></div>

      <div class="reveal relative h-full max-w-[1800px] mx-auto px-6 md:px-2 flex flex-col justify-end pb-14 md:pb-20 pt-24">
        <p class="eyebrow text-section-title font-medium text-white/70">CASE STUDY</p>
        <h1 class="h1-display text-white uppercase max-w-3xl mt-4">Client Name</h1>
        <p class="text-body text-white/90 md:text-[18px] mt-4 max-w-xl">Client Sector &middot; Lorem Ipsum Service</p>
      </div>
    </div>

    <!-- meta strip -->
    <div class="bg-navy-900">
      <div class="reveal reveal-delay-1 max-w-[1800px] mx-auto grid grid-cols-2 sm:grid-cols-4 text-white divide-x divide-white/15">
        <div class="px-6 py-6 md:py-8">
          <p class="text-section-title text-white/50">Client</p>
          <p class="text-body font-bold mt-1">Client Name</p>
        </div>
        <div class="px-6 py-6 md:py-8">
          <p class="text-section-title text-white/50">Sector</p>
          <p class="text-body font-bold mt-1">Client Sector</p>
        </div>
        <div class="px-6 py-6 md:py-8">
          <p class="text-section-title text-white/50">Services</p>
          <p class="text-body font-bold mt-1">Lorem &middot; Ipsum &middot; Dolor</p>
        </div>
        <div class="px-6 py-6 md:py-8">
          <p class="text-section-title text-white/50">Year</p>
          <p class="text-body font-bold mt-1">2026</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== THE CHALLENGE ===================== -->
  <section class="bg-white py-20 md:py-28">
    <div class="reveal max-w-[1800px] mx-auto px-6 md:px-2">
      <div class="grid grid-cols-1 lg:grid-cols-[1fr_1.4fr] gap-8 lg:gap-16">
        <p class="eyebrow text-section-title font-medium text-navy-900/60">THE CHALLENGE</p>
        <div>
          <h2 class="h2-display text-navy-900 max-w-2xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
          <p class="text-body text-navy-900/70 mt-6 max-w-2xl leading-relaxed">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
            veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
            commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
            esse cillum dolore eu fugiat nulla pariatur.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== THE APPROACH — alternating blocks ===================== -->
  <section class="bg-white pb-20 md:pb-28">
    <div class="max-w-[1800px] mx-auto px-6 md:px-2 flex flex-col gap-16 md:gap-24">

      <div class="reveal grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-center">
        <img src="<?php echo esc_url( $img . 'service-tanker-left.webp' ); ?>" alt="Oil tanker underway" class="w-full h-72 md:h-[440px] object-cover rounded-sm order-1" loading="lazy" decoding="async" />
        <div class="order-2">
          <p class="eyebrow text-section-title font-medium text-navy-900/60">THE APPROACH</p>
          <h3 class="h3-display text-navy-900 mt-3">Lorem ipsum dolor sit amet.</h3>
          <p class="text-body text-navy-900/70 mt-5 leading-relaxed max-w-md">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
            veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
            commodo consequat.
          </p>
        </div>
      </div>

      <div class="reveal grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-center">
        <img src="<?php echo esc_url( $img . 'signals-night.webp' ); ?>" alt="Client project — operations by night" class="w-full h-72 md:h-[440px] object-cover rounded-sm order-1 lg:order-2" loading="lazy" decoding="async" />
        <div class="order-2 lg:order-1">
          <p class="eyebrow text-section-title font-medium text-navy-900/60">THE EXECUTION</p>
          <h3 class="h3-display text-navy-900 mt-3">Consectetur adipiscing elit.</h3>
          <p class="text-body text-navy-900/70 mt-5 leading-relaxed max-w-md">
            Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
            enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
            ut aliquip ex ea commodo consequat. Duis aute irure dolor in
            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.
          </p>
        </div>
      </div>

    </div>
  </section>

  <!-- ===================== RESULTS ===================== -->
  <section class="ocean-gradient py-20 md:py-28">
    <div class="max-w-[1800px] mx-auto px-6 md:px-2">
      <div class="reveal text-center">
        <p class="eyebrow text-section-title font-medium text-white/70">THE RESULTS</p>
        <h2 class="h2-display text-white mt-4">Results Are All That Matter.</h2>
      </div>

      <div class="reveal-group grid grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8 mt-14 text-center">
        <div>
          <p class="h1-display text-white">XX%</p>
          <p class="text-body text-white/70 mt-2">Lorem ipsum dolor</p>
        </div>
        <div>
          <p class="h1-display text-white">XXh</p>
          <p class="text-body text-white/70 mt-2">Lorem ipsum dolor</p>
        </div>
        <div>
          <p class="h1-display text-white">XX&times;</p>
          <p class="text-body text-white/70 mt-2">Lorem ipsum dolor</p>
        </div>
        <div>
          <p class="h1-display text-white">XX</p>
          <p class="text-body text-white/70 mt-2">Lorem ipsum dolor</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== PULL QUOTE ===================== -->
  <section class="bg-white py-20 md:py-28">
    <div class="reveal max-w-[1800px] mx-auto px-6 md:px-2">
      <div class="bg-white border border-navy-900/10 rounded-sm p-8 md:p-12 max-w-4xl mx-auto text-center">
        <p class="h3-display text-navy-900">
          &ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua.&rdquo;
        </p>
        <p class="text-body font-bold text-navy-900 mt-8">Name Surname</p>
        <p class="text-[11px] text-body text-navy-900/50 mt-1">Company Sector</p>
      </div>
    </div>
  </section>

  <!-- ===================== MORE CASE STUDIES ===================== -->
  <section class="bg-white pb-20 md:pb-28">
    <div class="reveal max-w-[1800px] mx-auto px-6 md:px-2">
      <div class="flex items-center justify-between gap-6">
        <h3 class="h3-display text-navy-900">More Work</h3>
        <a href="<?php echo esc_url( $home . '#work' ); ?>" class="group inline-flex items-center gap-2 text-navy-900 text-section-title font-medium hover:text-brand transition-colors">
          View All <span aria-hidden="true" class="inline-block transition-transform duration-200 group-hover:translate-x-1">&rarr;</span>
        </a>
      </div>

      <div class="reveal-group grid grid-cols-1 sm:grid-cols-2 gap-6 mt-10">
        <a href="<?php echo esc_url( $home . '#work' ); ?>" class="group block transition-transform duration-300 hover:-translate-y-1">
          <div class="overflow-hidden rounded-sm">
            <img src="<?php echo esc_url( $img . 'case-study-2.webp' ); ?>" alt="Client project — container terminal" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" decoding="async" />
          </div>
          <div class="flex items-center justify-between mt-4 text-navy-900">
            <p class="eyebrow text-section-title font-medium">CLIENT NAME</p>
            <span class="text-section-title text-navy-900/60">Service</span>
          </div>
          <p class="text-section-title text-navy-900/50 mt-1">Client Sector</p>
        </a>
        <a href="<?php echo esc_url( $home . '#work' ); ?>" class="group block transition-transform duration-300 hover:-translate-y-1">
          <div class="overflow-hidden rounded-sm">
            <img src="<?php echo esc_url( $img . 'case-study-3.webp' ); ?>" alt="Client project — port at dusk" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" decoding="async" />
          </div>
          <div class="flex items-center justify-between mt-4 text-navy-900">
            <p class="eyebrow text-section-title font-medium">CLIENT NAME</p>
            <span class="text-section-title text-navy-900/60">Service</span>
          </div>
          <p class="text-section-title text-navy-900/50 mt-1">Client Sector</p>
        </a>
      </div>
    </div>
  </section>

  <!-- ===================== CONTACT CTA ===================== -->
  <section id="contact" class="bg-navy-900 py-24 md:py-32">
    <div class="reveal max-w-[1800px] mx-auto px-6 md:px-2">
      <p class="eyebrow text-section-title font-medium text-white/60">CONTACT US</p>
      <h2 class="h1-display text-white uppercase mt-6 max-w-3xl">
        Every engagement<br />starts with<br />a conversation.
      </h2>
      <a href="mailto:elianna@kapetan.gr" class="inline-flex items-center bg-accent hover:bg-accent/90 hover:-translate-y-0.5 hover:shadow-lg text-white text-section-title font-medium px-6 py-3 rounded-sm mt-10 transition-all duration-200">
        Start a Brief
      </a>
    </div>
  </section>

<?php get_footer(); ?>
