$(document).ready(function() {
	$('#nav-toggle').click(function() {
		
		$('#side-nav').animate({
			left: '0',
			width: '75%'
		},500);
		$('#overlay').fadeIn(500);
		
	});
	$('#overlay').click(function() {
		$('#side-nav').animate({
			left: '-100%',
			width: '75%'
		},500);
		$('#overlay').fadeOut(500);
	});

});
