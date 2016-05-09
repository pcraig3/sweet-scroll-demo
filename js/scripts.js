const sweetScroll = new SweetScroll(
  {duration: 600}
);

$(document).ready(function() {

  $body = $('body');
  $sections = $body.find('.section');
  $sections.first().addClass('active');

  $('body').on('click', '.section', function() {

    $sections.removeClass('active');
    $($(this).attr('data-scroll')).addClass('active');
  });

  /// keypress stuff
  $(document).keydown(function(e) {
    // 38 -> up;
    // 40 -> down
    $active_section = $sections.filter('.active');
    if(! $active_section.length)
      return;

    switch(e.which) {
        case 40: // down
        $active_section.click();
        break;

        default: return; // exit this handler for other keys
    }
    e.preventDefault(); // prevent the default action (scroll / move caret)
  });

});
