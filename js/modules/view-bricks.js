function viewBricks() {
  $('#view-bricks > div img').each(function(){
    $(this).load(function(){
      $(this).parent().css('background-image',
        'url('+$(this).attr('src')+')'
      );
    });
  });
}

$('#view-bricks>div  a').click(function(){
if(!(Modernizr.touch)) {



  var src = $(this).data('src');

  $('#view-modal .loader').after('<img class="full-img" src="'+src+'"/>');
  $('#view-modal img.full-img').load(function(){
    $(this).addClass('__loaded');
  });
  $('html').addClass('__modal-open');
  $('#view-modal').fadeIn(ts);
}

  return false;
});
$('#view-modal').click(function(){

  $('#view-modal').fadeOut(ts,function(){
    $('#view-modal img.full-img').remove();
    $('html').removeClass('__modal-open');

  });
});


if(windoww >= dt) {
  $('#views .copy-container').prepend(
    '<div class="headline-container fade-child" />'
  );
  $("#views .copy-container .headline-container").html($('#views .headline'));
}
