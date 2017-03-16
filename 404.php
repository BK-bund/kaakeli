<?php get_header(); ?>
 
<?php get_template_part('navi' , ''); ?>

<div class="container page-container">
  <?php
  $requery = $wpdb->get_results($wp_query->request);

  if(count($requery) == 1 && $requery[0]->post_status == 'private'){
      //we have a single post and it is private
      echo('<h2>Diese Seite ist nicht öffendlich. Bitte melde dich an</h2>');
      wp_login_form();
  } else {
      //data empty or not private just kick out a normal 404
      echo('
      <h1>Dies ist nicht der Muli, den Ihr sucht.</h1>
      <img src="https://t2.ftcdn.net/jpg/00/22/40/57/500_F_22405731_qieHlnhCN5e9L9Q9ThZowDsArkIBdAnK.jpg" class="img-responsive" alt="Responsive image">
      <h3><a href="/home">Zurück zur Startseite</a><h3>
      <br><br><br><br><br>');
  } ?>
</div><!-- body --> 
<?php get_footer(); ?>
