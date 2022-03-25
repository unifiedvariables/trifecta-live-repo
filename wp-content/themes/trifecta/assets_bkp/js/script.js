// Banner Slider

$(document).ready(function(){
  
  $(".Main-Slider").slick({
    autoplay:true,
    speed:800,
    slidesToShow:1,
    slidesToScroll:1,
    pauseOnHover:false,
    dots:true,
    arrows:true,
    pauseOnDotsHover:true,
    fade:true,
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


