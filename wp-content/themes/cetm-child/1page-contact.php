<?php
/* Template Name: Contact */

/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
get_header(); ?>


<?php
//print phpinfo();
//$query_section = array(
//    'posts_per_page' => 1,
//    'post_type' => 'cetm-lien-he',
//    //    'lang' => pll_current_language(),
//    'orderby' => 'date',
//    'order' => 'ASC',
//    'post_status' => 'publish',
//    'category_name' => 'banner'
//
//);
//$section = new WP_Query($query_section);
//if ($section->have_posts()):
//    while ($section->have_posts()):
//        $section->the_post();
//        $map = get_post_meta($post->ID, 'wpcf-cetm-map');
//        ?>
<!--        <section class="why-us">-->
<!--            <div class="container-percent">-->
<!--                <h3 class="title-underline">--><?php //echo $post->post_title; ?><!--</h3>-->
<!--                --><?php //echo $post->post_content;
//
//                ?>
<!--                <div class="img-respon-center">-->
<!--                    <img src="--><?php //echo the_post_thumbnail_url() ?><!--"/>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div>-->
<!--                --><?php
//                echo $map[0];
//                ?>
<!--            </div>-->
<!--        </section>-->
<!---->
<!--        --><?php
//    endwhile;
//    wp_reset_query();
//    wp_reset_postdata();
//else :
//
//    // get_template_part( 'template-parts/post/content', 'none' );
//
//endif;
//?>
<!--    <div class="spa-form">-->
<!--        <form action="/cetm-miraway/wp-admin/api.php">-->
<!--            <div class="form-group">-->
<!--                <input type="text" class="form-control" id="exampleInputEmail1" name="fullname"-->
<!--                       aria-describedby="emailHelp" placeholder="Họ và tên">-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <input type="number" class="form-control" id="exampleInputPassword1" name="phone"-->
<!--                       placeholder="Số điện thoại">-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <input type="email" class="form-control" id="exampleInputEmail1" name="email"-->
<!--                       aria-describedby="emailHelp" placeholder="Email">-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"-->
<!--                          placeholder="Tin nhắn"></textarea>-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <input type="hidden" name="type" value="TUVAN"/>-->
<!--                <button type="submit" class="form-control btn btn-primary spa-btn">Gửi</button>-->
<!--            </div>-->
<!--        </form>-->
<!--    </div>-->

    <section class="contact-page ">
        <?php
        //print phpinfo();
        $query_section = array(
            'posts_per_page' => 1,
            'post_type' => 'cetm-lien-he',
            //    'lang' => pll_current_language(),
            'orderby' => 'date',
            'order' => 'ASC',
            'post_status' => 'publish',
            'category_name' => 'banner'

        );
        $section = new WP_Query($query_section);
        if ($section->have_posts()):
        while ($section->have_posts()):
        $section->the_post();
        $map = get_post_meta($post->ID, 'wpcf-cetm-map');
        ?>

        <div class="banner" style="background-image:url('<?php echo the_post_thumbnail_url() ?>');">
            <h3>Liên hệ ngay</h3>
            <h2>Với chúng tôi</h2>
        </div>
        <div class="content container-percent">
            <h2>Liên hệ với chúng tôi</h2>
            <div class="map">
                <?php
                echo $map[0];
                ?>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <h3>Thông tin</h3>
                    <?php echo $post->post_content;

                    ?>
                </div>
                <div class="col-md-7">
                    <h3>Gửi thông tin liên hệ cho chúng tôi</h3>
                    <form  data-toggle="validator" action="/cetm-miraway/wp-admin/api.php">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="fullname" id="inputAddress"
                                       placeholder="Họ và tên" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" id="inputEmail4"
                                       placeholder="Email" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="number" class="form-control" name="phone" id="inputPassword4"
                                       placeholder="Phone" required>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3"
                                      placeholder="Lời nhắn"></textarea>
                        </div>
                        <div class="col-md-12">
                            <input type="hidden" name="type" value="TUVAN"/>
                            <button type="submit" class="btn btn-primary">GỬI</button>
                        </div>
                    </form>
                </div>
            </div>
            <?php
            endwhile;
            wp_reset_query();
            wp_reset_postdata();
            else :

                // get_template_part( 'template-parts/post/content', 'none' );

            endif;
            ?>

        </div>
    </section>
<?php get_footer();