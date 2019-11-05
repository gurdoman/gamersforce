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
            <div class="col-md-8 contenido-ver">
                <?php if (!empty($title)): ?>
                    <h1 class="page-header titulo"><?php print $title; ?></h1>
                <?php endif; ?>
                <?php print render($page['content']); ?>
                
                <div class="calificaciones_stuff">
                    <div class="calificacion_review"></div>
                    <div class="calificacion">
                        <?php echo $node->field_calificacion['und'][0]['value'] ?>
                    </div>
                    <div class="pros-contras">
                        <div class="pros">
                            <span>PROS</span>
                            <?php foreach($node->field_pro['und'] as $pro): ?>
                                <div class="pro-con"><span class="check-tache">&#10004;</span><?php echo $pro['value'] ?></div>
                            <?php endforeach; ?>
                        </div>
                        <div class="contras">
                            <span>CONTRAS</span>
                            <?php foreach($node->field_contra['und'] as $contra): ?>
                                <div class="pro-con"><span class="check-tache">&#10006;</span><?php echo $contra['value'] ?></div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                
                    
                <div class="clear"></div>
                <div id="facebookComment" class="fb-comments" data-href="" data-width="100%" data-numposts="5" data-colorscheme="dark"></div>
            </div>
            <div class="col-md-4 mas-contenido">
                <?php print render($page['public_sec']); ?>
                <?php print render($page['c_mas_vistas']); ?>
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
