var laravelWS = new function(){
	this.init = function(){
		console.log('%c Laravel was started 🔥 !', 'background: #FFF; color: #222');
		this.initEventTrigger();
		this.setAnim();
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

		$('.trigger-delete').on('click', function (e) {
			e.preventDefault();
			let id = $(this).attr('data-id');
			let url_compiled = 'http://' + window.location.host + '/post/delete/' + id;
			$('#delete-this-one').attr('href', url_compiled)
			TweenMax.to($('.popup_remove'), 0.8, {display: 'block', opacity: 1, ease: Power1.easeOut});
		})

		$('.trigger-cancel').on('click', function (e) {
			e.preventDefault();
			TweenMax.to($('.popup_remove'), 0.5, {display: 'none', opacity: 0, ease: Power1.easeOut});
		})

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

		function status(){
			  if ($("#statusPublish").is(':checked')) {
			    $('#data-status').attr('value', 'publié');
			  } else {
			    $('#data-status').attr('value', 'non_publié');
			  }
		}
		status();
		
		$("#statusPublish").on('change', function() {
		  	status();
		});
	}

	this.setAnim = function() {
		TweenMax.set($('.item, .right-content'), {opacity: 0});
		this.animation();
	}

	this.animation = function () {	
		TweenMax.to($('.item'), 0.8, {opacity: 1, ease: Power1.easeOut});
		TweenMax.to($('.right-content'), 0.8, {opacity: 1, ease: Power1.easeOut});
	}
}

laravelWS.init();