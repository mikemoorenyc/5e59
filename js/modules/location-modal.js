$('.location-pop').click(function(){

  var imgsrc = $(this).data('map');
  $('#map-modal .loader').after('<img class="map-hi" src="'+imgsrc+'" /><div class="map-interactor" ></div>');
  $('#map-modal img.map-hi').load(function(){
    $(this).addClass('__loaded');
    if(retina == true) {
      //console.log('adsfasd');
      var width = $('#map-modal img.map-hi').width();
      //console.log(width);
      $('#map-modal img.map-hi').width(width / 2);
    }
    //INITIAL TRANSFORM
    var imgw = $(this).width();
    var imgh = $(this).height();
    var wdif = ((windoww-imgw)/2);
    var hdif = ((windowh-imgh)/2);
    var initTrans = 'translate('+wdif+'px,'+hdif+'px)';


/*
    $(this).panzoom({
      disableZoom: true

      ,startTransform: initTrans
    });
    */

    //MIKE'S CUSTOM DRAG FUNCTION
    var imgX = wdif,
        imgY = hdif,
        thresholdX = $('#map-modal').width()-imgw,
        thresholdY = $('#map-modal').height()-imgh,
        theImg = $(this);
    $(this).css({
      'transform' : initTrans,
      '-webkit-transform': initTrans,
      '-ms-transform': initTrans
    });
    if(mobileDetector == false) {
      var dragState = false;
      $(document).on('mousedown','#map-modal .map-interactor',function(event){
        dragState = true;
        cursorX = event.clientX,
        cursorY = event.clientY;
      }).on('mouseup','#map-modal .map-interactor',function(){
        dragState = false;
      });
      //CURSOR VARIABLES
      var cursorX = 0;
      var cursorY = 0;
      $(document).on('mousemove','#map-modal .map-interactor',function(event){

        if(dragState === true) {
          positionFinder(event);

        }
        cursorX = event.clientX;
        cursorY = event.clientY;

      });
    } else {
      var dragState = false;
      //CURSOR VARIABLES
      var cursorX = 0;
      var cursorY = 0;

      $(document).on('vmousedown',"#map-modal .map-interactor", function(event){
        dragState = true;
        cursorX = event.clientX;
        cursorY = event.clientY;


      }).on('vmouseup',"#map-modal .map-interactor", function(){
        dragState = false;
        cursorX = 0;
        cursorY = 0;
      });
      $( document ).on ( "vmousemove", "#map-modal .map-interactor", function(event) {
        if(dragState === true) {
          positionFinder(event);

        }
        cursorX = event.clientX;
        cursorY = event.clientY;
      });
    }

    function positionFinder(event) {
      //console.log(event.pageX - cursorX);
      var xDif = event.clientX - cursorX,
          yDif = event.clientY - cursorY,
          newPosX = imgX + xDif,
          newPosY = imgY + yDif;
      if(newPosX <1 && newPosX >= thresholdX) {
        imgX = newPosX
      }
      if(newPosY <1 && newPosY >= thresholdY) {
        imgY = newPosY
      }
      var trans = 'translate('+imgX+'px,'+imgY+'px)';
      $(theImg).css({
        'transform' : trans,
        '-webkit-transform': trans,
        '-ms-transform': trans
      });
    //  $(theImg).panzoom("pan", imgX, imgY, { relative: false})

    }
/*
    //INITIAL TRANSFORM
    var imgw = $('#map-modal img.map-hi').width();
    var imgh = $('#map-modal img.map-hi').height();
    var wdif = ((windoww-imgw)/2);
    var hdif = ((windowh-imgh)/2);
    var initTrans = 'translate('+wdif+'px,'+hdif+'px)'
    $('#map-modal img.map-hi').css({
      //transform: initTrans
    });

    $(this).addClass('__loaded');
    $(this).panzoom({
      disableZoom: true,
      contain:'invert'
      ,startTransform: initTrans
    });
      */


  });

$('#map-modal').fadeIn(ts);
$('html').addClass('__modal-open');
  return false;
});
$('#map-modal .modal-close').click(function(){
  $('#map-modal').fadeOut(ts,function(){
    //$('#map-modal img.map-hi').panzoom("destroy");
    $('#map-modal img.map-hi').remove();
    $('html').removeClass('__modal-open');
  });
});
