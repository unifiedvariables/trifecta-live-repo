<?php
$invest_title = get_page_by_path( 'home' );
$id = $invest_title->ID;
?>
            <!--================Why==================-->
            <section class="Why py-5">
                <div class="container py-md-5">
                    <div class="row g-5">
                        
                        <div class="col-md-6">
                            <h4 class="sub-title"><?php echo get_field('home_invest_title',$id); ?></h4>
                            <h2 class="section-title"><?php echo get_field('home_invest_sub_title',$id); ?></h2>
                            <p>
                                
                                <?php echo get_field('home_invest_content',$id); ?>
                            </p>
                            <!-- <a href="#" class="btn-orange">Learn More</a> -->
                        </div>
                        <div class="col-md-6">
                            <img src="<?php echo get_field('home_invest_image',$id); ?>" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <!--================Why==================-->