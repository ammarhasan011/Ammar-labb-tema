<!-- template for sidebar widget -->
<ul>
    <li>
        <form id="searchform" class="searchform">
            <div>
                <!-- search widget -->
                <?php dynamic_sidebar('search'); ?>
            </div>
        </form>
    </li>
</ul>
<ul role="navigation">
    <li class="pagenav">
        <!-- sidor widget -->
        <?php dynamic_sidebar('sidor'); ?>
    </li>
    <li>
        <!-- arkive widget -->
        <?php dynamic_sidebar('arkiv'); ?>
    </li>
    <li class="categories">
        <!-- category widget -->
        <?php dynamic_sidebar('kategorier'); ?>
    </li>
</ul>