$(document).ready(function() {
	$('.image-tile img').hover(
		function() {
			var src = $(this).attr('src');
			src = src.replace('normal','grey');
			$(this).attr('src',src);
		},
		function() {
			var src = $(this).attr('src');
			src = src.replace('grey','normal');
			$(this).attr('src',src);
		});		

	$('.image-tile img').click(function() {
	});		
});