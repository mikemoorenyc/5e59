$('#plan-tabber li a').click(function(){
  if($(this).hasClass('active') == false) {
    $('#plan-tabber li a').removeClass('active');
    $(this).addClass("active");
    var type = $(this).data('type'),
        copy = $('#state-copy > div[data-type="'+type+'"]').find('.copy').html(),
        img = $('#state-copy > div[data-type="'+type+'"]').find('.img').html();

    $( "#spec-img, #spec .copy" ).animate({
      opacity: 0
    }, ts, function() {
      $('#spec-img').html(img);
      $('#spec .copy').html(copy);
      $( "#spec-img, #spec .copy" ).animate({opacity:1});
    });

  }


  return false;
});
