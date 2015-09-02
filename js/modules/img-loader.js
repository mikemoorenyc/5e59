function imgLoader(theImg) {
  $('img.late-load').each(function(){
    var theImg = $(this);
    var theSrc = $(theImg).data('src');
    $(theImg).attr('src', theSrc);
    $(theImg).load(function(){
      $(theImg).addClass('__activated');
      $(theImg).parent().addClass('__activated');
    });
  });
}
