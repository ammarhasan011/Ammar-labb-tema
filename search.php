<?php get_header(); ?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-8 col-md-offset-2">
                    <h1>Sökresultat för: abc</h1>
                    <div class="searchform-wrap">
                        <form id="searchform" class="searchform">
                            <div>
                                <?php get_search_form(); ?>

                                <!-- <label class="screen-reader-text">Sök efter:</label>
                                <input type="text" />
                                <input type="submit" value="Sök" /> -->
                            </div>
                        </form>
                    </div>
                    <?php get_template_part('/template-parts/parts', 'article'); ?>

                    <nav class="navigation pagination">
                        <?php echo paginate_links(); ?>
                    </nav>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>