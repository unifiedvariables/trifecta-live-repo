<?php
$how_it_works_title = get_page_by_path( 'how-it-work' );
$id = $how_it_works_title->ID;
?>
            <!--================how-it-work==================-->
            <section class="how-it-work py-5">
                <div class="container py-md-5">
                    
                        <div class="text-center pb-5">
                            <h2 class="section-title pb-3"><?php echo get_field('how_it_works_text',$id); ?></h2>
                        </div>
                        <div class="row">
                          <div class="col-lg-3 col-md-3 col-6 position-relative">
                              <div class="work-circle">
                                <span class="counter">1</span>
                                  <img src="<?php echo get_field('home_main_image_1',$id); ?>" class="img-fluid" alt="">
                              </div>
                              <img src="<?php echo get_field('support_image_1',$id); ?>" class="c1" alt="">
                              <div class="text-center">
                                  <h4><?php echo get_field('round_image_text_1',$id); ?></h4>
                              </div>
							  <div class="text-center">
                                  <p><?php echo get_field('round_image_text_content_1',$id); ?></p>
                              </div>
                          </div> 
                          <div class="col-lg-3 col-md-3 col-6 position-relative">
                              <div class="work-circle">
                                <span class="counter">2</span>
                                  <img src="<?php echo get_field('home_main_image_2',$id); ?>" class="img-fluid" alt="">
                              </div>
                              <img src="<?php echo get_field('support_image_2',$id); ?>" class="c2" alt="">
                              <div class="text-center">
                                  <h4><?php echo get_field('round_image_text_2',$id); ?></h4>
                              </div>
							  <div class="text-center">
                                  <p><?php echo get_field('round_image_text_content_2',$id); ?></p>
                              </div>
                          </div> 
                          <div class="col-lg-3 col-md-3 col-6 position-relative">
                              <div class="work-circle">
                                <span class="counter">3</span>
                                  <img src="<?php echo get_field('home_main_image_3',$id); ?>" class="img-fluid" alt="">
                              </div>
                              <img src="<?php echo get_field('support_image_3',$id); ?>" class="c3" alt="">
                              <div class="text-center">
                                  <h4><?php echo get_field('round_image_text_3',$id); ?></h4>
                              </div>
							  <div class="text-center">
                                  <p><?php echo get_field('round_image_text_content_3',$id); ?></p>
                              </div>
                          </div> 
                          <div class="col-lg-3 col-md-3 col-6 position-relative">
                              <div class="work-circle">
                                <span class="counter">4</span>
                                  <img src="<?php echo get_field('home_main_image_4',$id); ?>" class="img-fluid" alt="">
                              </div>
                              <div class="text-center">
                                  <h4><?php echo get_field('round_image_text_4',$id); ?></h4>
                              </div>
							  <div class="text-center">
                                  <p><?php echo get_field('round_image_text_content_4',$id); ?></p>
                              </div>
                          </div>  
                          
                        </div>
                        <!-- <div class="text-center mt-5">
                             <a href="#" class="btn-orange">Get Started</a>
                        </div> -->
                 
                </div>
            </section>
            <!--================how-it-work==================-->