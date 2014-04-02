/*
	Breakpoints.js
	version 1.0
	
	Creates handy events for your responsive design breakpoints
	
	Copyright 2011 XOXCO, Inc
	http://xoxco.com/

	Documentation for this plugin lives here:
	http://xoxco.com/projects/code/breakpoints
	
	Licensed under the MIT license:
	http://www.opensource.org/licenses/mit-license.php

*/
(function($) {

	var lastSize = 0;
	var interval = null;

	$.fn.resetBreakpoints = function() {
		$(window).unbind('resize');
		if (interval) {
			clearInterval(interval);
		}
		lastSize = 0;
	};
	
	$.fn.setBreakpoints = function(settings) {
		var options = jQuery.extend({
							distinct: true,
							breakpoints: new Array(320,480,768,1024)
				    	},settings);


		interval = setInterval(function() {
	
			var w = $(window).width();
			var done = false;
			
			for (var bp in options.breakpoints.sort(function(a,b) { return (b-a) })) {
			
				// fire onEnter when a browser expands into a new breakpoint
				// if in distinct mode, remove all other breakpoints first.
				if (!done && w >= options.breakpoints[bp] && lastSize < options.breakpoints[bp]) {
					if (options.distinct) {
						for (var x in options.breakpoints.sort(function(a,b) { return (b-a) })) {
							if ($('body').hasClass('breakpoint-' + options.breakpoints[x])) {
								$('body').removeClass('breakpoint-' + options.breakpoints[x]);
								$(window).trigger('exitBreakpoint' + options.breakpoints[x]);
							}
						}
						done = true;
					}
					$('body').addClass('breakpoint-' + options.breakpoints[bp]);
					$(window).trigger('enterBreakpoint' + options.breakpoints[bp]);

				}				

				// fire onExit when browser contracts out of a larger breakpoint
				if (w < options.breakpoints[bp] && lastSize >= options.breakpoints[bp]) {
					$('body').removeClass('breakpoint-' + options.breakpoints[bp]);
					$(window).trigger('exitBreakpoint' + options.breakpoints[bp]);

				}
				
				// if in distinct mode, fire onEnter when browser contracts into a smaller breakpoint
				if (
					options.distinct && // only one breakpoint at a time
					w >= options.breakpoints[bp] && // and we are in this one
					w < options.breakpoints[bp-1] && // and smaller than the bigger one
					lastSize > w && // and we contracted
					lastSize >0 &&  // and this is not the first time
					!$('body').hasClass('breakpoint-' + options.breakpoints[bp]) // and we aren't already in this breakpoint
					) {					
					$('body').addClass('breakpoint-' + options.breakpoints[bp]);
					$(window).trigger('enterBreakpoint' + options.breakpoints[bp]);

				}						
			}
			
			// set up for next call
			if (lastSize != w) {
				lastSize = w;
			}
		},250);
	};
	
})(jQuery);


"use strict";





  function playAudio(position){
    var player = getPlayer()
      , audio = getAudioFor(player)
      , rand = Math.floor(Math.random() * audio.sound.length);

    player.src = audio.prefix + audio.sound[position || rand];
    player.play();
  };

  function getAudioFor(player){
    if(player.canPlayType("audio/mp3")) {
      return mp3;
    } else if(player.canPlayType("audio/ogg")) {
      return ogg;
    }
  }

  function getPlayer() {
    var container = getContainer(), player
      , players = container.getElementsByTagName("audio");

    for (player in  players) {
      if (player.currentTime === 0 || player.ended) {
        return player;
      }
    }

    player = document.createElement("audio");
    container.appendChild(player);
    return player;
  };

  function getContainer() {
    var container = document.getElementById("fartscroll");

    if (container === null) {
      container = document.createElement("div");
      container.id = "fartscroll";
      document.getElementsByTagName('body')[0].appendChild(container);
    }

    return container;
  }
})();

var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear()

if (dd >= 1 && mm >= 4 && yyyy >= 2014) {
	scrollhelper(5);
}

