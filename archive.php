<?php get_header(); ?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <?php get_template_part('/template-parts/parts', 'article'); ?>

                    <nav class="navigation pagination">
                        <?php echo paginate_links(); ?>
                    </nav>
                </div>

                <aside id="secondary" class="col-xs-12 col-md-3">
                    <div id="sidebar">
                        <?php get_template_part('/template-parts/parts', 'sidebar'); ?>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>