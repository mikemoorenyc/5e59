function contactWidth() {
  $('#contact-blocks .block .copy-block h2').each(function(){
    var lw = $(this).width();
    $(this).closest('.block').width(lw + 40);
  });
}
contactWidth();
$(window).resize(function(){
  contactWidth();
})
