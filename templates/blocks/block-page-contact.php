

<?php 
    $title = get_sub_field('location_header');
    $body = get_sub_field('location_cont');
    $img = get_field('banner_img');
?> 





<section class="page-contact">
    <div class="container">
      <div class="page-contact__form">
          <!-- <form action="">
            <div class="form__group">
                <label for="">Fullname</label>
                <input type="text" required>
              
            </div>
            <div class="form__group">
                <label for="">Email Address</label>
                <input type="text" required>
                
            </div>

            <div class="form__group">
                <label for="">Phone/Mobile</label>
                <input type="text" required>
            
            </div>

            <div class="form__group">
                <label for="">Subject</label>
                <input type="text" required>
               
            </div>

            <div class="form__group message">
                <label for="">Message</label>
                <textarea></textarea>
               
            </div>
            <button class="btn btn--dark">Submit</button>
          </form> -->
          <?php echo do_shortcode('[contact-form-7 id="188" title="Contact form 1"]') ?>
          <?php if(have_rows('location_repeater')) : while(the_repeater_field('location_repeater')): ?>
          <div class="location">
              <div class="location__block">
                  <h3><?php echo $title;?></h3>
                  <p><?php echo $body;?> 
                   </p>
              </div>
          </div>
          <?php
                    endwhile;
                     else:
                            echo "There is no content!";
                     endif;
                     wp_reset_postdata();
                ?>
      </div>
    </div>
</section>

