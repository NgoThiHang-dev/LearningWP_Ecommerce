<?php /* Template Name: Page full width */ ?>

<?php get_header(); ?>
<div id="content">
    <div class="product-box page-category">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <?php setpostview(get_the_ID()); ?>
                    <div>
                        <h1 class="single-title"><?php the_title(); ?></h1>
                        <div class="single-content">
                            <?php the_content(); ?>
                        </div>

                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </div>

    <?php get_footer(); ?>
</div>
<script src="<?php bloginfo('stylesheet_directory'); ?>/libs/jquery-3.4.1.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/libs/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js"></script>
<!-- comment fb -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v14.0"
    nonce="o55QK64X"></script>

<?php wp_footer(); ?>
</body>

</html>