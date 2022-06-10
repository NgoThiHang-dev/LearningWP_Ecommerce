<?php get_header(); ?>
<div id="content">
    <div class="product-box page-category">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
                    <div class="category-page-content">
                        <h1 class="category-title"><?php single_cat_title(); ?></h1>
                        <!-- danh sach bai viet phan tin tuc -->
                        <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                        <div class="category-list-news">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('full', ); ?>
                                    </a>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 category-news">
                                    <h4 class="category-news-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h4>
                                    <?php the_excerpt(); ?>
                                    <a href="<?php the_permalink(); ?>" class="read-more">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; else: ?>
                        <p>Chưa cập nhật tin tức</p>
                        <?php endif; ?>
                    </div>
                    <?php if(paginate_links()!='') {?>
                    <div class="category-pagination">
                        <?php
                            global $wp_query;
                            $big = 999999999;
                            echo paginate_links( array(
                                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                'format' => '?paged=%#%',
                                'prev_text'    => __('«'),
                                'next_text'    => __('»'),
                                'current' => max( 1, get_query_var('paged') ),
                                'total' => $wp_query->max_num_pages
                                ) );
                            ?>
                    </div>
                    <?php } ?>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                    <div class="sidebar">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php get_footer(); ?>
</div>
<script src="<?php bloginfo('stylesheet_directory'); ?>/libs/jquery-3.4.1.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/libs/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js"></script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0">
</script>
<?php wp_footer(); ?>
</body>

</html>