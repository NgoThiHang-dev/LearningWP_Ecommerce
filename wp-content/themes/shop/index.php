<?php get_header(); ?>

<div id="content">
    <div class="container">
        <?php get_template_part('slider'); ?>
    </div>
    <div class="product-box">
        <div class="container">
            <div class="row">
                <?php get_sidebar(); ?>
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

                    <br>
                    <br>
                    <div class="product-section">
                        <h2 class="title-product">
                            <a href="#" class="title">Điện thoại</a>
                            <div class="bar-menu"><i class="fa fa-bars"></i></div>
                            <div class="list-child">
                                <ul>
                                    <li><a href="#">Iphone</a></li>
                                    <li><a href="#">Samsung</a></li>
                                    <li><a href="#">Sony</a></li>
                                    <li><a href="#">HTC</a></li>
                                </ul>
                            </div>
                            <div class="clear"></div>
                        </h2>
                        <div class="content-product-box">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="item-product">
                                        <div class="thumb">
                                            <a href="#"><img
                                                    src="<?php bloginfo('stylesheet_directory'); ?>/images/sp.png"
                                                    alt=""></a>
                                            <span class="sale">Giảm <br>15%</span>
                                            <div class="action">
                                                <a href="#" class="buy"><i class="fa fa-cart-plus"></i> Mua
                                                    ngay</a>
                                                <a href="#" class="like"><i class="fa fa-heart"></i> Yêu
                                                    thích</a>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                        <div class="info-product">
                                            <h4><a href="#">Điện thoại iPhone Xs Max 256GB</a></h4>
                                            <div class="price">
                                                <span class="price-current">28.990.000₫</span>
                                                <span class="price-old">33.990.000₫</span>
                                            </div>
                                            <a href="#" class="view-more">Xem chi tiết</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="item-product">
                                        <div class="thumb">
                                            <a href="#"><img
                                                    src="<?php bloginfo('stylesheet_directory'); ?>/images/sp2.png"
                                                    alt=""></a>
                                            <span class="sale">Giảm <br>10%</span>
                                            <div class="action">
                                                <a href="#" class="buy"><i class="fa fa-cart-plus"></i> Mua
                                                    ngay</a>
                                                <a href="#" class="like"><i class="fa fa-heart"></i> Yêu
                                                    thích</a>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                        <div class="info-product">
                                            <h4><a href="#">Điện thoại OPPO A5 (2020) 128GB</a></h4>
                                            <div class="price">
                                                <span class="price-current">4.790.000₫</span>
                                                <span class="price-old">4.790.000₫</span>
                                            </div>
                                            <a href="#" class="view-more">Xem chi tiết</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="item-product">
                                        <div class="thumb">
                                            <a href="#"><img
                                                    src="<?php bloginfo('stylesheet_directory'); ?>/images/sp.png"
                                                    alt=""></a>
                                            <span class="sale">Giảm <br>15%</span>
                                            <div class="action">
                                                <a href="#" class="buy"><i class="fa fa-cart-plus"></i> Mua
                                                    ngay</a>
                                                <a href="#" class="like"><i class="fa fa-heart"></i> Yêu
                                                    thích</a>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                        <div class="info-product">
                                            <h4><a href="#">Điện thoại iPhone Xs Max 256GB</a></h4>
                                            <div class="price">
                                                <span class="price-current">28.990.000₫</span>
                                                <span class="price-old">33.990.000₫</span>
                                            </div>
                                            <a href="#" class="view-more">Xem chi tiết</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="item-product">
                                        <div class="thumb">
                                            <a href="#"><img
                                                    src="<?php bloginfo('stylesheet_directory'); ?>/images/sp2.png"
                                                    alt=""></a>
                                            <span class="sale">Giảm <br>10%</span>
                                            <div class="action">
                                                <a href="#" class="buy"><i class="fa fa-cart-plus"></i> Mua
                                                    ngay</a>
                                                <a href="#" class="like"><i class="fa fa-heart"></i> Yêu
                                                    thích</a>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                        <div class="info-product">
                                            <h4><a href="#">Điện thoại OPPO A5 (2020) 128GB</a></h4>
                                            <div class="price">
                                                <span class="price-current">4.790.000₫</span>
                                                <span class="price-old">4.790.000₫</span>
                                            </div>
                                            <a href="#" class="view-more">Xem chi tiết</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="item-product">
                                        <div class="thumb">
                                            <a href="#"><img
                                                    src="<?php bloginfo('stylesheet_directory'); ?>/images/sp2.png"
                                                    alt=""></a>
                                            <span class="sale">Giảm <br>10%</span>
                                            <div class="action">
                                                <a href="#" class="buy"><i class="fa fa-cart-plus"></i> Mua
                                                    ngay</a>
                                                <a href="#" class="like"><i class="fa fa-heart"></i> Yêu
                                                    thích</a>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                        <div class="info-product">
                                            <h4><a href="#">Điện thoại OPPO A5 (2020) 128GB</a></h4>
                                            <div class="price">
                                                <span class="price-current">4.790.000₫</span>
                                                <span class="price-old">4.790.000₫</span>
                                            </div>
                                            <a href="#" class="view-more">Xem chi tiết</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="item-product">
                                        <div class="thumb">
                                            <a href="#"><img
                                                    src="<?php bloginfo('stylesheet_directory'); ?>/images/sp.png"
                                                    alt=""></a>
                                            <span class="sale">Giảm <br>15%</span>
                                            <div class="action">
                                                <a href="#" class="buy"><i class="fa fa-cart-plus"></i> Mua
                                                    ngay</a>
                                                <a href="#" class="like"><i class="fa fa-heart"></i> Yêu
                                                    thích</a>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                        <div class="info-product">
                                            <h4><a href="#">Điện thoại iPhone Xs Max 256GB</a></h4>
                                            <div class="price">
                                                <span class="price-current">28.990.000₫</span>
                                                <span class="price-old">33.990.000₫</span>
                                            </div>
                                            <a href="#" class="view-more">Xem chi tiết</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="item-product">
                                        <div class="thumb">
                                            <a href="#"><img
                                                    src="<?php bloginfo('stylesheet_directory'); ?>/images/sp2.png"
                                                    alt=""></a>
                                            <span class="sale">Giảm <br>10%</span>
                                            <div class="action">
                                                <a href="#" class="buy"><i class="fa fa-cart-plus"></i> Mua
                                                    ngay</a>
                                                <a href="#" class="like"><i class="fa fa-heart"></i> Yêu
                                                    thích</a>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                        <div class="info-product">
                                            <h4><a href="#">Điện thoại OPPO A5 (2020) 128GB</a></h4>
                                            <div class="price">
                                                <span class="price-current">4.790.000₫</span>
                                                <span class="price-old">4.790.000₫</span>
                                            </div>
                                            <a href="#" class="view-more">Xem chi tiết</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="item-product">
                                        <div class="thumb">
                                            <a href="#"><img
                                                    src="<?php bloginfo('stylesheet_directory'); ?>/images/sp.png"
                                                    alt=""></a>
                                            <span class="sale">Giảm <br>15%</span>
                                            <div class="action">
                                                <a href="#" class="buy"><i class="fa fa-cart-plus"></i> Mua
                                                    ngay</a>
                                                <a href="#" class="like"><i class="fa fa-heart"></i> Yêu
                                                    thích</a>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                        <div class="info-product">
                                            <h4><a href="#">Điện thoại iPhone Xs Max 256GB</a></h4>
                                            <div class="price">
                                                <span class="price-current">28.990.000₫</span>
                                                <span class="price-old">33.990.000₫</span>
                                            </div>
                                            <a href="#" class="view-more">Xem chi tiết</a>
                                        </div>
                                    </div>
                                </div>
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
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0">
</script>
<?php wp_footer(); ?>
</body>

</html>