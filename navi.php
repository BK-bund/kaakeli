<nav class="navbar navbar-default">
  <div class="container nav-container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar top-bar"></span>
        <span class="icon-bar middle-bar"></span>
        <span class="icon-bar bottom-bar"></span>
        <img class="img-responsive toogler" src="<?php bloginfo( 'template_url' ); ?>/img/00_MobNavi_Pfeil-oben.png"  alt="Pfeil">
      </button>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'collapse navbar-collapse', 'container_id' => 'navbar-collapse-1', 'menu_class'=>'nav navbar-nav', 'menu_id'=>'navbar-collapse-1-menu', 'items_wrap'=> '<ul id="%1$s" class="%2$s">%3$s</ul>'  ) );?> 
    
    <!--<div class="collapse navbar-collapse" id="navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="reiter reiter-grau"><a href="/" title="Home">Start</a></li>
        <li class="reiter reiter-grau"><a href="/ueber-uns/" title="Über uns">Über uns</a></li>
        <li class="reiter reiter-grau"><a href="/projekte/" title="Projekte">Projekte</a></li>
        <li class="reiter reiter-grau"><a href="/kalender/" title="Kalender">Kalender</a></li>
        <li class="reiter reiter-grau"><a href="/bk-nachrichten/" title="Publikationen">Publikationen</a></li>
        
        <li class="dropdown reiter-grau">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">BK-Nachrichten<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="reiter-grau"><a href="/bk-nachrichten/" title="Lesen">Lesen</a></li>
            <li class="reiter-grau"><a href="/pdb_signup/" title="Abbonieren">Abbonieren</a></li>
          </ul>
        </li>
        -->
        <!--
        <li class="dropdown reiter-grau">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Intern<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="reiter-grau"><a href="/pdb_link/">Adresse ändern</a></li>
            <li class="reiter-grau"><a href="/pdb_list/">Adressbuch lesen</a></li>
          </ul>
        </li>
      </ul>
      -->
      <!--
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      -->
    <!--</div> /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
