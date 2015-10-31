$(function (){

	$(document).on('click', '.accordion', function () {
		$(this).next().slideToggle() ;
		return false ;
	}) ;
}) ;
