<?php 
// Template Name: about
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
            
            <?php get_template_part( 'template/about/team' );?>
            <?php get_template_part( 'template/about/advisors' );?>
            <?php get_template_part( 'template/about/mission' );?>

<?php get_footer();?>
