<?php get_header(); ?>

<?php
while (have_posts()) {
    the_post(); ?>
    <h1>
        <?php the_title(); ?>
    </h1>
<?php
}
?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="hero">
                        <?php the_post_thumbnail('full'); ?>
                        <div class="text">
                            <h1><?php the_title(); ?></h1>
                            <P><?php the_content(); ?></P>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>