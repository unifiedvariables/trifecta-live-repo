<?php 
get_header(); ?>
<?php
$blog_title = get_page_by_path( 'blog' );
$blog_content = $blog_title->post_content;
$blog_permalink = get_permalink($blog_title);
$id = $blog_title->ID;
$thumb_id = get_post_thumbnail_id( $id );
if ( '' != $thumb_id ) {
$thumb_url  = wp_get_attachment_image_src( $thumb_id, 'custom-size', true );
$image      = $thumb_url[0];
}
else{
$image = $thumb_url[''];  
}

?>

        <section id="home" class="banner sub-banner">
            <img style="height: 300px" src="<?php echo $image; ?>" class="img-fluid w-100 h-auto" alt="">
            <div class="container justify-content-center">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="banner-title text-white" data-wow-duration="1500ms"><?php echo get_the_title($blog_title);?>  </h1>
                    </div>                   
                </div>
            </div>
        </section>


        <!--================Blog==================-->
        <section class="news-sec">
         <div class="container">
            <div class="row">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
              $thumb_id = get_post_thumbnail_id( $id );
              if ( '' != $thumb_id ) {
              $thumb_url  = wp_get_attachment_image_src( $thumb_id, 'custom-size', true );
              $image      = $thumb_url[0];
              }
              else{
              $image = $thumb_url[''];  
              }

              ?>
               <div class="col-sm-8">
                  <div class="blogs blog-right-bar">
                     <div class="blog-post">
                        <div class="blog-img">
                           <?php if($image) { ?>
                            <img src="<?php echo $image;?>" class="img-fluid wow fadeInRight" data-wow-duration="1500ms" alt="">
                            <?php } 
                                else{ ?>
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/blog1.png" class="img-fluid wow fadeInRight" data-wow-duration="1500ms" alt="">         
                            <?php   }
                            ?>
                           <!-- <div class="blog-posted">
                              <p>Date - <?php //echo get_the_date('dS M Y')?></p>
                           </div> -->
                        </div>
                        <div class="blog-text">
                           <h1><?php echo the_title();?></h1>
                           <p><?php the_content();?></p>
                        </div>
                     </div>
                  </div>
               </div>
              <?php endwhile; else: ?>
              <?php endif; ?> 
               <div class="col-sm-4">
                  <div class="blog-right-bar">
                     <div class="news-bar">
                        <h5>Latest Blog Posts</h5>
                        <ul>
                            <?php 
                      $i=0;        
                      global $post;
                      $query = new WP_Query(array('post_type' => 'blogs','order' => 'DESC','posts_per_page' => -1 ));                       

                      while ($query->have_posts()) {
                      $i++;
                      $query->the_post ();
                      $get_post_id = $post->ID;
                      $slider_img = wp_get_attachment_image(get_post_thumbnail_id($get_post_id,'full'));
                      ?>
                      <?php $thumb_id = get_post_thumbnail_id( $id );
                      if ( '' != $thumb_id ) {
                      $thumb_url  = wp_get_attachment_image_src( $thumb_id, 'custom-size', true );
                      $image      = $thumb_url[0];
                      }
                      else{
                      $image = $thumb_url[''];  
                      }
                      ?>
                           <li><a href="<?php echo get_permalink();?>"><i class="fa fa-angle-right" aria-hidden="true"></i><?php the_title();?></a></li>
                      <?php 
                      wp_reset_query();}
                      ?> 
                        </ul>
                     </div>
                  </div>
                  <!-- <div class="blog-right-bar">
                     <div class="news-bar">
                        <h5>ARCHIVES</h5>
                        <ul>
                            <li>
                                <i class="fa fa-angle-right" aria-hidden="true"></i><?php wp_get_archives( array( 'type' => 'monthly', 'post_type' => 'blogs', ) ); ?>
                            </li>
                     </div>
                  </div>
                  <div class="blog-right-bar">
                     <div class="news-bar">
                        <h5>CATEGORIES</h5>
                        <ul>
                                <?php
                                $categories = get_categories(
                                              array
                                              (
                                                  'post_type' => 'blogs',
                                                  // 'taxonomy' => 'category'
                                                  // 'tag_ID' => 9
                                              ));
                                foreach($categories as $category) {
                                  ?>
                            <li><a href="<?php echo get_category_link($category->term_id); ?>"><i class="fa fa-angle-right" aria-hidden="true"></i><?php echo $category->name; ?></a></li>

                          <?php
                            }
                          ?>
                        </ul>
                     </div>
                  </div> -->
               </div>
            </div>
         </div>
      </section>
        <!--================End Blog==================-->
        <?php get_footer();?>