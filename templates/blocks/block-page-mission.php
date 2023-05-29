<?php 
    $title = get_field('mission_title');
    $body = get_field('mission_cont');
    $outline = get_field('mission_outline');
?>

<section class="page-about mission ">
    <div class="container">
        <div class="page-about__block ">
            <h2 class="about__block__header"><?php echo $title; ?></h2>
            <p><?php echo $body; ?></p>
            
        </div>
        <p class="outline__text"><?php echo $outline; ?></p>
    </div>
</section>