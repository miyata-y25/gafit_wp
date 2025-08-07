<?php
/*
 *
 * Template Name: コラム一覧
 *  
 */
?>
<?php get_header(); ?>

<section class="sec">
    <h2 class="sec__ttl">
        <span class="sec__ttl__en">COLUMN</span>
        <span class="sec__ttl__jp">コラム</span>
    </h2>
    <ul class="column-list">
        <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $column_args = array(
                'post_type' => 'column',
                'order' => 'DESC',
                'orderby' => 'date',
                'posts_per_page' => 9,
                'paged' => $paged,
            );
            $column_query = new WP_Query($column_args);
            if ($column_query->have_posts()) :
                while ($column_query->have_posts()) : $column_query->the_post();
        ?>
        <li>
            <a href="<?php the_permalink(); ?>">
                <figure class="column-list__img">
                    <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail(); ?>
                    <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/column_img.png" alt="">
                    <?php endif; ?>
                </figure>
                <time datetime="<?php the_time('Y-m-d'); ?>" class="column-list__time"><?php the_time('Y.m.d'); ?></time>
                <h3 class="column-list__ttl"><?php the_title(); ?></h3>
                <p class="column-list__txt"><?php the_excerpt(); ?></p>
            </a>
        </li>
        <?php endwhile; endif;
            wp_reset_postdata();
        ?>
    </ul>
    <?php
        if(function_exists('wp_pagenavi')) {
            wp_pagenavi(array('query' => $column_query));
        }
    ?>
</section>




<?php get_footer(); ?>
