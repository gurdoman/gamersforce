<div id="gamersforce">
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

    <div class="main-container container">
        <div class="row">
             <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
        </div>
        
        <div class="row">
            <div class="titulo-seccion">
                <div class="titulo-reviews">
                    <div class="titulo-titulo-reviews"></div>
                    <?php print render($page['c_principal']); ?>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-12">
                <?php print render($page['c_4_reviews']); ?>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-7">
                <?php print render($page['c_todas']); ?>
            </div>
            <div class="col-sm-5">
                <?php print render($page['public_sec']); ?>
                <?php print render($page['c_mas_vistas']); ?>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-12">
                <?php print render($page['content']); ?>
            </div>
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