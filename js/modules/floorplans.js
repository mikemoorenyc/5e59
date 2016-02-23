$('#plan-tabber li a').click(function(){
  if($(this).hasClass('active') == false) {
    $('#plan-tabber li a').removeClass('active');
    $(this).addClass("active");
    var type = $(this).data('type'),
        copy = $('#state-copy > div[data-type="'+type+'"]').find('.copy').html(),
        img = $('#state-copy > div[data-type="'+type+'"]').find('.img').html();

    $( "#spec-img" ).animate({
      opacity: 0
    }, ts, function() {
      $('#spec-img').html(img);
      $( "#spec-img" ).animate({opacity:1});
    });
    $('#spec .copy-block').animate({
      opacity:0
    }, ts, function(){
      $('#floorplans #spec .copy-block').html(copy);
      $('#floorplans #spec .copy-block').animate({opacity:1},ts);
    });

  }


  return false;
});


$('#floorplans #spec .copy-block').html(
$($('#state-copy > div[data-type="floorplan"]').find('.copy').html())
);
