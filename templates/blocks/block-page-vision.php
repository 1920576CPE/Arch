<?php 
    $title = get_field('vision_title');
    $body = get_field('vision_cont');
?>
<section class="page-about vision ">
    <div class="container">
        <div class="page-about__block ">
            <h2 class="about__block__header"><?php echo $title; ?></h2>
            <p><?php echo $body; ?></p>
        </div>
        <p class="outline__text">Vision</p>
    </div>
</section>