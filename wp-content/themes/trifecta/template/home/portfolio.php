<?php
$portfolio_title = get_page_by_path( 'home' );
$id = $portfolio_title->ID;
?>
            <!--================Our-portfolio==================-->
            <section class="Our-portfolio">
                <div class="container">
                    <div class="row g-md-5">
                        <div class="col-md-12">
                           
                            <h2 class="section-title text-center text-white py-1"><?php echo get_field('portfolio_text',$id); ?></h2>
                            <div class="row pt-2">
                                <div class="col-lg-6 col-md-6 col-6 mb-3 mb-md-0 text-center border-end">
                                    <h2 class="section-title text-white dollar m" data-count="<?php echo get_field('total_asset_value',$id); ?>">0</h2>
                                    <p class="text-white">Total Asset Value</p>
                                </div>
                                <div class="col-lg-6 col-md-6 col-6 text-center">
                                    <h2 class="section-title text-white plus" data-count="<?php echo get_field('multifamily_units',$id); ?>">0</h2>
                                    <p class="text-white">Multifamily Units</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--================Our-portfolio==================-->
