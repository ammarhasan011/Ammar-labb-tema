<!-- Kontaktsidan  -->
<!-- header-->
<?php get_header(); ?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <!-- geting the title and the content -->
                    <h1><?php the_title(''); ?></h1>
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- footer-->
<?php get_footer(); ?>