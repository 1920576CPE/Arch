<?php
    $post_type = get_field('post_type');
    $img = get_field('service_img');
?>


<section class="page-services">
    <div class="container">
        <div class="page-services__wrapper grid">
            <div class="page-services__img lg--only">
                <img src="<?php echo $img['url']?>" alt="">
            </div>

            <div class="page-services__accordion">
            <?php 
                $query = new WP_Query(array(
                    'post_type' => $post_type,
                    'post_per_page' => -1
                ));
                $count = 0;
            ?>
            <?php if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); $count++ ?>
                <div class="accordion__block <?php if($count > 1) post_class('show')?> show">
                    <div class="accordion__header">
                        <h2><?php the_title();?></h2>
                        <img src="<?php echo get_template_directory_uri();?>./images/accordion-arrow.png" alt="">
                    </div>
                    <div class="accordion__body">
                        <p><?php the_excerpt();?></p>
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
        </div>
    </div>
</section>