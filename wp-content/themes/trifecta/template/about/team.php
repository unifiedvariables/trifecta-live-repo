            <!--================Team==================-->
            <section class="Team pt-5">
                <div class="container py-md-5">
                    <div class="row">
                        <div class="col-lg-12 text-center mb-5">
                            <h2 class="section-title">Team</h2>
                        </div>
                        <?php 
                        $i=0;        
                        global $post;
                        $query = new WP_Query(array('post_type' => 'team','posts_per_page' => -1 ));                       

                        while ($query->have_posts()) {
                        $i++;
                        $query->the_post ();
                        $get_post_id = $post->ID;
                        $slider_img = wp_get_attachment_image(get_post_thumbnail_id($get_post_id,'full'));
                        ?>
                        <?php $thumb_id = get_post_thumbnail_id( $id );
                        if ( '' != $thumb_id ) {
                        $thumb_url  = wp_get_attachment_image_src( $thumb_id, 'custom-size', true );
                        $image      = $thumb_url[0];
                        }
                        else{
                        $image = $thumb_url[''];  
                        }
                        ?>
                        <div class="col-md-6 col-lg-4 col-xl-4 mb-3">
                            <div class="team-box">
                                <div class="team-image">
                                    <img src="<?php echo $image; ?>" class="img-fluid" alt="">
                                </div>
                                <div class="team-content-area">
                                    <h4><?php the_title(); ?></h4>
                                    <?php the_content(); ?>
                                    
                                </div>
                                <div class="text-center team-btn">
                                    <a href="<?php echo home_url('contact-us'); ?>" class="btn-orange">Contact</a>
                                </div>
                            </div>
                            
                        </div>
                        <?php 
                        wp_reset_query();}
                        ?>
                       
                    </div>
                </div>
            </section>
            <!--================team==================-->