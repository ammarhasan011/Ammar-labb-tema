<!-- header -->
<?php get_header(); ?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <!-- my article with the content -->
                    <?php while (have_posts()) { ?>
                        <article>

                            <?php the_post();
                            the_post_thumbnail('large');
                            ?>

                            <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <!-- template part for the date, name and kategory  -->
                            <?php get_template_part('/template-parts/parts', 'date'); ?>
                            <?php the_content(); ?>
                        </article>
                    <?php
                    }
                    ?>
                </div>
                <aside id="secondary" class="col-xs-12 col-md-3">
                    <div id="sidebar">
                        <!-- template part for the sidebar  -->
                        <?php get_template_part('/template-parts/parts', 'sidebar'); ?>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</main>
<!-- footer -->
<?php get_footer(); ?>