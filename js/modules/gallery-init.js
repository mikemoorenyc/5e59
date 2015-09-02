function galleryInit() {
  var slideCount = $('#gallery-container .slide img').length;
  var slideLoad = 0;
  $('#gallery-container').on('init', function(event, slick, currentSlide, nextSlide){
    $(this).addClass('__activated');
  });
  $('#gallery-container .slide img').each(function(){
    var img = $(this);

    $(img).load(function(){
      slideLoad++;

      if(slideLoad == slideCount) {
        $('#gallery-container').slick({
          adaptiveHeight: true,
          dots:true,
          arrows: false,
          mobileFirst: true,
          autoplay:true,
          responsive: [
            {
              breakpoint: dt,
              settings: {
                arrows: true,
                dots:false
              }
            }
          ]
        });

        $('#gallery-container').slick('slickPause');
      }

    });
  });
}
