<?php 
    $head = get_field('quote_head');
    $body = get_field('quote_body');
    $btntext = get_field('quotebtn_text');
    $outline = get_field('text_outline');
    $url = get_field('website_url');
?>

<section class="get-qoute">
    <div class="container">
        <div class="get-qoute__wrapper">
            <div class="get-qoute__content">
                <h3 class="get-qoute__header"><?php echo $head; ?></h3>
                <p class="get-qoute__body">
                <?php echo $body; ?>
                </p>
            </div>

            <a href="<?php echo $url; ?>" class="btn btn--transparent"> <?php echo $btntext; ?></a>
            <p class="outline__text"><?php echo $outline; ?></p>
        </div>
    </div>
</section>