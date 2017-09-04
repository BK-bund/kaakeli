<footer class="bs-docs-footer">
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="kontakt">
      <div class="container">
        <?php echo get_theme_mod( 'footer_text' ); ?>
        <hr class="featurette-divider fedi-dash">
      </div>
    </div>
  </div>
  <div class="container" id="datenschutz-container-toogle">
    <div class="row">
      <div class="col-xs-9">
        <a data-toggle="collapse" href="#datenschutz-collape" aria-expanded="false" aria-controls="datenschutz-collape">
          <strong>Datenschutzbestimmungen</strong>
        </a>
      </div>
      <div class="col-xs-3">
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
            <strong>Analysedienste</strong>
            <p>
            Unsere Website verwendet Piwik, dabei handelt es sich um einen sogenannten Webanalysedienst. Piwik verwendet sog. „Cookies“, das sind Textdateien, die auf Ihrem Computer gespeichert werden und die unsererseits eine Analyse der Benutzung der Webseite ermöglichen. Zu diesem Zweck werden die durch den Cookie erzeugten Nutzungsinformationen (einschließlich Ihrer gekürzten IP-Adresse) an unseren Server übertragen und zu Nutzungsanalysezwecken gespeichert, was der Webseitenoptimierung unsererseits dient. Ihre IP-Adresse wird bei diesem Vorgang umge­hend anony­mi­siert, so dass Sie als Nutzer für uns anonym bleiben. Die durch den Cookie erzeugten Informationen über Ihre Benutzung dieser Webseite werden nicht an Dritte weitergegeben. Sie können die Verwendung der Cookies durch eine entsprechende Einstellung Ihrer Browser Software verhindern, es kann jedoch sein, dass Sie in diesem Fall gegebenenfalls nicht sämtliche Funktionen dieser Website voll umfänglich nutzen können.
            </p>
            <p>
            Wenn Sie mit der Spei­che­rung und Aus­wer­tung die­ser Daten aus Ihrem Besuch nicht ein­ver­stan­den sind, dann kön­nen Sie der Spei­che­rung und Nut­zung nachfolgend per Maus­klick jederzeit wider­spre­chen. In diesem Fall wird in Ihrem Browser ein sog. Opt-Out-Cookie abgelegt, was zur Folge hat, dass Piwik kei­ner­lei Sit­zungs­da­ten erhebt. Achtung: Wenn Sie Ihre Cookies löschen, so hat dies zur Folge, dass auch das Opt-Out-Cookie gelöscht wird und ggf. von Ihnen erneut aktiviert werden muss.
            </p>
            <strong>Widerspruch</strong>
            <iframe scrolling="no" style="height: 300px; width: 100%; overflow: scroll; border: 0;" src="https://piwik.bk-bund-berlin.de/index.php?module=CoreAdminHome&action=optOut&idsite=1&language=de"></iframe>

            <small><ins><a target="_blank" href="https://www.datenschutzbeauftragter-info.de/fachbeitraege/piwik-datenschutzkonform-einsetzen/">Quelle</a><ins></small>
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
