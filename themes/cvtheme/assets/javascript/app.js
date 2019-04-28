$(document).ready(function() {
  $('.list-items a').on('click', function() {
    $('.list-items a').removeClass('active');
    $(this).addClass('active');
    open();
  })
});

let opened = false;
function open() {
  if (opened) {
    return;
  }

  $('#rightbar').load('/cv/?v=' + Math.random(), function() {
      $('.skewed, .skewed *').css('transform', 'skewX(0deg)');
      opened = true;
  }).addClass('addedShadow');
}
