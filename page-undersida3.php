<!-- undersida 3 -->
<!-- header -->
<?php get_header(); ?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12">
                    <!-- geting the title and the content -->
                    <h1><?php the_title(); ?></h1>
                    <p><?php the_content(); ?></p>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- footer -->
<?php get_footer(); ?>