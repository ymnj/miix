<?php 


/*
  ===================================================
    About Page
    Template Name: About Template
  ===================================================
*/
  get_header();
?>

<div class="container about-page text-center">
  <h1>Meet the Team</h1>

  <div class="row">
    <div class="col-sm-6">
      <article class="member-wrap">
        <figure>
          <img src="<?php echo get_template_directory_uri() . '/assets/images/member_simon.png' ?>" alt="">
        </figure>
        <header>
          <h2>Simon Teng</h2>
          <h3>Owner + Principal Designer</h3>
        </header>
        <section class="member-info">
          <p>Simon is our head proprietor and Principle Designer. His vision and determination shaped MiiX into the company it is today. Over the years, he has traveled from country to country, gathering a visual library of materials, styles, and suppliers, combining and recombining those to drive the designs of MiiX.</p>
          <p>Simon has decades of experience across a number of essential industries accumulated from countries around the world. From product manufacturing to product design to retail and interior space design, his international expertise inform and inspire the style of MiiX.</p>
        </section>
      </article>
    </div>
    <div class="col-sm-6">
      <article class="member-wrap">
        <figure>
          <img src="<?php echo get_template_directory_uri() . '/assets/images/member_vivian.jpg' ?>" alt="">
        </figure>
        <header>
          <h2>Vivian Teng</h2>
          <h3>Marketing Coordinator + Stager</h3>
        </header>
        <section class="member-info">
          <p>Vivian is the head of our Marketing Department and the visionary for MiiX. Coming from a Marketing and Entrepreneurship focus from her BBA, she focuses her energetic personality on network outreach and project management.</p>
          <p>From detail sourcing to hand picking the decor aesthetic for each project, Vivian’s extensive business marketing knowledge and her sharp eye for design success has lead MiiX to many great connections and project completions. </p>
        </section>
      </article>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <article class="member-wrap">
        <figure>
          <img src="<?php echo get_template_directory_uri() . '/assets/images/member_emily.jpg' ?>" alt="">
          <header>
          <h2>Emily Teng</h2>
          <h3>Interior Designer + Stager</h3>
        </header>
        <section class="member-info">
          <p>Emily discovered her natural instincts for space and design at a young age. This led her to her Diploma of Interior Design at BCIT.</p>
          <p>During her studies, Emily had the pleasure to work with a variety of companies in the Architectural Engineering and Construction industry as an Interior Designer as well as Decorator. She won her employers over with her creativity, attention to detail, and flexibility she presented with each changing project.</p>
        </section>
        </figure>
      </article>
    </div>
    <div class="col-sm-6">
      <article class="member-wrap">
        <figure>
          <img src="<?php echo get_template_directory_uri() . '/assets/images/member_iris.jpg' ?>" alt="">
          <header>
          <h2>Iris Teng</h2>
          <h3>Interior Stylist</h3>
        </header>
        <section class="member-info">
          <p>Iris is our head Interior Stylist who manages and oversees each project to completion. In addition to her extensive academic background in Industrial Design and Branding, she has worked in international design houses for interior design and furniture manufacturing and design industries. </p>
        </section>
        </figure>
      </article>
    </div>
  </div>
  
</div>

<?php get_footer(); ?>
