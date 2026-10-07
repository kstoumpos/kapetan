<?php
/**
 * The front page template — Kapetan homepage.
 * Section markup and copy are carried over verbatim from the approved
 * static build; only image paths are swapped for theme asset URIs and
 * the case-study card links resolve to whichever Page uses the
 * "Case Study" template.
 *
 * @package Kapetan
 */

$img = get_template_directory_uri() . '/assets/images/';
$case_study_url_1 = esc_url( kapetan_case_study_url_by_slug( 'case-study-1' ) );
$case_study_url_2 = esc_url( kapetan_case_study_url_by_slug( 'case-study-2' ) );
$case_study_url_3 = esc_url( kapetan_case_study_url_by_slug( 'case-study-3' ) );

get_header();
?>

  <!-- ===================== HERO ===================== -->
  <section id="top" class="relative">
    <div class="relative h-[640px] md:h-[1130px] w-full overflow-hidden">
      <img id="hero-bg-img" src="<?php echo esc_url( $img . 'hero-bg.webp' ); ?>" alt="Container ship at sea" class="absolute inset-0 w-full h-full object-cover" fetchpriority="high" decoding="async" />
      <div class="absolute inset-0 bg-gradient-to-r from-navy-900/50 via-navy-900/15 to-transparent"></div>

      <div class="reveal relative h-full max-w-[1800px] mx-auto px-6 md:px-2 flex flex-col justify-start pt-32 md:pt-[300px]">
        <h1 id="hero-heading" class="h1-display text-white uppercase max-w-3xl">
          We learned shipping<br />
          so you don&rsquo;t have<br />
          to explain it.
        </h1>
        <p class="text-body text-white/90 md:text-[18px] mt-6">Maritime Marketing Agency</p>

        <div class="flex flex-wrap gap-4 mt-8">
          <a href="#work" class="inline-flex items-center border border-white text-white text-section-title font-medium px-6 py-3 rounded-sm hover:bg-white hover:text-navy-900 hover:-translate-y-0.5 hover:shadow-lg transition-all duration-200">
            See Our Work
          </a>
          <a href="#contact" class="inline-flex items-center bg-navy-900 text-white text-section-title font-medium px-6 py-3 rounded-sm hover:bg-brand hover:-translate-y-0.5 hover:shadow-lg transition-all duration-200">
            Start a Brief
          </a>
        </div>

        <!-- audience toggle -->
        <div class="reveal reveal-delay-1 inline-block self-start bg-brand mt-10 mb-10 md:mt-56 md:mb-40">
          <div id="audience-toggle" role="tablist" aria-label="Who we work with" class="grid grid-cols-1 lg:grid-cols-3 text-body font-medium">
            <button type="button" role="tab" aria-selected="true" data-audience="shipping" class="audience-tab text-white text-center whitespace-nowrap px-8 py-6">Shipping Companies</button>
            <button type="button" role="tab" aria-selected="false" data-audience="providers" class="audience-tab text-white text-center whitespace-nowrap px-8 py-6">Maritime Service Providers</button>
            <button type="button" role="tab" aria-selected="false" data-audience="greek-market" class="audience-tab text-white text-center whitespace-nowrap px-8 py-6">Entering the Greek Market</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== NAVIGATING GROWTH ===================== -->
  <section class="bg-white py-20 md:py-28">
    <div class="reveal max-w-[1800px] mx-auto px-6 md:px-2 text-center">
      <h2 class="h2-display text-navy-900">Navigating Growth. Together.</h2>
      <p class="text-body max-w-3xl mx-auto mt-6 text-navy-900/70 leading-relaxed">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
        in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
      </p>
    </div>
  </section>

  <!-- ===================== WHO WE ARE ===================== -->
  <section id="who-we-are" class="bg-white pb-20 md:pb-28">
    <div class="reveal max-w-[1800px] mx-auto px-6 md:px-2">
      <p class="eyebrow text-section-title font-medium text-navy-900/60">WHO WE ARE</p>
      <div class="mt-6 flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6">
        <h2 id="who-we-are-heading" class="h3-display text-brand uppercase max-w-4xl">
          Greece leads the global shipping industry.
          Yet most maritime companies remain invisible
          in the modern marketplace.
          <span class="block font-bold">Kapetan is here to change that.</span>
        </h2>
        <a href="#services" class="group shrink-0 inline-flex items-center gap-2 text-brand text-section-title font-medium transition-colors">
          <span aria-hidden="true" class="inline-block transition-transform duration-200 group-hover:translate-x-1">&rarr;</span> View More
        </a>
      </div>
    </div>
  </section>

  <!-- ===================== SERVICES ===================== -->
  <?php
  $svc_slides = array(
    array(
      'key'        => 'build',
      'label'      => 'Build Your Brand',
      'tagline'    => 'Brand Strategy &middot; Identity Design &middot; Vessel Livery &middot; Funnel Stencils &middot; Business Cards &middot; Brochures &middot; Roll-Ups &middot; Print Collateral',
      'body'       => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
      'main_img'   => 'service-tanker-left.webp',
      'main_alt'   => 'Oil tanker',
      'accent_img' => 'service-tanker-right.webp',
      'accent_alt' => 'Tanker at sea',
    ),
    array(
      'key'        => 'reach',
      'label'      => 'Reach Your Market',
      'tagline'    => 'Market Research &middot; Channel Strategy &middot; Media Planning &middot; Paid Campaigns &middot; SEO &amp; SEM &middot; Analytics &amp; Reporting',
      'body'       => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
      'main_img'   => 'case-study-2.webp',
      'main_alt'   => 'Client project — container terminal',
      'accent_img' => null,
      'accent_alt' => '',
    ),
    array(
      'key'        => 'tell',
      'label'      => 'Tell Your Story',
      'tagline'    => 'Content Strategy &middot; Copywriting &middot; Photography &middot; Videography &middot; Case Studies &middot; Thought Leadership',
      'body'       => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
      'main_img'   => 'signals-night.webp',
      'main_alt'   => 'Port cranes at night',
      'accent_img' => null,
      'accent_alt' => '',
    ),
    array(
      'key'        => 'create',
      'label'      => 'Create The Visual',
      'tagline'    => 'Art Direction &middot; Motion Graphics &middot; Social Creative &middot; Web Design &middot; Packaging &middot; Signage',
      'body'       => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
      'main_img'   => 'case-study-1.webp',
      'main_alt'   => 'Client project — dry dock at sunrise',
      'accent_img' => null,
      'accent_alt' => '',
    ),
    array(
      'key'        => 'impact',
      'label'      => 'Make An Impact',
      'tagline'    => 'Campaign Launches &middot; Events &amp; Activations &middot; PR &amp; Media Relations &middot; Partnerships &middot; Sponsorships &middot; Performance Tracking',
      'body'       => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
      'main_img'   => 'case-study-3.webp',
      'main_alt'   => 'Client project — port at dusk',
      'accent_img' => null,
      'accent_alt' => '',
    ),
  );
  ?>
  <section id="services" class="bg-white">

    <div class="reveal max-w-[1800px] mx-auto px-6 md:px-2 py-16 md:py-20">
      <div class="overflow-hidden">
        <div id="svc-track" class="flex transition-transform duration-500 ease-out">
          <?php foreach ( $svc_slides as $i => $slide ) : ?>
          <div class="svc-slide w-[80%] shrink-0 grid grid-cols-1 <?php echo $slide['accent_img'] ? 'lg:grid-cols-[1fr_1.1fr_auto]' : 'lg:grid-cols-[1fr_1.1fr]'; ?> gap-0 items-stretch" <?php echo $i === 0 ? '' : 'aria-hidden="true"'; ?>>
            <img src="<?php echo esc_url( $img . $slide['main_img'] ); ?>" alt="<?php echo esc_attr( $slide['main_alt'] ); ?>" class="w-full lg:max-w-[70%] justify-self-end h-64 lg:h-[420px] object-cover" loading="lazy" decoding="async" />

            <div class="bg-white px-0 lg:px-4 py-8 lg:py-0 flex flex-col justify-center">
              <p class="eyebrow text-section-title font-medium text-navy-900/60">SERVICES</p>
              <h2 class="h2-display text-brand mt-3"><?php echo esc_html( $slide['label'] ); ?></h2>
              <p class="svc-tagline text-navy-900/70 mt-4 max-w-[538px]"><?php echo $slide['tagline']; ?></p>
              <p class="text-body text-navy-900/70 mt-5 leading-relaxed max-w-[538px]"><?php echo esc_html( $slide['body'] ); ?></p>
              <a href="#" class="group inline-flex items-center gap-2 text-brand text-section-title font-medium mt-6 transition-colors">
                <span aria-hidden="true" class="inline-block transition-transform duration-200 group-hover:translate-x-1">&rarr;</span> View More
              </a>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

      <!-- sub-nav tabs (slider controls) — sticky to the top of the viewport so they stay
         reachable the whole time the visitor is scrolling through this section -->
      <div id="svc-tabs-wrap" class="sticky top-0 z-20 bg-white/95 backdrop-blur border-b border-navy-900/10">
          <div id="svc-tabs" class="max-w-[1800px] mx-auto px-6 md:px-2 flex flex-wrap items-center justify-center gap-2 md:gap-3 py-4 md:py-5" role="tablist">
              <?php foreach ( $svc_slides as $i => $slide ) : ?>
              <button type="button" data-index="<?php echo $i; ?>" role="tab" aria-selected="<?php echo $i === 0 ? 'true' : 'false'; ?>" class="svc-tab-btn <?php echo $i === 0 ? 'bg-brand text-white font-medium' : 'text-navy-900/70 hover:text-brand font-normal'; ?> text-body px-5 py-2.5 transition-colors"><?php echo esc_html( $slide['label'] ); ?></button>
              <?php endforeach; ?>
          </div>
      </div>
  </section>

  <!-- ===================== PARTNER LOGOS ===================== -->
  <section class="bg-navy-900 py-12 md:py-14 overflow-hidden">
    <div class="reveal marquee-wrap max-w-[1800px] mx-auto">
      <div class="marquee-track flex items-center w-max gap-x-16 md:gap-x-20">
        <img src="<?php echo esc_url( $img . 'logo-naftosol.webp' ); ?>" alt="Naftosol Marine Maintenance" class="h-[108px] md:h-[132px] w-auto object-contain opacity-90 hover:opacity-100 hover:scale-110 transition-all duration-300" loading="lazy" decoding="async" />
        <img src="<?php echo esc_url( $img . 'logo-resolute.webp' ); ?>" alt="Resolute" class="h-[84px] md:h-[108px] w-auto object-contain opacity-90 hover:opacity-100 hover:scale-110 transition-all duration-300" loading="lazy" decoding="async" />
        <img src="<?php echo esc_url( $img . 'logo-igmar.webp' ); ?>" alt="Igmar Group" class="h-[96px] md:h-[120px] w-auto object-contain opacity-90 hover:opacity-100 hover:scale-110 transition-all duration-300" loading="lazy" decoding="async" />
        <img src="<?php echo esc_url( $img . 'logo-tfx.webp' ); ?>" alt="TFX Shipbroking" class="h-[108px] md:h-[132px] w-auto object-contain opacity-90 hover:opacity-100 hover:scale-110 transition-all duration-300" loading="lazy" decoding="async" />
        <img src="<?php echo esc_url( $img . 'logo-nereus.webp' ); ?>" alt="Nereus Digital Bunkers" class="h-[84px] md:h-[108px] w-auto object-contain opacity-90 hover:opacity-100 hover:scale-110 transition-all duration-300" loading="lazy" decoding="async" />
        <img src="<?php echo esc_url( $img . 'logo-naftosol.webp' ); ?>" alt="" aria-hidden="true" class="h-[108px] md:h-[132px] w-auto object-contain opacity-90 hover:opacity-100 hover:scale-110 transition-all duration-300" loading="lazy" decoding="async" />
        <img src="<?php echo esc_url( $img . 'logo-resolute.webp' ); ?>" alt="" aria-hidden="true" class="h-[84px] md:h-[108px] w-auto object-contain opacity-90 hover:opacity-100 hover:scale-110 transition-all duration-300" loading="lazy" decoding="async" />
        <img src="<?php echo esc_url( $img . 'logo-igmar.webp' ); ?>" alt="" aria-hidden="true" class="h-[96px] md:h-[120px] w-auto object-contain opacity-90 hover:opacity-100 hover:scale-110 transition-all duration-300" loading="lazy" decoding="async" />
        <img src="<?php echo esc_url( $img . 'logo-tfx.webp' ); ?>" alt="" aria-hidden="true" class="h-[108px] md:h-[132px] w-auto object-contain opacity-90 hover:opacity-100 hover:scale-110 transition-all duration-300" loading="lazy" decoding="async" />
        <img src="<?php echo esc_url( $img . 'logo-nereus.webp' ); ?>" alt="" aria-hidden="true" class="h-[84px] md:h-[108px] w-auto object-contain opacity-90 hover:opacity-100 hover:scale-110 transition-all duration-300" loading="lazy" decoding="async" />
      </div>
    </div>
  </section>

  <!-- ===================== KAPETAN SIGNALS ===================== -->
  <section id="signals" class="bg-white py-20 md:py-28">
    <div class="reveal max-w-[1800px] mx-auto px-6 md:px-2">
      <div class="grid grid-cols-1 lg:grid-cols-[1fr_1.4fr_1.4fr] gap-8 lg:gap-16 items-start">
        <p class="eyebrow text-section-title font-medium text-navy-900/60">KAPETAN SIGNALS</p>
        <div>
          <h2 class="h2-display text-navy-900">
            Weekly maritime intelligence,<br class="hidden sm:block" /> straight from Piraeus.
          </h2>
          <p class="text-section-title font-bold text-brand mt-4">11 JUNE 2026</p>
        </div>
        <p class="text-body text-navy-900/70 leading-relaxed">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
          enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
          ut aliquip ex ea commodo consequat.
        </p>
      </div>

      <div class="mt-10 rounded-sm overflow-hidden md:w-1/2 md:mx-auto">
        <img id="img-signals" src="<?php echo esc_url( $img . 'signals-night.webp' ); ?>" alt="Port cranes at night" class="w-full h-64 sm:h-96 md:h-[520px] object-cover" loading="lazy" decoding="async" />
      </div>

      <div class="flex items-center gap-4 mt-8 md:w-1/2 md:mx-auto">
        <span class="text-lg text-navy-900/60">Subscribe:</span>
        <a href="#" aria-label="Listen on Spotify" class="inline-block hover:scale-110 hover:opacity-80 transition-all duration-200">
          <img src="<?php echo esc_url( $img . 'badge-spotify.webp' ); ?>" alt="Listen on Spotify" class="h-16 md:h-[72px] w-auto object-contain" loading="lazy" decoding="async" />
        </a>
        <a href="#" aria-label="Listen on Apple Podcasts" class="inline-block hover:scale-110 hover:opacity-80 transition-all duration-200">
          <img src="<?php echo esc_url( $img . 'badge-apple.webp' ); ?>" alt="Listen on Apple Podcasts" class="h-16 md:h-[72px] w-auto object-contain" loading="lazy" decoding="async" />
        </a>
      </div>
    </div>
  </section>

  <!-- ===================== RESULTS / CASE STUDIES ===================== -->
  <section id="work" class="bg-[#4C79DD] py-20 md:py-28">
    <div class="max-w-[1800px] mx-auto px-6 md:px-2">
      <div class="reveal grid grid-cols-1 lg:grid-cols-[1fr_1.4fr_1.4fr] gap-6 lg:gap-16 items-start">
        <p class="eyebrow text-section-title font-medium text-white/70">CASE STUDIES</p>
        <h2 class="h2-display text-white">Results Are All That Matter.</h2>
        <p class="text-body text-white/80 leading-relaxed">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
          veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
          commodo consequat.
        </p>
      </div>

      <div class="reveal-group grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-12">
        <a href="<?php echo $case_study_url_1; ?>" class="group block transition-transform duration-300 hover:-translate-y-1">
          <div class="relative overflow-hidden rounded-sm">
            <img id="img-case1" src="<?php echo esc_url( $img . 'case-study-1.webp' ); ?>" alt="Client project — dry dock" class="w-full aspect-[3/4] object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" decoding="async" />
            <div class="absolute inset-0 bg-gradient-to-t from-navy-900/70 via-transparent to-transparent pointer-events-none"></div>
            <div class="absolute inset-x-0 bottom-0 flex items-center justify-between p-4">
              <p class="eyebrow text-section-title font-medium text-white">CLIENT NAME</p>
              <span aria-hidden="true" class="text-white text-xl inline-block transition-transform duration-200 group-hover:translate-x-1">&rarr;</span>
            </div>
          </div>
          <p class="text-section-title text-white/60 font-bold mt-4">Client Sector</p>
          <p class="text-body text-white/80 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
        </a>

        <a href="<?php echo $case_study_url_2; ?>" class="group block transition-transform duration-300 hover:-translate-y-1">
          <div class="relative overflow-hidden rounded-sm">
            <img id="img-case2" src="<?php echo esc_url( $img . 'case-study-2.webp' ); ?>" alt="Client project — container terminal" class="w-full aspect-[3/4] object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" decoding="async" />
            <div class="absolute inset-0 bg-gradient-to-t from-navy-900/70 via-transparent to-transparent pointer-events-none"></div>
            <div class="absolute inset-x-0 bottom-0 flex items-center justify-between p-4">
              <p class="eyebrow text-section-title font-medium text-white">CLIENT NAME</p>
              <span aria-hidden="true" class="text-white text-xl inline-block transition-transform duration-200 group-hover:translate-x-1">&rarr;</span>
            </div>
          </div>
          <p class="text-section-title text-white/60 font-bold mt-4">Client Sector</p>
          <p class="text-body text-white/80 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
        </a>

        <a href="<?php echo $case_study_url_3; ?>" class="group block transition-transform duration-300 hover:-translate-y-1">
          <div class="relative overflow-hidden rounded-sm">
            <img id="img-case3" src="<?php echo esc_url( $img . 'case-study-3.webp' ); ?>" alt="Client project — port at dusk" class="w-full aspect-[3/4] object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" decoding="async" />
            <div class="absolute inset-0 bg-gradient-to-t from-navy-900/70 via-transparent to-transparent pointer-events-none"></div>
            <div class="absolute inset-x-0 bottom-0 flex items-center justify-between p-4">
              <p class="eyebrow text-section-title font-medium text-white">CLIENT NAME</p>
              <span aria-hidden="true" class="text-white text-xl inline-block transition-transform duration-200 group-hover:translate-x-1">&rarr;</span>
            </div>
          </div>
          <p class="text-section-title text-white/60 font-bold mt-4">Client Sector</p>
          <p class="text-body text-white/80 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
        </a>
      </div>
    </div>
  </section>

  <!-- ===================== TESTIMONIAL ===================== -->
  <section class="ocean-gradient py-20 md:py-28">
    <div class="max-w-[1800px] mx-auto px-6 md:px-2">
      <div class="reveal grid grid-cols-1 lg:grid-cols-[1fr_1.4fr_1.4fr] gap-6 lg:gap-16 items-start">
        <p class="eyebrow text-section-title font-medium text-white/70">CLIENT STORIES</p>
        <h2 class="h2-display text-white">What they say about us.</h2>
        <p class="text-body text-white/80 leading-relaxed">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
          veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
          commodo consequat.
        </p>
      </div>

      <div class="reveal reveal-delay-1 bg-white rounded-2xl p-8 md:p-12 mt-12 max-w-4xl mx-auto" role="region" aria-roledescription="carousel" aria-label="Client testimonials">
        <div class="overflow-hidden">
          <div id="testimonial-track" class="flex transition-transform duration-500 ease-out">
            <div class="testimonial-slide w-full shrink-0">
              <p class="text-xl text-navy-900/80 leading-relaxed">
                &ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&rdquo;
              </p>
              <div class="mt-8">
                <p class="text-body font-bold text-navy-900">Name Surname</p>
                <p class="text-[11px] text-body text-navy-900/50 mt-1">Company Sector</p>
              </div>
            </div>
            <div class="testimonial-slide w-full shrink-0" aria-hidden="true">
              <p class="text-xl text-navy-900/80 leading-relaxed">
                &ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&rdquo;
              </p>
              <div class="mt-8">
                <p class="text-body font-bold text-navy-900">Name Surname</p>
                <p class="text-[11px] text-body text-navy-900/50 mt-1">Company Sector</p>
              </div>
            </div>
          </div>
        </div>

        <div class="flex items-center justify-end gap-3 mt-8">
          <div id="testimonial-dots" class="hidden sm:flex items-center gap-1.5" role="tablist" aria-label="Choose testimonial"></div>
          <div class="flex items-center gap-2 text-navy-900/60">
            <button id="testimonial-prev" type="button" aria-label="Previous testimonial" class="p-2 rounded-full hover:text-brand hover:bg-navy-900/5 hover:scale-110 transition-all duration-200">&larr;</button>
            <button id="testimonial-next" type="button" aria-label="Next testimonial" class="p-2 rounded-full hover:text-brand hover:bg-navy-900/5 hover:scale-110 transition-all duration-200">&rarr;</button>
          </div>
        </div>
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
