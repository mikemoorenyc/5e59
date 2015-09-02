$('.location-pop').click(function(){
  var imgsrc = $(this).data('map');
  $('#map-modal .loader').after('<img class="map-hi" src="'+imgsrc+'" />');
  $('#map-modal img.map-hi').load(function(){

    if(retina == true) {
      console.log('adsfasd');
      var width = $('#map-modal img.map-hi').width();
      console.log(width);
      $('#map-modal img.map-hi').width(width / 2);
    }

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
  });
$('#map-modal').fadeIn(ts);
$('html').addClass('__modal-open');
  return false;
});
$('#map-modal .modal-close').click(function(){
  $('#map-modal').fadeOut(ts,function(){
    $('#map-modal img.map-hi').panzoom("destroy");
    $('#map-modal img.map-hi').remove();
    $('html').removeClass('__modal-open');
  });
});
