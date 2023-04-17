<footer id="footer">

    <div class="container">
        <div class="row top">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <!-- adds a widget for about us-->
                <?php dynamic_sidebar('footer_kort_om_oss'); ?>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
                <!-- adds a widget for contact us-->
                <?php dynamic_sidebar('footer_cont'); ?>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
                <!-- adds a widget for social media-->
                <?php dynamic_sidebar('footer_social-media'); ?>
            </div>
        </div>
        <div class="row bottom">
            <div class="col-xs-12">
                <!-- adds a widget for copyright-->
                <?php dynamic_sidebar('footer_copyright'); ?>
            </div>
        </div>
    </div>
</footer>

</div>


<?php wp_footer(); ?>
</body>

</html>