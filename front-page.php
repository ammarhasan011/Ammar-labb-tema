<!-- header-->
<?php get_header(); ?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="hero">
                        <!-- geting img in full size -->
                        <?php the_post_thumbnail('full'); ?>
                        <div class="text">
                            <!-- geting the title and the content -->
                            <h1><?php the_title(); ?></h1>
                            <P><?php the_content(); ?></P>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- footer -->
<?php get_footer(); ?>