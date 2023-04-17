<!-- header-->
<?php get_header(); ?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <!-- template-parts that fetches my articles with the_excerpt -->
                    <?php get_template_part('/template-parts/parts', 'article'); ?>
                    <nav class="navigation pagination">
                        <!-- navigation pagination -->
                        <?php echo paginate_links(); ?>
                    </nav>
                </div>
                <aside id="secondary" class="col-xs-12 col-md-3">
                    <div id="sidebar">
                        <!-- template-parts that fetches my sidebar -->
                        <?php get_template_part('/template-parts/parts', 'sidebar'); ?>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</main>
<!-- footer -->
<?php get_footer(); ?>