<?php get_header(); ?>

<div id="content">
    <div class="container">
        <?php get_template_part('slider'); ?>
    </div>
    <div class="product-box">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 order-lg-0 order-1">
                    <div class="sidebar"><?php get_sidebar(); ?></div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 order-lg-1 order-0">
                    <div class="product-section">
                        <h2 class="title-product">
                            <a href="#" class="title">Sản phẩm nổi bật</a>
                            <div class="bar-menu"><i class="fa fa-bars"></i></div>
                            <div class="list-child">
                                <ul>
                                    <?php
                                    $args = array(
                                        'type'      => 'product',
                                        'child_of'  => 0,
                                        'parent'    => 0,
                                        'hide_empty' => 0,
                                        'taxonomy' => 'product_cat',
                                        'number' => 4,
                                    );
                                    $categories = get_categories( $args );
                                    foreach ( $categories as $category ) { ?>

                                    <li><a href="<?php echo get_term_link($category->slug, 'product_cat');?>">
                                            <?php echo $category->name; ?></a></li>
                                    <?php } ?>

                                </ul>
                            </div>
                            <div class="clear"></div>
                        </h2>
                        <div class="content-product-box">
                            <div class="row">
                                <?php
                                $tax_query[] = array(
                                    'taxonomy' => 'product_visibility',
                                    'field'    => 'name',
                                    'terms'    => 'featured',
                                    'operator' => 'IN',
                                );
                                ?>
                                <!-- 'posts_per_page' => 8: số sản phẩm -->
                                <?php $args = array( 'post_type' => 'product','posts_per_page' => 8,'ignore_sticky_posts' => 1, 'tax_query' => $tax_query); ?>
                                <?php $getposts = new WP_query( $args);?>
                                <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                    <?php get_template_part('content/item_product'); ?>
                                </div>
                                <?php endwhile; wp_reset_postdata(); ?>
                            </div>
                        </div>
                    </div>
                    <!-- <a href="#"><img src="https://phongtrodn.com/wp-content/uploads/2020/02/huykira.png" alt=""></a> -->
                    <br>
                    <br>
                    <div class=" product-section">
                        <h2 class="title-product">
                            <!-- Get term by id (''term_id'') in Categories taxonomy. -->
                            <?php $cat = get_term_by('id', 15, 'product_cat') ?>

                            <a href="<?php echo get_term_link($cat->slug, 'product_cat'); ?>" class="title">
                                <?php echo $cat->name; ?>
                            </a>
                            <div class="bar-menu"><i class="fa fa-bars"></i></div>
                            <div class="list-child">
                                <ul>
                                    <?php
                                    $args = array(
                                        'type'      => 'product',
                                        'child_of'  => 0,
                                        'hide_empty' => 0,
                                        'taxonomy' => 'product_cat',
                                        'number' => 4,
                                        'parent'=> $cat->term_id,
                                    );
                                    $categories = get_categories( $args );
                                    foreach ( $categories as $category ) { ?>

                                    <li><a href="<?php echo get_term_link($category->slug, 'product_cat');?>">
                                            <?php echo $category->name; ?></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <div class="clear"></div>
                        </h2>
                        <div class="content-product-box">
                            <div class="row">
                                <!-- 'posts_per_page' => 8: số sản phẩm -->
                                <?php $args = array( 
                                    'post_type' => 'product',
                                    'posts_per_page' => 8,
                                    'ignore_sticky_posts' => 1,
                                    'product_cat' =>$cat->slug,
                                    ); ?>
                                <?php $getposts = new WP_query( $args);?>
                                <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                    <?php get_template_part('content/item_product'); ?>
                                </div>
                                <?php endwhile; wp_reset_postdata(); ?>
                            </div>
                        </div>
                    </div>

                    <br>
                    <br>
                    <div class=" product-section">
                        <h2 class="title-product">
                            <!-- Get term by id (''term_id'') in Categories taxonomy. -->
                            <?php $cat = get_term_by('id', 19, 'product_cat') ?>

                            <a href="<?php echo get_term_link($cat->slug, 'product_cat'); ?>" class="title">
                                <?php echo $cat->name; ?>
                            </a>
                            <div class="bar-menu"><i class="fa fa-bars"></i></div>
                            <div class="list-child">
                                <ul>
                                    <?php
                                    $args = array(
                                        'type'      => 'product',
                                        'child_of'  => 0,
                                        'hide_empty' => 0,
                                        'taxonomy' => 'product_cat',
                                        'number' => 4,
                                        'parent'=> $cat->term_id,
                                    );
                                    $categories = get_categories( $args );
                                    foreach ( $categories as $category ) { ?>

                                    <li><a href="<?php echo get_term_link($category->slug, 'product_cat');?>">
                                            <?php echo $category->name; ?></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <div class="clear"></div>
                        </h2>
                        <div class="content-product-box">
                            <div class="row">
                                <!-- 'posts_per_page' => 8: số sản phẩm -->
                                <?php $args = array( 
                                    'post_type' => 'product',
                                    'posts_per_page' => 8,
                                    'ignore_sticky_posts' => 1,
                                    'product_cat' =>$cat->slug,
                                    ); ?>
                                <?php $getposts = new WP_query( $args);?>
                                <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                    <?php get_template_part('content/item_product'); ?>
                                </div>
                                <?php endwhile; wp_reset_postdata(); ?>
                            </div>
                        </div>
                    </div>
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
<!-- comment fb -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v14.0"
    nonce="o55QK64X"></script>
<?php wp_footer(); ?>
</body>
</html>