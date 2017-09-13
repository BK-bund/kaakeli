<?php get_header( "without-logo" ); ?>
  <div class="container nopadding">
    <a href="/" title="Home">
      <?php
      $custom_logo_id = get_theme_mod( 'custom_logo' );
      $custom_logo_src = wp_get_attachment_image_src( $custom_logo_id , 'full' )[0];

      $mobile_logo_id = get_theme_mod( 'mobile_logo' );
      $mobile_logo_src =  esc_url( $mobile_logo_id);
      if($custom_logo_src != null && $custom_logo_src != ''  ) {
        if($mobile_logo_src != null && $mobile_logo_src != ''  ) {
          echo "<img class=\"img-responsive visible-xs banner\" src=$mobile_logo_src  alt=\"Mobile Logo\">";
          echo "<img class=\"img-responsive hidden-xs banner\" src=$custom_logo_src  alt=\"Logo\">";
        } else {
          echo "<img class=\"img-responsive banner\" src=$custom_logo_src  alt=\"Logo\">";
        }
      }
      ?>
    </a>
  </div>
