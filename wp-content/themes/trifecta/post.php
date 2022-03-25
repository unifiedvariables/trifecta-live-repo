<?php get_header();?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<section id="" class=" Service py-5">
            <div class="container py-md-3">
                <div class="">
                <div class="row">
                    <div class="col-lg-5 mb-5 mb-lg-0">
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