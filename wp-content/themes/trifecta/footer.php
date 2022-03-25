            <!--================End Footer==================-->
            <footer>
                <div class="container position-relative">
                    <img src="<?php echo wp_get_attachment_url(get_option('footer_logo_upload'),'full');?>" class="img-fluid footer-logo" alt="">
                    <div class="workshop-container">
                        <div class="row">
                            <div class="col-lg-10 text-center mx-auto footer-contact">
                                <div class="d-md-flex justify-content-center align-items-center">
                                  <img src="<?php echo get_template_directory_uri();?>/assets/img/email-icon.png" class="img-fluid me-3 mb-2 mb-md-0" alt="">
                                  <h2 class="section-title m-0">Don’t miss the Trifecta active Deal! </h2>
                                </div>
                                <?php //echo do_shortcode( '[contact-form-7 id="90" title="Contact form Home"]') ?>
                                <?php echo do_shortcode( '[activecampaign form=1 css=1]') ?>
                                
                                <!-- <form>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 mb-2 mb-md-0">
                                            <input type="text" placeholder="Enter your Name" name="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 mb-2 mb-md-0">
                                             <input type="text" placeholder="Enter your email" name="">
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <button class="btn-orange" type="submit">Subscribe</button>
                                        </div>
                                    </div>
                                </form> -->
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </footer>
            <div class="copyright">
                <div class="container">
                    <p class="mb-4">Disclaimer : <?php echo get_option('footer_disclaimer'); ?></p>
                <div class="row">
                    <div class="col-lg-7 text-center text-lg-start">
                        <p class="copy mb-lg-0"><?php echo get_option('footer_copyright'); ?></p>
                    </div>
                    <div class="col-lg-5">
                        <div class="d-flex justify-content-center">
                            <p class="me-4 mb-0">Follow Us On:</p>
                        <div class="social-menu mb-4 mb-md-0">
                            <?php if(get_option( "_facebook", true))
                                    { ?>
                                    <a target="_blank" href="<?php echo get_option( "_facebook", true);?>"><i class='bx bxl-facebook' ></i></a>
                                      <?php } ?>
                                    <?php if(get_option( "_twitter", true))
                                    { ?>
                                    <a target="_blank" href="<?php echo get_option( "_twitter", true);?>"><i class='bx bxl-twitter'></i></a>
                                      <?php } ?>
                                    <?php if(get_option( "_linkedin", true))
                                    { ?>
                                    <a target="_blank" href="<?php echo get_option( "_linkedin", true);?>"><i class='bx bxl-linkedin' ></i></a>
                                      <?php } ?>
                                    <?php if(get_option( "_pinterest", true))
                                    { ?>
                                    
                                    <a target="_blank" href="<?php echo get_option( "_pinterest", true);?>"><i class='bx bxl-pinterest-alt' ></i></a>
                                      <?php } ?>
                                </div>
                        </div>
                    </div>
                </div>
                </div>
 
            </div>
            <!--================End Footer==================-->
           
        </main>
        <!-- <script src="<?php echo get_template_directory_uri();?>/assets/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/js/popper.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/libs/slick-carousel/1.8.1/slick.min.js"></script> -->
        <script src="<?php echo get_template_directory_uri();?>/assets/js/menu.js?v=<?php echo microtime();?>"></script>
        <script src="<?php echo get_template_directory_uri();?>/assets/js/script.js?v=<?php echo microtime();?>"></script>
        <script>
        $(document).ready(function() {
            var counted = 0;
            $(window).scroll(function() {
              var oTop = $('.Our-portfolio').offset().top - window.innerHeight;
              if (counted == 0 && $(window).scrollTop() > oTop) {
                $('.section-title').each(function() {
                  var $this = $(this),
                    countTo = $this.attr('data-count');
                  $({
                    countNum: $this.text()
                  }).animate({
                      countNum: countTo
                    },

                    {

                      duration: 2000,
                      easing: 'swing',
                      step: function() {
                        $this.text(Math.floor(this.countNum));
                      },
                      complete: function() {
                        $this.text(this.countNum);
                        //alert('finished');
                      }

                    });
                });
                counted = 1;
              }

            });
                    
                    
                    
                    
          $(".set > h4").on("click", function() {
            if ($(this).hasClass("active")) {
              $(this).removeClass("active");
              $(this)
                .siblings(".content")
                .slideUp(200);
              $(".set > h4 i")
                .removeClass("bx-caret-up")
                .addClass("bx-caret-down");
            } else {
              $(".set > h4 i")
                .removeClass("bx-caret-up")
                .addClass("bx-caret-down");
              $(this)
                .find("i")
                .removeClass("bx-caret-down")
                .addClass("bx-caret-up");
              $(".set > h4").removeClass("active");
              $(this).addClass("active");
              $(".content").slideUp(200);
              $(this)
                .siblings(".content")
                .slideDown(200);
            }
          });
        });
        </script>
        <?php wp_footer();?>
    </body>
</html>
