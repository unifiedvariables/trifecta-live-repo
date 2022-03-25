<?php
$brands_title = get_page_by_path( 'home' );
$id = $brands_title->ID;
?>
            <!--================Brands==================-->
			<div class="brand pt-5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-md-3 mb-4 mb-md-0">
                            <h4 class="trust">Trusted by :</h4>
                        </div>
                        <div class="col-lg-10 col-md-9">
                            <div class="row align-items-center">
                                <div class="col-md-3 col-6 mb-2 mb-md-0">
                                    <img src="<?php echo get_field('trusted_by_image_1',$id); ?>" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-3 col-6 mb-2 mb-md-0">
                                    <img src="<?php echo get_field('trusted_by_image_2',$id); ?>" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-3 col-6 mb-2 mb-md-0">
                                    <img src="<?php echo get_field('trusted_by_image_3',$id); ?>" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-3 col-6 mb-2 mb-md-0">
                                    <img src="<?php echo get_field('trusted_by_image_4',$id); ?>" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--================End Brands==================-->