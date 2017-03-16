<!DOCTYPE html>
<html lang="de">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<meta name="referrer" content="no-referrer">

<title><?php wp_title(' - ', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<!--
<link rel="icon" href="https://dev.bk-bund-berlin.de/wp-content/themes/kaakeli/img/BK_Faviocn-192x192.ico" type="image/vnd.microsoft.icon">


<link rel="apple-touch-icon" sizes="180x180" href="https://dev.bk-bund-berlin.de/wp-content/themes/kaakeli/img/apple-touch-icon.png">

<link rel="icon" type="image/png" href="https://dev.bk-bund-berlin.de/wp-content/themes/kaakeli/img/favicon-32x32.png?v=1" sizes="32x32">
-->
<link rel="icon" type="image/png" href="https://dev.bk-bund-berlin.de/wp-content/themes/kaakeli/img/favicon-16x16.png?v=1" sizes="16x16">
<!--
<link rel="manifest" href="https://dev.bk-bund-berlin.de/wp-content/themes/kaakeli/img/manifest.json">

<link rel="mask-icon" href="https://dev.bk-bund-berlin.de/wp-content/themes/kaakeli/img/safari-pinned-tab.svg" color="#5bbad5">
<link rel="shortcut icon" href="https://dev.bk-bund-berlin.de/wp-content/themes/kaakeli/img/favicon-32x32.png?v=1">

<meta name="apple-mobile-web-app-title" content="BK Berlin">
<meta name="application-name" content="BK Berlin">
<meta name="msapplication-config" content="https://dev.bk-bund-berlin.de/wp-content/themes/kaakeli/img/browserconfig.xml">
<meta name="theme-color" content="#ffffff">
-->

<?php wp_head(); ?> 
</head>

<body class="custom-background">
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
