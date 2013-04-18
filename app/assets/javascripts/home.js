//= require jquery
//= require bootstrap.min
//= require_self

$(function() {
  // Add "active" to nav bar
  $('#nav_home').addClass('active');
  
  // Constantly Check Page Width and set variables accordingly
  
  var thePage = {};
  function setVars() {
    thePage.width = $(window).width();
    if (thePage.width >= 980) {
      thePage.slideAmt = 849;
      thePage.counterAmt = 3;
    } else if (thePage.width <= 979 && thePage.width >= 768) {
      thePage.slideAmt = 566; 
      thePage.counterAmt = 5;
    }
  }
  
  setVars();
  $(window).resize(function(){
      setVars();
  });
  
  // Operate the slider for memos
  // Note: All console.log statements can be removed before production
  
  counter = 0;
  
  $('#advance').click(function() {
    // console.log("Advance button clicked");
    if (counter < thePage.counterAmt) {
      $('#slider').animate({
        right: '+=' + thePage.slideAmt,
      }, 100);
      counter = counter + 1;
    }
    testLog();
  });
  $('#reverse').click(function() {
    // console.log("Reverse button clicked");
    if (counter > 0) {
      $('#slider').animate({
        right: '-=' + thePage.slideAmt,
      }, 100);
      counter = counter - 1;
    }
    testLog();
  });
  
  function testLog() {
    console.log("counter = " + counter);
    console.log("Counter Amt: " + thePage.counterAmt);
    console.log("Slide Amt: " + thePage.slideAmt);
  };
  
  testLog();
  
  
});