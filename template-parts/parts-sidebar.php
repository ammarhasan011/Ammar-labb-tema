<!-- template för sidobaren -->
<ul>
    <li>
        <form id="searchform" class="searchform">
            <div>
                <?php dynamic_sidebar('search'); ?>
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