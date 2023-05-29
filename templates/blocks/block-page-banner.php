<?php 
    $title = get_field('banner_title');
    $body = get_field('banner_desc');
    $img = get_field('banner_img');
?>
<section class="page-banner">
    <div class="container">
        <div class="page-banner__wrapper grid">
            <h1 class="page-banner__header"><?php echo $title; ?></h1>
            <p class="page-banner__content"><?php echo $body; ?></p>
        </div>
        <img src="<?php echo $img['url'];?>" alt="">
    </div>
</section>