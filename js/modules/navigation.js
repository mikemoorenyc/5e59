$('#menu-pop, .close-icon').click(function(){

  if(windoww<dt) {
    $('html').toggleClass('__menu-opened').toggleClass('__menu-closed');
  }
  return false;
});
$(window).resize(function(){
  $('html').removeClass('__menu-opened').addClass('__menu-closed');
});

$('nav ul li a').click(function(){
  $('html').removeClass('__menu-opened').addClass('__menu-closed');
});

$('nav ul li.dl-link a').click(function(){
  var top = $('#dl-list').offset().top;
  //console.log(top);
  $("html, body").animate({ scrollTop: top-65 },ts*2);
  return false;
});
