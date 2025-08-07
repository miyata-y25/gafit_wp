<?php
/*
 *
 * Template Name: お知らせ一覧
 *  
 */
?>
<?php get_header(); ?>

<section class="sec">
    <h2 class="sec__ttl">
        <span class="sec__ttl__en"><?php the_title(); ?></span>
    </h2>
    <ul class="news-list">
        <?php
            $args = array(
                'category' => 'post',
                'order' => 'DESC',
                'orderby' => 'date',
                'posts_per_page' => 10,
            );
            $my_query = new WP_Query($args);
            if ($my_query->have_posts()) :
                while ($my_query->have_posts()) : $my_query->the_post();
        ?>
        <li><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php endwhile; endif;
            wp_reset_postdata();
        ?>
    </ul>
    <?php
        if(function_exists('wp_pagenavi')) {
            wp_pagenavi(array('query' => $my_query));
        }
    ?>
</section>




<?php get_footer(); ?>
