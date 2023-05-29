<?php get_header(); ?>

<section class="project__banner">
      <div class="container">
        <div class="project__banner__wrapper">
          <h1><?php the_title(); ?></h1>
            <img src=" <?php echo get_template_directory_uri();?> ./images/Banner Img.jpg" alt="">
        </div>
      </div>
</section>

<section class="project__blurb">
      <div class="container">
        <div class="project__container">
          <h2>
          SOTHEBY'S INTERNATIONAL REALTY - DOWNTOWN MANHATTAN BROKERAGE
          </h2>
        </div>
      </div>
</section>

    <section class="project__about">
      <div class="project__container">
        <div class="project__about__grid">
          <h3>About Project</h3>
          <div class="project__about__content">
            <p>
            <?php the_content(); ?>
            </p>
          </div>
        </div>
      </div>
    </section>

   



<?php get_footer(); ?>