/**
 * "jquery.news_stories.js"
 * Written, from scratch, by Alex LaFroscia
 * July, 2012
 
 * Simply enough, this jQuery script allows the boxes
 * on the front page of the Harbinger site to change
 * when the arrows are clicked.  Originally part of
 * that site's HTML, I moved it to a seperate file just
 * to keep things neater.
 
 * Last updated August 13, 2012

**/

$(function() {
	var f = $('#forward_button');
	var b = $('#back_button');
	var n = $('#innerbox');
	var i = 1;
	var m = 2;
	var p = m * 3;

		
	f.click(function() {
		if($(window).width() <= 767) {
			n.animate({marginLeft: '-=240px'}, 100);
			if ( i === 1 ) {
				b.fadeIn('fast');
			}
			i++;
			if ( i === p ) {
				f.fadeOut('fast');
			}
		} else if($(window).width() > 767) {
			n.animate({marginLeft: '-=720px'}, 'fast');
			if ( i === 1 ) {
				b.fadeIn('fast');
			}
			i++;
			if ( i === m ) {
				f.fadeOut('fast');
			}
		}
	});
	
	b.click(function() {
		if($(window).width() <= 767) {
			n.animate({marginLeft: '+=240px'}, 100);
			if ( i === p) {
				f.fadeIn('fast');
			}
			i = i - 1;
			if ( i === 1) {
				b.fadeOut('fast');
			}
		} else if($(window).width() > 767) {
			n.animate({marginLeft: '+=720px'}, 'fast');
			if ( i === m) {
				f.fadeIn('fast');
			}
			i = i - 1;
			if ( i === 1) {
				b.fadeOut('fast');
			}
		}
	});
});