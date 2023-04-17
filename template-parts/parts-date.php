<!-- template part for the date, name and kategory  -->

<ul class="meta">
    <li>
        <!-- date -->
        <i class="fa fa-calendar"></i> <?php echo get_the_date(); ?>
    </li>
    <li>
        <!-- auther -->
        <i class="fa fa-user"></i> <a href="<?php the_permalink(); ?>"><?php the_author_posts_link(); ?></a>
    </li>
    <li>
        <!-- kategory -->
        <i class="fa fa-tag"></i> <?php the_category(', '); ?>
    </li>
</ul>