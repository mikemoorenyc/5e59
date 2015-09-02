function panSize() {
  var img = $('#intro-pan img');


  if(windoww < dt) {

    $(img).attr('src', $(img).data('800'));
  } else {
    $(img).attr('src', $(img).data('src'));
  }
}
$(window).resize(function(){
  panSize();
});
