// Banner Slider

$(document).ready(function(){
  
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
  
  $(".Main-Slider").slick({
    autoplay:false,
    speed:800,
    slidesToShow:1,
    slidesToScroll:1,
    pauseOnHover:false,
    dots:true,
    arrows:true,
    pauseOnDotsHover:true,
    fade:false,
    draggable:false,
 
  });
  
})

$('.play-btn').click(function(e){
    var iframeEl = $('<iframe>', { src: $(this).data('url') });
    $('#youtubevideo').attr('src', $(this).data('url'));
})

$('#close-video').click(function(e){
    $('#youtubevideo').attr('src', '');
}); 

$(document).on('hidden.bs.modal','#myModal', function () {
    $('#youtubevideo').attr('src', '');
}); 


 window.onload = function () {
    window.setTimeout(fadeout, 500);
    };
    function fadeout() {
    document.querySelector(".preloader").style.opacity = "0";
    document.querySelector(".preloader").style.display = "none";
    };

wow = new WOW(
    {
    
    offset: 100
    }
    );
    wow.init();


 new WOW().init();


