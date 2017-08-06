<?php get_header(); ?>

<div id="mainCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#mainCarousel" data-slide-to="1"></li>
    <li data-target="#mainCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="first-slide" src="<?php echo get_template_directory_uri() . '/assets/images/carousel1-sm.jpg' ?>" alt="First slide">
    </div>
    <div class="item">
      <img class="second-slide" src="<?php echo get_template_directory_uri() . '/assets/images/carousel2-sm.jpg' ?>" alt="Second slide">
    </div>
    <div class="item">
      <img class="third-slide" src="<?php echo get_template_directory_uri() . '/assets/images/carousel2.jpg' ?>" alt="Third slide">
    </div>
    <div class="item">
      <img class="first-slide" src="<?php echo get_template_directory_uri() . '/assets/images/carousel4.jpg' ?>" alt="Fourth slide">
    </div>
    <div class="item">
      <img class="second-slide" src="<?php echo get_template_directory_uri() . '/assets/images/carousel5.jpg' ?>" alt="Fifth slide">
    </div>
    <div class="item">
      <img class="third-slide" src="<?php echo get_template_directory_uri() . '/assets/images/carousel6.jpg' ?>" alt="Sixth slide">
    </div>
    <div class="item">
      <img class="first-slide" src="<?php echo get_template_directory_uri() . '/assets/images/carousel7.jpg' ?>" alt="Seventh slide">
    </div>
    <div class="item">
      <img class="second-slide" src="<?php echo get_template_directory_uri() . '/assets/images/carousel8.jpg' ?>" alt="Eighth slide">
    </div>
  </div>
  <a class="left carousel-control" href="#mainCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#mainCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container-fluid intro-component">
  <div class="text-box">
    <h2 class="text-center">Simple Solutions to sell your home</h2>
  </div>
</div>

<?php get_template_part('/sections/section', 'front-banners'); ?>

<?php wp_footer() ?>
</body>
</html>