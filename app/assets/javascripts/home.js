//= require jquery
//= require bootstrap.min
//= require_self

$(function() {
  // Add "active" to nav bar
  $('#nav_home').addClass('active');
  
  // Constantly Check Page Width and set variables accordingly
  
  var thePage = {};
  thePage.width = $(window).width();
  function setVars() {
    if (thePage.width >= 980) {
      thePage.slideAmt = 849;
      thePage.counterAmt = 3;
    } else if (thePage.width <= 979 && thePage.width >= 670) {
      thePage.slideAmt = 566; 
      thePage.counterAmt = 5;
    } else if (thePage.width < 670) {
      thePage.slideAmt = 283;
      thePage.counterAmt = 11;
    }
  }
  
  thePage.counter = 0;
  
  setVars();
  $(window).resize(function(){
      thePage.width = $(window).width();
      setVars();
      if (thePage.width == 980 || thePage.width == 670) {
        console.log('reset of slider should take place: ' + thePage.width);
        $('#slider').css('right', 0);
        thePage.counter = 0;
      }
  });
  
  thePage.startSize = $(window).width();
  $(window).resize(function(){
      if (thePage.width == 980) {
        console.log("%cStart size is set to " + thePage.width, "color: blue;");
      }
  });
  
  $('#advance').click(function() {
    // console.log("Advance button clicked");
    if (thePage.counter < thePage.counterAmt) {
      $('#slider').animate({
        right: '+=' + thePage.slideAmt,
      }, 100);
      thePage.counter = thePage.counter + 1;
    }
    testLog();
  });
  $('#reverse').click(function() {
    // console.log("Reverse button clicked");
    if (thePage.counter > 0) {
      $('#slider').animate({
        right: '-=' + thePage.slideAmt,
      }, 100);
      thePage.counter = thePage.counter - 1;
    }
    testLog();
  });
  
  function testLog() {
    console.log("counter = " + thePage.counter);
    console.log("Counter Amt: " + thePage.counterAmt);
    console.log("Slide Amt: " + thePage.slideAmt);
  };
  
  testLog();
  
  
});