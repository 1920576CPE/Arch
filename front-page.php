<?php


/*

  Template Name: Home

*/

?>

<?php get_header(); ?>

<section class="banner">
      <div class="container">
<?php the_content(); ?>
      </div>
</section>

<section class="about">
      <div class="container">
        <div class="block__header">
          <h2 class="block__title" data-number="01">About</h2>
        </div>

        <div class="about__wrapper grid">
          <div class="about__body">
            <p>
            <?php echo get_field('about_des'); ?>
            </p>
            <ul class="about__info">
              <li>
                <p>Type</p>
                <p>
                  Building, Spaces, Infrastructure, Interior Design, Exterior
                  Design
                </p>
              </li>

              <li>
                <p>Recent Awards</p>
                <p>
                  Architecture of the Year - 2020 <br />
                  Buiding of the Year - 2020 <br />
                </p>
              </li>
            </ul>
          </div>

          <div class="about__stats">
            <div class="about__stats__block">
              <h3> <?php echo get_field('project'); ?></h3>
              <p>Finished Project</p>
            </div>

            <div class="about__stats__block">
              <h3> <?php echo get_field('experience'); ?></h3>
              <p>Industry Experience</p>
            </div>

            <div class="about__stats__block">
              <h3> <?php echo get_field('awards'); ?></h3>
              <p>Awards & Recognition</p>
            </div>

            <div class="about__stats__block">
              <h3> <?php echo get_field('location'); ?></h3>
              <p>Locations</p>
            </div>
          </div>
        </div>
      </div>
</section>

<section class="services">
      <div class="container">
        <div class="services__wrapper grid">
          <div class="services__outline">
            <span>02</span>
          </div>
          <div class="services__content">
            <div class="block__header">
              <h2 class="block__title" data-number="02">Services</h2>
            </div>
        <?php 
        $query = new WP_Query(array(
            'post_type' => 'services_Post',
            'post_per_page' => -1
        ));
        ?>
        <?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
            <div class="service__block">
              <h3><?php the_title() ?></h3>
              <p>
                <?php echo wp_trim_words(get_the_excerpt(), 15)?>
              </p>
            </div>
            <?php
                endwhile;
            else:
                echo "No content";
            endif;
            wp_reset_postdata();
            ?>
          </div>
        </div>
      </div>
</section>

<section class="projects">
      <div class="container">
        <div class="block__header">
          <h2 class="block__title" data-number="03">Projects</h2>
        </div>
        <?php 
        $query = new WP_Query(array(
            'post_type' => 'projects_Post',
            'post_per_page' => -1
        ));
        ?>
        <?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>
        <div class="project__block">
          <h3 class="project__code"><?php the_title();?></h3>
          <?php
            if(has_post_thumbnail()){
              the_post_thumbnail('thumbnail-project', array(
                'class' => 'project__thumbnail'
              ));
            }
          ?>
          <div class="project__content">
            <div>
              <h4 class="project__category"><?php the_excerpt();?></h4>
              <p class="project__desc">
                <?php the_content();?>
              </p>
            </div>
            <a href="#" class="project__link"
              ><img src="<?php echo get_template_directory_uri();?>./images/arrow.svg" alt="Arrow Icon"
            /></a>
          </div>
        </div>
        <?php
                endwhile;
            else:
                echo "No content";
            endif;
            wp_reset_postdata();
            ?>
      </div>
</section>

<section class="video">
      <div class="video__wrapper">
        <video class="main__video" loop>
          <source
            src="<?php echo get_field('videos'); ?>"
          />
        </video>

        <div class="overlay"></div>
        <button class="btn__play" id="playbtn">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="47"
            height="54"
            viewBox="0 0 47 54"
          >
            <path
              id="Polygon_1"
              data-name="Polygon 1"
              d="M22.664,7.547a5,5,0,0,1,8.671,0L49.7,39.509A5,5,0,0,1,45.361,47H8.639A5,5,0,0,1,4.3,39.509Z"
              transform="translate(47) rotate(90)"
              fill="#fff"
            />
          </svg>
        </button>

        <button class="btn__pause hide" id="pausebtn">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="42"
            height="48"
            viewBox="0 0 42 48"
          >
            <g
              id="Group_17"
              data-name="Group 17"
              transform="translate(-944 -2930)"
            >
              <rect
                id="Rectangle_7"
                data-name="Rectangle 7"
                width="15"
                height="48"
                rx="3"
                transform="translate(944 2930)"
                fill="#fff"
              />
              <rect
                id="Rectangle_8"
                data-name="Rectangle 8"
                width="15"
                height="48"
                rx="3"
                transform="translate(971 2930)"
                fill="#fff"
              />
            </g>
          </svg>
        </button>
      </div>
</section>

<section class="contact">
      <div class="container">
        <div class="block__header">
          <h2 class="block__title" data-number="04">Get in Touch</h2>
        </div>

        <div class="contact__wrapper grid">
          <div class="contact__info">

            <?php if(have_rows('location_repeater')) : while(the_repeater_field('location_repeater')): ?>
              <div class="contact__info__block">
                  <h3><?php echo get_sub_field('location_header');?></h3>
                  <p><?php echo get_sub_field('location_cont');?></p>
              </div>
              <?php
                    endwhile;
                     else:
                            echo "There is no content!";
                     endif;
                     wp_reset_postdata();
                ?>
          </div>
          <div class="contact__info__form">
            <p>
              Please fill in the form below to contact us. We try our best to
              respond to any questions in less than 24 hours
            </p>

            <!-- <form action="">
              <div class="form__group">
                <input type="text" required />
                <label for="">Fullname</label>
              </div>
              <div class="form__group">
                <input type="Email" required />
                <label for="">Email</label>
              </div>
              <div class="form__group">
                <input type="tel" required />
                <label for="">Phone</label>
              </div>
              <button>Submit</button>
            </form> -->
            <?php echo do_shortcode('[contact-form-7 id="188" title="Contact form 1"]') ?>
          </div>
        </div>

       

    </section>






<?php get_footer(); ?>
