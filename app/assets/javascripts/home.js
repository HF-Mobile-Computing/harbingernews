//= require jquery
//= require bootstrap.min
//= require_self

$(function() {
  // Add "active" to nav bar
  $('#nav_home').addClass('active');
  
  // Constantly Check Page Width
  
  var thePage = {};
  thePage.width = $(window).width();
  $(window).resize(function(){
      thePage.width = $(window).width();
  });
  
  // Operate the slider for memos
  // Note: All console.log statements can be removed before production
  if (thePage.width > 979) {
    slideAmt = 849;
  }
  counter = 0;
  
  console.log("counter = " + counter);
  $('#advance').click(function() {
    // console.log("Advance button clicked");
    if (counter < 3) {
      $('#slider').animate({
        right: '+=' + slideAmt,
      }, 100);
      counter = counter + 1;
    }
    console.log("counter = " + counter);
  });
  $('#reverse').click(function() {
    // console.log("Reverse button clicked");
    if (counter > 0) {
      $('#slider').animate({
        right: '-=' + slideAmt,
      }, 100);
      counter = counter - 1;
    }
    console.log("counter = " + counter);
  });
});