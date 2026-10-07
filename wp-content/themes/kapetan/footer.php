<?php
/**
 * The footer for the Kapetan theme.
 *
 * @package Kapetan
 */

$kapetan_home = is_front_page() ? '' : home_url( '/' );
?>
  <!-- ===================== FOOTER ===================== -->
  <footer class="bg-navy-900 pt-16 pb-8 border-t border-brand">
    <div class="reveal max-w-[1800px] mx-auto px-6 md:px-2">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
        <div class="flex items-start">
          <a href="<?php echo esc_url( $kapetan_home . '#top' ); ?>" class="inline-flex items-center hover:opacity-70 transition-opacity">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-white.webp' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="h-12 w-auto" loading="lazy" decoding="async" />
          </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-8">
          <div>
            <p class="text-body font-bold text-white mb-4">Services</p>
            <ul class="space-y-3 text-body text-brand">
              <li><a href="#" class="hover:text-white hover:underline underline-offset-2 transition-colors">Build Your Brand</a></li>
              <li><a href="#" class="hover:text-white hover:underline underline-offset-2 transition-colors">Reach Your Market</a></li>
              <li><a href="#" class="hover:text-white hover:underline underline-offset-2 transition-colors">Tell Your Story</a></li>
              <li><a href="#" class="hover:text-white hover:underline underline-offset-2 transition-colors">Create the Visual</a></li>
              <li><a href="#" class="hover:text-white hover:underline underline-offset-2 transition-colors">Make an Impact</a></li>
            </ul>
          </div>

          <div>
            <p class="text-body font-bold text-white mb-4">Work</p>
            <ul class="space-y-3 text-body text-white/60">
              <li><a href="<?php echo esc_url( $kapetan_home . '#who-we-are' ); ?>" class="hover:text-white hover:underline underline-offset-2 transition-colors">Who We Are</a></li>
              <li><a href="<?php echo esc_url( $kapetan_home . '#market-access' ); ?>" class="hover:text-white hover:underline underline-offset-2 transition-colors">Market Access</a></li>
              <li><a href="<?php echo esc_url( $kapetan_home . '#signals' ); ?>" class="hover:text-white hover:underline underline-offset-2 transition-colors">Kapetan Signals</a></li>
              <li><a href="<?php echo esc_url( $kapetan_home . '#insights' ); ?>" class="hover:text-white hover:underline underline-offset-2 transition-colors">Insights</a></li>
            </ul>
          </div>

          <div>
            <p class="text-body font-bold text-white mb-4">Contact</p>
            <ul class="space-y-3 text-body text-brand">
              <li><a href="mailto:elianna@kapetan.gr" class="hover:text-white hover:underline underline-offset-2 transition-colors">elianna@kapetan.gr</a></li>
              <li><a href="tel:+306970998304" class="hover:text-white hover:underline underline-offset-2 transition-colors">+30 6970 99 83 04</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="flex flex-col sm:flex-row items-center justify-between gap-4 mt-16 pt-8 text-[11px] text-body text-white/50">
        <div class="flex flex-wrap gap-6 text-brand">
          <a href="#" class="hover:text-white hover:underline underline-offset-2 transition-colors">Privacy Policy</a>
          <a href="#" class="hover:text-white hover:underline underline-offset-2 transition-colors">Terms and Conditions</a>
          <a href="#" class="hover:text-white hover:underline underline-offset-2 transition-colors">Cookie Preferences</a>
        </div>
      </div>
    </div>
  </footer>

<?php wp_footer(); ?>
</body>
</html>
