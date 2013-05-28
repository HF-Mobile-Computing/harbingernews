//= require breakpoints
//= require_self

$(function() {
  // Add "active" to nav bar
  $('#nav_home').addClass('active');
  
  // Set breakpoints (see breakpoints.js)
  $(window).setBreakpoints({
    distinct: true,
    breakpoints: [
      980,
      670
    ]
  });
  
  // Constantly Check Page Width and set variables accordingly
  
  var thePage = {};
  thePage.width = $(window).width();
  function setVars() {
    thePage.width = $(window).width();
    if (thePage.width >= 980) {
      // Largest
      thePage.slideAmt = 843;
      thePage.counterAmt = 3;
    } else if (thePage.width <= 979 && thePage.width >= 670) {
      // Middle
      thePage.slideAmt = 562; 
      thePage.counterAmt = 5;
    } else if (thePage.width < 670) {
      // Smallest
      thePage.slideAmt = 281;
      thePage.counterAmt = 11;
    }
  }
  
  thePage.counter = 0;
  
  setVars();
  $(window).resize(function(){
      setVars();
  });
  
  // Moving the slider
  
  $('#advance').click(function() {
    // console.log("Advance button clicked");
    if (thePage.counter < thePage.counterAmt) {
      $('#slider').animate({
        right: '+=' + thePage.slideAmt,
      }, 100);
      thePage.counter = thePage.counter + 1;
    }
    // testLog();
  });
  $('#reverse').click(function() {
    // console.log("Reverse button clicked");
    if (thePage.counter > 0) {
      $('#slider').animate({
        right: '-=' + thePage.slideAmt,
      }, 175);
      thePage.counter = thePage.counter - 1;
    }
    // testLog();
  });
  
  // Reset slider at breakpoints 
  
  function resetSlider() {
    $('#slider').animate({
      right: '0',
    }, 200);
    thePage.counter = 0;
  }
  
  $(window).bind('enterBreakpoint980', function() {
    resetSlider();
  });
  $(window).bind('exitBreakpoint980', function() {
    resetSlider();
  });
  $(window).bind('enterBreakpoint670', function() {
    resetSlider();
  });
  $(window).bind('exitBreakpoint670', function() {
    resetSlider();
  })
  
  // Debugging functions
  /*
  function testLog() {
    console.log("counter = " + thePage.counter);
    console.log("Counter Amt: " + thePage.counterAmt);
    console.log("Slide Amt: " + thePage.slideAmt);
  };
  
  testLog();
  */
  
});