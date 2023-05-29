<?php
    $post_type = get_field('post_type');
    $img = get_field('service_img');
?>




<div class="projects">
        <div class="container">
            <h1><?php echo get_field("project_title");?></h1>

            <div class="projects__grid">

                <div class="grid__left">
                      <?php 
                        $query = new WP_Query(array(
                            'post_type' => $post_type,
                            'posts_per_page' => 4,
                            'offset' => 3
                          ));
                      ?>
                    <?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post();  ?>
                    <div class="project__card">
                        <?php
                           echo get_the_post_thumbnail();
                        ?>
                        <a href="<?php the_permalink();?>"><?php the_excerpt();?></a>
                    </div>

                    <?php
                        endwhile;
                    else:
                        echo "No content";
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
                <div class="grid__right">
                  <?php 
                          $query = new WP_Query(array(
                              'post_type' => $post_type,
                              'posts_per_page' => 3,
                            ));
                        ?>
                      <?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post();  ?>
                
                    <div class="project__card">
                      <?php
                           echo get_the_post_thumbnail();
                        ?>
                        <a href="<?php the_permalink();?>"><?php the_excerpt();?></a>
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
</div>


