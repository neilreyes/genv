jQuery(function(){
	$ = jQuery;

	

	$(window).scroll(function(){

		var scroll = $(window).scrollTop(),
			paraHeight = $('.plx').scrollTop();

		if( scroll >= paraHeight ){
			
			$('.plx .hero-image').css({
				'margin-top': '-' + paraHeight/2 + 'px';
			});

		}

	});

	
});
