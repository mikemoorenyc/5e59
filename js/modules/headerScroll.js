function headerScroll() {
  var headh = $('#intro').height();
  var stop = $(document).scrollTop();
  if(stop >= headh) {
    $('html').addClass('__scrolled-down');
  } else {
    $('html').removeClass('__scrolled-down');
  }
  var introScroll = $('#intro-scroll').offset().top;
//  console.log(introScroll-windowh)
  if((stop)>(introScroll-windowh)) {
    $('html').addClass('__scroll-activated');
  }

}
