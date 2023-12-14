<?php
get_header();
?>

<div class="s grid">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
    ?>
            <h1 class="single-post-custom-title">
                <?php the_title(); ?>
            </h1>
        <div class="grid-item"> <!-- Ajoutez la classe "grid-item" ici -->
            <div class="single-page-photo-content">
                <div class="display-photo">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    <?php
        endwhile;
    else :
        get_template_part('template-parts/content-none');
    endif;
    ?>

<!-- BOUTON CONTACT -->
<a href="<?php echo esc_url(get_permalink(get_page_by_title('Contact'))); ?>" class="contact-button">Contact</a>
</div>

<?php
get_footer();
?>
