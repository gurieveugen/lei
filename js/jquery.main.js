(function($){

$(function(){
	$('#btn-view-content').click(function(){
		$(this).toggleClass('open');
		$('#toggle-content').slideToggle();
		return false;
	});
});

})(jQuery);