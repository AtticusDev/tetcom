jQuery(document).ready(function($){

// Add your custom jQuery here

	$('li.q').on('click', function() {
		$(this).next().slideToggle(150).siblings('li.a').slideUp();

		var arrow = $(this).children('i');

		$('i').not(arrow).removeClass('fa-minus');

		arrow.toggleClass('fa-minus');
	});


// Slider for system and product images
	

  $('.next').on('click', function(){
  	var currentSlider = $(this).parent().attr('id');
    var currentImg = $('.active');
    var nextImg = currentImg.next();


    if(nextImg.length){
      currentImg.removeClass('active').css('z-index', -10);
      nextImg.addClass('active').css('z-index', 10);
    }
  });

  $('.prev').on('click', function(){
  	var currentSlider = $(this).parent();
  	var currentImage = $(currentSlider);
  	alert(currentImage);
//    var currentImg = $('.active');
    var prevImg = currentImg.prev();

    if(prevImg.length){
      currentImg.removeClass('active').css('z-index', -10);
      prevImg.addClass('active').css('z-index', 10);
    }
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