<?php get_header(); ?>

<section class="sec">
    <h2 class="sec__ttl">
        <span class="sec__ttl__en"><?php the_title(); ?></span>
    </h2>
    <div class="page-area">
<?php the_content(); ?>
    </div>
</section>

<?php get_footer(); ?>