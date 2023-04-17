<!-- header -->
<?php get_header(); ?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-8 col-md-offset-2">
                    <div class="searchform-wrap">
                        <form id="searchform" class="searchform">
                            <div>
                                <!-- search form -->
                                <?php get_search_form(); ?>
                            </div>
                        </form>
                    </div>
                    <!-- template-parts that fetches my articles with the_excerpt -->
                    <?php get_template_part('/template-parts/parts', 'article'); ?>

                    <nav class="navigation pagination">
                        <!-- navigation pagination -->
                        <?php echo paginate_links(); ?>
                    </nav>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- footer -->
<?php get_footer(); ?>