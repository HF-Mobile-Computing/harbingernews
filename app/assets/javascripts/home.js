//= require jquery
//= require bootstrap.min
//= require_self

$(function() {
  $('#advance').click(function() {
    console.log("Advance button clicked");
    $('#slider').animate({
      right: '+=50',
    }, 100);
  });
  $('#reverse').click(function() {
    console.log("Reverse button clicked");
    $('#slider').animate({
      right: '-=50',
    }, 100);
  });
});