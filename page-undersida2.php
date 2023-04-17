<!-- undersida 2 -->
<!-- header-->
<?php get_header(); ?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9 col-md-push-3">
                    <!-- geting the title and the content -->
                    <h1> <?php the_title(); ?></h1>
                    <p><?php the_content(); ?></p>
                </div>
                <aside id="secondary" class="col-xs-12 col-md-3 col-md-pull-9">
                    <ul class="side-menu">
                        <!-- my sidebar menu -->
                        <?php wp_nav_menu(
                            array(
                                'menu' => 'sidemenu',
                                'theme_location' => 'sidemenu',
                                'items_wrap' => '<ul class="side-menu">%3$s</ul>'
                            )
                        ); ?>
                    </ul>
                </aside>
            </div>
        </div>
    </section>
</main>
<!-- footer-->
<?php get_footer(); ?>