<footer class="bs-docs-footer">
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="kontakt">
      <div class="container">
        <?php echo get_theme_mod( 'footer_text' ); ?>
        <hr class="featurette-divider fedi-dash">
        <div class="row">
          <div class="col-md-9">
            <?php
            if (get_theme_mod( 'github' ) != '') {
              if ( get_theme_mod( 'github_logo_white' )) {
                $logo = 'GitHub-Mark-Light-32px.png';
              } else {
                $logo = 'GitHub-Mark-32px.png';
              }
              echo '<a target="_blank" href=' . get_theme_mod( 'github' ) . '>
              <img src="' . get_template_directory_uri() . '/img/' . $logo . '" class="img-responsive github-icon" alt="GitHub-Icon" />
              </a>';
            }

            $theme = wp_get_theme();
            echo "Version " . $theme->get( 'Version' );
            ?>
            <br>
            Made with <a target="_blank" href="https://github.com/BK-bund/kaakeli">
            <?php
              $parent_theme = wp_get_theme(get_template());
              echo $parent_theme->get( 'Name' ) . "</a> Version " . $parent_theme->get( 'Version' );
            ?>
          </div>
        </div>
        <hr class="featurette-divider fedi-dash">
      </div>
      <div class="container" id="datenschutz-container-toogle">
        <div class="row">
          <div class="col-xs-10 col-sm-9">
          <a data-toggle="collapse" href="#datenschutz-collape" aria-expanded="false" aria-controls="datenschutz-collape">
            <h3 class="nomargin-top">Datenschutz&shy;bestimmungen</h3>
          </a>
        </div>
        <div class="col-xs-2 col-sm-3">
          <div class="pull-right">
            <button class="btn btn-default btn-lg datenschutz-toggle collapsed" type="button" data-toggle="collapse" data-target="#datenschutz-collape" aria-expanded="false" aria-controls="datenschutz-collape">
              <span class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span>
              <span class="glyphicon glyphicon-circle-arrow-down" aria-hidden="true"></span>
            </button>
            </div>
          </div>
        </div>
      </div>
      <div class="collapse" id="datenschutz-collape">
        <div class="container">
          <div class="row">
            <div class="col-md-9">
              <?php echo get_theme_mod( 'footer_dataprotection' ); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="impressum">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-9">
            <?php echo get_theme_mod( 'footer_imprint' ); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.min.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

<?php wp_footer(); ?>

</body>
</html>
