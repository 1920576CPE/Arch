<?php


/*

  Template Name: Home

*/

?>

<?php get_header(); ?>

<section class="banner">
      <div class="container">
        <h2 class="banner__header">
          Architecture is in the details—and they matter
        </h2>
        <h3 class="banner__body">
          It takes many forms, as unique as the people that use and surround it
          and show the path that not been taken and new ways of doing things
        </h3>

        <picture>
          <source srcset="./images/banner.jpg" media="(min-width: 521px)" />
          <source srcset="./images/banner_sm.jpg" media="(max-width: 520px)" />
          <img src=" <?php echo get_template_directory_uri();?>./images/banner.jpg" alt="banner image" />
        </picture>
      </div>
</section>

<?php get_footer(); ?>