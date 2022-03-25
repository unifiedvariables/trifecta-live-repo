<?php
$about_title = get_page_by_path( 'home' );
$id = $about_title->ID;
?>
            <!--================About==================-->
            <section class="About py-5">
                <div class="container py-md-5">
                    <div class="row g-5">
                        <div class="col-md-6">
                            <img src="<?php echo get_field('home_about_image',$id); ?>" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-6">
                            <h4 class="sub-title"><?php echo get_field('home_about_title',$id); ?></h4>
                            <h2 class="section-title"><?php echo get_field('home_about_sub_title',$id); ?></h2>
                            <p>
                                
                                <?php echo get_field('home_about_content',$id); ?>
                            </p>
                            <!-- <a href="<?php echo home_url('about-us'); ?>" class="btn-orange">Learn More</a> -->
                        </div>
                    </div>
                </div>
            </section>
            <!--================About==================-->