$(document).ready(function(){
  $('#map').addClass('scrollOff');

  $('#mapContainer').on('click', function(){
    $('#map').removeClass('scrollOff');
  });

  $('#mapContainer').on('mouseleave', function(){
    $('#map').addClass('scrollOff');
  });

  // Nav Toggle
  $('.nav-toggle').on('click', function(){
    $('.header-nav').toggleClass('open');
  });
});
