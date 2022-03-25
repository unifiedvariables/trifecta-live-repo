<?php
$how_it_works_title = get_page_by_path( 'about-us' );
$id = $how_it_works_title->ID;
?>
            <!--================how-it-work==================-->
            <section class="Mission-purpose pb-5">
                <div class="container pb-md-5">
                    
                    <div class="text-center pb-3">
                        <h2 class="section-title"><?php echo get_field('about_mission_title',$id); ?></h2>
                    </div>
                    <div class="row">
                       <div class="col-lg-6">
                           <?php echo get_field('about_mission_content',$id); ?>
                       </div> 
                       <div class="col-lg-6 text-center">
                           <img src="<?php echo get_field('about_mission_image',$id); ?>" class="img-fluid" alt="">
                       </div>
                    
                </div>
            </div>
            </section>
            <!--================how-it-work==================-->