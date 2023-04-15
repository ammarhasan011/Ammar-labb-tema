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
                                <?php dynamic_sidebar('sidor'); ?>
                            </li>
                            <li>
                                <?php dynamic_sidebar('arkiv'); ?>
                            </li>
                            <li class="categories">
                                <?php dynamic_sidebar('kategorier'); ?>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>