<?php
$about_title = get_page_by_path( 'home' );
$id = $about_title->ID;
?>
            <!--================Mission==================-->
            <section class="Mission">
                <div class="container py-md-5">
                    <div class="row g-5">
                        <div class="col-lg-6 col-md-8">
                            <h4 class="sub-title text-white"><?php echo get_field('home_mission_title',$id); ?></h4>
                            <h2 class="section-title text-white"><?php echo get_field('home_mission_sub_title',$id); ?></h2>
                            <p class="text-white">
                                
                                <?php echo get_field('home_mission_content',$id); ?>
                            </p>
                            <!-- <a href="#" class="btn-orange">Join Now</a> -->
                        </div>
                    </div>
                </div>
            </section>
            <!--================Mission==================-->