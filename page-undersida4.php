<!-- undersida 4 -->
<!-- header-->
<?php get_header(); ?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6">
                    <!-- geting the title and the content -->
                    <h1><?php the_title(); ?></h1>
                    <p><?php the_content(); ?></p>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-6">
                    <!-- geting the img in full size -->
                    <?php the_post_thumbnail('large'); ?>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- footer -->
<?php get_footer(); ?>