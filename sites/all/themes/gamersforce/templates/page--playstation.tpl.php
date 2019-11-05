<div id="playstation">
    <div class="tituloTop">
        <div class="container">
            <div class="logoTipo">
                <?php if ($logo): ?>
                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
                        <img class="gfLogo" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                    </a>
                <?php endif; ?>
            </div>
            <div class="principalesSponsors">
                <?php if (!empty($page['sponsors'])): ?>
                    <?php print render($page['sponsors']); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <header id="navbar" role="banner" class="<?php print $navbar_classes; ?>">
      <div class="container">
        <div class="navbar-header">
          <?php if (!empty($site_name)): ?>
          <a class="name navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
          <?php endif; ?>

          <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
          <div id="navegacion" class="navbar-collapse collapse">
            <nav role="navigation">
              <?php if (!empty($primary_nav)): ?>
                <?php print render($primary_nav); ?>
              <?php endif; ?>
              <?php if (!empty($secondary_nav)): ?>
                <?php print render($secondary_nav); ?>
              <?php endif; ?>
              <?php if (!empty($page['navigation'])): ?>
                <?php print render($page['navigation']); ?>
              <?php endif; ?>
            </nav>
          </div>
        <?php endif; ?>
      </div>
    </header>
    <div class="buscador-container container">
        <?php print render($page['buscador']); ?>
    </div>
    <div class="banner-container container">
        <!--<?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>-->
        <?php print render($page['banner']); ?>
    </div>

    <div class="main-container container">

      <header role="banner" id="page-header">
        <?php if (!empty($site_slogan)): ?>
          <p class="lead"><?php print $site_slogan; ?></p>
        <?php endif; ?>

        <?php print render($page['header']); ?>
      </header> <!-- /#page-header -->

      <div class="row">
        <?php if (!empty($page['noticias_sec'])): ?>
          <div class="col-sm-6 col-md-4">
            <?php print render($page['noticias_sec']); ?>
          </div> 
        <?php endif; ?>
        <?php if (!empty($page['review_sec'])): ?>
          <div class="col-sm-6 col-md-4">
            <?php print render($page['review_sec']); ?>
          </div>
        <?php endif; ?>
        <?php if (!empty($page['public_sec'])): ?>
          <div class="col-sm-12 col-md-4">
            <?php print render($page['public_sec']); ?>
          </div>
        <?php endif; ?>
      </div>
      
      <div class="row">
        <?php if (!empty($page['articulos_seccion'])): ?>
          <div class="col-sm-8">
            <?php print render($page['articulos_seccion']); ?>
          </div> 
        <?php endif; ?>
        <?php if (!empty($page['previos_sec'])): ?>
          <div class="col-md-4">
            <?php print render($page['previos_sec']); ?>
          </div> 
        <?php endif; ?>
      </div>
      
      <div class="row">

        <section<?php print $content_column_class; ?>>
          <?php if (!empty($page['highlighted'])): ?>
            <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
          <?php endif; ?>
          <a id="main-content"></a>
          <?php print $messages; ?>
          <?php if (!empty($page['help'])): ?>
            <?php print render($page['help']); ?>
          <?php endif; ?>
          <?php if (!empty($action_links)): ?>
            <ul class="action-links"><?php print render($action_links); ?></ul>
          <?php endif; ?>
        </section>

      </div>
    </div>
    <footer class="footer container">
        <?php print render($page['footer']); ?>
        <?php if ($logo): ?>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
                <img class="gfLogo" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
            </a>
        <?php endif; ?>
    </footer>
</div>
