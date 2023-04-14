<?php get_header(); ?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">

                    <h1><?php wp_title(''); ?></h1>
                    <?php while (have_posts()) { ?>
                        <article>

                            <?php the_post();
                            the_post_thumbnail('large');
                            ?>

                            <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                            <?php get_template_part('/template-parts/parts', 'date'); ?>
                            <?php the_excerpt(); ?>
                        </article>
                    <?php
                    }
                    ?>


                    <nav class="navigation pagination">
                        <h2 class="screen-reader-text">Inläggsnavigering</h2>
                        <a class="prev page-numbers" href="">Föregående</a>
                        <span class="page-numbers current">1</span>
                        <a class="page-numbers" href="">2</a>
                        <a class="next page-numbers" href="">Nästa</a>
                    </nav>
                </div>
                <aside id="secondary" class="col-xs-12 col-md-3">
                    <div id="sidebar">
                        <ul>
                            <li>
                                <form id="searchform" class="searchform">
                                    <div>
                                        <label class="screen-reader-text">Sök efter:</label>
                                        <input type="text" />
                                        <input type="submit" value="Sök" />
                                    </div>
                                </form>
                            </li>
                        </ul>
                        <ul role="navigation">
                            <li class="pagenav">
                                <h2>Sidor</h2>
                                <ul>
                                    <li class="page_item current_page_item">
                                        <a href="">Blogg</a>
                                    </li>
                                    <li class="page_item">
                                        <a href="">Exempelsida</a>
                                    </li>
                                    <li class="page_item">
                                        <a href="">Kontakt</a>
                                    </li>
                                    <li class="page_item page_item_has_children">
                                        <a href="">Om mig</a>
                                        <ul class="children">
                                            <li class="page_item">
                                                <a href="">Intressen</a>
                                            </li>
                                            <li class="page_item page_item_has_children">
                                                <a href="">Portfolio</a>
                                                <ul class="children">
                                                    <li class="page_item">
                                                        <a href="">Projekt 1</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="page_item">
                                        <a href="">Startsida</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h2>Arkiv</h2>
                                <ul>
                                    <li>
                                        <a href="arkiv.html">oktober 2016</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="categories">
                                <h2>Kategorier</h2>
                                <ul>
                                    <li class="cat-item">
                                        <a href="">Natur</a> (1)
                                    </li>
                                    <li class="cat-item">
                                        <a href="">Okategoriserade</a> (3)
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>