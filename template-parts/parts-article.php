<h1><?php wp_title(''); ?></h1>
<?php while (have_posts()) { ?>
    <article>

        <?php the_post();
        the_post_thumbnail('large');
        ?>

        <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <!-- template part for the date, name and kategory  -->
        <?php get_template_part('/template-parts/parts', 'date'); ?>
        <?php the_excerpt(); ?>
    </article>
<?php
}
?>