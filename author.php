<!DOCTYPE html>
<html lang="<?php language_attributes()?>">
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
</head>
<body <?php body_class()?>>
<h1>this is author page</h1>
    <!-- <img src="
    <?php //echo get_theme_mod('nabil_logo')?>
    "/> -->
    <!-- <img src="https://cdn.dribbble.com/userupload/3158902/file/original-7c71bfa677e61dea61bc2acd59158d32.jpg?resize=400x0"/> -->
    <?php wp_footer();?>
    <header id="header_area" class=<?php echo get_theme_mod('nabil_menu_position');?>>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a href="<?php echo home_url();?>"><img src="<?php echo get_theme_mod('nabil_logo'); ?>" alt=""></a>
        </div>
        <div class="col-md-9">
          <?php //wp_nav_menu( array('theme_location' => 'main_menu', 'menu_id' => 'nav') ); ?>
          <?php wp_nav_menu(array('theme_location' => 'main_menu', 'menu_id' => 'nav'))?>
        </div>
      </div>
    </div>
  </header>

  <section class="body_part">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </section>

  <footer id="footer_area">
    <section id="copyright_area">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p><?php echo get_theme_mod('nabil_copyright_section')?></p>
          </div>
        </div>
      </div>
    </section>
  </footer>
</body>
</html>