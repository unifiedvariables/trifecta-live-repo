            <!--================Why Invest==================-->
            <section class="why-invest py-5">
                <div class="container py-md-5">
                    <div class="row">
                        <div class="col-lg-12 text-center mb-5">
                            <h2 class="section-title">Why Invest in Multifamily Real Estate</h2>
                        </div>

                        <?php 
                        $i=0;        
                        global $post;
                        $query = new WP_Query(array('post_type' => 'invest','posts_per_page' => -1 ));                       

                        while ($query->have_posts()) {
                        $i++;
                        $query->the_post ();
                        $get_post_id = $post->ID;
                        $slider_img = wp_get_attachment_image(get_post_thumbnail_id($get_post_id,'full'));
                        ?>
                        
                        <div class="col-md-6 col-lg-4 col-xl-3 mb-3">
                            <div class="invest-box">
                                <div class="icon-area">
                                    <img src="<?php echo get_field('why_invest_icon'); ?>" alt="">
                                </div>
                                <div class="content-area">
                                    <h4><?php the_title(); ?></h4>
                                    <p><?php the_content();?> </p>
<!--                                     <a href="<?php echo get_permalink(); ?>" class="links">Learn More <img src="<?php echo get_template_directory_uri();?>/assets/img/right-arrow.png" class="ms-2 img-fluid" alt=""></a> -->
                                </div>
                            </div>
                            
                        </div>
                        <?php 
                        wp_reset_query();}
                        ?>
                    </div>
                </div>
            </section>
            <!--================Why Invest==================-->