<?php get_header();?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php
$thumb_id = get_post_thumbnail_id( $id );
if ( '' != $thumb_id ) {
$thumb_url  = wp_get_attachment_image_src( $thumb_id, 'custom-size', true );
$image      = $thumb_url[0];
}
else{
$image = $thumb_url[''];  
}

?>  
        <div class="sub-banner">
            <?php if($image) { ?>
            <img src="<?php echo $image; ?>" class="img-fluid" alt="">
            <?php } 
            else{ ?>
            <img src="<?php echo get_template_directory_uri();?>/assets/img/how-it-work-banner.jpg" class="img-fluid" alt="">         
            <?php   }
            ?>
            <div class="container">
                <div class="row">
                    <h1 class="section-title text-white"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>

		    <section id="" class=" Service py-5">
            <div class="container py-md-3">
                <div class="">
                    <div class="row g-md-5">
                        <div class="col-lg-12 mb-5 mb-lg-0">
                            <h6 class="sub-title wow fadeInUp" data-wow-duration="1500ms"><?php echo the_title();?></h6>
                            <?php echo the_content();?>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        
<?php endwhile; else: ?>
<?php endif; ?>
<?php get_footer();?>


