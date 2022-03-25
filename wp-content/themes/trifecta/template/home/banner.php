            <!--================Banner==================-->
            <div class="Main-Slider m-0">
                <?php 
                $i=0;        
                global $post;
                $query = new WP_Query(array('post_type' => 'banner','posts_per_page' => -1 ));                       

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
                
                <div class="item">
                    <div class="img-fill">
                        <img src="<?php echo get_field('banner'); ?>" class="img-fluid" alt="">
                        <div class="info">
                            <div>
                                <h3><?php echo get_field('banner_text_1'); ?></h3>
                                <h5><?php echo get_field('banner_text_2'); ?> </h5>
                                <div class="button-section mt-4">
                                    <a href="#" class="btn-orange me-3">Join Now</a> <a href="<?php echo home_url('about-us'); ?>" class="btn-black">Learn More</a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <?php 
                wp_reset_query();}
                ?>
                
            </div>
            
            <!--================End Banner==================-->