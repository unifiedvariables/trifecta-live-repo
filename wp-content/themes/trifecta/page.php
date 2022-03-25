<?php get_header();?>
<?php while ( have_posts() ) : the_post(); ?>
    
    <section id="" class="Clients bg-gray py-5">
        <div class="container py-md-5">
            <div class="">
              <div class="row">
                  <div class="col-lg-12 text-center mb-5">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                      <h6 class="sub-title wow fadeInUp" data-wow-duration="1500ms"><?php the_title(); ?></h6>
                      <div class="entry-content">
                          <?php the_content(); 
                          ?>
                      </div><!-- .entry-content --> 
                    </div>
                    <div class="col-md-4"></div>
                  </div>
                  
              </div>              
            </div>
        </div>
    </section>

<?php endwhile; // end of the loop. ?>
<?php get_footer();?>