var laravelWS = new function(){
	this.init = function(){
		console.log('%c Laravel was started 🔥 !', 'background: #FFF; color: #222');
		this.initEventTrigger();
		this.animation();
	}
	this.initEventTrigger = function(){		
		// Page Create - Input type file
		$(document).on('click', '.upload-field', function(e){
			e.preventDefault();
	  		let file = $(this).parent().parent().parent().find('.input-file');
	  		file.trigger('click');
		});
		$(document).on('change', '.input-file', function(){
	  		$(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
		});

		$('#contact-description').val('');

		// Dropdown navbar
		let dropdown = $('.dropdown');

		$('.user').on('click', function(e){
			e.preventDefault();
			if(dropdown.hasClass('dropdown-open')){
				dropdown.removeClass('dropdown-open');
				dropdown.slideUp(180);
			}else{
				dropdown.addClass('dropdown-open');
				dropdown.slideDown(180);
			}
			return false;
		});

		let $backToTop = $(".go-top");

		$(window).on('scroll', function() {
		 	if ($(this).scrollTop() > 500) {
		   		$backToTop.fadeIn();
		 	}else{
		   		$backToTop.fadeOut();
		 	}
		});
		
		$backToTop.on('click', function(e) {
			e.preventDefault();
		  	window.scroll({
			  top: 0, 
			  left: 0, 
			  behavior: 'smooth' 
			});
		  	return false;
		});

		//Init tooltip
		$('[data-toggle="tooltip"]').tooltip();
	}

	this.animation = function () {	
		TweenMax.set($('.item'), {opacity: 0});
		TweenMax.to($('.item'), 0.8, {delay: 0.3, opacity: 1, ease: Power1.easeOut});
	}
}

laravelWS.init();