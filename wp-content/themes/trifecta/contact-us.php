<?php 
// Template Name: contact
get_header(); ?>
<?php $thumb_id = get_post_thumbnail_id( $id );
if ( '' != $thumb_id ) {
$thumb_url  = wp_get_attachment_image_src( $thumb_id, 'custom-size', true );
$image      = $thumb_url[0];
}
else{
$image = $thumb_url[''];  
}
?>
		    <!--================Banner==================-->
            <div class="sub-banner">
                <img src="<?php echo $image; ?>" class="img-fluid" alt="">
                <div class="container">
                    <div class="row">
                        <h1 class="section-title text-white"><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
            
            <!--================End Banner==================-->
            
            <!--================Contact Us==================-->
            <section class="contact pt-5">
                <div class="container py-md-5">
                    <div class="row">
                        <div class="col-lg-12 mb-5">
                            <div class="email-box">
                                <p class="text-white"><img src="<?php echo get_template_directory_uri();?>/assets/img/email.png" class="img-fluid me-md-4 me-2" width="35" alt=""> <strong>Email :</strong>&nbsp;&nbsp;  <a href="mailto:<?php echo get_field('contact_us_email'); ?>"><?php echo get_field('contact_us_email'); ?></a></p>
                            </div>
                        </div>
                        <div class="col-lg-12 text-center mb-5">
                            <h2 class="section-title">ready to get started with us</h2>
                            <p class="dec">
                                Submit your information for an introduction call with us!
                            </p>        
                        </div>
                        
                        <div class="col-md-12 col-lg-8 col-xl-7 mx-auto mb-3">
                            <?php echo do_shortcode( '[contact-form-7 id="134" title="Contact Form Contact"]') ?>
                            <!-- <form method="post">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <input type="text" placeholder="Name" name="">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <input type="text" placeholder="Email" name="">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <input type="text" placeholder="Phone" name="">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <textarea placeholder="Message" name="" rows="6"></textarea>
                                    </div>
                                    <div class="col-md-12 text-center mb-3">
                                        <input type="submit" value="submit" class="btn-orange" name="">
                                    </div>
                                </div>
                            </form> -->
                            
                        </div>
                        
                       
                    </div>
                </div>
            </section>
            <!--================Contact Us==================-->
<?php get_footer();?>
