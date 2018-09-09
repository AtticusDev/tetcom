jQuery(document).ready(function($){

// Add your custom jQuery here

	$('li.q').on('click', function() {
		$(this).next().slideToggle(150).siblings('li.a').slideUp();

		var arrow = $(this).children('i');

		$('i').not(arrow).removeClass('fa-minus');

		arrow.toggleClass('fa-minus');
	});





/* var allPanels = $('.accordian > dd').hide();


  $('.accordian > dt').on('click', function(event) {
  	allPanels.slideUp();
  	$(this).next().slideDown();
  	$(this).find('i').toggleClass('fa-plus fa-minus');


  	return false; 		
	});
  $('.accordian > dt').blur(function(){
 	$(this).find('i').toggleClass('fa-plus fa-minus'); 	
  });

*/


});