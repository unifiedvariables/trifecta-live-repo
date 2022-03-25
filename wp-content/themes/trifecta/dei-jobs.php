<?php 
// Template Name: jobs
get_header(); 

$thumb_id = get_post_thumbnail_id( $id );
if ( '' != $thumb_id ) {
$thumb_url  = wp_get_attachment_image_src( $thumb_id, 'custom-size', true );
$image      = $thumb_url[0];
}
else{
$image = $thumb_url[''];  
}
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <!--================Banner==================-->
        <section id="home" class="banner sub-banner">
            <img src="<?php echo $image; ?>" class="img-fluid w-100 h-auto" alt="">
            <div class="container justify-content-center">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="banner-title text-white " data-wow-duration="1500ms"><?php the_title(); ?>  </h1>
                        
                    </div>                   
                </div>
            </div>
        </section>
        
        <!--================End Banner==================-->

            <section id="" class="Clients bg-gray py-5">
                <div class="container py-md-5">
                    <div class="">
                      <div class="row">
                            
                            <div class="col-md-12 mx-auto">
                              <!-- <h6 style="text-align: center; font-size: 50px" class="sub-title wow fadeInUp" data-wow-duration="1500ms"><?php //the_title(); ?></h6> -->
                              <div class="entry-content">
                                  <?php the_content(); 
                                  ?>
                              </div><!-- .entry-content --> 
                            </div>
                                                     
                      </div>              
                    </div>
                </div>
            </section>
        <?php endwhile; else: ?>
<?php endif; ?>

<?php get_footer();?>