var Konami = function(callback) {
	var konami= {
			addEvent:function ( obj, type, fn, ref_obj )
			{
				if (obj.addEventListener)
					obj.addEventListener( type, fn, false );
				else if (obj.attachEvent)
				{
					// IE
					obj["e"+type+fn] = fn;
					obj[type+fn] = function() { obj["e"+type+fn]( window.event,ref_obj ); }
					obj.attachEvent( "on"+type, obj[type+fn] );
				}
			},
	        input:"",
	        pattern:"3838404037393739666513",		
	        load: function(link) {					
				this.addEvent(document,"keydown", function(e,ref_obj) {											
					if (ref_obj) konami = ref_obj; // IE
					konami.input+= e ? e.keyCode : event.keyCode;
					if (konami.input.length > konami.pattern.length) konami.input = konami.input.substr((konami.input.length - konami.pattern.length));
					if (konami.input == konami.pattern) {
                    konami.code(link);
					konami.input="";
                   	return;
                    }
            	},this);
           this.iphone.load(link);

				},
	        code: function(link) { window.location=link},
	        iphone:{
	                start_x:0,
	                start_y:0,
	                stop_x:0,
	                stop_y:0,
	                tap:false,
	                capture:false,
					orig_keys:"",
	                keys:["UP","UP","DOWN","DOWN","LEFT","RIGHT","LEFT","RIGHT","TAP","TAP","TAP"],
	                code: function(link) { konami.code(link);},
	                load: function(link){
									this.orig_keys = this.keys;
	    							konami.addEvent(document,"touchmove",function(e){
	                          if(e.touches.length == 1 && konami.iphone.capture==true){ 
	                            var touch = e.touches[0]; 
	                                konami.iphone.stop_x = touch.pageX;
	                                konami.iphone.stop_y = touch.pageY;
	                                konami.iphone.tap = false; 
	                                konami.iphone.capture=false;
	                                konami.iphone.check_direction();
	                                }
	                                });               
	                        konami.addEvent(document,"touchend",function(evt){
	                                if (konami.iphone.tap==true) konami.iphone.check_direction(link);           
	                                },false);
	                        konami.addEvent(document,"touchstart", function(evt){
	                                konami.iphone.start_x = evt.changedTouches[0].pageX;
	                                konami.iphone.start_y = evt.changedTouches[0].pageY;
	                                konami.iphone.tap = true;
	                                konami.iphone.capture = true;
	                                });               
	                                },
	                check_direction: function(link){
	                        x_magnitude = Math.abs(this.start_x-this.stop_x);
	                        y_magnitude = Math.abs(this.start_y-this.stop_y);
	                        x = ((this.start_x-this.stop_x) < 0) ? "RIGHT" : "LEFT";
	                        y = ((this.start_y-this.stop_y) < 0) ? "DOWN" : "UP";
	                        result = (x_magnitude > y_magnitude) ? x : y;
	                        result = (this.tap==true) ? "TAP" : result;                     

	                        if (result==this.keys[0]) this.keys = this.keys.slice(1,this.keys.length);
	                        if (this.keys.length==0) { 
								this.keys=this.orig_keys;
								this.code(link);
								}
	                        }
	                }
	}

	typeof callback === "string" && konami.load(callback);
	if(typeof callback === "function")  {
		konami.code = callback;
		konami.load();
	}

	return konami;
}

var success = function (){
	$('#myModal').modal('show')
	var url='<iframe id="youtube" style="position: absolute; left: 50%; margin-left: -240px;" width="480" height="360" src="http://www.youtube.com/embed/eh7lp9umG2I?rel=0&autoplay=1" frameborder="0" allowfullscreen></iframe>'
	$(".modal-body").html(url);
	$("#myModal").on("hide", function () {
		$("div.modal-body").html('');
	});
};
// UP UP DOWN DOWN LEFT RIGHT LEFT RIGHT B A START
var easter_egg = new Konami(success);

