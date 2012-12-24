$(function() {
	var fal = $('#fall');
	var falb = $('#fallbox');
	var win = $('#winter');
	var winb = $('#winterbox');
	var spr = $('#spring');
	var sprb = $('#springbox');
	
	fal.click(function () {
		if( falb.is(':visible') ) {
			console.log("box is already visible");
		} else if( winb.is(':visible') ) {
			console.log("winter box is visible");
			winb.fadeOut('slow', function() {
				falb.fadeIn('slow');
				falb.masonry('reload');
			});
		} else {
			sprb.fadeOut('slow', function() {
				falb.fadeIn('slow');
				falb.masonry('reload');
			});
		}
	});
	
	win.click(function () {
		if( winb.is(':visible') ) {
			console.log('winter box is already visible');
		} else if( falb.is(':visible') ) {
			console.log('falb is visible. will show winb');
			falb.fadeOut('slow', function() {
				winb.fadeIn('slow');
				winb.masonry('reload');
			});
		} else {
			console.log('sprb is visible. will show winb');
			sprb.fadeOut('slow', function() {
				winb.fadeIn('slow');
				winb.masonry('reload');
			});
		}
	});
	
	spr.click(function () {
		if(sprb.is(':visible') ) {
			console.log("spring box is already visible");
		} else if( falb.is(':visible') ) {
			falb.fadeOut('slow', function() {
				sprb.fadeIn('slow');
				sprb.masonry('reload');
			});
		} else {
			winb.fadeOut('slow', function() {
				sprb.fadeIn('slow');
				sprb.masonry('reload');
			});
		}
	
	});
});
