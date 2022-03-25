            <!--================FAQ==================-->
            <section class="faq py-4">
                <div class="container pb-md-5">
                    <div class="row">
                        <div class="text-center pb-5">
                            <h2 class="section-title pb-3">Frequently Asked Questions</h2>
                        </div>
                        <div class="accordion-container">
                            <?php 
                            $i=0;        
                            global $post;
                            $query = new WP_Query(array('post_type' => 'faq','posts_per_page' => -1 ));                       

                            while ($query->have_posts()) {
                            $i++;
                            $query->the_post ();
                            $get_post_id = $post->ID;
                            $slider_img = wp_get_attachment_image(get_post_thumbnail_id($get_post_id,'full'));
                            ?>
                            <div class="set">
                                <h4>
                                    <?php the_title(); ?>

                                    <i class='bx bx-caret-down'></i>
                                </h4>
                                <div class="content">
                                    <p><?php the_content(); ?></p>
                                </div>
                            </div>
                            <?php 
                            wp_reset_query();}
                            ?>
                        </div>
                    </div>
                </div>
            </section>
            <!--================FAQ==================-->