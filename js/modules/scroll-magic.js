function scrollMagic() {

  var cutoff = windowh /2;

  var stop = $(document).scrollTop();

  var pixelsFromCenter = 100;

  $('.scroll-magic').each(function(){
    var theMagic = $(this);
    if($(theMagic).hasClass('__scroll-activated') === false) {

      var destop = $(theMagic).offset(),
          dtop = destop.top;

      if ((dtop-pixelsFromCenter)-cutoff <= stop) {

        $(theMagic).addClass('__scroll-activated');
        scrollRunner(theMagic);

      }
    }

  });

  if($(window).scrollTop() + $(window).height() == $(document).height()) {
       $('.scroll-magic.bottom-block').each(function(){
         var theMagic = $(this);
         if($(theMagic).hasClass('__scroll-activated') === false) {
           $(theMagic).addClass('__scroll-activated');
           scrollRunner(theMagic);
         }
       });
   }

  function scrollRunner(theMagic) {

    var thefunction = $(theMagic).data('scrollfunction'),
        thevariables = $(theMagic).data('scrollvariables');
    if (thevariables === "theObject") {
      thevariables = theMagic;
    }
    if (typeof window[thefunction] == 'function') {

      window[thefunction](thevariables);
    }
  }
}
$(window).scroll(function(){
scrollMagic();
});


//GENERIC FADE IN
function genericFadeIn(theObject) {
  var children = $(theObject).find('.fade-child'),
      cLength = children.length,
      cCount = 0;

  if(cLength > 0) {
    $(children[0]).addClass('__faded-in');
    cCount++;
  }
  var fadeLoop = setInterval(function(){
    if(cCount == cLength) {
      clearInterval(fadeLoop);
      return false;
    }
    $(children[cCount]).addClass('__faded-in');
    cCount++;
  },(ts/3));

}

//GALLERY FADE
function galleryFade() {
  setTimeout(function(){
    $('#gallery-container').slick('slickPlay');
  },ts*2)
}
